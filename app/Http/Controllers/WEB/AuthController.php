<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('pages.Login.login');
    }

    public function loginStore(Request $request){

        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = [
            'username' => $request->username,
            'password' => $request->password,
        ];



        if(Auth::attempt($user)){
            $userr = User::where('username', $request->username)->first();
            $request->session()->put('username', $userr->full_name);
            return redirect()->route('dashboard');
        }else{
            return redirect()->route('login')->with(['failed' => 'Username Atau Password Salah']);
        }

    }

    public function logout(){
        Auth::logout();



        return redirect()->route('login')->with(['succes' => 'Logout Berhasil']);
    }
}
