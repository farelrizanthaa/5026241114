<!DOCTYPE html>
<html lang="en">

<head>
    <title>Linktree 5026241114</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://db.onlinewebfonts.com/c/90fc7c5e1633bace7675c76b94f742eb?family=Link+Sans" rel="stylesheet">
    <style>
        body {
            background-color: color-mix(in srgb, #780016 93%, white 3%);
            font-family: "link sans";
        }

        .container {
            border-radius: 24px;
            background: linear-gradient(0deg, rgb(120, 0, 22), rgb(196, 21, 0));
            width: 90%;
            max-width: 580px;
            padding: 28px;
            padding-top: 30px;
            margin-top: 40px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        .topbar-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.4);
            background: rgba(255, 255, 255, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin-bottom: 26px;
        }

        .topbar-btn:hover {
            background-color: white;
        }

        .col-kanan {
            display: flex;
            justify-content: flex-end;
        }

        /* Profile Foto & Nama */
        .profile-section {
            text-align: center;
        }

        .profile {
            width: 96px;
        }

        .username {
            color: #ffffff;
            font-weight: 600;
            font-size: 23px;
            margin-top: 10px;
        }

        /* List Button Link */
        .links-section {
            margin-top: 11px;
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin-bottom: 64px;
        }

        .link-btn {
            display: flex;
            align-items: center;
            border: 1px solid #ffffff;
            border-radius: 32px;
            padding: 8px 8px;
            text-decoration: none;
            cursor: pointer;
        }

        .link-btn:hover {
            background-color: rgba(255, 255, 255, 0.088);
            border-radius: 32px;
            text-decoration: none;
        }

        /* (foto) */
        .link-icon {
            width: 48px;
            object-fit: cover;
            flex-shrink: 0;
        }

        /* (text) */
        .link-label {
            flex: 1;
            text-align: center;
            color: #ffffff;
            font-weight: 600;
            font-size: 15px;
            padding: 4px 46px;
            padding-left: 30px;
        }

        /* (titik 3) */
        .link-dots {
            color: rgba(255, 255, 255, 0.475);
            font-size: 16px;
            font-weight: 600;
            flex-shrink: 0;
            background: none;
            border: none;
            cursor: pointer;
            padding: 0 14px;
            padding-bottom: 3px;
        }

        .link-dots:hover {
            background-color: rgba(0, 0, 0, 0.129);
            color: white;
            border-radius: 80%;
        }

        .footer {
            text-align: center;
            margin-top: auto;
            margin-bottom: 40px;
        }

        .footer-btn {
            border: 1px solid white;
            background-color: white;
            border-radius: 32px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            color: black;
            cursor: pointer;
            padding: 11px 15px;
            margin-bottom: 12px;
        }

        .footer-btn:hover {
            text-decoration: none;
            color: black;
        }

        .footer-links {
            margin-top: 3px;
            padding-top: 14px;
            text-align: center;
            font-size: 10px;
            color: white;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
        }

        .footer-links a:hover {
            color: white;
            text-decoration: underline;
        }
    </style>

    <script>
        function showme() {
            // alert("Hallo Selamat Siang");
            Swal.fire({
                title: "Good job!",
                text: "You clicked the button!",
                icon: "success"
            });
            console.log("Ini Baris 172, sudah sampai disini");
            a = 18 + 10;
            console.log("Hasil Penjumlhan : " + a);
            c = 1 * 2 * 3;
            console.log("Hasil Perkalian : " + c);
        }

        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
            // document.getElementById("intro").innerHTML = "Sistem Informasi";
        }

        function changeStyle() {
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }

    </script>
</head>

