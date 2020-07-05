<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminDashboardController extends Controller
{
    public function createPostShow(){
        $types = ['Post','Video'];
        return view('admin.content',compact('types'));
    }
    public function action(){
        $method = request('edit_op');
        return redirect('admin/post/create?type='.$method);
    }

    public function createPost(Request $request){
        $this->validate(request(), [
            'p_title' => 'required|unique:posts,p_title',
            'p_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'p_details' => 'required'
        ]);
        $img = uniqid() . '.jpg';
        $request->p_image->move('images', $img);

        User::find(Auth::id())->posts()->create([
            'p_title' => request('p_title'),
            'p_image' => $img,
            'p_details' => request('p_details'),
            'publish' => 1
        ]);
        return redirect()->back();
    }
    public function createVideo(Request $request){
        $this->validate(request(), [
            'v_title' => 'required|unique:videos,v_title',
            'v_image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'v_link'  => 'required',
            'v_details' => 'required',

        ]);
        $img = uniqid() . '.jpg';
        $request->v_image->move('images', $img);


        User::find(Auth::id())->videos()->create([
            'v_title' => request('v_title'),
            'v_image' => $img,
            'v_link' => request('v_link'),
            'v_details' => request('v_details'),
            'publish' => 1
        ]);

        return redirect()->back();
    }

    public function showPost(){
        $posts = Post::latest()->paginate(10);
        return view('admin.postShow',compact('posts'));

    }
    public function showVideo(){
        $videos = Video::latest()->paginate(10);
        return view('admin.videoShow',compact('videos'));

    }

    public function unpublishPost($id){
        Post::find($id)->update([
            'publish' => 0
        ]);
        return redirect()->back();
    }
    public function publishPost($id){
        Post::find($id)->update([
            'publish' => 1
        ]);
        return redirect()->back();
    }

    public function unpublishVideo($id){
        Video::find($id)->update([
            'publish' => 0
        ]);
        return redirect()->back();
    }
    public function publishVideo($id){
        Video::find($id)->update([
            'publish' => 1
        ]);
        return redirect()->back();
    }

    public function deletePost($id){
        Post::find($id)->delete();
        return redirect()->back();
    }
    public function deleteVideo($id){
        Video::find($id)->delete();
        return redirect()->back();
    }
}
