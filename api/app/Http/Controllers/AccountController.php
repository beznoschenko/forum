<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\JWTAuth;
use App\Models\User;


class AccountController extends Controller{

   

    public function login(Request $request)
    {
        $credentials = $request->only('login', 'password');
        if ($token = $this->guard()->attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json($this ->createNewToken($token), 200);
    }
    return response()->json(['error' => 'login_error'], 401);
}

public function register(Request $request)
{
    $user = User::create($request->all());
    $this->login($user);
    return response()->json(["status" => "Success delete"],200);

}

public function logout(){
    Auth::logout();
    return response()->json(['status' => "Succes logout"], 200);
}
private function guard(){
    return Auth::guard();
}

private function createNewToken($token){
    return [
        'token' => $token,
        'type' => 'bearer',
        'expires' => time() +3600,
        'user' => Auth::user()
    ];
}

}