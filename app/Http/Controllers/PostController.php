<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function displayPost (){
        return view('page.blogpage');
    }
    public function editPost (){
        return view('page.blogaccount');
    }
    public function createLink (){
        return view('page.blogcreate');
    }
    public function updateLink (){
        return view('page.blogupdate');
    }

    public function blogDisplay(){
        $posts = Post::all();
        return view('page.blogpage', ['posts' => $posts]);
    }

    public function postblog(Request $request){
        
        $blog = Post::create([
            'title' => $request->title,
            'description' => $request->description,
            'mood'  => $request->mood,
            'author'  => $request->author
        ]);
        return redirect('/');
    }
    public function updatePost($id){
        $post = Post::findOrFail($id);
        return view('/updatepost', ['post' => $post]);
    }
    public function deletePost($id){
        $delete = Post::findOrFail($id);
        $delete->delete();
        return redirect('/');
    }
}
