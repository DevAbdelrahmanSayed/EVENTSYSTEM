<?php

namespace App\Http\Controllers\Admin;

use App\Action\UploadFileAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CLubRequest;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Club;
use App\Models\Post;
use Auth;
use Exception;
use Illuminate\Http\Request;

class ClubController extends Controller
{
    public function index()
    {
        $clubs= Club::with('user','category','representative')->latest()->paginate(18);
        return view('Dashboard.club', compact('clubs'));
    }
    public function store(CLubRequest $request)
    {
        $path = null;
        try {
            if ($image = $request->file('image') ){
                $path = UploadFileAction::make()
                    ->file($image)
                    ->userId(Auth::id())
                    ->execute();
            }
            Club::create([
                'name' => $request->validated('club_name'),
                'description' => $request->validated('description'),
                'image' => $path,
                'category_id' => $request->validated('category_id'),
                'user_id' => Auth::id(),
                'represented_id' =>$request->validated('represented_id'),
            ]);
            flash('Club created successfully.')->success();
        } catch (Exception $e) {
            flash('Failed to create post: ' . $e->getMessage())->error();

        }

        return back();

    }
}
