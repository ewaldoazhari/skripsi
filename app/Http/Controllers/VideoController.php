<?php

namespace App\Http\Controllers;

use Carbon;
use App\video;
use App\User;
use Lakshmaji\Thumbnail\Facade\Thumbnail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



/**
 * @property  request
 */
class VideoController extends Controller
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
        $posts = video::orderBy('id','desc')->paginate(10);
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


        video::create([
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
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = substr(explode(':',serialize($request->query()))[3], 0, 2);
        $video = video::find($id);
        $user = User::find($video->user_id);

        return view('show', ['video' => $video, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(video $video)
    {
        return view('edit',compact('video'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, video $video)
    {
        $video->title = $request->title;
        $video->description = $request->description;
        $video->exercise = $request->exercise;
        $video->save();
        session()->flash('message','your post have been updated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\video $video
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(video $video)
    {
        $video->delete();
        return redirect(route('index'));
    }

    public function upload()
    {
        $user = Auth::user();
        return view('upload',['user' => $user]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function uploadPost(Request $request)
    {

        // file_put_contents($path.$videoName,$file);
        // file_put_contents($path.$avatarname,$avatar);
        // file_put_contents($path.$videoName,$request->fileToUpload);
        // $path = $request->fileToUpload->storeAs('video',$fileName);

        $file = $request->file('file');
        $path = public_path('video/');
        $title = $request->title;
        $videoName = $title.time().'.'.request()->file->getClientOriginalExtension();

        if(!is_dir($path)){
            file::makedirectory($path);
        }

        $file->move($path, $videoName);

        $user_id = substr(explode(':',serialize($request->query()))[3], 0, 2);
        $video = new video();
        $video->user_id = (int)$user_id;
        $video->title = $title;
        $video->path = '/video/'.$videoName;
        $video->description = $request->description;
        $video->save();

        return redirect(route('index'));
    }
}
