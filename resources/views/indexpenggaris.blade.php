@extends('template')
@section('judul_halaman', 'Data Penggaris')
@section('konten')
    <p>
        <br><a href="/penggaris/tambah" class="btn btn-primary">Tambah Penggaris Baru</a>
    </p>

    <p>Cari Data Penggaris :</p>
    <form action="/penggaris/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Penggaris .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>

    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Penggaris</th>
            <th>Merk Penggaris</th>
            <th>Stock Penggaris</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($penggaris as $p)
            <tr>
                <td>{{ $p->kodepenggaris }}</td>
                <td>{{ $p->merkpenggaris }}</td>
                <td>{{ $p->stockpenggaris }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>
                    <a href="/penggaris/edit/{{ $p->kodepenggaris }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/penggaris/hapus/{{ $p->kodepenggaris }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $penggaris->links() }}
@endsection
