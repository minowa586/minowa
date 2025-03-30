<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
{
    return view('posts.index')->with(['posts' =>Post::orderBy('updated_at', 'desc')->paginate(10)
]);
}
}