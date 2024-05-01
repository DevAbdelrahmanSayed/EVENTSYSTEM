<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    public function index()
    {
        return EventCategory::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        return EventCategory::create($data);
    }

    public function show(EventCategory $eventCategory)
    {
        return $eventCategory;
    }

    public function update(Request $request, EventCategory $eventCategory)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        $eventCategory->update($data);

        return $eventCategory;
    }

    public function destroy(EventCategory $eventCategory)
    {
        $eventCategory->delete();

        return response()->json();
    }
}
