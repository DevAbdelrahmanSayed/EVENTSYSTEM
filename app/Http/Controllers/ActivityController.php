<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $events = Event::approvedOrAdmin()->get();
        $posts = Post::approvedOrAdmin()->get();
        return view('EventPost.index',compact('posts','events'));
    }
}
