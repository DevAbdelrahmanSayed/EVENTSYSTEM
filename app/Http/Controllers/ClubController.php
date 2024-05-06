<?php

namespace App\Http\Controllers;

use App\Http\Resources\ClubResource;
use App\Models\Category;
use App\Models\Club;
use App\Models\Post;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs = Club::latest()->get();
        $categories = Category::latest()->get();
        return view('Club.index', compact('clubs','categories'));
    }
    public function create()
    {
        return view('clubs.create');
    }

    public function getClubsByCategory(Category $category)
    {
        $category = Category::with(['clubs.user','clubs.category'])->findOrFail($category->id);
        if ($category->clubs->isEmpty()) {
            return response()->json(['message' => 'No clubs found for this category'], 404);
        }
        return ClubResource::collection($category->clubs);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'type' => 'required|string|max:255'
        ]);

        Club::create($request->all());
        return redirect()->route('clubs.index')->with('success', 'Club created successfully.');
    }

    public function show(Club $club)
    {
        $club = Club::with([
            'posts' => function ($query) {
                $query->approvedOrAdmin();
            },
            'events' => function ($query) {
                $query->approvedOrAdmin();
            },
            'events.represented','events.category','events.childCategory','events.tag'
        ])->findOrFail($club->id);

        return view('Club.details', compact('club'));
    }



    // Show the form for editing the specified club.
    public function edit(Club $club)
    {
        return view('clubs.edit', compact('club'));
    }

    // Update the specified club in storage.
    public function update(Request $request, Club $club)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'type' => 'required|string|max:255'
        ]);

        $club->update($request->all());
        return redirect()->route('clubs.index')->with('success', 'Club updated successfully.');
    }

    // Remove the specified club from storage.
    public function destroy(Club $club)
    {
        $club->delete();
        return redirect()->route('clubs.index')->with('success', 'Club deleted successfully.');
    }
}
