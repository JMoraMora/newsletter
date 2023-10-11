<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PostCollection;
use App\Http\Resources\V1\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index()
    {
        return new PostCollection(Post::latest()->paginate());
    }

    public function store(Request $request)
    {
        
    }

    public function show(Post $post)
    {
        return new PostResource($post);
    }

    public function update(Request $request, Post $post)
    {
        
    }

    public function destroy(Post $post)
    {
        
    }
}
