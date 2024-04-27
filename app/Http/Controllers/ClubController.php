<?php

namespace App\Http\Controllers;

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
    public function getPosts(Category $category)
    {
        $clubs = $category->clubs;
        return response()->json($clubs);
    }


    // Store a newly created club in storage.
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

    // Display the specified club and related posts by category.
    public function show(Club $club)
    {
        $relatedPosts = Post::whereHas('club', function ($query) use ($club) {
            $query->where('category_id', $club->category_id);
        })->get();

        return view('clubs.show', compact('club', 'relatedPosts'));
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
