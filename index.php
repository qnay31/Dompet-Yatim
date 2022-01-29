<?php

require 'fungsi.php';

if (isset($_POST["transfer"]) ) {

    if(donasi($_POST) > 0 ) {
        echo "<script>
                alert('Harap di transfer dalam waktu 24jam');
                document.location.href = 'bank/bri.php';
            </script>";

    
    } else {

        echo mysqli_error($conn);

    }

}

if (isset($_POST["transfer2"]) ) {

    if(donasi2($_POST) > 0 ) {
        echo "<script>
                alert('Harap di transfer dalam waktu 24jam');
                document.location.href = 'bank/bni.php';
            </script>";

    } else {

        echo mysqli_error($conn);
    }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Website &mdash; Dompet Yatim Piatu Amanah</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hp.css">

    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css" />
    <!-- // Add the new slick-theme.css if you want the default styling -->
    <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick-theme.css" />

    <!-- logo -->
    <link rel="icon" href="images/logo/dypa.png">
    <style>
    .slick-prev::before,
    .slick-next::before {
        color: white !important;
        opacity: 1 !important;
    }

    @media (min-width: 992px) {

        .slick-prev,
        .slick-next {
            width: 2rem !important;
        }

        .slick-prev::before,
        .slick-next::before {
            font-size: 60px !important;
        }

        .slick-prev {
            margin-left: 4rem;
            z-index: 999;
        }

        .slick-next {
            margin-right: 6rem;
        }

        .slick-dots {
            bottom: 0 !important;
        }
    }
    </style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

            <div class="container-fluid">
                <div class="d-flex align-items-center"> <img src="images/logo/logo.png" style="width: 4rem">
                    <div class="site-logo mr-auto w-25"><a href="index.html">Yayasan Dompet Yatim <br> Piatu Amanah</a>
                    </div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#home-section" class="nav-link">Beranda</a></li>
                                <li><a href="#courses-section" class="nav-link">Aktivitas</a></li>
                                <li><a href="#programs-section" class="nav-link">Program</a></li>
                                <li><a href="#teachers-section" class="nav-link">Tentang</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul
                                class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <li class="cta"><a href="#contact-section" class="nav-link"><span>Kontak Kami</span></a>
                                </li>
                            </ul>
                        </nav>
                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>

        </header>

        <div class="intro-section" id="home-section">
            <div class="lazy">
                <div>
                    <div class="slide-1" style="background-image: url('images/background/top-bg.jpg');"
                        data-stellar-background-ratio="0.5">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-4">
                                            <h1 data-aos="fade-up" data-aos-delay="100">Santunan Yatim</h1>
                                            <p class="mb-4" data-aos="fade-up" data-aos-delay="200"
                                                style="color: white">Yayasan Dompet Yatim Piatu
                                                Amanah sangat intensif untuk memberikan bantuan berupa santunan
                                                anak yatim yang di berikan untuk kebutuhan sehari-hari mereka</p>

                                        </div>

                                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                            <form action="" method="post" class="form-box"
                                                onsubmit="return validasi_input(this)">
                                                <h3 class="h4 text-black mb-4">Bantu Mereka</h3>
                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="hidden" name="kategori" value="Santunan Yatim">
                                                        <input type="text" id="name" name="nama" required
                                                            oninvalid="this.setCustomValidity('Masukkan Nama Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="name">Nama Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="hp" id="hp"
                                                            onkeypress="return hanyaAngka(event)" maxlength="13"
                                                            required
                                                            oninvalid="this.setCustomValidity('Masukkan No HP')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="hp">No. HP/WA:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="donasi" id="donasi" required
                                                            oninvalid="this.setCustomValidity('Masukkan Donasi Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="donasi">Donasi Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="via-bank">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="card">
                                                                <div class="card-header" id="headingOne">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link btn-block text-left"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseOne"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne">
                                                                            <img src="images/bank/bri.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Rakyat Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>

                                                                <div id="collapseOne" class="collapse"
                                                                    aria-labelledby="headingOne"
                                                                    data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek"
                                                                            value="0523 0100 0259 302">
                                                                        <input type="hidden" name="nama-rek"
                                                                            value="Yayasan Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="headingTwo">
                                                                    <h2 class="mb-0">
                                                                        <button
                                                                            class="btn btn-link btn-block text-left collapsed"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseTwo"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseTwo">
                                                                            <img src="images/bank/bni.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Negara Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseTwo" class="collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-parent="#accordionExample">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek2"
                                                                            value="946 713 835">
                                                                        <input type="hidden" name="nama-rek2"
                                                                            value="Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer2"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="slide-1" style="background-image: url('images/background/bg.jpg');"
                        data-stellar-background-ratio="0.5">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-4">
                                            <h1 data-aos="fade-up" data-aos-delay="100">Bakti Sosial</h1>
                                            <p class="mb-4" data-aos="fade-up" data-aos-delay="200"
                                                style="color: white">Kegiatan ini mengajarkan kita untuk saling peduli
                                                mewujudkan rasa cinta, kasih dan saling menolong untuk mereka yang
                                                memerlukan uluran tangan.</p>
                                        </div>

                                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                            <form action="" method="post" class="form-box"
                                                onsubmit="return validasi_input(this)">
                                                <h3 class="h4 text-black mb-4">Bantu Mereka</h3>
                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="hidden" name="kategori" value="Bakti Sosial">
                                                        <input type="text" id="name2" name="nama" required
                                                            oninvalid="this.setCustomValidity('Masukkan Nama Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="name2">Nama Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="hp" id="hp2"
                                                            onkeypress="return hanyaAngka(event)" maxlength="13"
                                                            required
                                                            oninvalid="this.setCustomValidity('Masukkan No HP')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="hp2">No. HP/WA:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="donasi" id="donasi2" required
                                                            oninvalid="this.setCustomValidity('Masukkan Donasi Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="donasi2">Donasi Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="via-bank">
                                                        <div class="accordion" id="accordionExample2">
                                                            <div class="card">
                                                                <div class="card-header" id="headingOne2">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link btn-block text-left"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseOne2"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne">
                                                                            <img src="images/bank/bri.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Rakyat Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>

                                                                <div id="collapseOne2" class="collapse"
                                                                    aria-labelledby="headingOne"
                                                                    data-parent="#accordionExample2">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek"
                                                                            value="0523 0100 0259 302">
                                                                        <input type="hidden" name="nama-rek"
                                                                            value="Yayasan Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="headingTwo2">
                                                                    <h2 class="mb-0">
                                                                        <button
                                                                            class="btn btn-link btn-block text-left collapsed"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseTwo2"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseTwo">
                                                                            <img src="images/bank/bni.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Negara Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseTwo2" class="collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-parent="#accordionExample2">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek2"
                                                                            value="946 713 835">
                                                                        <input type="hidden" name="nama-rek2"
                                                                            value="Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer2"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="slide-1" style="background-image: url('images/background/top-bg1.jpg');"
                        data-stellar-background-ratio="0.5">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-4">
                                            <h1 data-aos="fade-up" data-aos-delay="100">Ceria Yatim</h1>
                                            <p class="mb-4" data-aos="fade-up" data-aos-delay="200"
                                                style="color: white">Program Ceria Yatim adalah program edukasi dan
                                                mengasah keaktifan mereka, tujuan dari kegiatan ini adalah untuk berbagi
                                                kebahagiaan kepada anak-anak yatim</p>

                                        </div>

                                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                            <form action="" method="post" class="form-box"
                                                onsubmit="return validasi_input(this)">
                                                <h3 class="h4 text-black mb-4">Bantu Mereka</h3>
                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="hidden" name="kategori" value="Ceria Yatim">
                                                        <input type="text" id="name3" name="nama" required
                                                            oninvalid="this.setCustomValidity('Masukkan Nama Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="name3">Nama Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="hp" id="hp3"
                                                            onkeypress="return hanyaAngka(event)" maxlength="13"
                                                            required
                                                            oninvalid="this.setCustomValidity('Masukkan No HP')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="hp3">No. HP/WA:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="donasi3" id="donasi3" required
                                                            oninvalid="this.setCustomValidity('Masukkan Donasi Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="donasi3">Donasi Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="via-bank">
                                                        <div class="accordion" id="accordionExample3">
                                                            <div class="card">
                                                                <div class="card-header" id="headingOne3">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link btn-block text-left"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseOne3"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne">
                                                                            <img src="images/bank/bri.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Rakyat Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>

                                                                <div id="collapseOne3" class="collapse"
                                                                    aria-labelledby="headingOne"
                                                                    data-parent="#accordionExample3">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek"
                                                                            value="0523 0100 0259 302">
                                                                        <input type="hidden" name="nama-rek"
                                                                            value="Yayasan Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="headingTwo3">
                                                                    <h2 class="mb-0">
                                                                        <button
                                                                            class="btn btn-link btn-block text-left collapsed"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseTwo3"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseTwo">
                                                                            <img src="images/bank/bni.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Negara Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseTwo3" class="collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-parent="#accordionExample3">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek2"
                                                                            value="946 713 835">
                                                                        <input type="hidden" name="nama-rek2"
                                                                            value="Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer2"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="slide-1" style="background-image: url('images/background/top-bg2.jpg');"
                        data-stellar-background-ratio="0.5">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-4">
                                            <h1 data-aos="fade-up" data-aos-delay="100">Pendidikan Yatim</h1>
                                            <p class="mb-4" data-aos="fade-up" data-aos-delay="200"
                                                style="color: white">Program Yayasan ini sangat amat
                                                serius dalam bidang pendidikan demi meningkatkan sumber daya manusia
                                                sejak dini, mengadakan private secara intensif dan pondok
                                                pesantren</p>

                                        </div>

                                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                            <form action="" method="post" class="form-box"
                                                onsubmit="return validasi_input(this)">
                                                <h3 class="h4 text-black mb-4">Bantu Mereka</h3>
                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="hidden" name="kategori" value="Pendidikan Yatim">
                                                        <input type="text" id="name" name="nama4" required
                                                            oninvalid="this.setCustomValidity('Masukkan Nama Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="name4">Nama Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="hp" id="hp4"
                                                            onkeypress="return hanyaAngka(event)" maxlength="13"
                                                            required
                                                            oninvalid="this.setCustomValidity('Masukkan No HP')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="hp4">No. HP/WA:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="donasi" id="donasi4" required
                                                            oninvalid="this.setCustomValidity('Masukkan Donasi Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="donasi4">Donasi Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="via-bank">
                                                        <div class="accordion" id="accordionExample4">
                                                            <div class="card">
                                                                <div class="card-header" id="headingOne4">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link btn-block text-left"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseOne4"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne">
                                                                            <img src="images/bank/bri.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Rakyat Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>

                                                                <div id="collapseOne4" class="collapse"
                                                                    aria-labelledby="headingOne"
                                                                    data-parent="#accordionExample4">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek"
                                                                            value="0523 0100 0259 302">
                                                                        <input type="hidden" name="nama-rek"
                                                                            value="Yayasan Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="headingTwo4">
                                                                    <h2 class="mb-0">
                                                                        <button
                                                                            class="btn btn-link btn-block text-left collapsed"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseTwo4"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseTwo">
                                                                            <img src="images/bank/bni.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Negara Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseTwo4" class="collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-parent="#accordionExample4">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek2"
                                                                            value="946 713 835">
                                                                        <input type="hidden" name="nama-rek2"
                                                                            value="Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer2"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="slide-1" style="background-image: url('images/background/top-bg3.jpg');"
                        data-stellar-background-ratio="0.5">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-4">
                                            <h1 data-aos="fade-up" data-aos-delay="100">Uang Saku Yatim</h1>
                                            <p class="mb-4" data-aos="fade-up" data-aos-delay="200"
                                                style="color: white">Dengan adanya uang saku untuk para yatim bertujuan
                                                agar mereka mempunyai uang jajan sendiri dan dapat meringani beban orang
                                                tua mereka</p>

                                        </div>

                                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                            <form action="" method="post" class="form-box"
                                                onsubmit="return validasi_input(this)">
                                                <h3 class="h4 text-black mb-4">Bantu Mereka</h3>
                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="hidden" name="kategori" value="Uang Saku Yatim">
                                                        <input type="text" id="name5" name="nama" required
                                                            oninvalid="this.setCustomValidity('Masukkan Nama Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="name5">Nama Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="hp" id="hp5"
                                                            onkeypress="return hanyaAngka(event)" maxlength="13"
                                                            required
                                                            oninvalid="this.setCustomValidity('Masukkan No HP')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="hp5">No. HP/WA:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="donasi" id="donasi5" required
                                                            oninvalid="this.setCustomValidity('Masukkan Donasi Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="donasi5">Donasi Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="via-bank">
                                                        <div class="accordion" id="accordionExample5">
                                                            <div class="card">
                                                                <div class="card-header" id="headingOne5">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link btn-block text-left"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseOne5"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne">
                                                                            <img src="images/bank/bri.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Rakyat Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>

                                                                <div id="collapseOne5" class="collapse"
                                                                    aria-labelledby="headingOne"
                                                                    data-parent="#accordionExample5">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek"
                                                                            value="0523 0100 0259 302">
                                                                        <input type="hidden" name="nama-rek"
                                                                            value="Yayasan Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="headingTwo5">
                                                                    <h2 class="mb-0">
                                                                        <button
                                                                            class="btn btn-link btn-block text-left collapsed"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseTwo5"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseTwo">
                                                                            <img src="images/bank/bni.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Negara Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseTwo5" class="collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-parent="#accordionExample5">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek2"
                                                                            value="946 713 835">
                                                                        <input type="hidden" name="nama-rek2"
                                                                            value="Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer2"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="slide-1" style="background-image: url('images/background/top-bg4.jpg');"
                        data-stellar-background-ratio="0.5">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-12">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 mb-4">
                                            <h1 data-aos="fade-up" data-aos-delay="100">Sembako Yatim</h1>
                                            <p class="mb-4" data-aos="fade-up" data-aos-delay="200"
                                                style="color: white">Dengan adanya program sembako yatim Yayasan Dompet
                                                Yatim Piatu Amanah dapat membantu mencukupi kebutuhan pokok mereka </p>

                                        </div>

                                        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="500">
                                            <form action="" method="post" class="form-box"
                                                onsubmit="return validasi_input(this)">
                                                <h3 class="h4 text-black mb-4">Bantu Mereka</h3>
                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="hidden" name="kategori" value="Sembako Yatim">
                                                        <input type="text" id="name6" name="nama" required
                                                            oninvalid="this.setCustomValidity('Masukkan Nama Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="name6">Nama Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="hp" id="hp6"
                                                            onkeypress="return hanyaAngka(event)" maxlength="13"
                                                            required
                                                            oninvalid="this.setCustomValidity('Masukkan No HP')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="hp6">No. HP/WA:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="input-field">
                                                        <input type="text" name="donasi" id="donasi6" required
                                                            oninvalid="this.setCustomValidity('Masukkan Donasi Anda')"
                                                            oninput="setCustomValidity('')" />
                                                        <label for="donasi6">Donasi Kamu:</label>
                                                    </div>
                                                </div>

                                                <div class="kotak">
                                                    <div class="via-bank">
                                                        <div class="accordion" id="accordionExample6">
                                                            <div class="card">
                                                                <div class="card-header" id="headingOne6">
                                                                    <h2 class="mb-0">
                                                                        <button class="btn btn-link btn-block text-left"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseOne6"
                                                                            aria-expanded="true"
                                                                            aria-controls="collapseOne">
                                                                            <img src="images/bank/bri.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Rakyat Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>

                                                                <div id="collapseOne6" class="collapse"
                                                                    aria-labelledby="headingOne"
                                                                    data-parent="#accordionExample6">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek"
                                                                            value="0523 0100 0259 302">
                                                                        <input type="hidden" name="nama-rek"
                                                                            value="Yayasan Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="card">
                                                                <div class="card-header" id="headingTwo6">
                                                                    <h2 class="mb-0">
                                                                        <button
                                                                            class="btn btn-link btn-block text-left collapsed"
                                                                            type="button" data-toggle="collapse"
                                                                            data-target="#collapseTwo6"
                                                                            aria-expanded="false"
                                                                            aria-controls="collapseTwo">
                                                                            <img src="images/bank/bni.png" alt="bank"
                                                                                style="width: 6em; float: left;"><span
                                                                                style="position: absolute; margin-top: 1rem; margin-left: 1rem;">Bank
                                                                                Negara Indonesia</span>
                                                                        </button>
                                                                    </h2>
                                                                </div>
                                                                <div id="collapseTwo6" class="collapse"
                                                                    aria-labelledby="headingTwo"
                                                                    data-parent="#accordionExample6">
                                                                    <div class="card-body">
                                                                        <input type="hidden" name="norek2"
                                                                            value="946 713 835">
                                                                        <input type="hidden" name="nama-rek2"
                                                                            value="Dompet Yatim Piatu Amanah">
                                                                        <input type="submit" name="transfer2"
                                                                            class="btn btn-primary btn-pill"
                                                                            value="Transfer">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="site-section courses-title" id="courses-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">Aktivitas</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row">

                    <div class="owl-carousel col-12 nonloop-block-14">

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/benda/b-1.JPG" alt="Image" class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 11 Juli 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Kp. Benda, Citayem</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/bloksawo/b-1.JPG" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 11 Juli 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Blok Sawo, Citayem</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/sawah/s-1.JPG" alt="Image" class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 07 Juli 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Srengseng Sawah, Jakarta Selatan</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/padurenan/p-1.JPG" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 06 Juli 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Padurenan, Gunung Sindur</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/cinangka/c-1.JPG" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 04 Juli 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di cinangka, Depok</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/alastua/a-0.JPG" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 03 Juli 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Alastua, Gunung Sindur</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/cidokom/c-1.JPG" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 02 Juli 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Desa Cidokom, Gunung Sindur</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/sawangan-2/s-1.JPG" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 01 Juli 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Sawangan Utara, Depok</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/sawangan-1/s-1.JPG" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 26 Juni 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Sawangan, Depok</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/cinere/c-1.JPG" alt="Image" class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 24 Juni 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Cinere, Depok</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/sukamulih/s-1.JPG" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 21 Juni 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Desa Sukamulih, Bogor</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/pengasinan/p-1.jpg" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 19 Juni 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Pengasinan, Depok</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="#"><img src="images/kegiatan/pondok-cabe/pc-1.JPG" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"><span class="icon-clock-o"></span>Aktivitas / 17 Juni 2020</div>
                                <h3><a href="#">Gerakan Santunan 1000 Yatim Pelosok</a></h3>
                                <p>Santunan 1000 Yatim di Pondok Cabe, Tanggerang Selatan</p>
                            </div>
                            <div class="d-flex border-top stats">
                                <div class="py-3 px-4"><span class="icon-users"></span> 2K Viewers</div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="row justify-content-center">
                    <div class="col-7 text-center">
                        <button class="customPrevBtn btn btn-primary m-1">Sebelumnya</button>
                        <button class="customNextBtn btn btn-primary m-1">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="site-section" id="programs-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">Program Unggulan</h2>
                        <p>Program - program ini berupaya mensejahterakan dan mencukupi keperluan serta kebutuhan sehari
                            - hari anak-anak yatim.</p>
                    </div>
                </div>
                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/program/santunan anak yatim.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Santunan Yatim</h2>
                        <p class="mb-4">Dengan program ini, Yayasan Dompet Yatim Piatu Amanah sangat intensif untuk
                            memberikan bantuan berupa santunan
                            anak yatim yang di berikan untuk kebutuhan sehari-hari mereka</p>
                    </div>
                </div>

                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/program/Ceria Yatim.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Ceria Yatim</h2>
                        <p class="mb-4">Program Ceria Yatim adalah program edukasi dan mengasah keaktifan mereka, tujuan
                            dari kegiatan ini adalah untuk
                            berbagi kebahagiaan kepada anak-anak yatim</p>
                    </div>
                </div>

                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/program/Pendidikan Yatim.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Pendidikan Yatim</h2>
                        <p class="mb-4">Yayasan Dompet Yatim Piatu Amanah sangat amat serius dalam bidang pendidikan
                            untuk meningkatkan sumber daya manusia sejak dini.
                            dengan mengadakan private secara intensif dan pondok pesantren</p>
                    </div>
                </div>

                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/program/Kesehatan Yatim.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Kesehatan Yatim</h2>
                        <p class="mb-4">Dengan adanya program kesehatan yatim, Yayasan Dompet Yatim Piatu Amanah sangat
                            amat berperan penting
                            dalam menjaga keshatan para yatim Yayasan Dompet Yatim Piatu Amanah </p>
                    </div>
                </div>

                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/program/Uang saku yatim.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Uang Saku Yatim</h2>
                        <p class="mb-4">Dengan adanya uang saku untuk para yatim bertujuan agar mereka mempunyai uang
                            jajan sendiri dan dapat meringani beban
                            orang tua mereka</p>
                    </div>
                </div>

                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/program/sembako yatim.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 mr-auto order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Sembako Yatim</h2>
                        <p class="mb-4">Dengan adanya program sembako yatim Yayasan Dompet Yatim Piatu Amanah dapat
                            membantu kebutuhan pokok mereka</p>
                    </div>
                </div>

                <div class="row mb-5 align-items-center">
                    <div class="col-lg-7 mb-5" data-aos="fade-up" data-aos-delay="100">
                        <img src="images/program/Bakti Sosial.svg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                        <h2 class="text-black mb-4">Bakti Sosial</h2>
                        <p class="mb-4">Kegiatan bakti sosial ini mengajarkan kita untuk saling peduli,mewujudkan rasa
                            cinta kasih,dan saling menolong untuk mereka yang memerlukan uluran tangan.
                            dalam kegiatan baktsi sosial kita akan mendapatkan banyak pelajaran terutama pada lingkungan
                            masyarakat</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="site-section" id="teachers-section">
            <div class="container">

                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">Tentang Kami</h2>
                        <p class="mb-5"><b>Yayasan Dompet Yatim Piatu Amanah</b> adalah sebuah lembaga yang bergerak
                            dibidang sosial. Yayasan Dompet Yatim Piatu Amanah yang bergerak membina anak anak yatim,
                            memberikan pendidikan formal dan non formal serta membantu mensejahterkan kehidupan dan
                            kebutuhan anak anak yatim piatu baik dari segi jasmani dan rohani. Dengan daftar Yayasan
                            Nomor : <b>AHU-005109.AH.01.12.TAHUN 2020</b>.</p>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="teacher text-center">
                            <img src="images/icon/vm.png" alt="Image"
                                class="img-fluid w-50 rounded-circle mx-auto mb-4">
                            <div class="py-2">
                                <h3 class="text-black">Visi</h3>
                                <p class="position">Yayasan Dompet Yatim Piatu Amanah</p>
                                <p>Menjadi lembaga sosial yang terpecaya dalam membina dan membangun yatim produktif
                                    serta berkualitas</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="teacher text-center">
                            <img src="images/icon/visi-misi.png" alt="Image"
                                class="img-fluid w-50 rounded-circle mx-auto mb-4">
                            <div class="py-2">
                                <h3 class="text-black">Misi</h3>
                                <p class="position">Yayasan Dompet Yatim Piatu Amanah</p>
                                <p>Meningkatkan Partisipasi Masyarakat dan Dukungan Sumberdaya untuk Kemandirian Yatim
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="teacher text-center">
                            <img src="images/icon/legalitas.png" alt="Image"
                                class="img-fluid w-50 rounded-circle mx-auto mb-4">
                            <div class="py-2">
                                <h3 class="text-black">Legalitas</h3>
                                <p class="position">Yayasan Dompet Yatim Piatu Amanah</p>
                                <p>Lembaga sosial dengan daftar Yayasan Nomor : AHU-005109.AH.01.12.TAHUN 2020.</p>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-primary btn-pill" href="" style="margin: auto; margin-top: -4rem;">Lihat
                        Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="site-section bg-image overlay" style="background-image: url('images/background/bg-1.JPG');">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-8 text-center testimony">
                        <img src="images/icon/ketua.jpg" alt="Image" class="img-fluid w-25 mb-4 rounded-circle">
                        <h3 class="mb-2">Syarif Hidayatulloh</h3>
                        <p>Ketua Yayasan</p>
                        <blockquote>
                            <p>&ldquo; Barangsiapa yang menempuh jalan untuk MENCARI ILMU, maka ALLAH SWT
                                akan mudahkan baginya untuk menuju Syurga &rdquo;</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section pb-0">

            <div class="future-blobs">
                <div class="blob_2">
                    <img src="images/background/hijau.svg" alt="Image">
                </div>
                <div class="blob_1">
                    <img src="images/background/hijau-muda.svg" alt="Image">
                </div>
            </div>
            <div class="container">
                <div class="row mb-5 justify-content-center" data-aos="fade-up" data-aos-delay="">
                    <div class="col-lg-7 text-center">
                        <h2 class="section-title">Keuntungan Bersedekah bersama Yayasan Dompet Yatim Piatu Amanah</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 ml-auto align-self-start" data-aos="fade-up" data-aos-delay="100">

                        <div class="p-4 rounded bg-white why-choose-us-box">

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-check-circle"
                                            style="font-size: 1.2em;"></span></span></div>
                                <div>
                                    <h3 class="m-0">Do'a Bersama dengan yatim</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-check-circle"
                                            style="font-size: 1.2em;"></span></span></div>
                                <div>
                                    <h3 class="m-0">Berkah Melimpah</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-check-circle"
                                            style="font-size: 1.2em;"></span></span></div>
                                <div>
                                    <h3 class="m-0">Rezeki Yang Berkah</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-check-circle"
                                            style="font-size: 1.2em;"></span></span></div>
                                <div>
                                    <h3 class="m-0">Dimudahkan segala urusannya</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light mb-3">
                                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-check-circle"
                                            style="font-size: 1.2em;"></span></span></div>
                                <div>
                                    <h3 class="m-0">Menjadi tabungan akhirat</h3>
                                </div>
                            </div>

                            <div class="d-flex align-items-center custom-icon-wrap custom-icon-light">
                                <div class="mr-3"><span class="custom-icon-inner"><span class="icon icon-check-circle"
                                            style="font-size: 1.2em;"></span></span></div>
                                <div>
                                    <h3 class="m-0">Amal Jariyah</h3>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="col-lg-7 align-self-end" data-aos="fade-left" data-aos-delay="200">
                        <img src="images/background/bg-2.png" alt="Image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>





        <div class="site-section bg-light" id="contact-section">
            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h2 class="section-title mb-3">Bersilaturahmi Yuk</h2>
                        <p class="mb-5">Ciptakan silaturahmi, dekat dengan kami dengan juga dengan anak anak yatim
                            Yayasan Dompet Yatim Piatu Amanah</p>


                        <div class="whatsapp" style="text-align: center;">
                            <a class="btn btn-primary btn-pill" href="https://wasap.at/43d5XB">whatsapp Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer-section bg-white bg-image overlay"
            style="background-image: url('images/background/top-bg5.jpg');">
            <div class="container">
                <div class="logo" style="text-align: center;">
                    <img src="images/logo/logo.png" alt="logo" style="width: 12rem;">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <h3 style="color: white;">Yayasan Dompet Yatim Piatu Amanah</h3>
                        <p style="text-align: justify; color: white;">Lembaga yang bergerak dibidang sosial. Yayasan
                            Dompet Yatim
                            Piatu Amanah yang bergerak membina anak anak yatim, memberikan pendidikan formal dan non
                            formal serta membantu mensejahterkan kehidupan dan kebutuhan anak anak yatim piatu baik dari
                            segi jasmani dan rohani. Dengan daftar Yayasan Nomor : <b>AHU-005109.AH.01.12.TAHUN 2020</b>
                        </p>
                    </div>

                    <div class="col-md-4 ml-auto">
                        <h3 style="color: white;">Media Sosial</h3>
                        <ul class="list-unstyled footer-links">
                            <li><a target="_blank" rel="noopener noreferrer"
                                    href="https://www.facebook.com/dompetyatimpiatuamanah/">Facebook</a></li>
                            <li><a target="_blank" rel="noopener noreferrer"
                                    href="https://www.instagram.com/dompet_yatimamanah/">Instagram</a></li>
                            <li><a target="_blank" rel="noopener noreferrer"
                                    href="https://www.youtube.com/channel/UCHioS6cfCxXqo2D2qmxjsKQ?view_as=subscriber">Youtube</a>
                            </li>
                            <li><a target="_blank" rel="noopener noreferrer" href="https://wasap.at/43d5XB">whatsapp</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3" style="color: white;">
                        <h3 style="color: white;">Layanan Informasi</h3>
                        <p class="kantor">Kantor Yayasan :</p>
                        <p class="alamat">Jl. H. Katim RT. 04 RW. 01 Kel. Meruyung Kec. Limo Kota Depok, Jawa Barat</p>
                        <p class="telp">Telepon : 088212959322</p>
                        <p class="sms">SMS : 088212959322</p>
                        <p class="whatsapp">Whatsapp : <a target="_blank" rel="noopener noreferrer"
                                href="https://wasap.at/reqU09"
                                style="text-decoration: none;color: white">088212959322</a>
                        </p>
                        <p class="mail">Email : dypa.amanah@gmail.com</p>
                    </div>

                </div>

                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p style="color: white;">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                                </script> Yayasan Dompet Yatim Piatu Amanah | Peduli Sesama <i class="icon-heart"
                                    aria-hidden="true"></i>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </footer>



    </div> <!-- .site-wrap -->

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="js/jquery.eislideshow.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script type="text/javascript" src="slick-1.8.1/slick/slick.min.js"></script>


    <script src="js/main.js"></script>
    <script src="js/form.js"></script>

    <script>
    $('.lazy').slick({
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
    </script>

</body>

</html>