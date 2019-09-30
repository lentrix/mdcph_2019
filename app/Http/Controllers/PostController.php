<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
// use App\User;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('updated_at','desc')->get();
        return view('admin.posts.index', compact('posts'));
    }


}
