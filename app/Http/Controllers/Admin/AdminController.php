<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Approval;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function approve($approvalId)
    {
        $approval = Approval::findOrFail($approvalId);
        $approval->is_approved = true;
        $approval->save();

        $content = $approval->content;
        switch ($approval->action_type) {
            case 'create':
            case 'update':
                $content->update(['is_approved' => true]);
                break;
            case 'delete':
                $content->delete();
                break;
        }
        flash('Approval processed.')->success();
        return back();
    }
    public function rejection(Request $request, $approvalId)
    {
        $approval = Approval::findOrFail($approvalId);
        $reason = $request->input('reason', 'No specific reason provided');
        $approval->update([
            'reason' => $reason,
            'is_approved' => false
        ]);
        $content = $approval->content;
        switch ($approval->action_type) {
            case 'create':
            case 'update':
            case 'delete':
                $content->update(['is_approved' => false]);
                break;
        }

        flash('Rejection processed with reason: ' . $reason)->error();
        return back();
    }
}
