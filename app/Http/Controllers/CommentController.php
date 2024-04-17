<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getAllComments()
    {
        $comments = Comment::all();
        return view("posts.singleComment", ["comments" => $comments]);

    }

    public function getCommentsByPost()
    {
        $comments = Comment::where("post_id", '=', 2)->get();
        return view("posts.comments", ["comments" => $comments]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createComment()
    {

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'post_id' => 'required',
            'content' => 'required|string|max:255',
        ]);

        $comment = new Comment();
        $comment->post_id = $request->post_id;
        $comment->user_id = $request->user()->id;
        $comment->content = $request->content;

        if ($comment->save()) {
            return response()->json([
                'message' => 'Comment successful',
                'comment' => $comment->load('user')
            ], 201);
        } else {
            return response()->json([
                'message' => 'Error'
            ], 500);
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
