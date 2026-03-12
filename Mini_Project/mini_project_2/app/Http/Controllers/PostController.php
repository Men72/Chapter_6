<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
{
    $posts = [
        ['id' => 1, 'title' => 'First Post', 'content' => 'This is first blog post'],
        ['id' => 2, 'title' => 'Second Post', 'content' => 'This is second blog post'],
    ];

    return view('posts.index', compact('posts'));
}

public function show($id)
{
    $posts = [
        1 => ['title' => 'First Post', 'content' => 'This is first blog post'],
        2 => ['title' => 'Second Post', 'content' => 'This is second blog post'],
    ];

    $post = $posts[$id];

    return view('posts.show', compact('post'));
}
}
