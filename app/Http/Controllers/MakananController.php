<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function index() {
        $makanan=Makanan::join('categories', 'categories.id', '=', 'makanans.id_kategori')
                        ->select('makanans.*', 'categories.name as kategori')
                        ->orderBy('id','desc')->get();

        $data=[
            'no'=>1,
            'makanan'=>$makanan
        ];

        return view('pages.admin.makanan.index',$data);
    }

    public function tambah() {
        $kategori = category::get();

        $data=[
            'kategori'=> $kategori
        ];

        return view('pages.admin.makanan.create', $data);
    }

    public function proses_tambah(Request $request) {
        $valid = request()->validate([
            'nama'=>'required',
            'harga'=>'required|numeric',
            'stok' => 'required|numeric',
            'id_kategori'=>'required',
        ]);

        $file = $request->file('image');
        if ($file) {
            $extension  = $file->getClientOriginalExtension();
            $image  = strtotime(date('Y-m-d H:i:s')) . '.' . $extension;
            $destination = base_path('public/images/uploads');
            $file->move($destination, $image);

            $data = $request->all();
            $data ['image'] = $image;
        } else {
            $data = $request->all();
        }

        Makanan::create($data);

        return redirect('/makanan')->with('tambah','data telah di tambahkan');
    }

    public function edit($id) {
        $makanan = Makanan::find($id);
        $kategori = category::get();

        $data = [
            'makanan' => $makanan,
            'kategori'=> $kategori
        ];

        return view('pages.admin.makanan.edit', $data);
    }

    public function update(Request $request, $id) {
        $valid= request()->validate([
            'nama'=>'required',
            'harga'=>'required|numeric',
            'stok' => 'required|numeric',
            'id_kategori'=>'required',
            'image'=>'mimes:jpg,jpeg,png',
        ]);

        $old_image = Makanan::where('id', $id)
                    ->first()
                    ->image;

        $file = $request->file('image');
        if ($file) {
            
            if (isset($old_image)) {
                $pleaseRemove = base_path('public/images/uploads') . $old_image;
                if (file_exists($pleaseRemove)) {
                    unlink($pleaseRemove);
                }
            }

            $extension  = $file->getClientOriginalExtension();
            $image  = strtotime(date('Y-m-d H:i:s')) . '.' . $extension;
            $destination = base_path('public/images/uploads');
            $file->move($destination, $image);

            $data = $request->all();
            $data ['image'] = $image;
        } else {
            $data = $request->all();
        }

        Makanan::find($id)->update($data);

        return redirect('/makanan')->with('edit', 'data berhasil di ubah');
    }

    public function delete($id) {
        Makanan::find($id)->delete();

        return redirect('/makanan')->with('hapus', 'data berhasil di hapus');
    }
}
