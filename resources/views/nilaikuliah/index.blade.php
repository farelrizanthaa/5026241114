@extends('template')
@section('judul_halaman', 'Data Nilai Kuliah')
@section('konten')
    <p>
        <br><a href="/nilaikuliah/tambah" class="btn btn-primary">Tambah Nilai</a>
    </p>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if($n->NilaiAngka >= 81)
                    <p>A</p>
                    @elseif($n->NilaiAngka >= 61)
                    <p>B</p>
                    @elseif($n->NilaiAngka >= 41)
                    <p>C</p>
                    @else
                    <p>D</p>
                    @endif
                </td>
                <td>{{ $n->NilaiAngka * $n->SKS }}</td>
            </tr>
        @endforeach
    </table>
@endsection
