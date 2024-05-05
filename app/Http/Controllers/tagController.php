<?php

namespace App\Http\Controllers;

use App\Models\tag;
use Illuminate\Http\Request;

class tagController extends Controller
{
    public function index()
    {
        return tag::all();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        return tag::create($data);
    }

    public function show(tag $tag)
    {
        return $tag;
    }

    public function update(Request $request, tag $tag)
    {
        $data = $request->validate([
            'name' => ['required'],
        ]);

        $tag->update($data);

        return $tag;
    }

    public function destroy(tag $tag)
    {
        $tag->delete();

        return response()->json();
    }
}
