<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index()
    {
        return post::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
        ]);

        return post::create($data);
    }

    public function show(post $post)
    {
        return $post;
    }

    public function update(Request $request, post $post)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
        ]);

        $post->update($data);

        return $post;
    }

    public function destroy(post $post)
    {
        $post->delete();

        return response()->json();
    }
}
