<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function createPost(Request $request){

        $user = auth()->user();
       // $user = Auth::user();


        $user->posts()->create([
            "title"=>$request->title,
            "body"=>$request->body,
            "user_id"=>$user->id
        ]);
    }
}
