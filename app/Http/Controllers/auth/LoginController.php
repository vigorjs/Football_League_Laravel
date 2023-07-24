<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function proses(Request $request){

            $request->validate([
                'email' =>'required',
                'password' => 'required'
            ]);
            $data = [
                'email' => $request->email,
                'password' => $request->password
            ];

            if(Auth::attempt($data)){
                return redirect()->route('admin.dashboard')->with('login', 'Anda Berhasil Login');
            }else{
                return redirect()->back()->with('gagal', 'Email atau Password Salah');
            }
        }

    public function register(){
            return view('auth.register');
        }

    public function logout(){

        Auth::logout();
        return redirect()->route('auth.login')->with('logout', 'Anda Berhasil Logout');
    }

    public function proses_register(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users,email',
            'password' => 'required|min:5'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => hash::make($request->password)
        ];
        User::create($data);

        $login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($login)){
            return redirect()->route('admin.dashboard')->with('register', 'Anda Berhasil Mendaftar');
        }else{
            return redirect()->back()->with('gagal', 'Email atau Password Salah');
        }
    }
}
