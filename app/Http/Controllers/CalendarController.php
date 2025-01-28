<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class CalendarController extends Controller
{
    public function index()
    {
        return view('calendar');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
        ]);

        $event = new Event();
        $event->title = $request->title;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->save();

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $event = Event::find($id);
    
        if ($event) {
         $event->delete();
        return response()->json(['success' => true]);
    }

        return response()->json(['success' => false, 'message' => 'Evento no encontrado']);
    }
    
    public function getEvents()
    {   
        $events = Event::all()->map(function($event) {
        return [
            'id' => $event->id,
            'title' => $event->title,
            'start' => $event->date,
            'extendedProps' => [
                'description' => $event->description,
            ],
        ];
    });

        return response()->json($events);
    }
}