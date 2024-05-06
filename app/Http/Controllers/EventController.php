<?php

namespace App\Http\Controllers;

use App\Action\UploadFileAction;
use App\Http\Requests\EventRequest;
use App\Models\Club;
use App\Models\Event;
use App\Models\EventCategory;
use App\Models\tag;
use Auth;
use DB;
use Exception;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $events = Event::scopeApprovedOrAdmin()->get() ;
        return response()->json($events);
    }



    public function create()
    {
        $clubId = Club::where('represented_id',Auth::id())->value('id');
        $eventCategories = EventCategory::whereNull('parent_id')->get();
        $tags = tag::all();
        return view('ClubManager.createEvent',compact('clubId','eventCategories','tags'));
    }


    public function store(EventRequest $request)
    {
        $validated = $request->validated();
        $path = null;
        DB::beginTransaction();
        try {
            if ($image = $request->file('image')) {
                $path = UploadFileAction::make()
                    ->file($image)
                    ->userId(Auth::id())
                    ->execute();
            }

            $validated['image'] = $path;
            $validated['user_id'] = Auth::id();
            $event = Event::create($validated);
            $event->approvals()->create([
                'user_id' => auth()->id(),
                'action_type' => 'Create',
                'is_approved' => false
            ]);
            DB::commit();
            flash('Thank you for submitting your event! It\'s currently pending approval, and we\'ll notify you once it\'s live.')->success();
        } catch (Exception $e) {
            DB::rollBack();
            flash('Failed to create event: ' . $e->getMessage())->error();
        }

        return back();
    }

    public function show(event $event)
    {
        return $event;
    }

    public function update(Request $request, event $event)
    {
        $data = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'service' => ['required'],
            'location' => ['required'],
            'date_event' => ['required', 'date'],
        ]);

        $event->update($data);

        return $event;
    }

    public function destroy(event $event)
    {
        $event->delete();

        return response()->json();
    }
}
