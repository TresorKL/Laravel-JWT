<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function createUser(Request $request): \Illuminate\Http\JsonResponse
    {

        // create user for auth
        $user=User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);




        return response()->json([
            "status"=>true,
            "message"=>"Account successfully created"
        ],200);

    }
}
