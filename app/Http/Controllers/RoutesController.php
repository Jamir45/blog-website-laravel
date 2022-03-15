<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Post;

class RoutesController extends Controller
{
    function HomeController() {
        $posts = Post::with('comments')->orderByDesc('id')->get();
 
        return view('home', ['posts' => $posts]);
    }

    function PostController($postId) {
        return view('post');
    }

    function InsertPost(Request $req) {
        $title = $req->input('title');
        $body = $req->input('body');

        $result = Post::insert([
            'title' => $title, 
            'body' => $body
        ]);

        if ($result == true) {
            return ['success'=>'Post Successfully Created'];
        } else {
            return ['error'=>'Post Creation Failed'];
        }
    }

    function DeletePost($postId) {
        $result = Post::where('id', '=', $postId)->delete();

        if ($result == true) {
            return ['success'=>'Post Successfully Deleted'];
        } else {
            return ['error'=>'Post Delete Failed'];
        }
    }
}
