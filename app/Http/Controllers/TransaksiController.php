<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\MakananPembayaran;
use App\Models\Transaksi;
use Carbon\Carbon;
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

        $id_transaksi = Transaksi::insertGetId([
            'id_user' => Auth::user()->id,
            'jumlah_total' => $request->jumlah_total,
            'grand_total' => $request->grand_total,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status' => 'pending',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $id_makanan = $request->id_makanan;
        $total_jumlah = $request->total_jumlah;
        $subtotal_harga = $request->subtotal_harga;

        $keranjang = Keranjang::where('id_user', Auth::user()->id)->count();

        for ($i=0; $i < $keranjang; $i++) {
            MakananPembayaran::create([
                'id_transaksi' => $id_transaksi,
                'id_makanan' => $id_makanan[$i],
                'total_jumlah' => $total_jumlah[$i],
                'subtotal_harga' => $subtotal_harga[$i],
            ]);
        }

        Keranjang::where('id_user', Auth::user()->id)->delete();

        return redirect('/order');
    }

    public function order() {

        $transaksi_user = Transaksi::with(['user', 'makanans'])
        ->where('id_user', Auth::id())
        ->orderBy('id', 'desc')
        ->get();

        return view('landing-pages.pages.order', compact('transaksi_user'));
    }

    public function index() {
        $transaksi=Transaksi::join('users', 'users.id', '=', 'transaksis.id_user')
        ->select('transaksis.*', 'transaksis.id as transaksi_id','users.*')
        ->orderBy('transaksis.id','desc')->get();

        $data=[
            'no'=>1,
            'transaksi'=>$transaksi
        ];

        return view('pages.admin.transaksi.index',$data);
    }

    public function edit($id) {
        $transaksi = Transaksi::find($id);
        $data = ['transaksi' => $transaksi];
        return view('pages.admin.transaksi.edit', $data);
    }

    public function update(Request $request, $id) {
        $valid = request()->validate([
            'status'=>'required'
        ]);

        Transaksi::find($id)->update([
            'status'=>$request->status
        ]);

        return redirect('/admin/transaksi')->with('edit', 'data berhasil di ubah');
    }

}
