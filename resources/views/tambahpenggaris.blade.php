@extends('template')
@section('judul_halaman', 'Data Penggaris')
@section('konten')
    <br> <a href="/penggaris" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Penggaris
        </div>

        <div class="card-body">
            <form action="/penggaris/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merkpenggaris" class="col-sm-2 col-form-label">Merk Penggaris</label>
                    <div class="col-sm-10">
                        <input type="text" name="merkpenggaris" id="merkpenggaris" class="form-control" maxlength="30" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stockpenggaris" class="col-sm-2 col-form-label">Stock Penggaris</label>
                    <div class="col-sm-10">
                        <input type="number" name="stockpenggaris" id="stockpenggaris" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input type="radio" name="tersedia" id="tersedia_ya" class="form-check-input" value="Y" required>
                            <label for="tersedia_ya" class="form-check-label">Ya</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" name="tersedia" id="tersedia_tidak" class="form-check-input" value="N" required>
                            <label for="tersedia_tidak" class="form-check-label">Tidak</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
