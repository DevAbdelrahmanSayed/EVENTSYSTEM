<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {

        $name = $request->query('name');
        $results = User::where('name', 'like', '%' . $name . '%')
            ->get(['id', 'name']);

        return response()->json($results);
    }

}
