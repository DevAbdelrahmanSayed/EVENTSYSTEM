<?php

namespace App\Http\Controllers;

use App\Models\Approval;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $approved = Approval::with('user')->where('is_approved',true)->get();
        $rejection = Approval::with('user')->where('is_approved',false)
        ->whereNotNull('reason')->get();

        return view('Notification.index', compact('approved','rejection'));
    }


}
