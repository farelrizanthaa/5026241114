<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        // mengambil data dari table keranjang belanja
        $nilai = DB::table('nilaikuliah')->get();
        // --> No Pagination, langsung get()
        // $pegawai = DB::table('pegawai')->paginate(10);
        // --> Pagination


        // mengirim data ke view index
        return view('nilaikuliah.index', ['nilaikuliah' => $nilai]);
    }

    public function tambah()
    {
        // memanggil view tambah penggaris
        return view('nilaikuliah.tambah');
    }

    // method untuk insert data ke table penggaris
    public function store(Request $request)
    {
        $request->validate([
            'NRP' => 'required',
            'NilaiAngka' => 'required',
            'SKS' => 'required',
        ]);

        // insert data ke table penggaris
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        // alihkan halaman ke halaman penggaris
        return redirect('/nilaikuliah');
    }
}
