<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font -->
     <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;900&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet"/>

    <style>
        body{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: #F8F8F0;
        }

        .navbar {
            background: linear-gradient(135deg, #1A1008, #3A1A08);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .navbar a {
            color: #F8F8F0;
        }

        .navbar a:hover {
            color: #F4B400;
        }
        .home {
            text-align: center;
            padding-top: 50px;
            padding-bottom: 50px;
            background: linear-gradient(135deg, #1A1008, #3A1A08);
            color: #F8F8F0;
        }
        .home h1{
            font-family:'Playfair Display';
            font-size: 75px;
        }
        .motto {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: #ffffffaa;
        }
        .judul {
            padding-top: 30px;
            color: #6A4E4D;
        }
        /* Box utama */
        .kotak_pemesanan {
            background-color: #6A4E4D;
            border-radius: 16px;
            padding: 20px;
            margin: 25px;
            box-shadow: 16px 15px 20px rgba(22, 15, 8, 0.15);
        }
        /* Sidebar kanan */
        .kotak_kanan {
            background-color: #F8F8F0;
            border-radius: 16px;
            padding: 20px;
            margin: 10px;
            margin-top: 20px;
            box-shadow: 3px 3px 8px rgba(26, 16, 8, 0.15);
            position: sticky;
            top: 80px;
            border: #C03227 solid;
        }
        .kotak_kanan:hover {
            box-shadow: 3px 3px 8px rgba(0, 0, 0, 0.3);
        }
        /* Card dalam */
        .box_form {
            background-color: #FFFFFF;
            border-radius: 16px;
            padding: 35px;
            margin: 10px;
            margin-bottom: 22px;
            box-shadow: 10px 8px 8px rgba(26, 16, 8, 0.06);
            border: #C03227 solid;
        }
        .box_form:hover {
            box-shadow: 8px 20px 15px rgba(26, 18, 18, 0.2);
            transform: translateY(-2px);
        }
        .box_choice {
            background-color: #F8F8F0;
            margin-right: 25px;
            margin-bottom: 20px;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            border: 1px solid #eee;
            transition: 0.15s;
        }
        .box_choice:hover {
            transform: translateY(-2px);
            border-color: #F4B400;
            box-shadow: 1px 2px 12px rgba(0, 0, 0, 0.15);
        }
        .btn-primary {
            background-color: #C03227;
            border: none;
        }
        .btn-primary:hover {
            background-color: #a52820;
        }
        .text-secondary {
            color: #8a7a79;
        }
        .klarifikasi {
            margin-left: 13px;
        }
        .name{
            color: #f8f8f0;
            font-family: 'Playfair Display';
            font-size: 150%;
        }
        .sub_name{
         color: #F4B400;
        }
        .identitas{
            color: #F8F8F0;
        }
        .kebab{
            color: #F4B400;
            font-style: italic;
        }
    </style>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-sm">
        <div class="row">
            <div class="col identitas">
                Ahmad Maulana Al Farel Rizantha
                <div class="row">
                    <div class="col">
                        5026241114
                    </div>
                </div>
            </div>
        </div>

        <div class="ml-auto name">
            <strong>Yoke<span class="sub_name">Babe</span></strong>
        </div>
    </nav>

    <div class="home">
        <h1>Pesan <span class="kebab"> Kebab<br>Favoritmu </span>Sekarang!</h1>
        <p class="motto">Freshly cooked, delivered to your door - fast & hot.</p>
    </div>

    <div class="container-fluid">
        <div class="row">

            <!-- Bagian Kiri -->
            <div class="col-8">
                <div class="pemesanan">
                    <h3 class="judul text-center">FORM PEMESANAN KEBAB</h1>
                </div>

                <!-- Form Pemesanan -->
                <div class="kotak_pemesanan">
                    <!-- Box Data Pemesan -->
                    <div class="box_form">
                        <h5>Data Pemesan</h5>
                        <p class="text-secondary">Isi informasi dirimu untuk memproses pesanan</p>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nama_lengkap">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="e.g. Farel Rizantha"
                                        aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="Nomor_HP">Nomor HP/WhatsApp</label>
                                    <input type="text" class="form-control" placeholder="08xxxxxxxxxx"
                                        aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="switch1">
                            <label class="custom-control-label" for="switch1">Pesan untuk orang lain</label>
                        </div>
                    </div>
                    <!-- Box Menu Pesanan -->
                    <div class="box_form">
                        <h5>Pilihan Topping Kebab</h5>
                        <p class="text-secondary">Pilih isi topping kebab favoritmu!</p>
                        <hr>
                        <!-- Row Col Topping -->
                        <div class="topping">
                            <div class="row">
                                <div class="col-2 box_choice">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Beef"
                                            name="pilihan_topping">
                                        <label class="custom-control-label" for="Beef">Beef</label>
                                    </div>
                                </div>
                                <div class="col-2 box_choice">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="lamb"
                                            name="pilihan_topping">
                                        <label class="custom-control-label" for="lamb">Lamb</label>
                                    </div>
                                </div>
                                <div class="col-2 box_choice">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Chicken"
                                            name="pilihan_topping">
                                        <label class="custom-control-label" for="Chicken">Chicken</label>
                                    </div>
                                </div>
                                <div class="col-2 box_choice">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Potato"
                                            name="pilihan_topping">
                                        <label class="custom-control-label" for="Potato">Potato</label>
                                    </div>
                                </div>
                                <div class="col-2 box_choice">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Egg"
                                            name="pilihan_topping">
                                        <label class="custom-control-label" for="Egg">Egg</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2 box_choice">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Cheese"
                                            name="pilihan_topping">
                                        <label class="custom-control-label" for="Cheese">Cheese</label>
                                    </div>
                                </div>
                                <div class="col-2 box_choice">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Mozarella"
                                            name="pilihan_topping">
                                        <label class="custom-control-label" for="Mozarella">Mozarella</label>
                                    </div>
                                </div>
                                <div class="col-2 box_choice">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Ketchup"
                                            name="pilihan_topping">
                                        <label class="custom-control-label" for="Ketchup">Ketchup</label>
                                    </div>
                                </div>
                                <div class="col-2 box_choice">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Vegetables"
                                            name="pilihan_topping">
                                        <label class="custom-control-label" for="Vegetables">Vegetables</label>
                                    </div>
                                </div>
                                <div class="col-2 box_choice">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Mushroom"
                                            name="pilihan_topping">
                                        <label class="custom-control-label" for="Mushroom">Mushroom</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="preferensi">
                            <div class="row">
                                <!-- Col Ukuran Porsi -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Ukuran Porsi</label>
                                        <select class="custom-select" name="" id="">
                                            <option disabled selected>Select one</option>
                                            <option value="Jumbo">Jumbo</option>
                                            <option value="Regular">Regular</option>
                                            <option value="Diet Portion">Diet Portion</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Col Level Kepedasan -->
                                <div class="col">
                                    <form>
                                        <label for="level_pedas">Level Pedas</label>
                                        <input type="range" class="custom-range" id="level_pedas" name="level_pedas"
                                            min="0" max="5">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Metode Pengiriman -->
                    <div class="box_form">
                        <h5>Metode Pengiriman</h5>
                        <p class="text-secondary">Pilih cara kamu menerima pesanan</p>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="box_choice">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="Delivery"
                                            name="metode_pengiriman" value="Delivery">
                                        <label class="custom-control-label" for="Delivery">Delivery</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box_choice">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="pick_up"
                                            name="metode_pengiriman" value="pick_up">
                                        <label class="custom-control-label" for="pick_up">Pick Up</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box_choice">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="dine_in"
                                            name="metode_pengiriman" value="dine_in">
                                        <label class="custom-control-label" for="dine_in">Dine In</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Alamat Pengiriman -->
                    <div class="box_form">
                        <h5>Alamat Pengiriman</h5>
                        <p class="text-secondary">Pastikan alamat pengiriman sudah benar sebelum submit</p>
                        <hr>
                        <!-- Alamat -->
                        <div class="form-group">
                            <label for="alamat_lengkap">Alamat Lengkap</label>
                            <input type="text" class="form-control" placeholder="Jl. Nama Jalan, No. Rumah, RT/RW"
                                aria-describedby="helpId">
                        </div>
                        <!-- Kecamatan -->
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Kecamatan</label>
                                    <select class="custom-select">
                                        <option disabled selected>Select one</option>
                                        <option value="">Simokerto</option>
                                        <option value="">Tegalsari</option>
                                        <option value="">Gubeng</option>
                                        <option value="">Gunung Anyar</option>
                                        <option value="">Mulyorejo</option>
                                        <option value="">Rungkut</option>
                                        <option value="">Sukolilo</option>
                                        <option value="">Tenggilis Mejoyo</option>
                                        <option value="">Benowo</option>
                                        <option value="">Sukomanunggal</option>
                                        <option value="">Kenjeran</option>
                                        <option value="">Semampir</option>
                                        <option value="">Wonokromo</option>
                                        <option value="">Wonocolo</option>
                                        <option value="">Wiyung</option>
                                        <option value="">Dukuh Pakis</option>
                                        <option value="">Karang Pilang</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <label for="foto_lokasi">Foto Lokasi <small class="text-muted">(Opsional)</small>
                                </label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="foto_lokasi">
                                    <label class="custom-file-label" for="foto_lokasi">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Metode Pembayaran -->
                    <div class="box_form">
                        <h5>Metode Pembayaran</h5>
                        <p class="text-secondary">Pilih metode pembayaran yang kamu inginkan</p>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="box_choice">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="Cash"
                                            name="metode_pembayaran" value="Cash">
                                        <label class="custom-control-label" for="Cash">Cash</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box_choice">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="transfer_bank"
                                            name="metode_pembayaran" value="transfer_bank">
                                        <label class="custom-control-label" for="transfer_bank">Transfer Bank</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="box_choice">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="ewallet"
                                            name="metode_pembayaran" value="ewallet">
                                        <label class="custom-control-label" for="ewallet">E-Wallet</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Catatan Tambahan -->
                    <div class="box_form">
                        <h5>Catatan Tambahan</h5>
                        <p class="text-secondary">Ada permintaan khusus ke dapur atau kurir?</p>
                        <div class="catatan">
                            <label for="catatan_tambahan">Catatan :</label>
                            <textarea class="form-control" rows="3" id="catatan_tambahan"
                                placeholder="e.g. Letakkan di pagar, potong bagi 2, tambah tisu, dll"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bagian Kanan -->
            <div class="col-4">
                <div class="kotak_kanan">
                    <center>
                        <h5>Ringkasan Pesanan</h5>
                    </center>
                    <div class="box_form">
                        <h6>Detail Pesanan</h6>
                        <p class="text-muted">Belum ada menu dipilih...</p>
                        <hr>
                        <strong>
                            <p>Total Estimasi : Rp0,00</p>
                        </strong>
                    </div>
                    <p class="text-secondary klarifikasi">Harga belum termasuk ongkos kirim. Tim kami akan konfirmasi
                        via WhatsApp.</p>
                    <button type="button" name="" id="" class="btn btn-primary btn-lg btn-block">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
