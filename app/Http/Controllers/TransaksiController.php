<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index() {
        $transaksi = Transaksi::join('keranjangs', 'keranjangs.id', '=', 'transaksis.id_makanan')
        ->select('transaksis.*',  'transaksis.id as id_transaksi', 'keranjangs.*')
        ->where('transaksis.id_user', Auth::user()->id)
        ->orderBy('transaksis.id', 'desc')->get();

        $data = [
            'Transaksi'=>$transaksi
        ];

        return view("landing-pages.pages.transaksi", $data);
    }
}
