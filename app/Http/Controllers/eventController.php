<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;

class eventController extends Controller
{
    public function index()
    {
        return event::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'service' => ['required'],
            'location' => ['required'],
            'date_event' => ['required', 'date'],
        ]);

        return event::create($data);
    }

    public function show(event $event)
    {
        return $event;
    }

    public function update(Request $request, event $event)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'service' => ['required'],
            'location' => ['required'],
            'date_event' => ['required', 'date'],
        ]);

        $event->update($data);

        return $event;
    }

    public function destroy(event $event)
    {
        $event->delete();

        return response()->json();
    }
}
