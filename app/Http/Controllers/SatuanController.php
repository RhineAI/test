<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
    {
        return view('produk.satuan', [
            'title' => 'Satuan Produk',
            'active' => 'produk'
        ]);
    }
}
