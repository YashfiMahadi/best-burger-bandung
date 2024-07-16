<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Makanan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $makanan = Makanan::join('categories', 'categories.id', '=', 'makanans.id_kategori')
        ->select('makanans.*', 'categories.name as kategori')
        ->orderBy('makanans.id', 'desc')->get();

        $kategori = category::orderBy('id', 'desc')->get();

        $data = [
            'kategori' => $kategori,
            'makanan' => $makanan
        ];

        return view("landing-pages.pages.index", $data);
    }

    public function menu() {
        $makanan = Makanan::join('categories', 'categories.id', '=', 'makanans.id_kategori')
        ->select('makanans.*', 'categories.name as kategori')
        ->orderBy('makanans.id', 'desc')->get();

        $kategori = category::orderBy('id', 'desc')->get();

        $data = [
            'kategori' => $kategori,
            'makanan' => $makanan
        ];

        return view("landing-pages.pages.menu", $data);
    }

    public function about() {
        return view("landing-pages.pages.about");
    }

    public function contact() {
        return view("landing-pages.pages.contact");
    }
}
