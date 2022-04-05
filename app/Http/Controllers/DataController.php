<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        return view('produk.data', [
            'title' => 'Data Produk',
            'active' => 'produk'
        ]);
    }
}
