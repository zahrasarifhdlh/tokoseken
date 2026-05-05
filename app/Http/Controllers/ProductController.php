<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
      $data = ProductModel::all();
      return view ('produk.beranda', compact('data'));
    }

     public function tambah()
    {
      return view ('produk.tambah');
    }

     public function store(Request $request) //inisialisasai request
    {
      $request->validate([
        'nama_product' =>'required',
        'ukuran' =>'required',
        'warna' =>'required',
        'harga' =>'required',
      ]);

      //sesuaikan dengan model yang dignakan //untuk menyimpan data ke dalam database
      ProductModel::create ([
        'nama_product' => $request->nama_product,
        'ukuran' => $request->ukuran,
        'warna' => $request->warna,
        'harga' => $request->harga,
      ]);


      return redirect ('/beranda')->with('success', 'produk berhasil di tambahkan');
    }
}
