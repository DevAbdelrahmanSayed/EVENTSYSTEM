<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class CalenderController extends Controller
{

    public function index()
    {

        return view('EventCalender.calender');
    }
    public function calender()
    {

        $events = Event::all();
        return response()->json($events);

    }
}
