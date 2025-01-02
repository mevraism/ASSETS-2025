@extends('layouts.orion')
@section('title', 'PSDM')
@section('content')
    @include('components.navbar-coklat')
    <div class="container-fluid position-relative p-0 m-0 overflow-hidden ">
        <div class="orange position-absolute z-0"></div>
        <img src="{{ asset('images/Stars.svg') }}" class="position-absolute z-0 pulsate w-25 " alt=""
            style="right:50px;top:-100px;">
        <div class="container my-5 pt-5  mx-auto position-relative z-1">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('assets/image/psdm/psdm.png') }}" class="card-img-top rounded-2"
                        style="max-width:560px; max-height:320px;" alt="...">
                </div>
                <div class="col" data-aos="fade-left" data-aos-duration="1000">
                    <div class="container ms-2 mt-2 ">
                        <p class="fs-2 text-cream ">Pengembangan Sumber Daya Manusia</p>
                        <p class="text-white">Divisi PSDM (Pengembangan Sumber Daya Manusia) bertugas dalam mengatur dan mengurus pemenuhan kapasitas sumber daya manusia dengan mendukung pengembangan kompetensi dan mengoptimalkan potensi dari teman-teman TRPL. Selain itu, PSDM juga bertujuan untuk mempererat hubungan antar mahasiswa TRPL.</p>

                    </div>
                </div>
            </div>
        </div>

        {{-- Orion --}}
        <div class="container d-flex justify-content-center m-3">
            <img src="{{ asset('images/Orion.svg') }}" alt="">
        </div>
        {{-- Proker --}}

        <p class="mt-5 fs-1 text-center text-white ">--<span class="text-cream">Proker</span>--</p>

        <div class="purple position-absolute z-0"></div>
        <div class="blue position-absolute z-0"></div>
        <div class="container mx-5 d-flex justify-content-center position-relative  z-1 " data-aos="fade-up"
            data-aos-duration="3000">
            <div class="container m-4">
                <div class="row row-cols-2 row-cols-md-4 g-3">
                    <div class="col">
                        <div class="card prokerCard pt-2 px-0 m-0" style="height: 360px">
                            <div
                                class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                                <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="..."
                                    style="width:100%; height:100%">
                                <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute"
                                    style="width:20%; height:20%;" alt="">
                                <img src="{{ asset('assets/image/psdm/FirstGathering.svg') }}"
                                    class=" z-2 position-absolute" style="width:10%; height:10%;" alt="">
                            </div>
                            <div class=" card-body text-center py-2  my-0 px-2 ">
                                <h5 class="card-title fs-6 ">First Gathering ASSETS</h5>
                                <p class="card-text fs-7">First Gathering ASSETS merupakan perkumpulan pertama pengurus ASSETS setelah dilakukannya Open Recruitment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card prokerCard pt-2 px-0 m-0"style="height: 360px">
                            <div
                                class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                                <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="..."
                                    style="width:100%; height:100%">
                                <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute"
                                    style="width:20%; height:20%;" alt="">
                                <img src="{{ asset('assets/image/psdm/Series.svg') }}"
                                    class=" z-2 position-absolute" style="width:10%; height:10%;" alt="">
                            </div>
                            <div class=" card-body text-center pb-4 pt-2  my-0 px-2 ">
                                <h5 class="card-title fs-6">Series</h5>
                                <p class="card-text fs-7">SERIES merupakan Software Engineering Oriented Study event untuk mahasiswa baru agar mempererat keakraban</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card prokerCard pt-2 px-0 m-0"style="height: 360px">
                            <div
                                class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                                <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun " alt="..."
                                    style="width:100%; height:100%">
                                <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute"
                                    style="width:20%; height:20%;" alt="">
                                <img src="{{ asset('assets/image/psdm/Belajar.svg') }}"
                                    class=" z-2 position-absolute" style="width:10%; height:10%;" alt="">
                            </div>
                            <div class=" card-body text-center pb-4 pt-2  my-0 px-2 ">
                                <h5 class="card-title fs-6 ">Belajar Bareng TRPL</h5>
                                <p class="card-text fs-7">Belajar Bareng merupakan acara belajar bersama menjelang UTS & UAS agar lebih siap lagi memahami materi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card prokerCard pt-2 px-0 m-0" style="height: 360px">
                            <div
                                class=" container d-flex flex-column align-items-center justify-content-center card-img-top ">
                                <img src="{{ asset('images/Sun.svg') }}" class="z-0 position-relative sun "
                                    alt="..." style="width:100%; height:100%">
                                <img src="{{ asset('images/Ellipse 1.svg') }}" class=" z-1 position-absolute"
                                    style="width:20%; height:20%;" alt="">
                                <img src="{{ asset('assets/image/psdm/Birthday.svg') }}"
                                    class=" z-2 position-absolute" style="width:10%; height:10%;" alt="">
                            </div>
                            <div class=" card-body text-center pb-4 pt-2  my-0 px-2 ">
                                <h5 class="card-title fs-6">Birthday Staff</h5>
                                <p class="card-text fs-7">Birthday Staff merupakan ucapan ulang tahun  untuk pengurus ASSETS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Anggota --}}
        <p class="mt-5 fs-1 text-center text-white ">--<span class="text-cream">Meet Our Team</span>--</p>
        <div class="container-fluid position-relative " style="height:700px">
            <img src="{{ asset('images/Stars.svg') }}" class="position-absolute pulsate z-10" alt=""
                style="right:-50px;top:-40%;">
            <div class="container-fluid overflow-visible align-items-center d-flex justify-content-center pb-5 z-2  "
                data-aos="zoom-in" data-aos-duration="1200">
                <div class="slider position-absolute z-2" style="top:50%">
                    <div class="item">
                        <div class="card rounded-4 mb-2 overflow-hidden  bg-lavender teamCard"style="width:360px;"
                            id="card1">
                            <img src="{{ asset('assets/image/psdm/arya1.JPG') }}"
                                class="card-img-top position-relative z-0" alt="...">
                            <div class="card-body position-absolute z-1 bottom-0  pb-4 container-fluid rounded-bottom-2 ">
                                <div class="text-center">
                                    <h5 class="card-title text-center ">Arya</h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-center ">Anggota Divisi</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-4 mb-2 overflow-hidden  bg-lavender teamCard" style="width:360px;"
                            id="card1">
                            <img src="{{ asset('assets/image/psdm/christo1.JPG') }}"
                                class="card-img-top position-relative z-0" alt="...">
                            <div class="card-body position-absolute z-1 bottom-0  pb-4 container-fluid rounded-bottom-2 ">
                                <div class="text-center">
                                    <h5 class="card-title text-center ">Christo</h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-center ">Kepala Divisi</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-4 mb-2 overflow-hidden  bg-lavender teamCard" style="width:360px;"
                            id="card1">
                            <img src="{{ asset('assets/image/psdm/nadia1.JPG') }}"
                                class="card-img-top position-relative z-0" alt="...">
                            <div class="card-body position-absolute z-1 bottom-0  pb-4 container-fluid rounded-bottom-2 ">
                                <div class="text-center">
                                    <h5 class="card-title text-center ">Nadia</h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-center ">Anggota Divisi</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-4 mb-2 bg-lavender teamCard overflow-hidden " style="width:360px;"
                            id="card1">
                            <img src="{{ asset('assets/image/psdm/rahul1.JPG') }}"
                                class="card-img-top position-relative z-0" alt="...">
                            <div class="card-body position-absolute z-1 pb-4 container-fluid bottom-0 rounded-bottom-2 ">
                                <div class="text-center">
                                    <h5 class="card-title text-center ">Rahul</h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-center ">Anggota Divisi</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card rounded-4 mb-2 bg-lavender teamCard overflow-hidden " style="width:360px;"
                            id="card1">
                            <img src="{{ asset('assets/image/psdm/askar1.JPG') }}"
                                class="card-img-top position-relative z-0" alt="...">
                            <div class="card-body position-absolute z-1 pb-4 container-fluid bottom-0 rounded-bottom-2 ">
                                <div class="text-center">
                                    <h5 class="card-title text-center ">Askar</h5>
                                    <h6 class="card-subtitle mb-2 text-muted text-center ">Anggota Divisi</h6>

                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="next">></button>
                    <button id="prev">
                        < </div>
                </div>
            </div>
        </div>
        @include('components.footer-coklat')
        <script src="{{ asset('assets/js/carousel.js') }}"></script>
        <script>
            // Initialize AOS after the DOM has loaded
            document.addEventListener('DOMContentLoaded', function() {
                AOS.init();
            });
        </script>
    @endsection
