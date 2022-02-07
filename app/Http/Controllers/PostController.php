<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\TraitsCoreLate\Registers\RegisterSystem;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;


class PostController extends Controller
{

    use RegisterSystem;

    protected $redirectTo = RouteServiceProvider::FEED;


    public function __construct(){
        $this->middleware('auth');
    }
  
    public function index()
    {
        $post = Post::All();
        return view('post', compact('post'));
    }

    public function validator(array $data){
        return Validator::make($data, [
                'title' => ['required'],
                'description' => ['required'],
        ]);
    }

   
    public function create(array $data){
            $DataPost = Post::create([
                'title' => $data['title'],
                'description' => $data['description']
            ]);
            return $DataPost;
    }

    
    public function store(Request $request)
    {
        //  
    }

   
    public function show(Post $post)
    {
        //
    }

    
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
