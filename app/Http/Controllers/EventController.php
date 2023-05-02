<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        //
        // $request->file("event_participants")->store("excel");
        // $request->file("event_certificate")->store("template");

        $validatedData = $request->validate([
            'event_name' => 'required|max:255',
            'event_location' => 'required|max:255',
            'event_date' => 'required|before_or_equal:today',
            'event_participants' => 'bail|required|max:10240|file|mimes:xlsx,xls|excel_has_columns:name,position,email',
            'event_certificate' => 'required|max:5120|image|file'
        ]);
        $limitedTitle = Str::limit(strip_tags($request->event_name), 20);
        $validatedData['slug'] = SlugService::createSlug(Event::class, 'slug', $limitedTitle);
        Event::create([
            'title' => $validatedData['event_name'],
            'location' => $validatedData['event_location'],
            'date' => $validatedData['event_date'],
            'participant' => $validatedData['event_participants'],
            'template' => $validatedData['event_certificate'],
            'slug' => $validatedData['slug'],
            'nameX' => $request['nameX'],
            'nameY' => $request['nameY']
        ]);


        return redirect('/createEvent')->with('success', 'Your event has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
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
