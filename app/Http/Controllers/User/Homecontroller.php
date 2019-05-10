<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\post;

class Homecontroller extends Controller
{
    public function index()
    {
        $posts = post::where('status',1)->get();
        return view('user.blog',compact('posts'));
    }
}
