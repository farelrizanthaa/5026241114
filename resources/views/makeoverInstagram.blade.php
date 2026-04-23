<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>5026241114 - Pull & Bear</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="assetsIG/img/favicon-pnb.ico" rel="icon">
    <link href="assetsIG/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assetsIG/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assetsIG/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assetsIG/vendor/aos/aos.css" rel="stylesheet">
    <link href="assetsIG/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assetsIG/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assetsIG/css/main.css" rel="stylesheet">

    <style>
        .post-card {
            position: relative;
            display: block;
            overflow: hidden;
            border-radius: 8px;
            /* opsional, biar halus */
        }

        /* gambar jadi kotak */
        .post-card img {
            width: 100%;
            aspect-ratio: 1 / 1;
            /* bikin square */
            object-fit: cover;
            /* crop seperti IG */

        }

        /* overlay */
        .post-overlay {
            position: absolute;
            inset: 0;
            /* top:0 right:0 bottom:0 left:0 */
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.3);
            /* transparan gelap */
            opacity: 0;
            transition: 0.3s ease;
            border-radius: 8px;
            border: solid 5px;
        }

        /* icon play */
        .post-overlay i {
            font-size: 40px;
            color: white;
        }

        /* efek hover */
        .post-card:hover .post-overlay {
            opacity: 3;
        }

        .caption-video {
            max-width: 600px;
            text-align: justify;
        }

        .section-video {
            padding-bottom: 0;
        }

        .section-title-video {
            padding-bottom: 0;
        }

        .video-posts p {
            color: rgba(79, 78, 78, 0.826);
        }

        .video-posts p strong {
            color: #847b66;
            font-weight: 900;
        }

        .about {
            margin-bottom: 60px;
        }

        .embed-post {
            display: flex;

        }

        .content-desc {
            justify-content: center;
            margin: auto;
        }

        .about-desc {
            max-width: 600px;
        }

        .about p {
            line-height: 2;
            color: rgba(79, 78, 78, 0.826);
        }

        .section-title h2 {
            position: relative;
            display: inline-block;
            padding-bottom: 20px;
        }

        .section-title h2::before {
            content: "";
            position: absolute;
            width: 200px;
            height: 1px;
            background: #939393;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        /* garis pendek (highlight) */
        .section-title h2::after {
            content: "";
            position: absolute;
            width: 100px;
            height: 4px;
            background: #847b66;
            bottom: -1px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .footer-section {
            background-color: #f8f8f6;
            padding: 50px 0 25px;
            text-align: center;
        }

        /* Logo */
        .footer-logo {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .footer-tagline {
            color: #777;
            font-size: 14px;
            margin-bottom: 30px;
        }

        /* Instagram */
        .footer-social {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 15px;
            color: #1a1a1a;
            text-decoration: none;
            transition: 0.3s;
            margin-left: 10px;
            margin-right: 10px;
        }

        .footer-social i {
            font-size: 25px;
        }

        /* Hover effect */
        .footer-social:hover {
            color: #8a8a72;
            /* accent */
        }

        /* Copyright */
        .footer-copy {
            margin-top: 10px;
            font-size: 12px;
            color: #999;
        }
    </style>

    <!-- =======================================================
  * Template Name: Appland
  * Template URL: https://bootstrapmade.com/free-bootstrap-app-landing-page-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">
    <!-- HEADER NAVBAR -->
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="#" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="assetsIG/img/Pull-Bear-Logo.png" alt="">
                <!-- <h1 class="sitename">Pull & Bear</h1> -->
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <!-- <li><a href="#hero" class="active">Home</a></li> -->
                    <li><a href="#about">About</a></li>
                    <li><a href="#features">Video Posts</a></li>
                    <li><a href="#recent">Recent Posts</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted active" href="#hero">Home</a>

        </div>
    </header> <!-- /HEADER NAVBAR -->


    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container">

            <div class="order-lg-last hero-img" data-aos="zoom-out" data-aos-delay="100">
                <img src="assetsIG/img/hero-pullandbear.jpg" class="img-fluid animated"
                    alt="">
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center text-center" data-aos="fade-in">
                <h2>Pull&Bear</h2>
                <p class="tagline">An ever young community <br>
                    inspire and get inspired at #pullandbearcommunity
                    <br> <strong>
                        <div class="sub-tagline">Get the looks ⬇️</div>
                    </strong>
                </p>
                <div class="d-flex justify-content-center justify-content-md-start">
                    <a href="https://pullandbear.com" class="download-btn"> <span>pullandbear.com</span></a>
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>About Us</h2>
            <p><strong>AN EVER YOUNG COMMUNITY</strong></p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-6 content content-desc" data-aos="fade-up" data-aos-delay="100">
                    <div class="about-desc">
                        <p>
                            Pull&Bear started up in 1991 with a clear international mission and with the intention of
                            dressing young people who are engaged with their environment, who live in the community and
                            relate to each other. Young people who have a casual dress sense, who shun stereotypes and
                            who
                            want to feel good in whatever they are wearing. To meet their needs, Pull&Bear takes the
                            latest
                            international trends, mixing them with the influences that are seen on the street and in the
                            most fashionable clubs, and reworks them according to their style thus turning them into
                            comfortable and easy to wear garments.
                        </p>

                        <p>Pull&Bear evolves at the same pace as its customer, always watching out for new technologies,
                            social movements and the latest artistic or musical trends. All of this can be seen
                            reflected
                            not only in its designs but also in stores. Inspired by the legendary Californian city of
                            Palm
                            Springs, the product lines are constantly being updated. All stores worldwide receive new
                            merchandise twice a week.</p>
                        <p>As part of the Inditex Group (Zara, Pull&Bear, Massimo Dutti, Bershka, Stradivarius, Oysho
                            and
                            Zara Home), Pull&Bear is present in 76 markets, with a network of over 970 physical stores,
                            as
                            well as an online store.</p>
                        <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-6 embed-post d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <!-- embed 1 -->
                    <blockquote class="instagram-media"
                        data-instgrm-permalink="https://www.instagram.com/p/DWW5oCSDOvz/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="
                        data-instgrm-version="14">
                        <div>
                            <a href="https://www.instagram.com/p/DWW5oCSDOvz/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="
                                target="_blank">View this post on Instagram</a>
                        </div>
                    </blockquote><!-- End Embed 1 -->
                </div>

            </div>

        </div>
    </section><!-- /About Section -->

    <!-- Features Section -->
    <section id="features" class="features section-video">

        <!-- Section Title -->
        <div class="container section-title section-title-video" data-aos="fade-up">
            <h2>Video Posts</h2>
            <p>Stories in motion - where style meets real life.</p>
        </div><!-- End Section Title -->

    </section><!-- /Features Section -->

    <!-- Feature Details Section -->
    <section id="feature-details" class="feature-details video-posts section">

        <div class="container">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <a href="https://www.instagram.com/reel/DXQ_ZimiM0R/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="
                        target="_blank" class="post-card">
                        <img src="assetsIG/img/cover-video1.png" alt="Video Post 1">
                        <div class="post-overlay">
                            <i class="bi bi-play-circle-fill"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Meet @zsongoclub, a collective of creatives bringing together artists, models, actors and
                        singers.</h3>
                    <p class="fst-italic caption-video">
                        Built as a natural meeting point, Zsongo stands for family — a space that came together
                        organically through connection, collaboration and shared roots.
                        <br>
                        <br>
                        It’s a way of working and growing together, where moving as a group matters more than doing it
                        alone.
                        <br>
                        <br>
                        <strong>All the looks they wear are from STWD.</strong>
                    </p>
                </div>
            </div><!-- Features Item -->
            <hr data-aos="zoom-out" data-aos-delay="100">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                    data-aos-delay="100">
                    <a href="https://www.instagram.com/reel/DW3PFAajK4Z/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="
                        target="_blank" class="post-card">
                        <img src="assetsIG/img/cover-video2.png" alt="Video Post 2">
                        <div class="post-overlay">
                            <i class="bi bi-play-circle-fill"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="200">
                    <h3>Meet @zen_pk_official , a professional parkour athlete from Japan.</h3>
                    <p class="fst-italic caption-video">
                        For Zen, parkour goes beyond sport — it’s a way of rethinking the world around him. What others
                        might see as a wall becomes a possibility, a new way forward. Through movement and perspective,
                        everyday spaces transform into part of an ongoing journey.
                        <br>
                        <br>
                        <strong>All the looks he wears are from STWD.</strong>
                    </p>
                </div>
            </div><!-- Features Item -->
            <hr data-aos="zoom-out" data-aos-delay="100">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                    <a href="https://www.instagram.com/reel/DWXAIj8DJSh/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="
                        target="_blank" class="post-card">
                        <img src="assetsIG/img/cover-video3.png" alt="Video Post 3">
                        <div class="post-overlay">
                            <i class="bi bi-play-circle-fill"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
                    <h3>Copenhagen, edited
                        Curated by @frejawewer</h3>
                    <p class="fst-italic caption-video">
                        A dinner with friends, a special selection of pieces and Copenhagen highlights through Freja’s
                        lens.
                    </p>
                </div>
            </div><!-- Features Item -->
            <hr data-aos="zoom-out" data-aos-delay="100">

            <div class="row gy-4 align-items-center features-item">
                <div class="col-md-5 order-1 order-md-2 d-flex align-items-center" data-aos="zoom-out"
                    data-aos-delay="100">
                    <a href="https://www.instagram.com/reel/DO0yyYdjO1J/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="
                        target="_blank" class="post-card">
                        <img src="assetsIG/img/cover-video4.png" alt="Video Post 4">
                        <div class="post-overlay">
                            <i class="bi bi-play-circle-fill"></i>
                        </div>
                    </a>
                </div>
                <div class="col-md-7 order-2 order-md-1" data-aos="fade-up" data-aos-delay="100">
                    <h3>Meet @marie.lueder, </h3>
                    <p class="fst-italic caption-video">
                        The <strong>#BFCNEWGEN</strong> designer who has presented the new capsule collection
                        alongside Pull&Bear under the ‘Canvas for Creativity’ initiative.
                        <br>
                        <br>
                        Her work focuses on transforming historical references into futuristic forms, creating garments
                        that balance protection and performance.
                        <br><br>
                        <strong>@britishfashioncouncil #NEWGEN #LFW #LondonFashionWeek</strong>
                    </p>
                </div>
            </div><!-- Features Item -->
            <hr data-aos="zoom-out" data-aos-delay="100">

        </div>

    </section><!-- /Feature Details Section -->

    <!-- Recent Section -->
    <section id="recent" class="features section recent">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2 class="title-section-title">Recent Posts</h2>
            <p>Stay updated with our latest looks and inspirations.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-5">
                <!-- Col Kiri -->
                <div class="col-xl-6 d-flex flex-column align-items-center" data-aos="fade-right" data-aos-delay="100">
                    <!-- Carousel -->
                    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselId" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#carouselId" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carouselId" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#carouselId" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#carouselId" data-bs-slide-to="4"></button>
                            <button type="button" data-bs-target="#carouselId" data-bs-slide-to="5"></button>
                            <button type="button" data-bs-target="#carouselId" data-bs-slide-to="6"></button>
                        </div>

                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assetsIG/img/pullandbear-post1/pullandbear_1776420246_3877216400129672186_183326113_1.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post1/pullandbear_1776420246_3877216400440096874_183326113_2.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post1/pullandbear_1776420246_3877216400532315103_183326113_3.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post1/pullandbear_1776420246_3877216402151362997_183326113_4.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post1/pullandbear_1776420246_3877216402730133700_183326113_5.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post1/pullandbear_1776420246_3877216403904550558_183326113_6.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post1/pullandbear_1776420246_3877216405364193700_183326113_7.jpg"
                                    class="d-block w-100">
                            </div>
                        </div>

                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                    <!-- Caption -->
                    <p class="caption caption-recent">Smart Resort – New SS26 Collection</p>
                </div>
                <!-- Col Kanan -->
                <div class="col-xl-6 d-flex flex-column align-items-center" data-aos="fade-left" data-aos-delay="100">
                    <!-- Carousel -->
                    <div id="carouselId2" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselId2" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#carouselId2" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carouselId2" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#carouselId2" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#carouselId2" data-bs-slide-to="4"></button>
                        </div>

                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assetsIG/img/pullandbear-post2/pullandbear_1776333664_3876487370384361516_183326113_1.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post2/pullandbear_1776333664_3876487372229883005_183326113_2.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post2/pullandbear_1776333664_3876487373421055301_183326113_3.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post2/pullandbear_1776333664_3876487374469658037_183326113_4.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post2/pullandbear_1776333664_3876487375342049705_183326113_5.jpg"
                                    class="d-block w-100">
                            </div>
                        </div>

                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId2"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId2"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                    <!-- Caption -->
                    <p class="caption caption-recent">DRESSED UP CAPSULE SS26
                        <br>New In
                    </p>
                </div>
            </div>
            <hr>
            <br>

            <!-- Carousel Line 2 -->
            <div class="row gy-5">
                <!-- Col Kiri -->
                <div class="col-xl-6 d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <!-- Carousel -->
                    <div id="carouselId3" class="carousel carousel2-1 slide" data-bs-ride="carousel">

                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselId3" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#carouselId3" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carouselId3" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#carouselId3" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#carouselId3" data-bs-slide-to="4"></button>
                            <button type="button" data-bs-target="#carouselId3" data-bs-slide-to="5"></button>
                            <button type="button" data-bs-target="#carouselId3" data-bs-slide-to="6"></button>
                        </div>

                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assetsIG/img/pullandbear-post3/pullandbear_1776074467_3874313788032121881_183326113_1.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post3/pullandbear_1776074467_3874313789835687170_183326113_2.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post3/pullandbear_1776074467_3874313791404353039_183326113_3.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post3/pullandbear_1776074467_3874313791488234456_183326113_4.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post3/pullandbear_1776074467_3874313793358870680_183326113_5.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post3/pullandbear_1776074467_3874313794625582449_183326113_6.jpg"
                                    class="d-block w-100">
                            </div>
                        </div>

                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId3"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId3"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                    <!-- Caption -->
                    <p class="caption caption-recent">New Collection SS26</p>
                </div>

                <!-- Col Kanan -->
                <div class="col-xl-6 d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
                    <!-- Carousel -->
                    <div id="carouselId4" class="carousel slide" data-bs-ride="carousel">
                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselId4" data-bs-slide-to="0"
                                class="active"></button>
                            <button type="button" data-bs-target="#carouselId4" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#carouselId4" data-bs-slide-to="2"></button>
                            <button type="button" data-bs-target="#carouselId4" data-bs-slide-to="3"></button>
                            <button type="button" data-bs-target="#carouselId4" data-bs-slide-to="4"></button>
                            <button type="button" data-bs-target="#carouselId4" data-bs-slide-to="5"></button>
                            <button type="button" data-bs-target="#carouselId4" data-bs-slide-to="6"></button>
                            <button type="button" data-bs-target="#carouselId4" data-bs-slide-to="7"></button>
                        </div>

                        <!-- Slides -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="assetsIG/img/pullandbear-post4/pullandbear_1775894424_3872805369026477405_183326113_2.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post4/pullandbear_1775894424_3872805369571705743_183326113_1.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post4/pullandbear_1775894424_3872805369781484233_183326113_3.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post4/pullandbear_1775894424_3872805372180588969_183326113_5.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post4/pullandbear_1775894424_3872805372331582289_183326113_4.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post4/pullandbear_1775894424_3872805373472454804_183326113_6.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post4/pullandbear_1775894424_3872805374445497287_183326113_7.jpg"
                                    class="d-block w-100">
                            </div>
                            <div class="carousel-item">
                                <img src="assetsIG/img/pullandbear-post4/pullandbear_1775894424_3872805375477288457_183326113_8.jpg"
                                    class="d-block w-100">
                            </div>
                        </div>

                        <!-- Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId4"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselId4"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                    <!-- Caption -->
                    <p class="caption caption-recent">(SS26) THE LINEN EDIT
                        <br>New Collection
                    </p>
                </div>
            </div>
            <hr>
        </div>

    </section><!-- /Features Section -->




    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"> <i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assetsIG/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assetsIG/vendor/php-email-form/validate.js"></script>
    <script src="assetsIG/vendor/aos/aos.js"></script>
    <script src="assetsIG/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assetsIG/vendor/glightbox/js/glightbox.min.js"></script>

    <!-- Main JS File -->
    <script src="assetsIG/js/main.js"></script>

    <script async src="//www.instagram.com/embed.js"></script>
</body>

<footer class="footer-section">
    <div class="container text-center">
        <h3 class="footer-logo">Pull&Bear</h3>
        <p class="footer-tagline">Stay young. Stay inspired.</p>

        <a href="https://www.instagram.com/pullandbear/" target="_blank" class="footer-social">
            <i class="bi bi-instagram"></i>
        </a>
        <a href="https://www.pullandbear.com" target="_blank" class="footer-social">
            <i class="bi bi-globe"></i>
        </a>
        <p class="footer-copy">
            © 2026 Pull&Bear
        </p>

    </div>
</footer>
</footer>

</html>
