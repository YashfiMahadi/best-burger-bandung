<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $user=User::orderBy('id','desc')->get();

        $data=[
            'no'=>1,
            'user'=>$user
        ];

        return view('pages.admin.user.index',$data);
    }

    public function tambah() {
        return view('pages.admin.user.create');
    }

    public function proses_tambah(Request $request) {
        $valid= request()->validate([
            'nama_lengkap'=>'required',
            'name'=>'required',
            'notlp'=>'required',
            'email'=>'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
            'role'=>'required',
        ]);

        User::create($request->all());

        return redirect('/user')->with('tambah','data telah di tambahkan');
    }

    public function edit($id) {
        $user = User::find($id);
        $data = ['user' => $user];
        return view('pages.admin.user.edit', $data);
    }

    public function update(Request $request, $id) {
        $valid= request()->validate([
            'nama_lengkap'=>'required',
            'name'=>'required',
            'notlp'=>'required',
            'email'=>'required|email',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',
            'role'=>'required',
        ]);

        User::find($id)->update($request->all());

        return redirect('/user')->with('edit', 'data berhasil di ubah');
    }

    public function delete($id) {
        User::find($id)->delete();

        return redirect('/user')->with('hapus', 'data berhasil di hapus');
    }
}
