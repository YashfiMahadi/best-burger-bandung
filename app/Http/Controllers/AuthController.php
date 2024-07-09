<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view("pages.login.login");
    }

    public function proses_login(){
        $valid=request()->validate([
            "email"=> "required",
            "password"=> "required",
            ]);
        if (Auth::attempt($valid)){
            if (Auth::user()->role == "admin") {
                return redirect("/admin");
            }else{
                return redirect("/best-burger-bandung");
            }
        }else{
            return redirect("/login")->with('gagal', 'Maaf Password Atau Email Salah');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
