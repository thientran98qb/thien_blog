<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    /**
     * List posts
     * 
     * @return View
     */
    public function index(): View
    {
        return view('admin.posts.index');
    }

    public function edit(Post $post)
    {
        return $post;
    }
}
