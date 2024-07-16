<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\Transaksi;
use App\Models\User;

class AdminController extends Controller
{
    function index() {
        $makanan = Makanan::count();
        $user = User::count();
        $transaksi = Transaksi::count();

        $data = [
            'makanan' => $makanan,
            'user' => $user,
            'transaksi' => $transaksi,
        ];

        return view("pages.admin.dashboard", $data);
    }
}
