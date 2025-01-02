
@extends('layouts.dump2')
@section('title',"HOME")
@section('content')
@if (Session::has('invalid'))
    <script>alert('Tidak sedang dalam periode voting atau token salah!');</script>
@endif
@if (Session::has('invalids'))
    <script>alert('Tidak sedang dalam periode voting!');</script>
@endif
@if (Session::has('alert'))
    <script>alert('{{ Session::get('alert') }}');</script>
@endif
<body style="overflow-x: hidden">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white ps-lg-5 fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/image/logo.jpg') }}" alt="" width="120" height="24"
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


    @include('components.navbar')
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('token.sync') }}" method="POST">
                    @csrf
                <div class="modal-body py-0">
                    <div class="modal-title fw-bold text-success text-center">
                        &mdash;&mdash;
                        VOTE
                        &mdash;&mdash;
                    </div>
                    <h3 class="text-center">Pemilihan Ketua ASSETS 2022</h3>
                    <p class="token fst-italic text-center">Masukkan token yang telah dikirimkan ke emailmu sebelum
                        memilih kandidat</p>
                </div>
                <div class="modal-footer flex-column border-top-0">
                    <div class="InputStyle">
                        <input class="InputStyle" placeholder="Masukkan Token" type="text" name="token">
                    </div>

                        <button type="submit" class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak-vote">
                            Kirim
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <main>
        <div class="container">
            <section id="tentang">
                <div class="row featurette mt-5 mb-5">
                    <div class="col-md-7 awalan">
                        <h6 class="fw-bold text-success">
                            &mdash;&mdash;
                            TENTANG KAMI
                        </h6>

                        <h1 class="display-5 fw-bold lh-1 mb-3">Association of Software Enggineering Technology Students
                        </h1>
                        <p class="lead fst-italic">ASSETS singkatan dari Association of Software Engineering Technology
                            yang merupakan organisasi himpunan mahasiswa Teknologi Rekayasa Perangkat Lunak Sekolah
                            Vokasi Universitas Gadjah Mada.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <a href="{{ route('tentang') }}">
                                <button type="button"
                                    class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak">Cari
                                    Tahu
                                    Selengkapnya
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <img src="{{ asset('./assets/image/heroimg.png') }}"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-reveal"
                            alt="Image of about" width="auto" height="500" loading="lazy">
                    </div>
                </div>
            </section>

            <section id="struktur">
                <div class="row featurette mt-5 mb-5">
                    <div class="col-md-6 order-md-2 struktur-explain awalan">
                        <h6 class="fw-bold text-success">
                            &mdash;&mdash;
                            STRUKTUR ORGANISASI
                        </h6>
                        <h1 class="display-5 fw-bold lh-1 mb-2">
                            Yuk kenali struktur organisasi di ASSETS
                        </h1>
                        <p class="lead fst-italic">ASSETS memiliki 5 divisi, yaitu Humas, PSDM, Kreatif, Kastrad, dan
                            Minkat
                        </p>
                        <a href="{{ route('struktur') }}">
                            <button type="button" class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak">Cari
                                Tahu Selengkapnya
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path
                                        d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('./assets/image/Team spirit.png') }}"
                            class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto img-reveal spirit"
                            alt="Image of about" width="auto" height="500" loading="lazy">
                    </div>
                </div>
            </section>
        </div>

            <div class="container">
            <section id="lokasi">
                <div class="row featurette mt-5 mb-5">
                    <div class="col-md-5 awalan">
                        <h6 class="fw-bold text-success">
                            &mdash;&mdash;
                            LOKASI KAMI
                        </h6>
                        <h1 class="display-5 fw-bold lh-1 mb-3">Cari tahu di mana ASSET berada</h1>

                        <div class="fw-bold">Address: </div>
                        <div class="fw-lighter fst-italic">69FF+QMX, Terban, Gondokusuman, Yogyakarta City, Special
                            Region of Yogyakarta 55281</div> <br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <a
                                href="https://www.google.com/maps/place/Universitas+Gadjah+Mada/@-7.7713529,110.3799733,17z/data=!4m5!3m4!1s0x2e7a59b2d4729729:0xac4d7b5fcf34f8e4!8m2!3d-7.7713847!4d110.3774998">
                                <button type="button"
                                    class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak">Lihat
                                    di
                                    Google Maps
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                        <path
                                            d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1738740991177!2d110.37531111432621!3d-7.77137937924305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a59b2d4729729%3A0xac4d7b5fcf34f8e4!2sUniversitas%20Gadjah%20Mada!5e0!3m2!1sid!2sid!4v1658825454458!5m2!1sid!2sid"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="lokasi"></iframe>
                    </div>
                </div>
            </section>
            </div>

            <section id="galeri">
                <div class="row featurette mb-3 judul">
                    <h6 class="fw-bold text-success text-center">
                        &mdash;&mdash;
                        GALERI ASSETS
                        &mdash;&mdash;
                    </h6>
                    <h1 class="display-5 fw-bold lh-1 text-center">Foto tentang ASSET</h1>
                    <p class="lead fst-italic text-center mb-3">Foto-foto yang berhubungan dengan kegiatan ASSET</p>

                <ul class="rem-masonry judul" style="max-width: 100%!important;">
                        <li><img src="{{ asset('gallery/2022/1.jpg') }}" alt="masonry" style="border-radius: 10px;"></li>
                        <li><img src="{{ asset('gallery/2022/2.jpg') }}" alt="masonry" style="border-radius: 10px;"></li>
                        <li><img src="{{ asset('gallery/2022/3.jpg') }}" alt="masonry" style="border-radius: 10px;"></li>
                        <li><img src="{{ asset('gallery/2022/4.jpg') }}" alt="masonry" style="border-radius: 10px;"></li>
                        <li><img src="{{ asset('gallery/2022/5.jpg') }}" alt="masonry" style="border-radius: 10px;"></li>
                        <li><img src="{{ asset('gallery/2022/9.jpg') }}" alt="masonry" style="border-radius: 10px;"></li>
                        <li><img src="{{ asset('gallery/2023/1.jpeg') }}" alt="masonry" style="border-radius: 10px;"></li>
                        <li><img src="{{ asset('gallery/2023/4.png') }}" alt="masonry" style="border-radius: 10px;"></li>
                        <li><img src="{{ asset('gallery/2023/9.jpeg') }}" alt="masonry" style="border-radius: 10px;"></li>
                        <li><img src="{{ asset('gallery/2023/13.jpeg') }}" alt="masonry" style="border-radius: 10px;"></li>
                        <li><img src="{{ asset('gallery/2023/15.jpg') }}" alt="masonry" style="border-radius: 10px;"></li>
                </ul>

                <div class="d-flex justify-content-center">
                    <a href="{{route('galeri')}}">
                        <button type="button" class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak">Lihat Semua
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>
                        </button>
                    </a>
                </div>
            </section>

            <section id="media mt-3">
                <div class="row featurette">
                    <h6 class="fw-bold text-success text-center judul">
                        &mdash;&mdash;
                        MEDIA PARTNER
                        &mdash;&mdash;
                    </h6>
                    <div class="row text-center text-lg-start img-reveal">
                        <div class="col-lg-3 col-md-4 col-6 ">
                            <img class="img-fluid "
                                src="{{ asset('assets/image/work4.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img class="img-fluid "
                                src="{{ asset('assets/image/work5.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img class="img-fluid "
                                src="{{ asset('assets/image/work6.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <img class="img-fluid "
                                src="{{ asset('assets/image/work4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <h1 class="text-center fw-bold p-4 text-title">Apa Kata Mereka Tentang <span> <img src="{{asset('images/ASSETS.svg')}}" alt=""></span></h1>
