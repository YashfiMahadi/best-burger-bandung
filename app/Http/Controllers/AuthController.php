<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function daftar() {
        return view("pages.auth.daftar");
    }

    public function proses_daftar(Request $request) {
        $valid = request()->validate([
            'nama_lengkap'=>'required',
            'name'=>'required|min:8',
            'notlp'=>'required',
            'email'=>'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        $data['role'] = 'user';

        User::create($data);

        return redirect('/login')->with('daftar','Akun anda telah terdaftar silahkan untuk login');
    }

    public function login(){
        return view("pages.auth.login");
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
                return redirect("/");
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



