<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //on écrit une fonction pour sélectionner tous les posts pour les envoyer dans la view 'index'
    public function getAllPosts(){
        $posts = Post::all();
        //on accède à la variable $posts qu'on nomme ici "posts" pour la transmettre à la view blade
        return view("posts.index", ["posts"=>$posts]);    
    }

    public function getOnePost($id){
        $post = Post::find($id);
        return view("posts.singlePost", ["post"=>$post]);
    }
}
