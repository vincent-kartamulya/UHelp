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
        $pathExcel = $request->file('event_participants')->store('participantData');

        // Store certificate template file
        $pathTemplate = $request->file('event_certificate')->store('templateCertificate');

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

        foreach ($recipients as $row) {
            $recipient = Recipient::firstOrCreate([
                'name' => $row['name'],
                'position' => $row['position'],
                'email' => $row['email']
            ]);

            Certificate::create([
                'user_id' => 2,
                'event_id' => $event->id,
                'recipient_id' => $recipient->id,
                'uuid' => Uuid::uuid4()->toString(),
                'issuing_date' => now()->format('Y-m-d'), // set issuing date to null for now
                'expired_date' => now()->addYears(5)->format('Y-m-d')// set expired date to null for now
            ]);
        }
        // Create a new image
        $image = imagecreatefromjpeg('certificate.jpeg');

        // Set the font size and color
        $font_size = 20;
        $font_color = imagecolorallocate($image, 255, 255, 255);

        // Set the coordinates
        $x = 100;
        $y = 200;

        // Add the text to the image at the specified coordinates
        $text = 'Your text here';
        imagestring($image, $font_size, $x, $y, $text, $font_color);

        // Save the image to a file
        imagejpeg($image, public_path("Test.jpeg"));

        return redirect('/events');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */

    public function ajax(Request $request){
        $name = $request->name;
        $result = Event::where('title', 'like', "%".$name."%")->get();

        if(count($result) > 0){
            return view("sharetificate.eventAjax", [
                "events" => $result
            ])->render();
        }else{
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
