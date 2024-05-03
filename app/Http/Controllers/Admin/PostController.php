<?php

namespace App\Http\Controllers\Admin;

use App\Action\UploadFileAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Club;
use App\Models\Post;
use Auth;
use Exception;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->paginate(10);
        return view('Dashboard.post', compact('posts'));
    }

    public function store(PostRequest $request)
    {
        $path = null;

        try {
            if ($image = $request->file('image') ){
                $path = UploadFileAction::make()
                    ->file($image)
                    ->userId(Auth::id())
                    ->execute();
            }
            $post = Post::create([
                'name' => $request->validated('post_name'),
                'description' => $request->validated('post_des'),
                'image' => $path,
                'club_id' => $request->validated('club_id'),
                'user_id' => Auth::id(),
            ]);


            flash('Post created successfully.')->success();


        } catch (Exception $e) {
            flash('Failed to create post: ' . $e->getMessage())->error();

        }

        return back();

    }


    public function show(Post $post)
    {
        $post->load('user');
        return response()->json($post);
    }


}
