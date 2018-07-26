<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id','desc')->paginate(10);   
        return view('index',['posts' => $posts ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create'); 
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
            'title' => 'required|min:3',
            'description' => 'required|min:10'
        ]);


        Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'exercise' => $request->exercise,
            // 'user_id' => Auth::id(),

        ]);
        return redirect(route('index'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = substr(explode(':',serialize($request->query()))[3], 0, 2);
        $post = Post::find($id);
        $user = User::find($post->user_id);

        return view('show', ['post' => $post, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('edit',compact('post'));
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
        $post->title = $request->title;
        $post->description = $request->description;
        $post->exercise = $request->exercise;
        $post->save();
        session()->flash('message','your post have been updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect(route('index'));
    }

       public function upload()
    {
        $user = Auth::user();
        return view('upload',['user' => $user]);
    }

    public function uploadPost(Request $request)
    {
        // $request->validate([
        //     'fileToUpload' => 'required|file|max:1024',
        // ]);
        
        // $fileName = "file".time().'.'.request()->fileToUpload->getClientOriginalExtension();
 
        // $request->fileToUpload->storeAs('video',$fileName);

        $title = $request->title;
        $fileName = $title.time().'.'.request()->fileToUpload->getClientOriginalExtension();
        $path = $request->fileToUpload->storeAs('video',$fileName);
        $user_id = substr(explode(':',serialize($request->query()))[3], 0, 2);
        $post = new Post();
        $post->user_id = (int)$user_id;
        $post->title = $title;
        $post->path = url($path);
        $post->description = $request->description;
        $post->save();

        
 
            return redirect(route('index'));
    }
}
