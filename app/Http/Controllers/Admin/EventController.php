<?php

namespace App\Http\Controllers\Admin;

use App\Action\UploadFileAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CLubRequest;
use App\Http\Requests\EventRequest;
use App\Models\Club;
use App\Models\Event;
use App\Models\Post;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $events= Event::with('user','club','represented','category.children')->paginate(9);
        return view('Dashboard.event', compact('events'));
    }
    public function show(Event $event)
    {
        $event->load('club', 'represented','tag','category', 'childCategory');
        return response()->json($event);
    }
    public function store(EventRequest $request)
    {
        $validated = $request->validated();
        $path = null;
        try {
            if ($image = $request->file('image')) {
                $path = UploadFileAction::make()
                    ->file($image)
                    ->userId(Auth::id())
                    ->execute();
            }

            $validated['image'] = $path;
            $validated['user_id'] = Auth::id();
             Event::create($validated);
            flash('Event created successfully.')->success();
        } catch (Exception $e) {
            flash('Failed to create event: ' . $e->getMessage())->error();
        }

        return back();
    }
}
