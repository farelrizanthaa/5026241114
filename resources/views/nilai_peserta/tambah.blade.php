@extends('template')
@section('judul_halaman', 'Kode Soal nilai_peserta')
@section('konten')
    <br> <a href="/eas" class="btn btn-secondary mb-4">Kembali</a>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="card">
        <div class="card-header">
            Form Tambah Data
        </div>

        <div class="card-body">
            <form action="/eas/store" method="post" onsubmit="return validasiForm()">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nopeserta" class="col-sm-2 col-form-label">No Peserta</label>
                    <div class="col-sm-10">
                        <input type="text" name="nopeserta" id="nopeserta" class="form-control" maxlength="5" >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaiteori" class="col-sm-2 col-form-label">Nilai Teori</label>
                    <div class="col-sm-10">
                        <input type="text" name="nilaiteori" id="nilaiteori" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaipraktek" class="col-sm-2 col-form-label">Nilai Praktek</label>
                    <div class="col-sm-10">
                        <input type="text" name="nilaipraktek" id="nilaipraktek" class="form-control">
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

    <script>
        function validasiForm() {
            let nopeserta = document.getElementById('nopeserta').value.trim();
            let nilaiteori = document.getElementById('nilaiteori').value.trim();
            let nilaipraktek = document.getElementById('nilaipraktek').value.trim();

            if (nopeserta === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "No peserta wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nopeserta.length > 5) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "No peserta maksimal 10 karakter",
                    icon: "error"
                });
                return false;
            }

            if (nilaiteori === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nilai teori wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nilaipraktek === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nilai praktek wajib diisi",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
