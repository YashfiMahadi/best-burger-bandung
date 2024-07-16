<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function transaksi() {
        $keranjang = Keranjang::join('makanans', 'makanans.id', '=', 'keranjangs.id_makanan')
        ->select('keranjangs.*',  'keranjangs.id as id_keranjang', 'makanans.*', 'makanans.id as id_makanan_rell')
        ->where('keranjangs.id_user', Auth::user()->id)
        ->orderBy('keranjangs.id', 'desc')->get();

        $transaksi_user = Keranjang::join('users', 'users.id', '=', 'keranjangs.id_user')
        ->select('keranjangs.*',  'keranjangs.id as id_transaksi', 'users.*')
        ->where('keranjangs.id_user', Auth::user()->id)
        ->orderBy('keranjangs.id', 'desc')->first();

        $subtotal_harga = Keranjang::join('makanans', 'makanans.id', '=', 'keranjangs.id_makanan')
        ->where('keranjangs.id_user', Auth::user()->id)
        ->sum('keranjangs.subtotal_harga');

        $jumlah_total = Keranjang::join('makanans', 'makanans.id', '=', 'keranjangs.id_makanan')
        ->where('keranjangs.id_user', Auth::user()->id)
        ->sum('keranjangs.total_jumlah');

        $data = [
            'keranjang'=>$keranjang,
            'transaksi_user'=>$transaksi_user,
            'subtotal_harga'=>$subtotal_harga,
            'jumlah_total'=>$jumlah_total
        ];

        return view("landing-pages.pages.transaksi", $data);
    }

    public function pembayaran(Request $request) {
        
        Transaksi::create([
            'id_user' => Auth::user()->id,
            'jumlah_total' => Auth::user()->id,
            'grand_total' => Auth::user()->id,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status' => 'pending',
        ]);
    }
}
