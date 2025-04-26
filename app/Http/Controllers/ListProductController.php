<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductController extends Controller
{
    public function index() 
    {
        $data = [
            ['id' => 1, 'produk' => 'Kamera Canon'],
            ['id' => 2, 'produk' => 'Kamera Nikon'],
            ['id' => 3, 'produk' => 'Kamera Samsung'],
        ];

        return view('list_product', ['data' => $data]);
    }
}
