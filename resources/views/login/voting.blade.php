@if (Session::has('token'))


@extends('layouts.dump')


<body>
    <header>
        <nav class="navbar bg-white fixed-top">
            <div class="container-fluid navbar1">
                <a class="navbar-brand text-success" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    Kembali
                </a>
                <a class="navbar-brand" href="#">
                    <img src="assets/image/logo.jpg" alt="" width="120" height="24"
                        class="d-inline-block align-text-top">
                </a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <section id="galeri">
                <div class="row featurette mb-5">
                    <h6 class="fw-bold text-success text-center judul">
                        &mdash;&mdash;
                        VOTE
                        &mdash;&mdash;
                    </h6>
                    <h1 class="display-5 fw-bold lh-1 mb-3 text-center subjudul">Pemilihan Ketua ASSETS 2022</h1>
                    <p class="lead fst-italic text-center konten">Yuk, gunakan hak pilih anda untuk ASSETS yang lebih baik</p>
                    
                </div>

                <div class="album">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <!-- foreach start here -->
                            @foreach($kandidat_tabel as $kdt)
                            <div class="col mb-3 judul mx-auto">
                                <img src="{{getAssetDir('thumb/'.$kdt->foto) }}" alt="" srcset=""
                                    class="bd-placeholder-img card-img-top" width="100%" height="400px">

                                <div class="card-body">    
                                    
                                    
                                    <h1 class="text-center mt-2 mb-2">{{ $kdt->nama }}</h1>
                                    <p class="token fst-italic text-center">Kandidat {{ $kdt->no_urut }} - Calon Ketua ASSETS 2022 </p>
                                    <p class="token fst-italic text-center">TRPL {{ $kdt->angkatan }}</p>
                                    <div class="d-grid gap-2">
                                        <form action="{{ route('token.submit', Session::get('token')) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="no" value="{{$kdt->no_urut}}">
                                            <button class="btn btn-success button1" type="submit" onclick="return confirm('yakin memilih?')">VOTE</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- foreach end here -->
                            
                        </div>
                    </div>
                </div>
                <!-- foreach modal -->
                @foreach($kandidat_tabel as $kdt)
                <div class="modal" id="myModal{{ $kdt->no_urut }}">
                    <div class="modal-dialog modal-xl modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header border-bottom-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            
                            <div class="modal-body">
                                <div class="row featurette">
                                    <div class="col-md-4">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{getAssetDir('thumb/'.$kdt->foto) }}" alt="" srcset="" class="foto_kandidat"
                                                width="80%" height="300px">
                                        </div>
                                        <div class="card-body">
                                            <h2 class="text-center">{{ $kdt->nama }}</h2>
                                            <p class="token fst-italic text-center">Kandidat {{ $kdt->no_urut }}<br> Calon Ketua
                                                ASSETS 2022 </p>
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <div class="text-center">
                                            <h6 class="fw-bold text-success mb-2">
                                                &mdash;&mdash;
                                                VISI & MISI
                                                &mdash;&mdash;
                                            </h6>
                                        </div>

                                        <div>
                                            <div class="container-fluid">
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-abu mb-3">Visi</button>
                                                </div>
                                                <p>{{ $kdt->visi }}</p>
                                            </div>
                                        </div>

                                        <div class="container-fluid">
                                            <div class="text-center">
                                                <button type="button" class="btn btn-abu mb-3">Misi</button>
                                            </div>
                                            <ol>
                                            @foreach( (explode(",", $kdt->misi)) as $misi)
                                                <li>{{ $misi }} <br></li>
                                            @endforeach
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- foreach modal end here -->


            </section>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        $('#myModal1').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        });

        $('#myModal2').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        });

        $('#myModal3').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        });

    </script>
<script src="https://unpkg.com/scrollreveal"></script>

<script src="assets/js/main.js"></script>

</body>
@else
    <script>window.location.href='http://localhost:8000/';</script>
@endif