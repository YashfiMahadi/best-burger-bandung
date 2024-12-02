<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        // query untuk menampilkan tabel kategori orderby untuk mengurut kan tabel bedasarkan id
        $kategori=category::orderBy('id','desc')->get();

        // array data untuk memangil variabel dan menampilkan nya di view
        $data=[
            'no'=>1,
            'kategori'=>$kategori
        ];

        // untuk menampilkan view halaman
        return view('pages.admin.kategori.index',$data);
    }

    public function tambah() {
        // untuk menampilkan view halaman
        return view('pages.admin.kategori.create');
    }

    public function proses_tambah(Request $request) {
        // membuat validasi form arti required form harus di isi
        $valid= request()->validate([
            'name'=>'required'
        ]);

        // query untuk insert table atau menambah kan table
        category::create($request->all());

        // untuk mengalih kan halaman dan with untuk memberi pesan saat mengalihkan halaman
        return redirect('/kategori')->with('tambah','data telah ditambahkan');
    }

    public function edit($id) {
        // query untuk menampilkan table berdasarkan id
        $kategori = category::find($id);

        // array data untuk memangil variabel dan menampilkan nya di view
        $data = ['kategori' => $kategori];

        // untuk menampilkan view halaman
        return view('pages.admin.kategori.edit', $data);
    }

    public function update(Request $request, $id) {
        // membuat validasi form arti required form harus di isi
        $request->validate([
            'name' => 'required',
        ]);

        // query untuk update table atau mengubah isi table
        category::find($id)->update($request->all());

        // untuk mengalih kan halaman dan with untuk memberi pesan saat mengalihkan halaman
        return redirect('/kategori')->with('edit', 'data berhasil di ubah');
    }

    public function delete($id) {
        // query untuk delete table atau menghapus isi table
        category::find($id)->delete();

        // untuk mengalih kan halaman dan with untuk memberi pesan saat mengalihkan halaman
        return redirect('/kategori')->with('hapus', 'data berhasil di hapus');
    }
}
