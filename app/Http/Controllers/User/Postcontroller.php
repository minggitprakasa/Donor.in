<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;
use App\Model\user\category;

class Postcontroller extends Controller
{
    public function post(post $post)
    {
        $categories = category::all();
        return view('blog.post',compact('post','categories'));
    }
}
