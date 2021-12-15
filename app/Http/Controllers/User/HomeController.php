<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\user\category;
use App\Models\user\post;
use App\Models\user\tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
    */

    public function index()
    {
    	$posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
    	$post1 = post::where('status',1)->orderBy('created_at','DESC')->paginate(1);

    	return view('blog.pages.home',compact('posts','post1'));
    }
    public function index1()
    {
    	$posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(5);
    	$post1 = post::where('status',1)->orderBy('created_at','DESC')->paginate(1);

    	return view('blog.pages.blog',compact('posts','post1'));
    }
    public function tag(tag $tag)
    {
        $posts = $tag->posts();
        return view('blog.pages.home',compact('posts'));
    }

    public function category(category $category)
    {
        $posts = $category->posts();
        return view('blog.pages.home',compact('posts'));
    }
}
