<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/FontAwesome/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#Beranda">
                <img src="assets/images/logo1.png" width="40" height="40" alt="IRMAS JAMI AL-HUDA">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Beranda">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tentang
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#Profil">Profil</a></li>
                                <li><a class="dropdown-item" href="#Pengurus">Pengurus</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Acara">Acara</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Program">Program</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="Beranda">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/bg1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/bg1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/images/bg1.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row g-0">
                    <div class="col-6 g-0" style="">
                        <div class="card mb-3" style="border-top-right-radius:0px; border-bottom-right-radius: 0px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/images/ketuaIrmas.jpg" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Endang Rahmat</h5>
                                        <p class="card-text">Ketua IRMAS Jami AL-HUDA </p> <br />
                                        <p><a class="card-link text-dark" href="#">PROFILE</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card mb-3" style="border-top-left-radius:0px; border-bottom-left-radius: 0px;">
                            <div class="row g-0">
                                <div class="col-md-4 text-center">
                                    <img src="assets/images/map.png" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Masjid Jami AL-HUDA Cianjur</h5>
                                        <p class="card-text">Jl. Panembong Girang, Mekarsari, Kec. Cianjur, Kabupaten
                                            Cianjur, Jawa Barat 43251</p>
                                        <p><a class="card-link text-dark" href="#">DETAIL</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid l2">
                <div class="container">
                    <div class="head">
                        <h5 class="rounded">BERITA</h5>
                    </div>
                    <div class="row" class="berita">
                        <div class="col-md-3">
                            <div class="card" style="width: auto;">
                                <img src="assets/images/berita1.jpg" class="img-fluid rounded-start" alt="...">
                                <div class="card-body">
                                    <p><small class="text-muted">Selasa, 1 November 2022 - 07:00 WIB</small></p>
                                    <a class="card-link text-dark" href="#">
                                        <p>HNW Sebut Peringatan Maulid Nabi Erat Kaitannya Dengan Pembebasan Palestina
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: auto;">
                                <img src="assets/images/berita2.jpg" height="150px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p><small class="text-muted">Kamis, 16 Juni 2022 - 12:00 WIB</small></p>
                                    <a class="card-link text-dark" href="#">MK Gelar Uji Materi UU Perkawinan, MUI
                                        Tegaskan Tolak
                                        Pernikahan Beda Agama</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: auto;">
                                <img src="assets/images/berita3.jpg" height="150px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p><small class="text-muted">Selasa, 25 Oktober 2022 - 06:06 WIB</small></p>
                                    <a class="card-link text-dark" href="#">Bukan Pondok Pesantren Biasa, Dayah Diniyah
                                        Darussalam
                                        Jadi Rumah Aman untuk Korban Kekerasan Seksual di Aceh</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: auto;">
                                <img src="assets/images/berita4.jpg" height="150px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p><small class="text-muted ">Minggu, 30 Oktober 2022 - 15.10 WIB</small></p>
                                    <a class="card-link text-dark" href="#">Saat Kapolri "Nyantri" di Pondok Pesantren
                                        Gus Baha di Rembang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="py-5">

        <div class="container-fluid">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 mx-auto pb-5">
                        <div class="text-white p-2 shadow-sm rounded banner">
                            <h1 class="display-4">TENTANG</h1>
                            <p class="lead">Ikatan Remaja masjid Jami Al-Huda merupakan organisasi masyarakat yang
                                berisi para pemuda dan pemudi yang berfokus pada kesejahteraan Masjid dan berada dalam
                                naungan Binaan DKM jami Al-Huda</p>
                        </div>
                    </div>


                    <div class="container" id="Profil">
                        <div class="head2">
                            <h5 class="rounded">PROFIL IRMAS</h5>
                        </div>
                        <div class="main-body">
                            <div class="row gutters-sm">
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex flex-column align-items-center text-center">
                                                <img src="assets/images/logo1.png" alt="" width="150">
                                                <div class="mt-3">
                                                    <h4>IRMAS Jami Al-Huda</h4>
                                                    <p class="text-secondary mb-1">Cianjur</p>
                                                    <p class="text-muted font-size-sm">Jawa Barat</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Nama Organisasi</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    Ikatan Remaja Masjid Jami Al-Huda
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Tanggal Dibentuk</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    12 September 2022
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Disahkan pada</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    13 September 2022
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Lokasi/Alamat</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    Kp. Panembong Girang Desa Mekarsari RW04 Cianjur Jawa barat
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Jumlah Anggota</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    40 Orang
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid l2" id="Pengurus">
                <div class="container">
                    <div class="head">
                        <h5 class="rounded">PENGURUS</h5>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4">
                        <div class="col">
                            <div class="card radius-15">
                                <div class="card-body text-center">
                                    <div class="p-4 border radius-15">
                                        <img src="assets/images/ketuaIrmas.jpg" width="110" height="110"
                                            class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-2">Endang Rahmat</h5>
                                        <p class="mb-2">Ketua</p>
                                        <div class="d-grid"> <a href="#"
                                                class="btn btn-outline-success radius-15">Profil
                                                Lengkap</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15">
                                <div class="card-body text-center">
                                    <div class="p-4 border radius-15">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                            height="110" class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-2">Muhammad Aji</h5>
                                        <p class="mb-2">Sekretaris</p>
                                        <div class="d-grid"> <a href="#"
                                                class="btn btn-outline-success radius-15">Profil
                                                Lengkap</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15">
                                <div class="card-body text-center">
                                    <div class="p-4 border radius-15">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                            height="110" class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-2">Nendi Maulana</h5>
                                        <p class="mb-2">Bendahara</p>
                                        <div class="d-grid"> <a href="#"
                                                class="btn btn-outline-success radius-15">Profil
                                                Lengkap</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card radius-15">
                                <div class="card-body text-center">
                                    <div class="p-4 border radius-15">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" width="110"
                                            height="110" class="rounded-circle shadow" alt="">
                                        <h5 class="mb-0 mt-2">...</h5>
                                        <p class="mb-2">Seksi peribadatan</p>
                                        <div class="d-grid"> <a href="#"
                                                class="btn btn-outline-success radius-15">Profil
                                                Lengkap</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <section id="Acara">
        <div class="container">
            <div class="row">

                <!-- For demo purpose -->

                <div class="col-lg-12 mx-auto pb-5">
                    <div class="text-white p-2 shadow-sm rounded banner">
                        <h1 class="display-4">ACARA</h1>
                        <p class="lead">Dihalaman ini merupakan Dokumentasi acara yang pernah kami buat</p>
                    </div>
                </div>

                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 pb-video">
                    <div class="rounded shadow-sm">
                        <iframe class="pb-video-frame" width="100%" height="200"
                            src="https://www.youtube.com/embed/PnJj72xiB1s" frameborder="0" allowfullscreen></iframe>
                        <div class="p-4">
                            <h5 class="text-dark">Santunan anak yatim piatu dan jompo</h5>
                            <p class="small text-muted mb-0">Dilaksanakan dalam rangka mengagungkan 10 Muharram</p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Foto</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 pb-video">
                    <div class="rounded shadow-sm">
                        <iframe class="pb-video-frame" width="100%" height="200"
                            src="https://www.youtube.com/embed/Im6XgEEDpvg" frameborder="0" allowfullscreen></iframe>
                        <div class="p-4">
                            <h5 class="text-dark">Bersholawat Bersama 2022</h5>
                            <p class="small text-muted mb-0">Dalam rangka memperingati Maulid Nabi Muhammad SAW</p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Foto</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 pb-video">
                    <div class="rounded shadow-sm">
                        <iframe class="pb-video-frame" width="100%" height="200"
                            src="https://www.youtube.com/embed/PnJj72xiB1s" frameborder="0" allowfullscreen></iframe>
                        <div class="p-4">
                            <h5 class="text-dark">Pengajian Bersama Jamar Muda</h5>
                            <p class="small text-muted mb-0">Dalam rangka Memperingati Maulid Nabi Muhammad 1444H </p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Foto</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 pb-video">
                    <div class="rounded shadow-sm">
                        <iframe class="pb-video-frame" width="100%" height="200"
                            src="https://www.youtube.com/embed/2WKJWD9UBrY" frameborder="0" allowfullscreen></iframe>
                        <div class="p-4">
                            <h5 class="text-dark">Sodaqoh malam dijalanan</h5>
                            <p class="small text-muted mb-0">Dilakukan setiap hari jum'at satu bulan sekali</p>
                            <div
                                class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                        class="font-weight-bold">Foto</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </section>

    <section class="py-5" id="Program">
        <div class="container-fluid">
            <div class="container-fluid l2" id="Pengurus">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mx-auto pb-5">
                            <div class="text-dark p-2 shadow-sm rounded banner2">
                                <h1 class="display-4">PROGRAM</h1>
                                <p class="lead">Halaman ini menunjukan program apa saja yang kami buat dalam IRMAS,
                                    tentunya untuk kemajuan masjid dan masyarakat terutama dalam hal keagamaan</p>
                            </div>
                        </div>
                        <div class="container">
                            <table class="table table-hover bg-light">
                                <thead>
                                    <tr>
                                        <div class="row">
                                            <th class="col-1" scope="col">
                                                <div class="card-header text-center">
                                                    <h3 class="h4">No</h3>
                                                </div>
                                            </th>

                                            <th scope="col" class="col-6">
                                                <div class="card-header text-center">
                                                    <h3 class="h4">Program</h3>
                                                </div>
                                            </th>
                                            <th scope="col" class="col-5">
                                                <div class="card-header text-center">
                                                    <h3 class="h4"><span class="icon"><i
                                                                class="fa fa-clock-o"></i></span></h3>

                                                </div>
                                            </th>
                                        </div>
                                    </tr>
                                </thead>

                                <tbody class="table-group-divider">
                                    <tr>
                                        <th scope="row" class="text-center">1</th>
                                        <td>Meramaikan Sholat Subuh Berjamaah dengan menyediakan makanan pagi dan
                                            mengadakan himbauan untuk sholat bersama</td>
                                        <td>setiap hari</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">2</th>
                                        <td>Pengajian tajwiz rutin dan Remaja Mengajar(berfokus untuk Belajar tajwiz dan
                                            mengajarkan remaja hingga orangtua yang belum bisa membaca Al-Qur'an) </td>
                                        <td>Malam Rabu dan Malam Minggu </td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">4</th>
                                        <td>Remaja bersedekah(dibagikan kencleng tiap anggota)</td>
                                        <td>penarikan / satu bulan</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">5</th>
                                        <td>Remaja Beberesih Masjid</td>
                                        <td>satu bulan sekali</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">6</th>
                                        <td>Santunan anak yatim piatu</td>
                                        <td>tiga bulan sekali</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center">7</th>
                                        <td>Bantuan sembako masyarakat</td>
                                        <td>6 bulan sekali</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

        <div class="card border border-top-0" id="Kontak">
            <div class="card-body ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ">
                            <h5>KONTAK</h5>
                            <div class="row m-2 pt-4">
                                <div class="col-md-1 g-0">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <p class="col-md-9 ms-2 border text-start g-0">0821-0000-xxxx</p>
                            </div>

                            <div class="row m-2">
                                <div class="col-md-1 g-0">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                                <p class="col-md-9 ms-2 border text-start g-0">Irmas12345678@gmail.com</p>
                            </div>
                    
                            <div class="row m-2">
                                <div class="col-md-1 g-0">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </div>
                                <p class="col-md-9 ms-2 border text-start g-0" >0821-0000-xxxx</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <h5>INFORMASI</h5>
                            <div class="row pt-4">
                                <div class="col-md-4 embed-responsive embed-responsive-16by9">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6841644791193!2d107.12293271427457!3d-6.808219468480644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6852ecb3fe4ebf%3A0xd30bd14fb0aa8055!2sMasjid%20Jamie%20AL-Huda%20Kp.%20Panembong%20Girang%20Cianjur!5e0!3m2!1sen!2sid!4v1667442323839!5m2!1sen!2sid"
                                        width="100" height="100" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col-md-8">
                                    Jl. Panembong Girang, Mekarsari, Kec. Cianjur, Kabupaten Cianjur, Jawa Barat 43251
                                </div>

                            </div> 
                        </div>
                        <div class="col-md-2">
                            <h5 class="pb-4">AKUN</h5>
                            
                            <!-- Facebook -->
                            <a class="btn btn-outline-dark btn-floating m-1"  role="button"><i
                                    class="fab fa-facebook-f"></i></a>

                            <!-- Twitter -->
                            <a class="btn btn-outline-dark btn-floating m-1"  role="button"><i
                                    class="fab fa-twitter"></i></a>

                            <!-- Instagram -->
                            <a class="btn btn-outline-dark btn-floating m-1"  role="button"><i
                                    class="fab fa-instagram"></i></a>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                <div class="container">
                    <div class="row">
                        <div class="text-center m-auto">
                            copyright@2022
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>