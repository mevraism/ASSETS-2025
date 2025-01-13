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
    <!-- <header>
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
    </header> -->

    <main>
        <section id="struktur">
        <div class="yellow position-absolute"></div>
            <!-- <div class="red position-absolute"></div>
            <img src="{{ asset('../assets/image/cloud.png') }}" width="800px"class="position-absolute" alt=""
            style="right:0px;top:450px;overflow: hidden;">
            <img src="{{ asset('../assets/image/star.png') }}" width="550px" class="position-absolute"  alt=""
            style="left:0px;top:400px;overflow: hidden;">
            <img src="{{ asset('../assets/image/star2.png') }}" width="800px" class="position-absolute"  alt=""
            style="left:-180px;top:1250px;overflow: hidden;">
            <img src="{{ asset('../assets/image/cloud2.png') }}" width="1300px" class="position-absolute z-2"  alt=""
            style="left:150px;top:800px;overflow: hidden;">
            <img src="{{ asset('../assets/image/cloud2.png') }}" width="1300px" class="position-absolute z-2"  alt=""
            style="left:200px;top:1250px;overflow: hidden;"> -->
            <div class="container">
                <div class="struktur-title border-top-0 mt-5">
                    <p class="text-center judul fw-bold">Struktur Organisasi ASSETS</p>
                    <div class="justify-content-center d-flex align-items-center">
                        <p class="text-center fw-bold judul">
                            Kabinet Amara
                        </p>
                        <!-- <img class="orion judul" src="./assets/image/orion.png" alt=""> -->
                    </div>
                </div>
            </div>

            <div class="row row-cols-3 row-cols-md-3 g-4">
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Ketua ASSETS</h5>
                        <img src="{{ asset('gallery/2024/PH_Ketua_Yodhim.jpg') }}" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                    <small class="text-body-secondary">Yodhimas Geffananda</small>
                    </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card h-100">
                    <div class="card-body middle d-flex flex-column align-items-center justify-content-center">
                    <!-- <picture>
                        <source media="(max-width: 600px)" srcset="../assets/image/orion-mobile.png" class="card-middle img-fluid">
                        <img src="../assets/image/card.png" class="card-middle img-fluid">
                    </picture> -->
                    </div>
                    </div>
                </div>
                <div class="col text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Sekretaris Jenderal</h5>
                        <img src="{{ asset('gallery/2024/PH_Sekjen_Rioga.jpg') }}" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Rioga Natayudha</small>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-3 row-cols-md-3 g-4">
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Sekretaris 1</h5>
                        <img src="{{ asset('gallery/2024/PH_Sekretaris 1_Risma.jpg') }}" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Risma Saputri</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Sekretaris 2</h5>
                        <img src="{{ asset('gallery/2024/PH_Sekretaris 2_Caca.jpg') }}" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Charizza Thunjung</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Bendahara 1</h5>
                        <img src="{{ asset('gallery/2024/PH_Bendahara 1_Lisa.jpg') }}" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Lutfi Lisana</small>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-3 row-cols-md-3 g-4" class="img-fluid">
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Bendahara 2</h5>
                        <img src="{{ asset('gallery/2024/PH_Bendahara 2_Rua.jpg') }}" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Marwah Kamila</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Kepala Divisi PSDM</h5>
                        <img src="{{ asset('gallery/2024/PSDM_Kadiv_Askar.jpg') }}" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Daffa Askar</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Kepala Divisi Medkraf</h5>
                        <img src="{{ asset('gallery/2024/Medkraf_Kadiv_Darriel.jpg') }}" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Darriel Markerizal</small>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-3 row-cols-md-3 g-4">
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Kepala Divisi Minkat</h5>
                        <img src="{{ asset('gallery/2024/Minkat_Kadiv_Robertus.jpeg') }}" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Robertus Dimas</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Kepala Divisi Humpub</h5>
                        <img src="{{ asset('gallery/2024/Humpub_Kadiv_Afra.jpg') }}" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Afra Cendekia</small>
                    </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <h5 class="card-title">Kepala Divisi Kastrad</h5>
                        <img src="{{ asset('gallery/2024/Kastrad_Kadiv_Alif Rizqullah.jpg') }}" width="250" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <small class="text-body-secondary">Alif Rizqullah</small>
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