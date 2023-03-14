<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request) {
        $validator = Validator::make($request->all(), [
            "email" => ["required", "email"], 
            "password" => ["required"]
        ]); 
        
        if($validator->fails()) {
            return $validator->errors()->all();
        }

        $email = $request->input("email"); 
        $password = $request->input("password"); 
        $user = User::where("email", $email)->first();

        if(!$user) {
            return [
                "status" => "error", 
                "message" => "USER_NOT_FOUND"
            ]; 
        } 

        if(!Hash::check($password, $user->password)) {
            return [
                "status" => "error", 
                "message" => "INVALID_PASSWORD"
            ];
        }
        
        Auth::login($user); 

        return [
            "status" => "ok", 
            "message" => "LOG_IN_OK"
        ];
    }   

    public function logout(Request $request) {
        Auth::logout();
        return [
            "status" => "ok", 
            "message" => "LOG_OUT_OK"
        ];
    }

    public function user(Request $request) {
        return Auth::user();
    }
}
