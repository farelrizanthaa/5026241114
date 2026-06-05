<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggarisController extends Controller
{
    public function index()
    {
        // mengambil data dari table penggaris
        $penggaris = DB::table('penggaris')->paginate(10);

        // mengirim data penggaris ke view index
        return view('indexpenggaris', ['penggaris' => $penggaris]);
    }

    // method untuk menampilkan view form tambah penggaris
    public function tambah()
    {
        // memanggil view tambah penggaris
        return view('tambahpenggaris');
    }

    // method untuk insert data ke table penggaris
    public function store(Request $request)
    {
        $request->validate([
            'merkpenggaris' => 'required',
            'stockpenggaris' => 'required',
            'tersedia' => 'required',
        ]);

        // insert data ke table penggaris
        DB::table('penggaris')->insert([
            'merkpenggaris' => $request->merkpenggaris,
            'stockpenggaris' => $request->stockpenggaris,
            'tersedia' => $request->tersedia
        ]);

        // alihkan halaman ke halaman penggaris
        return redirect('/penggaris');
    }

    // method untuk edit data penggaris
    public function edit($id)
    {
        // mengambil data penggaris berdasarkan kodepenggaris yang dipilih
        $penggaris = DB::table('penggaris')->where('kodepenggaris', $id)->get();

        // passing data penggaris yang didapat ke view editpenggaris.blade.php
        return view('editpenggaris', ['penggaris' => $penggaris]);
    }

    // update data penggaris
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'merkpenggaris' => 'required',
            'stockpenggaris' => 'required',
            'tersedia' => 'required',
        ]);

        // update data penggaris
        DB::table('penggaris')->where('kodepenggaris', $request->id)->update([
            'merkpenggaris' => $request->merkpenggaris,
            'stockpenggaris' => $request->stockpenggaris,
            'tersedia' => $request->tersedia
        ]);

        // alihkan halaman ke halaman penggaris
        return redirect('/penggaris');
    }

    // method untuk hapus data penggaris
    public function hapus($id)
    {
        // menghapus data penggaris berdasarkan kodepenggaris yang dipilih
        DB::table('penggaris')->where('kodepenggaris', $id)->delete();

        // alihkan halaman ke halaman penggaris
        return redirect('/penggaris');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table penggaris sesuai pencarian data
        $penggaris = DB::table('penggaris')
            ->where('merkpenggaris', 'like', "%".$cari."%")
            ->paginate();

        // mengirim data penggaris ke view index
        return view('indexpenggaris', ['penggaris' => $penggaris]);
    }
}
