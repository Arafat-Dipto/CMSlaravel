<?php

namespace App\Http\Controllers;

use App\Post;
use App\Video;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $post = Post::first();
        $video = Video::first();
        $posts = Post::where('publish',1)->paginate(4);
        $videos = Video::where('publish',1)->paginate(4);
        return view('index',compact(['post','video','posts','videos']));
    }

    public function postView($id){
        $post = \App\Post::find($id);
        $posts = \App\Post::latest()->paginate(5);
        return view('postContent',compact(['post','posts']));
    }

    public function videoView($id){
        $video = \App\Video::find($id);

        return view('videoContent',compact('video'));
    }
}
