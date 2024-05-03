<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Post;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events= Event::with('user','club','represented','category.children')->paginate(9);
        return view('Dashboard.event', compact('events'));
    }
    public function show(Event $event)
    {
        $event->load('club', 'represented', 'category.children');
        return response()->json($event);
    }
}
