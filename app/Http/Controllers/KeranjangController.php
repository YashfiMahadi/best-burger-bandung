<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function index() {
        $keranjang = Keranjang::join('makanans', 'makanans.id', '=', 'keranjangs.id_makanan')
        ->select('keranjangs.*',  'keranjangs.id as id_keranjang', 'makanans.*')
        ->where('keranjangs.id_user', Auth::user()->id)
        ->orderBy('keranjangs.id', 'desc')->get();

        $subtotal_harga = Keranjang::join('makanans', 'makanans.id', '=', 'keranjangs.id_makanan')
        ->where('keranjangs.id_user', Auth::user()->id)
        ->sum('keranjangs.subtotal_harga');

        $jumlah_total = Keranjang::join('makanans', 'makanans.id', '=', 'keranjangs.id_makanan')
        ->where('keranjangs.id_user', Auth::user()->id)
        ->sum('keranjangs.total_jumlah');

        $data = [
            'keranjang' => $keranjang,
            'subtotal_harga' => $subtotal_harga,
            'jumlah_total' => $jumlah_total,
        ];

        return view("landing-pages.pages.keranjang", $data);
    }

    public function tambah(Request $request) {
        $jumlah = $request->jumlah;

        Keranjang::create([
            'id_user'=> $request->id_user,
            'id_makanan'=> $request->id_makanan,
            'total_jumlah'=> $jumlah,
            'subtotal_harga'=> $jumlah * $request->harga,
        ]);

        return redirect('/keranjang')->with('tambah','Berhasil di tambah ke keranjang');
    }

    public function edit(Request $request, $id) {
        $jumlah = $request->jumlah;

        Keranjang::find($id)->update([
            'id_user'=> $request->id_user,
            'id_makanan'=> $request->id_makanan,
            'total_jumlah'=> $jumlah,
            'subtotal_harga'=> $jumlah * $request->harga,
        ]);

        return redirect('/keranjang')->with('edit','Berhasil di edit ke keranjang');
    }

    public function hapus($id) {

        Keranjang::where('id', $id)->delete();

        return redirect('/keranjang')->with('hapus','Berhasil di hapus ke keranjang');

    }

    public function check_out(Request $request) {
        request()->validate([
            'jumlah_total' => 'required',
            'gran_total' => 'required',
        ]);

        Transaksi::create([
            'id_user'=> Auth::user()->id,
            'jumlah_total'=> $request->jumlah,
            'gran_total'=> $request->gran_total
        ]);

        return redirect('/transaksi');
    }
}
