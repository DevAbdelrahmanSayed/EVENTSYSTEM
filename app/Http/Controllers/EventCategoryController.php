<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    public function getCategories(Request $request)
    {
        $subcategories = EventCategory::whereNull('parent_id')->get();
        return response()->json($subcategories);
    }
    public function getSubcategories(Request $request)
    {
        $parentId = $request->input('parent_id');
        $subcategories = EventCategory::where('parent_id', $parentId)->get();

        return response()->json($subcategories);
    }
}
