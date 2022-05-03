<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register_form(){
        return view('Auth.register');
    }


    public function register(Request $request){
            $auth = app('firebase.auth');
        
            $request->validate([
                'email'=>['required', 'email'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'displayName'=>['required'],
            ]);

            $userProperties = [
                'email' => $request->email,
                'emailVerified' => false,
                'password' => $request->password,
                'displayName' => $request->displayName,
            ];
            $createdUser = $auth->createUser($userProperties);
            if($createdUser) {
                return redirect()->route('login_form');
            }
    }
}
