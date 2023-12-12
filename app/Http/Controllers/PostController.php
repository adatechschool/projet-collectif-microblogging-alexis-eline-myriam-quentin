<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //on écrit une fonction pour sélectionner tous les posts pour les envoyer dans la view 'index'
    public function getAllPosts(){
        $posts = Post::all();
        //on accède à la variable $posts qu'on nomme ici "posts" pour la transmettre à la view blade
        return view("posts.index", ["posts"=>$posts]);    
    }

    // public function getOnePost($id){
    //     $post = Post::find($id);
    //     return view("posts.singlePost", ["post"=>$post]);
    // }
    public function store(Request $request){
        $request->validate([
            'content' => 'required|string|max:255',
        ]);
        Post::create([
            'content' => $request->input("content"),
        ]);
        return redirect('/posts')->with('success', 'Post created successfully.');
    }
    public function createPost(){
        return view("posts.newPost");
    }

    public function getPostByUser(){
        $posts = Post::find(Auth::user()->posts);
        return view("dashboard", ["posts"=>$posts]);
    }
}
