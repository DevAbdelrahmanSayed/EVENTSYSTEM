<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Approval;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function approve(Request $request)
    {
        try {
            // Attempt to find the approval entry.
            $approval = Approval::where('content_id', $request->input('contentId'))
                ->where('action_type', $request->input('actionType'))
                ->where('is_approved', false)
                ->first();

            if (!$approval) {
                return response()->json(['error' => 'No approval found or it has already been processed.'], 404);
            }

            $content = $approval->content()->first();

            if (!$content) {
                return response()->json(['error' => 'Associated content not found.'], 404);
            }

            switch ($approval->action_type) {
                case 'create':
                case 'update':
                    // Assuming the content also needs to be updated for some reason.
                $approval->update(['is_approved' => true]);
                    break;
                case 'delete':
                    $approval->update(['is_approved' => true]);
                    $content->delete();
                    break;
            }

            return response()->json(['success' => 'Approval processed.'], 200);
        } catch (\Exception $e) {
            // Catch and return any exceptions that occur during processing.
            return response()->json(['error' => 'Approval processing failed due to an internal error: ' . $e->getMessage()], 500);
        }
    }




    public function rejection(Request $request)
    {
        $approval = Approval::where('content_id', $request->input('contentId'))
            ->where('action_type', $request->input('actionType'))
            ->where('is_approved', false)
             ->first();

        if (!$approval) {
            return response()->json(['error' => 'No corresponding approval entry found.'], 404);
        }


        switch ($approval->action_type) {
            case 'create':
            case 'update':
            case 'delete':

            $approval->update(['is_approved' => false,'reason'=>$request->input('reason')]);
                break;
        }

        return response()->json(['success' => 'Rejection processed successfully.'], 200);
    }
}
