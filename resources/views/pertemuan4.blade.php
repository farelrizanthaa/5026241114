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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <style>
        body {
            margin-top: 10px;
            margin-left: 155px;
            margin-right: 155px;
            font-family: "Inter";
            color: rgb(36, 36, 92);
            overflow-x: hidden;
        }

        .isi {
            margin-top: -60px;
            position: relative;
        }

        .bar-atas {
            position: sticky;
            top: 10px;
            z-index: 999;
        }

        .kiri {
            padding-top: 200px;
            position: relative;
            z-index: 1;
        }

        .kiri h1 {
            font-weight: 600;
        }

        .kiri p{
            color: #3c4ca4;
            font-weight: 450;
        }

        .kanan {
            position: absolute;
            top: 0;
            right: 0;
        }

        .kanan img {
            width: 930px;
            height: 750px;
            transform: translateX(-235px);
        }

        .btn-buy {
            background-color: #212147;
            color: #fff;
            border: none;
            padding: 5px 70px;
            font-size: 0.88rem;
            border-radius: 4px;
            margin-right: 10px;
        }

        .btn-buy:hover {
            background-color: #333;
            color: #fff;
        }

        .btn-purchase {
            background-color: #212147;
            color: #fff;
            border: none;
            padding: 5px 45px;
            font-size: 0.88rem;
            border-radius: 2px;
            margin-right: 25px;
        }

        .btn-purchase:hover {
            background-color: #333;
            color: #fff;
        }

        .btn-learn {
            background-color: transparent;
            color: #212147;
            border: 2px solid #212147;
            padding: 4px 43px;
            font-size: 0.88rem;
            border-radius: 2px;
        }

        .btn-learn:hover {
            background-color: #212147;
            color: #fff;
        }
        .navbar-tengah{
            font-weight: 900;
            color: rgb(50, 50, 125);
            font-size: 22px;
        }
        .navlink{
            color: rgb(73, 73, 139);
            font-weight: 500;
        }
        .tombol-bawah{
            margin-top: 70px;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <div class="bar-atas">
        <div class="row">
            <div class="col-3">
                <div class="row navbar-kiri">
                    <div class="col">
                        <a href="" class="navlink">Home</a>
                    </div>
                    <div class="col">
                        <a href="" class="navlink">About</a>
                    </div>
                    <div class="col">
                        <a href="" class="navlink">Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-6 navbar-tengah">
                <center>Landing</center>
            </div>
            <div class="col-3 navbar-kanan">
                <button type="button" class="btn btn-buy">Buy Now</button>
            </div>
        </div>
    </div>


    <!-- ISI -->
    <div class="isi">
        <div class="row">
            <div class="col-6 kiri">
                <h1>Introduce Your Product Quickly & Effectively</h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean
                    massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus</p>
                <p>mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>

                <div class="tombol-bawah">
                <button type="button" class="btn btn-purchase">Purchase UI Kit</button>
                <button type="button" class="btn btn-learn">Learn More</button>
                </div>
            </div>
            <div class="col-6 kanan">
                <img src="img/designer_1.png" alt="">
            </div>
        </div>
    </div>
</body>

</html>
