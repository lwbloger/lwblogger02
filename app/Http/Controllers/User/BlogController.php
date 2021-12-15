<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function blog(blog $blog)
    {
    	return view('blog.pages.blog',compact('blog'));
    }
}
