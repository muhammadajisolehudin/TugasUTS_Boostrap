<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="assets/styles/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


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
                                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <div class="col-6" style="">
                        <div class="card mb-3" style="border-top-right-radius:0px; border-bottom-right-radius: 0px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/images/ketuaDkm.jpg" class="img-fluid rounded" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Ust. Caca Supriatna</h5>
                                        <p class="card-text">Ketua DKM Masjid Jami AL-HUDA </p> <br/>
                                        <p ><a class="card-link"href="#">PROFILE</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="card mb-3" style="max-width: 540px; border-top-left-radius:0px; border-bottom-left-radius: 0px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="assets/images/" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">Masjid Jami AL-HUDA Cianjur</h5>
                                        <p class="card-text">Jl. Panembong Girang, Mekarsari, Kec. Cianjur, Kabupaten
                                            Cianjur, Jawa Barat 43251</p>
                                        <p ><a class="card-link"href="#">DETAIL</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid l2" >
                <div class="container">
                    <div class="head"><h5 >BERITA</h5></div>
                    <div class="row" class="berita">
                        <div class="col-md-3">
                            <div class="card" style="width: auto;">
                                <img src="assets/images/berita1.jpg" height="150px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p><small class="text-muted">Selasa, 1 November 2022 - 07:00 WIB</small></p>
                                    <a class="card-link" href="#"><p>HNW Sebut Peringatan Maulid Nabi Erat Kaitannya Dengan Pembebasan Palestina</p></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: auto;">
                                <img src="assets/images/berita2.jpg" height="150px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p><small class="text-muted">Kamis, 16 Juni 2022 - 12:00 WIB</small></p>
                                    <a class="card-link" href="#">MK Gelar Uji Materi UU Perkawinan, MUI Tegaskan Tolak Pernikahan Beda Agama</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: auto;">
                                <img src="assets/images/berita3.jpg" height="150px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p><small class="text-muted">Selasa, 25 Oktober 2022 - 06:06 WIB</small></p>
                                    <a class="card-link" href="#">Bukan Pondok Pesantren Biasa, Dayah Diniyah Darussalam Jadi Rumah Aman untuk Korban Kekerasan Seksual di Aceh</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card" style="width: auto;">
                                <img src="assets/images/berita4.jpg" height="150px" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <p><small class="text-muted">Minggu, 30 Oktober 2022 - 15.10 WIB</small></p>
                                    <a class="card-link" href="#">Saat Kapolri "Nyantri" di Pondok Pesantren Gus Baha di Rembang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section id="Profil" class="py-5">

        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="tentang text-center"><h4>TENTANG</h4></div>
                        <div class="row ttg">
                            <div class="col-md-4">
                                <img src="assets/images/ketuaDkm.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <div class="head2"><h5>PROFILE</h5></div>
                                    <p class="card-text">Ikatan Remaja masjid Jami Al-Huda merupakan organisasi masyarakat yang berisi para pemuda dan pemudi yang berfokus pada kesejahteraan Masjid dan berada dalam naungan Binaan DKM jami Al-Huda</p>
                                    <p class="card-text">Nama Organisasi : IRMAS Jami Al-Huda</p>
                                    <p class="card-text">Tanggal dibentuk : 12 September 2022</p>
                                    <p class="card-text">Disahkan pada : 13 September 2022</p>
                                    <p class="card-text">Lokasi/Alamat : Kp. Panembong Girang Desa Mekarsari RW04 Cianjur Jawa barat</p>
                                    <p class="card-text">Jumlah Anggota : 40 Orang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid l2" >
                <div class="container"><div class="head"><h5>PENGURUS</h5></div>
                    <div class="row ttg">
                        
                        <table>
                            <tr>
                                <td>asdasdasdasdads</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
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
                        <iframe class="pb-video-frame" width="100%" height="200" src="https://www.youtube.com/embed/PnJj72xiB1s" frameborder="0" allowfullscreen></iframe>
                        <div class="p-4">
                            <h5 class="text-dark">Santunan anak yatim piatu dan jompo</h5>
                            <p class="small text-muted mb-0">Dilaksanakan dalam rangka mengagungkan 10 Muharram</p>
                            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Foto</span></p>
                                <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 pb-video">
                    <div class="rounded shadow-sm">
                        <iframe class="pb-video-frame" width="100%" height="200" src="https://www.youtube.com/embed/Im6XgEEDpvg" frameborder="0" allowfullscreen></iframe>
                        <div class="p-4">
                            <h5 class="text-dark">Bersholawat Bersama 2022</h5>
                            <p class="small text-muted mb-0">Dalam rangka memperingati Maulid Nabi Muhammad SAW</p>
                            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Foto</span></p>
                                <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Trend</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 pb-video">
                    <div class="rounded shadow-sm">
                        <iframe class="pb-video-frame" width="100%" height="200" src="https://www.youtube.com/embed/PnJj72xiB1s" frameborder="0" allowfullscreen></iframe>
                        <div class="p-4">
                            <h5 class="text-dark">Pengajian Bersama Jamar Muda</h5>
                            <p class="small text-muted mb-0">Dalam rangka Memperingati Maulid Nabi Muhammad 1444H </p>
                            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Foto</span></p>
                                <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">Featured</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->

                <!-- Gallery item -->
                <div class="col-xl-3 col-lg-4 col-md-6 mb-4 pb-video">
                    <div class="rounded shadow-sm">
                        <iframe class="pb-video-frame" width="100%" height="200" src="https://www.youtube.com/embed/2WKJWD9UBrY" frameborder="0" allowfullscreen></iframe>
                        <div class="p-4">
                            <h5 class="text-dark">Sodaqoh malam dijalanan</h5>
                            <p class="small text-muted mb-0">Dilakukan setiap hari jum'at satu bulan sekali</p>
                            <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span class="font-weight-bold">Foto</span></p>
                                <div class="badge badge-success px-3 rounded-pill font-weight-normal">Hot</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End -->
            </div>
        </div>
    </section>

    <section id="Program">
        <div class="container-fluid l2">
            <div class="container">
                <div class="row">
                    <div class="col">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Omnis numquam corporis, corrupti sapiente error doloribus consequatur nisi iusto eligendi earum assumenda, vitae, temporibus mollitia et possimus. Atque placeat quas laborum.
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="Kontak">
        <div class="container">
            <div class="row">
                <div class="col-md-10" style="background-color:red;"></div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>