<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('home');

    }

    public function favorite()
    {
        return view('favorite');
    }

     public function test()
    {
        return view('test');
    }

      public function view()
    {
        return view('view');
    }

      public function upload()
    {
        return view('upload');
    }

    // public function uploadPost(Request $request)
    // {
    //     // $request->validate([
    //     //     'fileToUpload' => 'required|file|max:1024',
    //     // ]);
 
    //     $fileName = "fileName".time().'.'.request()->fileToUpload->getClientOriginalExtension();
 
    //     $request->fileToUpload->storeAs('video',$fileName);
 
    //         return redirect(route('create'));
    // }


}
