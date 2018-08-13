<?php

namespace App\Http\Controllers;

use Carbon;
use App\video;
use App\User;
use App\Quiz;
use Lakshmaji\Thumbnail\Facade\Thumbnail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;



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
        $id = Auth::user()->id;
        $posts = video::orderBy('id','desc')->where('user_id',$id)->paginate(10);

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


        Video::create([
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
        $videos = Video::with('quiz')->where('id',$id)->get();

        if($videos[0]->quiz !== null){
            $quiz['id'] = $videos[0]->quiz->id;
            $quiz['jawaban_benar'] = $videos[0]->quiz->jawaban_benar;
            $quiz['pertanyaan'] = $videos[0]->quiz->pertanyaan;
            $quiz['jawaban'] = [
                $videos[0]->quiz->jawaban1,
                $videos[0]->quiz->jawaban2,
                $videos[0]->quiz->jawaban3,
                $videos[0]->quiz->jawaban_benar
            ];
            shuffle($quiz['jawaban']);    
        }else{
            $quiz = null;
        }

        $video = new Video();
        $video->id = $videos[0]->id;
        $video->user_id = $videos[0]->user_id;
        $video->path_video = $videos[0]->path_video;
        $video->description = $videos[0]->description;
        $video->title = $videos[0]->title;
        
        $user = User::find($video->user_id);
                
        return view('show', ['video' => $video, 'user' => $user, 'quiz' => $quiz]);
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
        $video->save();

        if($request->pertanyaan !== null && $request->jawaban_benar !== null){

            $quiz = new Quiz();
            $quiz->video_id = (int)$video->id;
            $quiz->jawaban1 = $request->jawaban1;
            $quiz->jawaban2 = $request->jawaban2;
            $quiz->jawaban3 = $request->jawaban3;
            $quiz->jawaban_benar = $request->jawaban_benar;
            $quiz->pertanyaan = $request->pertanyaan;
            $quiz->save();
        }

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
        $this->validate($request, [
            'title' => 'required|min:3',
            'description' => 'required|min:10'
        ]);

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
        $video->path_video = '/video/'.$videoName;
        $video->description = $request->description;
        $video->save();

        if($request->pertanyaan !== null && $request->jawaban_benar !== null){

            $quiz = new Quiz();
            $quiz->video_id = (int)$video->id;
            $quiz->jawaban1 = $request->jawaban1;
            $quiz->jawaban2 = $request->jawaban2;
            $quiz->jawaban3 = $request->jawaban3;
            $quiz->jawaban_benar = $request->jawaban_benar;
            $quiz->pertanyaan = $request->pertanyaan;
            $quiz->save();
        }



        return redirect(route('index'));
    }
}
