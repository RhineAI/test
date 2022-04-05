<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        return view('produk-kategori.index',[
            'title' => 'Kategori Produk',
            'active' => 'produk'
        ]);
    }
}
