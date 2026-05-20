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

    <style>
        h1 {
            margin-top: 20px;
            color: #c084fc;
            text-align: center;
            text-decoration: underline;
        }

        .section {
            margin: 30px auto;
            width: 80%;
            padding: 20px;
            border: 1px solid #6d28d9;
            border-radius: 10px;
            box-shadow: 0 0 5px #6d28d9;
            text-align: center
        }

        .btn {
            display: inline-block;
            margin: 8px;
            padding: 10px 15px;
            background: #6d28d9;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #a855f7;
            box-shadow: 0 0 10px #c084fc;
        }

        .grid {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .column {
            width: 45%;
        }
    </style>
</head>

<body>
    <h1>NAVIGATION MENU</h1>
    <!-- Welcome -->
    <div class="section">
        <h2>Welcome</h2>
        <a href="/welcome" class="btn" target="_blank">Go to Welcome</a>
    </div>
    <!-- Dosen Controller -->
    <div class="section">
        <h2>DosenController</h2>
        <a href="/dosen" class="btn" target="_blank">Index</a>
        <a href="/biodata" class="btn" target="_blank">Biodata</a>
    </div>
    <!-- Page Controller -->
    <div class="section">
        <h2>PageController</h2>
        <div class="row">

            <div class="col">
                <h3>FE5026241114</h3>
                <a href="/customforms_orderonline" class="btn" target="_blank">Custom Form</a>
                <a href="/intro" class="btn" target="_blank">Intro</a>
                <a href="/news" class="btn" target="_blank">News</a>
                <a href="/pertemuan4" class="btn" target="_blank">Pertemuan 4</a>
                <a href="/responsive" class="btn" target="_blank">Responsive</a>
                <a href="/template" class="btn" target="_blank">Template</a>
            </div>

            <div class="column">
                <h3>farelrizantha.github.io</h3>
                <a href="/index" class="btn" target="_blank">Index</a>
                <a href="/linktree" class="btn" target="_blank">Linktree</a>
                <a href="/makeover-instagram" class="btn" target="_blank">Makeover IG</a>
                <a href="/pertemuan5" class="btn" target="_blank">Pertemuan 5</a>
            </div>
        </div>
    </div>

</body>

</html>
