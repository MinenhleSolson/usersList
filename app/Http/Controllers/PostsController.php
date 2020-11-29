<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('surname', 'desc')->get();
        return view('users.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('users.create')->with('posts', $posts);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|max:255',
            'job_title' => 'required|max:255',
            'bio' => 'required|max:500',
            'password' => 'required|max:255'
        ]);

        //create new user
        $post = new Post;
        $post->name = $request->input('name');
        $post->surname = $request->input('surname');
        $post->username = $request->input('username');
        $post->email = $request->input('email');
        $post->mobile = $request->input('mobile');
        $post->job_title = $request->input('job_title');
        $post->bio = $request->input('bio');
        $post->password = $request->input('password');
        $post->save();

        return redirect('/users/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('users.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('users.edit')->with('post', $post);
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|max:255',
            'job_title' => 'required|max:255',
            'bio' => 'required|max:500',
            'password' => 'required|max:500'
        ]);

        //create new user
        $post = Post::find($id);
        $post->name = $request->input('name');
        $post->surname = $request->input('surname');
        $post->username = $request->input('username');
        $post->email = $request->input('email');
        $post->mobile = $request->input('mobile');
        $post->job_title = $request->input('job_title');
        $post->bio = $request->input('bio');
        $post->password = $request->input('password');
        $post->save();

        return redirect('/users/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
