<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\post;
use App\Service\Post\PostService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct(protected PostService $service)
    {}
    public function index()
    {
        try {
           $posts =  $this->service->index();
        } catch (Exception $exception) {
            flash('An error occurred while retrieving the posts: '.$exception->getMessage())->error();
            return back();
        }
    }

    public function store(PostRequest $request)
    {
        try {
             $this->service->store($request);
            flash('Your post has been submitted successfully and is awaiting approval!')->success();
            return back();
        } catch (Exception $exception) {
            flash('We encountered an issue while processing your request.!')->error();
            return back();
        }
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
