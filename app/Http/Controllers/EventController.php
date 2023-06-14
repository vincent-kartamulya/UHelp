<?php

namespace App\Http\Controllers;

use App\Imports\RecipientImport;
use App\Models\Event;
use App\Models\Recipient;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Ramsey\Uuid\Uuid;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Symfony\Component\HttpFoundation\Response;
use ZipArchive;

// use SimpleSoftwareIO\QrCode\Facades\QrCode;
// use PhpOffice\PhpSpreadsheet\Calculation\TextData\Format;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Event::all()->isEmpty()){
            return view('sharetificate.addEvent');
        }

        $filterOption = $request->query('filterOption');

        // Apply the filtering logic based on the selected option
        if ($filterOption == 'latest') {
            $events = Event::orderBy('date', 'desc')->paginate(10);
        } elseif ($filterOption == 'earliest') {
            $events = Event::orderBy('date', 'asc')->paginate(10);
        } else {
            $events = Event::paginate(10);
        }

        // Pass the filtered results to the view
        return view('sharetificate.eventList', [
            'filterOption' => $filterOption,
            "events" => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("sharetificate.createEvent");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::extend('excel_has_columns', function ($attribute, $value, $parameters, $validator) {
            $file = $value->getRealPath();
            $columns = $parameters;

            $reader = IOFactory::createReaderForFile($file);
            $spreadsheet = $reader->load($file);
            $worksheet = $spreadsheet->getActiveSheet();
            $headers = $worksheet->toArray()[0];

            foreach ($columns as $column_name) {
                if (!in_array($column_name, $headers)) {
                    return false;
                }
            }
            return true;
        });

        $validatedData = $request->validate([
            'event_name' => 'required|max:255',
            'event_location' => 'required|max:255',
            'event_date' => 'required|before_or_equal:today',
            'event_participants' => 'bail|required|max:10240|file|mimes:csv,xlsx,xls|excel_has_columns:name,position,email',
            'event_certificate' => 'required|max:5120|image|file'
        ]);

        // Store participant data file
        $pathExcel = 'storage/'.$request->file('event_participants')->store('participantData');

        // Store certificate template file
        $pathTemplate = 'storage/'.$request->file('event_certificate')->store('templateCertificate');

        $limitedTitle = Str::limit(strip_tags($request->event_name), 20);
        $validatedData['slug'] = SlugService::createSlug(Event::class, 'slug', $limitedTitle);

        // Create new event
        $event = Event::create([
            'title' => $validatedData['event_name'],
            'location' => $validatedData['event_location'],
            'date' => $validatedData['event_date'],
            'participant' => $pathExcel,
            'template' => $pathTemplate,
            'uuid' => Uuid::uuid4()->toString(),
            'slug' => $validatedData['slug'],
            'nameX' => $request['nameX'],
            'nameY' => $request['nameY']
        ]);

        // Import recipient data
        $recipientImport = new RecipientImport();
        $recipients = Excel::toCollection($recipientImport, $pathExcel)[0];

        $font_path = 'times new roman.ttf';
        $template_extension = $request->file('event_certificate')->extension();

        // Load the certificate template image based on the file extension
        if ($template_extension === 'jpeg' || $template_extension === 'jpg') {
            $image = imagecreatefromjpeg($pathTemplate);
        } elseif ($template_extension === 'png') {
            $image = imagecreatefrompng($pathTemplate);
        } else {
            // Handle unsupported file format
            return back()->with('error', 'Unsupported certificate template format. Please upload a JPEG or PNG file.');
        }

        // Set the font size
        $font_size = 80;

        // Set the font color to black
        $font_color = imagecolorallocate($image, 0, 0, 0);

        $certificatePath = 'app/public/certificates';

        for ($i = 0; $i < count($recipients); $i++) {
            $row = $recipients[$i];
            // Create a new image resource from the certificate template
            $certificate_image = imagecreatetruecolor(imagesx($image), imagesy($image));

            if ($template_extension === 'png') {
                imagealphablending($certificate_image, false);
                imagesavealpha($certificate_image, true);
                $transparent_color = imagecolorallocatealpha($certificate_image, 0, 0, 0, 127);
                imagefill($certificate_image, 0, 0, $transparent_color);
            }

             // Copy the certificate template onto the new image
            imagecopy($certificate_image, $image, 0, 0, 0, 0, imagesx($image), imagesy($image));

            if (!empty($row['name'])) {
                $recipient = Recipient::firstOrCreate([
                    'name' => $row['name'],
                    'position' => $row['position'],
                    'email' => $row['email']
                ]);

                $certificate_width = imagesx($certificate_image);

                // Get the text dimensions for the current row data
                $text_box = imagettfbbox($font_size, 0, $font_path, $row['name']);
                $text_width = $text_box[2] - $text_box[0];
                $text_height = $text_box[1] - $text_box[7];
                // Calculate the x-coordinate to center the text
                $x = ($certificate_width - $text_width) / 2;

                // Set the y-coordinate
                $y = imagesy($certificate_image) - $request['nameY'] + $text_height + 50;

                // Add the text to the image at the specified coordinates using TrueType font
                imagettftext($certificate_image, $font_size, 0, $x, $y, $font_color, $font_path, $row['name']);

                imagefilter($certificate_image, IMG_FILTER_SMOOTH, -1);

                 // Generate the QR code
                $certificateUUID = Uuid::uuid4()->toString();
                $qrCodeContent = 'https://uhelp/'. $certificateUUID . '/validate'; // Replace with your desired QR code content
                $qrCode = QrCode::format('png')->size(100)->generate($qrCodeContent);

                // Add the QR code to the certificate image
                $qrCodeImage = imagecreatefromstring($qrCode);

                // Resize the QR code image to the desired dimensions
                $qrCodeWidth = 200; // Adjust the width as needed
                $qrCodeHeight = 200; // Adjust the height as needed
                $resizedQrCodeImage = imagescale($qrCodeImage, $qrCodeWidth, $qrCodeHeight);

                // Determine the coordinates to place the QR code on the certificate image
                $qrCodeX = 10;
                $qrCodeY = imagesy($certificate_image) - $qrCodeHeight - 10;

                // Copy the resized QR code image onto the certificate image
                imagecopy($certificate_image, $resizedQrCodeImage, $qrCodeX, $qrCodeY, 0, 0, $qrCodeWidth, $qrCodeHeight);

                // Save the image to a file with a unique name for each recipient
                $filename = 'certificate_' . $row['name'] . '.png';
                imagepng($certificate_image, storage_path($certificatePath . '/' . $filename));

                // Clean up memory
                imagedestroy($certificate_image);
                imagedestroy($image);
                Certificate::create([
                    'user_id' => 2,
                    'event_id' => $event->id,
                    'recipient_id' => $recipient->id,
                    'uuid' => Uuid::uuid4()->toString(),
                    'issuing_date' => now()->format('Y-m-d'),
                    'expired_date' => now()->addYears(5)->format('Y-m-d'),
                    'path' => 'storage/certificates/' . $filename
                ]);
            }
        }
        // Clean up memory
        imagedestroy($image);

        // Redirect to '/events'
        return redirect('/events');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */

     public function ajax(Request $request)
     {
         $name = $request->name;
         $filterOption = $request->filterOption;
         $query = Event::where('title', 'like', "%".$name."%");

         if ($filterOption == 'latest') {
             $query->orderBy('date', 'desc');
         } elseif ($filterOption == 'earliest') {
             $query->orderBy('date', 'asc');
         }

         $result = $query->get();

         if (count($result) > 0) {
             return view("sharetificate.eventAjax", [
                 "events" => $result
             ])->render();
         } else {
             return response()->json([
                 'empty' => true
             ]);
         }
     }



    public function show($uuid)
    {
        $event = Event::where('uuid', $uuid)->firstOrFail();
        $participants = Certificate::where('event_id', $event->id)->get()->map(function ($certificate) {
            return $certificate->Recipient;
        });
        return view('sharetificate.generatedCertificate', ['event' => $event, 'participants' => $participants]);

    }

    public function downloadAll(Request $request){
        // Retrieve the event UUID from the query parameter
        $eventUUID = $request->query('eventUUID');

        // Retrieve the event details from the database based on the UUID
        $event = Event::where('uuid', $eventUUID)->firstOrFail();

        // Create a unique filename for the zip file
        $zipFileName = 'certificates_' . $eventUUID . '.zip';

        $zip = new ZipArchive;

        if($zip->open($zipFileName, ZipArchive::CREATE)){
            foreach ($event->certificate as $certificate) {
                $certificatePath = public_path($certificate->path);
                $certificateName = $certificate->recipient->name . '.png';

                // Add the certificate file to the zip
                $zip->addFile($certificatePath, $certificateName);
            }
            $zip->close();
        }

        return response()->download($zipFileName)->deleteFileAfterSend(true);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
