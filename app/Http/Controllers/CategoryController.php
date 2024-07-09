<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $kategori=category::orderBy('id','desc')->get();

        $data=[
            'no'=>1,
            'kategori'=>$kategori
        ];

        return view('pages.admin.kategori.index',$data);
    }

    public function tambah() {
        return view('pages.admin.kategori.create');
    }

    public function proses_tambah(Request $request) {
        $valid= request()->validate([
            'name'=>'required'
        ]);

        category::create($request->all());

        return redirect('/kategori')->with('tambah','data telah ditambahkan');
    }

    public function edit($id) {
        $kategori = category::find($id);
        $data = ['kategori' => $kategori];
        return view('pages.admin.kategori.edit', $data);
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
        ]);

        category::find($id)->update($request->all());

        return redirect('/kategori')->with('edit', 'data berhasil di ubah');
    }

    public function delete($id) {
        category::find($id)->delete();

        return redirect('/kategori')->with('hapus', 'data berhasil di hapus');
    }
}
