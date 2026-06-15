@extends('template')
@section('judul_halaman', 'Kode Soal nilai_peserta')
@section('konten')

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <p>
        <br><a href="/eas/tambah" class="btn btn-primary">Tambah Data</a>
    </p>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>No Peserta</th>
            <th>Nilai Teori</th>
            <th>Nilai Praktek</th>
            <th>Rata Rata</th>
            <th>Status</th>
        </tr>
        @foreach ($nilai as $n)
            @if (($n->nilaiteori + $n->nilaipraktek) / 2 >= 75)
                <tr>
                    <td style="background-color: green; color: white;">{{ $n->id }}</td>
                    <td style="background-color: green; color: white;">{{ $n->nopeserta }}</td>
                    <td style="background-color: green; color: white;">{{ $n->nilaiteori }}</td>
                    <td style="background-color: green; color: white;">{{ $n->nilaipraktek }}</td>
                    <td style="background-color: green; color: white;">{{ ($n->nilaiteori + $n->nilaipraktek) / 2 }}</td>
                    <td style="background-color: green; color: white;">Lulus</td>
                <tr></tr>
            @elseif(($n->nilaiteori + $n->nilaipraktek) / 2 < 75)
                <tr style="background-color: red; color: white;">
                    <td style="background-color: red; color: white;">{{ $n->id }}</td>
                    <td style="background-color: red; color: white;">{{ $n->nopeserta }}</td>
                    <td style="background-color: red; color: white;">{{ $n->nilaiteori }}</td>
                    <td style="background-color: red; color: white;">{{ $n->nilaipraktek }}</td>
                    <td style="background-color: red; color: white;">{{ ($n->nilaiteori + $n->nilaipraktek) / 2 }}</td>
                    <td style="background-color: red; color: white;">Gagal</td>
                <tr></tr>
            @endif
        @endforeach
    </table>
@endsection