<body>

    <div class="container">

        <!-- TOPBAR di dalam container -->
        <div class="row">
            <div class="col">
                <button class="topbar-btn">
                    <svg fill="none" height="18" width="18" viewBox="0 0 28 28">
                        <path
                            d="m15.7603 6.829 4.6725-4.80317 2.712 2.77734-4.9012 4.67248h6.8944v3.85565h-6.9271l4.9339 4.7922-2.712 2.7229-6.6983-6.731-6.69829 6.731-2.712-2.712 4.93387-4.7923h-6.92703v-3.86645h6.89436l-4.9012-4.67248 2.712-2.77734 4.67249 4.80317v-6.829h4.0516zm-4.0516 12.0243h4.0516v9.1489h-4.0516z"
                            fill="currentColor" />
                    </svg>
                </button>
            </div>
            <div class="col col-kanan">
                <button class="topbar-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                            d="M216,112v96a16,16,0,0,1-16,16H56a16,16,0,0,1-16-16V112A16,16,0,0,1,56,96H80a8,8,0,0,1,0,16H56v96H200V112H176a8,8,0,0,1,0-16h24A16,16,0,0,1,216,112ZM93.66,69.66,120,43.31V136a8,8,0,0,0,16,0V43.31l26.34,26.35a8,8,0,0,0,11.32-11.32l-40-40a8,8,0,0,0-11.32,0l-40,40A8,8,0,0,0,93.66,69.66Z" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- PROFILE -->
        <div class="profile-section">
            <img class="rounded-circle profile"
                src="https://ugc.production.linktr.ee/OyRUHZjT9i0rO6tBSvPR_28403cTDZB51F3gA?io=true&size=avatar-v3_0"
                alt="">
            <p id="intro" class="username">@pakuwonmallsby</p>
        </div><!-- /PROFILE -->

        <!-- LINK BUTTONS -->
        <div class="links-section">
            <!-- LINK 1 -->
            <a href="https://apps.apple.com/id/app/pakuwon-lifestyle/id1610991049?l=id" class="link-btn" id="tombol"
                target="_blank">
                <img class="link-icon rounded-circle"
                    src="https://ugc.production.linktr.ee/60e34f2a-9b34-4bbf-8352-2792de2536a1_a481135a-864e-42d0-9f03-549af2bfb711-1200x630wa.png?io=true&size=thumbnail-stack_v1_0"
                    alt="">
                <div class="link-label">Pakuwon Lifestyle</div>
                <button class="link-dots" onclick="showme()">⋮</button>
            </a>
            <button class="btn btn-primary" onclick="showme()">Show Me</button>
            <button class="btn btn-primary" onclick="changeText()">Change Text</button>
            <button class="btn btn-primary" onclick="changeStyle()">Change Style</button>
            <!-- LINK 2 -->
            <a href="https://play.google.com/store/apps/details?id=com.tunjunganplaza.mobile&hl=en&gl=US&pli=1"
                class="link-btn" target="_blank">
                <img class="link-icon rounded-circle"
                    src="https://ugc.production.linktr.ee/09a1ad80-016c-4c18-b079-52216dd7b991_f2637198-25d5-49e6-a277-e55cb27cb9c5-F-Pfg3fyafFpeHl2kElxXT3OrI30sTFsuXHPJmy78DnEKdPoeS59wpY6UG5eMvF.png?io=true&size=thumbnail-stack_v1_0"
                    alt="">
                <div class="link-label">Pakuwon Lifestyle - Apps on Google Play</div>
                <button class="link-dots">⋮</button>
            </a>
            <!-- LINK 3 -->
            <a href="https://www.tiktok.com/@pakuwonmallsby" class="link-btn" target="_blank">
                <img class="link-icon rounded-circle"
                    src="https://ugc.production.linktr.ee/fCOcN95cTu9SDTzsIHli_social%20media%20logo-01.jpg?io=true&size=thumbnail-stack_v1_0"
                    alt="">
                <div class="link-label">TikTok</div>
                <button class="link-dots">⋮</button>
            </a>
            <!-- LINK 4 -->
            <a href="https://www.facebook.com/pakuwonmallsby" class="link-btn" target="_blank">
                <img class="link-icon rounded-circle"
                    src="https://ugc.production.linktr.ee/Njd1le8YTnGFTJxiPr9r_social%20media%20logo-02.jpg?io=true&size=thumbnail-stack_v1_0"
                    alt="">
                <div class="link-label">Facebook</div>
                <button class="link-dots">⋮</button>
            </a>
            <!-- LINK 5 -->
            <a href="https://pakuwonmall.com/" class="link-btn" target="_blank">
                <img class="link-icon rounded-circle"
                    src="https://ugc.production.linktr.ee/oEwzWzHfRymBB3YyPE8T_social%20media%20logo-03.jpg?io=true&size=thumbnail-stack_v1_0"
                    alt="">
                <div class="link-label">Website</div>
                <button class="link-dots">⋮</button>
            </a>
        </div> <!-- /LINK BUTTONS -->

        <!-- FOOTER -->
        <div class="footer">
            <div class="footer-btn-box">
                <a href="#" class="footer-btn"><strong>Bergabung dengan pakuwonmallsby di Linktree</strong></a>
            </div>
            <div class="footer-links">
                <a href="#">Cookie Preferences</a> ·
                <a href="#">Report</a> ·
                <a href="#">Privacy</a> ·
                <a href="#">Explore</a>
            </div>
        </div>
    </div>

</body>

</html>
