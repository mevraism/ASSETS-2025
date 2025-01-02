<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Struktur Organisasi ASSETS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/style/struktur.css">
    <link rel="stylesheet" href="{{asset('assets/style/nextpage.css') }}">
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white ps-lg-5 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ getAssetDir('assets/image/logo.jpg') }}" alt="" width="120" height="24"
                        class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item mx-1">
                            <a class="nav-link" aria-current="page" href="#tentang">Tentang Kami</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#struktur">Struktur Organisasi</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#visi">Visi Misi</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#lokasi">Lokasi</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="#galeri">Galeri</a>
                        </li>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Vote
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="/livecount">Live Count</a></li>
                                <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#myModal">Voting</a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="struktur">
        <div class="yellow position-absolute"></div>
            <div class="red position-absolute"></div>
            <img src="{{ asset('../assets/image/cloud.png') }}" width="800px"class="position-absolute" alt=""
            style="right:0px;top:450px;overflow: hidden;">
            <img src="{{ asset('../assets/image/star.png') }}" width="550px" class="position-absolute"  alt=""
            style="left:0px;top:400px;overflow: hidden;">
            <img src="{{ asset('../assets/image/star2.png') }}" width="800px" class="position-absolute"  alt=""
            style="left:-180px;top:1250px;overflow: hidden;">
            <img src="{{ asset('../assets/image/cloud2.png') }}" width="1300px" class="position-absolute z-2"  alt=""
            style="left:150px;top:800px;overflow: hidden;">
            <img src="{{ asset('../assets/image/cloud2.png') }}" width="1300px" class="position-absolute z-2"  alt=""
            style="left:200px;top:1250px;overflow: hidden;">
            <div class="container">
                <div class="struktur-title border-top-0 mt-5">
                    <p class="text-center judul fw-bold">Struktur Organisasi ASSETS</p>
                    <div class="justify-content-center d-flex align-items-center">
                        <p class="text-center fw-bold judul">
                            Kabinet
                        </p>
                        <img class="orion judul" src="./assets/image/orion.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row row-cols-3 row-cols-md-3 g-4">
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Ketua ASSETS</h5>
                        <img src="../assets/image/rangga.png" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">Gisfa Putra Ryangga</small>
                    </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card h-100">
                    <div class="card-body middle d-flex flex-column align-items-center justify-content-center">
                    <picture>
                        <source media="(max-width: 600px)" srcset="../assets/image/orion-mobile.png" class="card-middle img-fluid">
                        <img src="../assets/image/card.png" class="card-middle img-fluid">
                    </picture>
                    </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Sekretaris Jenderal</h5>
                        <img src="../assets/image/wisnu.png" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Antonius Krisargo W. N.</small>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-3 row-cols-md-3 g-4">
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Sekretaris 1</h5>
                        <img src="../assets/image/ninis.png" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Ninis Dyah Y.</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Sekretaris 2</h5>
                        <img src="../assets/image/manda.png" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Amanda Farliana S.</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Bendahara 1</h5>
                        <img src="../assets/image/rengganis.png" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Rengganis W. P.</small>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-3 row-cols-md-3 g-4" class="img-fluid">
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Bendahara 2</h5>
                        <img src="../assets/image/lea.png" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Maria Azalea N.</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Kepala Divisi PSDM</h5>
                        <img src="../assets/image/christo.png" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Christophorus A. H. D.</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Kepala Divisi Kreatif</h5>
                        <img src="../assets/image/alan.png" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Radivan Alan N.</small>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-3 row-cols-md-3 g-4">
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Kepala Divisi Minkat</h5>
                        <img src="../assets/image/farhan.png" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Farhan Akmal Shaleh</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Kepala Divisi Humas</h5>
                        <img src="../assets/image/repan.png" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Revandra Aryo Dwi K.</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Kepala Divisi Kastrad</h5>
                        <img src="../assets/image/taza.png" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Ahmad F. Mumtaza</small>
                    </div>
                    </div>
                </div>
            </div>
        </section>

            <section id="visi">
                <div class="rounded tentang">
                    <div class="text-center">
                        <h1 class="display-5 fw-bold lh-1 mb-1 visi mt-3">
                            Tentang
                        </h1>
                    </div>
                    <div>
                        <div class="container-fluid py-5 visi">
                            <div class="row row-cols-2">
                                <div class="col-md-6 text-center">
                                    <button type="button" class="btn btn-visi mb-3">Visi</button>
                                    <p>Mewujudkan ASSETS sebagai himpunan yang unggul, aktif, 
                                        profesional, dan solid bersama dalam membangun kemajuan TRPL.</p>
                                </div>
                                <div class="col-md-6">
                                    <img src="../assets/image/Picture1.png"
                                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-reveal img-fluid"
                                        alt="Image of about" width="400" height="auto" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid misi">
                        <div class="text-center">
                            <button type="button" class="btn btn-visi mb-3">Misi</button>
                        </div>
                        <ol>
                            <li>
                                Menjadi wadah dan memfasilitasi bakat serta minat mahasiswa TRPL
                            </li>
                            <li>
                                Meningkatkan solidaritas dan kebersamaan antar mahasiswa TRPL
                            </li>
                            <li>
                                Mengoptimalkan ASSETS sebagai wadah dalam mengaspirasikan mahasiswa TRPL
                            </li>
                            <li>
                                Membangun relasi, pengembangan bakat akademik dan non akademik mahasiswa TRPL
                            </li>
                        </ol>
                    </div>
                </div>
            </section>

            <!-- <div class="d-flex justify-content-center mt-3 awalan">
                <button class="btn btn-success button1" type="button">
                    <a href="#" class="vote">
                        Lihat Gambar
                    </a> 
                </button>
            </div> -->

            @include('components.footer')
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>


</body>
</html>