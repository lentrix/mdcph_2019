<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class SiteController extends Controller
{
    public function index() {
        $p3 = Post::orderBy('created_at', 'desc')->limit(3)->get();
        return view('site.index', compact('p3'));
    }
}
