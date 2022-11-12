<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('users.login');
    }


    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return "User or Password not matched!";
        }else{
            $request->session()->put('user', $user);
            return redirect()->route('home');
        }
    }
}
