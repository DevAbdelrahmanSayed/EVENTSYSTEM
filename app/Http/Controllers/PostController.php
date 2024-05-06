<?php

namespace App\Http\Controllers;

use App\Action\UploadFileAction;

use App\Http\Requests\Admin\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Club;
use App\Models\Post;
use App\Service\Post\PostService;
use Exception;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct(protected PostService $service)
    {}
    public function index()
    {
        try {
            $events = Post::scopeApprovedOrAdmin()->get() ;
            return response()->json($events);
        } catch (Exception $exception) {

        }
    }
    public function create()
    {
        $clubId = Club::where('represented_id',Auth::id())->value('id');

        return view('ClubManager.createPost',compact('clubId'));
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
            $post->approvals()->create([
                'user_id' => auth()->id(),
                'action_type' => 'Create',
                'is_approved' => false
            ]);

            flash('Thank you for submitting your post! It\'s currently pending approval, and we\'ll notify you once it\'s live.')->success();

            return back();
        } catch (Exception $e) {
            flash('Failed to create post: ' . $e->getMessage())->error();
            return back();
        }

        return back();

    }


    public function show(post $post)
    {
        return $post;
    }

    public function update(UpdatePostRequest $request, post $post)
    {
        try {
            $this->service->update($request,$post->id);
            flash('Your post has been submitted successfully and is awaiting approval!')->success();
            return back();
        } catch (Exception $exception) {
            flash('We encountered an issue while processing your request.!')->error();
            return back();
        }
    }

    public function destroy(post $post)
    {
        $post->delete();

        return response()->json();
    }
}
