<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            $token = $user->createToken('web')->plainTextToken;
            return response()->json(['user'=>$user,'token'=>$token],200);
        }else{
            return response()->json(['error'=>'Unauthorised'],401);
        }
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message'=>'Logout success'],200);
    }
}
