@extends('layouts.dump2')
@section('title',"Tentang Kami")
@include('components.navbar')
@section('content')
<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ getAssetDir('assets/image/work5.jpg') }}" alt="" srcset="" class="bd-placeholder-img" width="100%" height="100%">
            </div>
            <div class="carousel-item">
                <img src="{{ getAssetDir('assets/image/work4.jpg') }}" alt="" srcset="" class="bd-placeholder-img" width="100%" height="100%">
            </div>
            <div class="carousel-item">
                <img src="{{ getAssetDir('assets/image/work6.jpg') }}" alt="" srcset="" class="bd-placeholder-img" width="100%" height="100%">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <section id="tentang">
            <div class="row p-4 p-md-5 mb-4">
                <div class="text-center">
                    <h6 class="fw-bold text-success judul">
                        &mdash;&mdash; 
                        TENTANG
                        &mdash;&mdash; 
                    </h6>

                    <h1 class="display-5 fw-bold lh-1 mb-3 subjudul">
                        Association of Software 
                        Engineering Technology Students
                    </h1>
                </div>

                <div>
                    <div class="container-fluid py-5 konten">
                        <div class="explain">
                            <p>
                                <b>ASSETS</b> singkatan dari Association of Software Engineering Technology yang merupakan organisasi himpunan mahasiswa Teknologi Rekayasa Perangkat Lunak Sekolah Vokasi Universitas Gadjah Mada. ASSETS pertama kali didirikan pada Februari 2020. ASSETS UGM memiliki prioritas utama untuk menjadi salah satu himpunan mahasiswa mandiri yang memberikan komitmen, integritas dan kontribusi untuk kemajuan Program Diploma Teknologi Rekayasa Perangkat Lunak UGM.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
        <section id="struktur">
            <div class="row featurette">
                <div class="col-md-5 mb-5 img-reveal">
                    <img src="{{ getAssetDir('assets/image/Team spirit.png') }}"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        alt="Image of about" width="auto" height="500" loading="lazy">
                </div>

                <div class="col-md-7 order-md-2 awalan">
                    <h6 class="fw-bold text-success">
                        &mdash;&mdash; 
                        STRUKTUR ORGANISASI
                    </h6>
                    <h1 class="display-5 fw-bold lh-1 mb-3">
                        Yuk kenali divisi - divisi di ASSETS
                    </h1>
                    <p class="lead fst-italic">ASSETS memiliki 5 divisi, yaitu Humas, PSDM, Kreatif, Kastrad, dan
                        Minkat</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <a href="/struktur">
                            <button type="button" class="btn btn-success btn-lg px-4 me-md-2 rounded-pill mt-5 kotak">Cari
                                Tahu Selengkapnya 
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </section>

@include('components.footer')
    </div>
</main>
@endsection