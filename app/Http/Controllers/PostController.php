<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::find([1, 2, 3], ['id', 'title', 'status']);
        $posts = Post::select('id', 'title', 'status')->paginate(10);
        return $posts;
        return view('posts.index', compact('posts'));
    }
}
