<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\category;
use App\Model\user\tags;
use App\Model\user\User;

class Homecontroller extends Controller
{
    public function index()
    {
        $posts = post::where('status',1)->orderBy('created_at','DESC')->paginate(9);
        $categories = category::all();
        return view('Blog.blog',compact('posts','categories'));
    }

    public function tag(tags $tag)
    {
        $posts = $tag->posts();
        $categories = category::all();
        return view('Blog.blog',compact('posts','categories'));
    }

    public function category(category $category)
    {
        $posts = $category->posts();
        $categories = category::all();
        return view('Blog.blog',compact('posts','categories'));
    }

    public function pendonor()
    {
        $profiles = user::where('status',1)->paginate(9);
        $categories = category::all();
        return view('Blog.list',compact('profiles','categories'));
    }

    public function profile(user $user)
    {
        $profiles = $user->id;
        $categories = category::all();
        return view('Blog.list',compact('profiles','categories'));
    }

    public function search(user $user)
    {
        $profiles = $user->id;
        $categories = category::all();
        return view('Blog.list',compact('profiles','categories'));
    }
}