<div class="container-fluid ">
    <div class="row row-cols-1 row-cols-lg-2 g-5">
        <div class="col">
            <div class="card mb-3 bg-green-1" >
                <div class="row me-3  g-0">
                  <div class="col">
                    <div class="container-fluid m-4 overflow-hidden radius-20 object-fit-cover " style="height:250px; width:230px;">
                        <img src="{{asset('assets/image/testimoni/rangga2.JPG')}}" class="img-fluid " alt="...">
                    </div>

                  </div>
                  <div class="col">
                    <div class="card-body">
                      <p class="card-text text-justify fs-7">Saya senang dan bangga bisa menjadi bagian dari ASSETS. Karena di ASSETS saya mendapat teman-teman baru, teman-teman yang baik dan supportive. Proker yang ada di ASSETS juga seru-seru dan tentunya bermanfaat. Gokil bangett lahhh ASSETS 🤩</p>
                      <p class="card-text text-end"><small class="">-Rangga TRPL-21</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 bg-green-2" >
                <div class="row g-0 me-3">
                  <div class="col-md">
                    <div class="container-fluid m-4 overflow-hidden radius-20 object-fit-cover " style="height:250px; width:230px;">
                        <img src="{{asset('assets/image/testimoni/wisnu2.JPG')}}" class="img-fluid " alt="...">
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                      <p class="card-text text-justify fs-7">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex eaque sed totam sunt, quisquam, illo maxime exercitationem iusto officia sequi natus impedit tenetur quod! Cum vitae ut quae in.</p>
                      <p class="card-text text-end"><small class="">-Wisnu TRPL-21</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 bg-green-2" >
                <div class="row g-0 me-3 ">
                  <div class="col-md">
                    <div class="container-fluid m-4 overflow-hidden radius-20 object-fit-cover " style="height:250px; width:230px;">
                        <img src="{{asset('assets/image/testimoni/fabih2.JPG')}}" class="img-fluid " alt="...">
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                      <p class="card-text text-justify fs-7">"aku sih ga bisa berkata2 lagi , the best lah pokoknya untuk assets"</p>
                      <p class="card-text text-end"><small class="">-Fabih TRPL-22</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 bg-green-1" >
                <div class="row g-0 me-3">
                  <div class="col-md">
                    <div class="container-fluid m-4 overflow-hidden radius-20 object-fit-cover " style="height:250px; width:230px;">
                        <img src="{{asset('assets/image/testimoni/caca2.JPG')}}" class="img-fluid " alt="...">
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                      <p class="card-text text-justify fs-8">Berdinamika di ASSETS telah memberikan banyak insight baru. Melalui proker-prokernya, ASSETS telah menjadi jalan penghubung antara industri dengan civitas akademik, khususnya mahasiswa Teknologi Rekayasa Perangkat Lunak, juga menjadi wadah penghubung antarmahasiswa untuk menciptakan TRPL yang satu. Menjadi bagian dari ASSETS adalah salah satu kesempatan baik yang telah saya ambil.</p>
                      <p class="card-text text-end"><small class="">-Caca TRPL-22</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
