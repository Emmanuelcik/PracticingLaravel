<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts () {
        return view('post', [
            "posts" => Post::load("user")->latest()->paginate(),
        ]);
    }
    public function post (Post $post) {
        return view("post", ["post" => $post ]);
    }
}
