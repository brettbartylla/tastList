<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::paginate(5);
        
 //       $posts = DB::table('posts')->get();
        //query all live posts using elequent
//        $posts = Post::whereLive(1)->get();
//        $post = DB::table('posts')->whereLive(1)->first();
//        
//        dd($post);
        
        
        //return view that templates out the posts
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return a blade file that creates articles
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //creating article using eloquent
//        DB::table('posts')->insert($request->except('_token'));
        
        Post::create($request->all());
        //redirect user after post is made
        return redirect('/posts');
        
        

//        $post = new Post;
//        $post->user_id = Auth::user()->id;
//        $post->content = $request->content;
//        $post->live = (boolean)$request->live;
//        $post->post_on = $request->post_on;
//        $post->save();
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //use this method to "show more" when link inside post is clicked
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post')); ;
        //redirect user after post is made
        return redirect('/posts');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //updates edited posts
        //get id of post being edited
        $post = Post::findOrFail($id);
        
        //fixes if live checkbox is set when edited
        if(! isset($request->live))
            $post->update(array_merge($request->all(),['live' =>false]));
        else
            $post->update($request->all());        
        
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //inside function that destroys posts
        //get id of post and destroy it
        Post::destroy($id);
        //delete post
//        $post->delete();
        return redirect('/posts');
        
    }
}