</div>

                <div class="gabung">
                    <p class="text-center mt-3 fw-bold judul">
                        Mau bergabung jadi partner ASEETS? Yuk Lihat cara selengkapnya
                    </p>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="https://drive.google.com/file/d/1c6tk8yi4jbkYqjosCExg662QPzEz-ytK/view?usp=share_link">
                        <button type="submit" class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak">Klik disini ya!
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>
                        </button>
                    </a>
                </div>
            </section>

        <div class="modal-footer flex-column border-top-0 mt-5">
            <div class="saran judul">
                <p class="text-center fw-bold"> Ayo berikan saran & kritikmu untuk ASSETS yang lebih baik 🙌</p>
                <div class="d-flex justify-content-center">
                    <a href="#">
                        <button type="submit"
                            class="btn btn-success btn-lg px-4 me-md-2 rounded-pill kotak text-center">
                            Klik disini ya!

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path
                                    d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>


        @include('components.footer')
    </main>

    <!-- footer -->


</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="{{ asset('assets/js/masonry.js') }}"></script>

<script>
    $( document ).ready(function() {
        $('.rem-masonry').masonry({
            width: "300px",
            padding: "10px"
        });

    });
</script>

<!--===== SCROLL REVEAL =====-->
<script src="https://unpkg.com/scrollreveal"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
@endsection


