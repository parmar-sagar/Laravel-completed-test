<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class HomeController extends Controller{
    /**
     * Display a listing of the users' posts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $userId = (isset(Auth::user()->id)) ? Auth::user()->id : 0;
        $posts = Post::where('user_id',$userId)->get();
        return view('home',compact('posts'));
    }
}
