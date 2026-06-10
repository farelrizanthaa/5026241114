<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelanjaController extends Controller
{
    public function index()
    {
        // mengambil data dari table keranjang belanja
        $belanja = DB::table('keranjangbelanja')->get();
        // --> No Pagination, langsung get()
        // $pegawai = DB::table('pegawai')->paginate(10);
        // --> Pagination


        // mengirim data ke view index
        return view('keranjangbelanja.index', ['keranjangbelanja' => $belanja]);
    }
    public function tambah()
    {
        // memanggil view tambah
        return view('keranjangbelanja.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required',
            'Jumlah' => 'required',
            'Harga' => 'required',
        ]);

        // insert data ke table keranjang belanja
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        // alihkan halaman ke halaman keranjang belanja
        return redirect('/keranjangbelanja');
    }

    public function hapus($id)
    {
        // menghapus data belanja berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        // alihkan halaman ke halaman keranjang belanja
        return redirect('/keranjangbelanja');
    }
}
