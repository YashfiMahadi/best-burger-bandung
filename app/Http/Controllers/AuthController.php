<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function daftar() {
        // untuk menampilkan view halaman
        return view("pages.auth.daftar");
    }

    public function proses_daftar(Request $request) {
        // untuk validasi form agar tersetruktur
        $valid= request()->validate([
            'nama_lengkap'=>'required', // arti required form harus di isi 
            'name'=>'required|min:8', // arti min minimal 8 huruf 
            'notlp'=>'required|numeric', // numeric arti nya form yang di isi harus nomor 
            'email'=>'required|email|unique:users,email', // arti unique nya email tidak boleh sama
            'password' => 'required|confirmed|min:6', // arti confirmed untuk konfirmasi password
            'password_confirmation' => 'required'
        ]);

        // untuk masukan data user
        $data = $request->all();
        $data['password'] = Hash::make($request->password); // Hash untuk meng eskripsi password
        $data['role'] = 'user';
        User::create($data);
        // untuk masukan data user

        // redirect untuk pindah halaman dan with untuk membrikan pesan saat pindah halaman
        return redirect('/login')->with('daftar','Akun anda telah terdaftar silahkan untuk login');
    }

    public function login(){
        // untuk menampilkan view halaman
        return view("pages.auth.login");
    }

    public function proses_login(){
        // untuk validasi form agar tersetruktur
        $valid=request()->validate([
            "email"=> "required",
            "password"=> "required",
        ]);

        // membuat logika login Auth::user()->role untuk menampilkan role user
        // Auth::attempt($valid) untuk fungsi login
        if (Auth::attempt($valid)){
            if (Auth::user()->role == "admin") {
                // jika role nya sebagai admin maka akan di alihkan ke halaman admin
                return redirect("/admin");
            }else{
                // jika role nya sebagai user maka akan di alihkan ke halaman user
                return redirect("/");
            }
        }else{
            // jika passwrod dan email salah maka akan di kembalikan ke halaman login
            return redirect("/login")->with('gagal', 'Maaf Password Atau Email Salah');
        }

    }
    public function logout(){
        // Auth::logout(); untuk fungsi logout seltelah logout maka akan di kembalikan ke halaman login
        Auth::logout();
        return redirect('/login');
    }
}



