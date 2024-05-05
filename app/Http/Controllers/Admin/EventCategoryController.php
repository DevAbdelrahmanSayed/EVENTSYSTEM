<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{

    public function getSubcategories(Request $request,$parentId)
    {
        $subcategories = EventCategory::where('parent_id', $parentId)->get();
        return response()->json($subcategories);
    }
}
