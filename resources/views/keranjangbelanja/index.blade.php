@extends('template')
@section('judul_halaman', 'Data Keranjang Belanja')
@section('konten')
    <p>
        <br><a href="/keranjangbelanja/tambah" class="btn btn-primary">Beli</a>
    </p>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $b)
            <tr>
                <td>{{ $b->ID }}</td>
                <td>{{ $b->KodeBarang }}</td>
                <td>{{ $b->Jumlah }}</td>
                <td>Rp{{ number_format($b->Harga, 0, ',', '.') }}</td>
                <td>Rp{{ number_format($b->Jumlah * $b->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/hapus/{{ $b->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
