<?php

namespace App\Service\Post;

use App\Models\Post;

class PostService
{
    public function index()
    {
        return Post::paginate(30);
    }
    public function store($request)
    {
        $postData = $request->validated();
        $postData['type'] = 'store';
        Post::create($postData);
    }
    public function update($requestData,$id)
    {
        $post = Post::findOrFail($id);
        $postData = $requestData->validated();
        $postData['type'] = 'update';
        $post->update($postData);
    }
    public function delete()
    {

    }

}
