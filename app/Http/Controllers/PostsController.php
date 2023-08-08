<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Post;

class PostsController extends Controller
{
    //

    public function index(){
        $data['title'] = "Posts";
        $data["posts"] = Post::all();
        return view('posts',$data);
    }

    // public function show($id){
    //     $data['title'] = "post";
    //     $data["post"] = Post::find($id);
    //     return view('post',$data);
    // }

    //menggunakan route model binding  
    //ini langsung otomatis ngambil dr  
    public function show(Post $post){
        $data['title'] = "post";
        $data["post"] = $post;
        return view('post',$data);
    }
}
