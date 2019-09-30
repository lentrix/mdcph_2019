<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('updated_at','desc')->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function edit(Post $post) {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Post $post, Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update([
            'title' => $request['title'],
            'content' => $request['content'],
        ]);

        return redirect()->back()->with('Info', 'Post updated successfully!');
    }
}
