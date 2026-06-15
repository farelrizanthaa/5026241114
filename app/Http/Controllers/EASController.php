<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class EASController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilai_peserta')->get();
        return view('nilai_peserta.index', compact('nilai'));
    }

    public function tambah()
    {
        return view('nilai_peserta.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nopeserta' => 'required|string|max:5',
            'nilaiteori' => 'required|integer',
            'nilaipraktek' => 'required|integer',
        ]);

        DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek,
        ]);

        return redirect('/eas') ->with('success', 'Data Nilai Peserta berhasil ditambahkan.');
    }
}
