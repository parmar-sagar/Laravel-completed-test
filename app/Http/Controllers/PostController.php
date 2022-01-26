<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Redirect;
use Auth;

class PostController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $posts = Post::where('posted_at','<',Carbon::now()->toDateTimeString())->where('is_draft',0)->where('is_members_only',0)->paginate(10);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        // Validate posted form data
        $request->validate([
            'title' => 'required|string|max:100',
            'content' => 'required|string|max:50,000',
            'posted_at' => 'required',
        ]);
        if (!isset($request->is_draft)) {
            $request['is_draft'] = '0';
        }
        $request['user_id'] = Auth::user()->id;
        $request['posted_at'] = str_replace('T', ' ', $request->posted_at);
        
        // Create and save post with validated data
        $post = Post::create($request->all());

        // Redirect the user to the created post with a success message
        return redirect(route('home'))->with('message', 'Post created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post){
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post){
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post){
        // Validate posted form data
        $request->validate([
            'title' => 'required|string|max:100',
            'content' => 'required|string|max:50,000',
            'posted_at' => 'required',
        ]);
        if (!isset($request->is_draft)) {
            $request['is_draft'] = '0';
        }
        $request['user_id'] = Auth::user()->id;
        $request['posted_at'] = str_replace('T', ' ', $request->posted_at);

        // Update Post with validated data
        $post->update($request->all());

        // Redirect the user to the created post woth an updated message
        return redirect(route('home'))->with('message', 'Post updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post){
        if($post->delete()) { 
            return Redirect::route('home')->with('message', 'Post deleted.');
        }
    }
}
