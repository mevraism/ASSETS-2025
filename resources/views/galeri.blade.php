
@extends('layouts.dump2')

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
            <section id="galeri" class="new-page">
                <div class="row featurette mb-3 judul">
                    <h1 class="display-5 fw-bold lh-1 text-center">Galeri</h1>
                </div>
                
                <div class="container mt-5 mb-5 d-flex justify-content-center align-items-center">
                        <a href="#" class="mx-1"><button class="mx-2 btn-galeri kotak @if(request()->path() == 'galeri/2019') active @endif" data-year="2019">2019</button></a>
                        <a href="#" class="mx-1"><button class="mx-2 btn-galeri kotak @if(request()->path() == 'galeri/2020') active @endif" data-year="2020">2020</button></a>
                        <a href="#" class="mx-1"><button class="mx-2 btn-galeri kotak @if(request()->path() == 'galeri/2021') active @endif" data-year="2021">2021</button></a>
                        <a href="#" class="mx-1"><button class="mx-2 btn-galeri kotak @if(request()->path() == 'galeri/2022') active @endif" data-year="2022">2022</button></a>
                        <a href="#" class="mx-1"><button class="mx-2 btn-galeri kotak @if(request()->path() == 'galeri/2023') active @endif" data-year="2023">2023</button></a>
                </div>

                <ul class="rem-masonry judul" style="max-width: 100%!important;">
                    @if(isset($images) && count($images) > 0)
                        @foreach ($images as $image)
                            <li><img src="{{ asset('gallery/' . $image) }}" alt="masonry" style="border-radius: 10px;"></li>
                        @endforeach
                    @elseif(count($images) == 0)
                        <p class="text-center">Oops! No photos found.</p>
                    @else
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
                    @endif
                </ul>
                
                <div class="d-flex justify-content-center">
                    <a href="galeri.html">
                        <button type="button" class="btn btn-galeri kotak btn-lg px-4 me-md-2 rounded-pill kotak">Load more
                            <img src="../assets/image/next.png" width="24" class="img-fluid">
                        </button>
                    </a>
                </div>
            </section>

        <div class="container footer">
            <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                <div class="col d-flex align-items-start">
                    <div>
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('assets/image/logo.png') }}" alt="" width="120" height="24"
                                class="d-inline-block align-text-top">
                        </a>
                        <p class="assets-footer">
                            ASSETS singkatan dari Association of Software Engineering Technology yang merupakan
                            organisasi himpunan mahasiswa Teknologi Rekayasa Perangkat Lunak Sekolah Vokasi Universitas
                            Gadjah Mada.
                        </p>

                        <table style="width:100%">
                            <tr>
                                <th><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-telephone text-success" viewBox="0 0 16 16">
                                        <path
                                            d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                    </svg></th>
                                <th>
                                    <div class="fw-lighter">Tel: </div>
                                    <div class="fw-bold">310-437-2766</div>
                                </th>

                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('assets/image/email.png') }}" alt="" srcset="" width="25" height="25">
                                    </svg>
                                </td>
                                <td>
                                    <div class="fw-lighter">Mail: </div>
                                    <div class="fw-bold">assets.ugm@gmail.com</div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-geo-alt text-success" viewBox="0 0 16 16">
                                        <path
                                            d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    </svg>
                                </td>
                                <td>
                                    <div class="fw-lighter">Address: </div>
                                    <div class="fw-bold">Special Region of Yogyakarta</div>
                                </td>

                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col d-flex align-items-start">
                </div>
                <div class="col d-flex align-items-start">
                    <div class="col d-flex align-items-start">
                        <div>
                            <div class="fw-bold">Sosial Media</div>
                            <div class="fw-normal mb-4">Ayo kepoin sosial media kami untuk informasi-informasi terbaru
                                seputar kuliah</div>

                            <!-- <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                viewBox="0 0 172 172" style=" fill:#000000;">
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                    stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                    text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g fill="#146c43">
                                        <path
                                            d="M30.96,13.76c-9.45834,0 -17.2,7.74166 -17.2,17.2v110.08c0,9.45834 7.74166,17.2 17.2,17.2h57.90219c0.37149,0.0614 0.75054,0.0614 1.12203,0h19.51797c0.37149,0.0614 0.75054,0.0614 1.12203,0h30.41578c9.45834,0 17.2,-7.74166 17.2,-17.2v-110.08c0,-9.45834 -7.74166,-17.2 -17.2,-17.2zM30.96,20.64h110.08c5.73958,0 10.32,4.58042 10.32,10.32v110.08c0,5.73958 -4.58042,10.32 -10.32,10.32h-27.52v-48.16h13.14187l4.81735,-24.08h-17.95922v-6.88c0,-1.91777 0.18249,-2.06768 0.8264,-2.48594c0.64392,-0.41826 2.63362,-0.95406 6.0536,-0.95406h10.32v-19.37015l-1.96187,-0.93391c0,0 -7.90182,-3.77594 -18.67813,-3.77594c-7.74,0 -14.09854,3.0838 -18.1675,8.17c-4.06896,5.0862 -5.9125,11.89667 -5.9125,19.35v6.88h-10.32v24.08h10.32v48.16h-55.04c-5.73958,0 -10.32,-4.58042 -10.32,-10.32v-110.08c0,-5.73958 4.58042,-10.32 10.32,-10.32zM110.08,51.6c7.15197,0 11.65252,1.57709 13.76,2.41203v7.90797h-3.44c-3.95883,0 -7.13127,0.32749 -9.80265,2.06265c-2.67138,1.73519 -3.95735,5.02888 -3.95735,8.25735v13.76h16.44078l-2.06265,10.32h-14.37813v55.04h-13.76v-55.04h-10.32v-10.32h10.32v-13.76c0,-6.30667 1.59646,-11.5362 4.4075,-15.05c2.81104,-3.5138 6.7725,-5.59 12.7925,-5.59z">
                                        </path>
                                    </g>
                                </g>
                            </svg> -->

                            <a href="https://www.youtube.com/channel/UCGshuHma27IGru9yCR2uLng">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                        stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                        text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#146c43">
                                            <path
                                                d="M83.94406,30.96c-22.70938,0 -44.03469,1.72 -55.38938,4.12531c-7.56531,1.72 -14.10937,6.88 -15.48,14.79469c-1.37062,8.25063 -2.75469,20.64 -2.75469,36.12c0,15.48 1.37063,27.52 3.09063,36.12c1.38406,7.56531 7.91469,13.07469 15.48,14.79469c12.05344,2.40531 32.68,4.12531 55.38937,4.12531c22.70938,0 43.33594,-1.72 55.37594,-4.12531c7.57875,-1.72 14.10938,-6.88 15.48,-14.79469c1.38406,-8.6 3.10406,-20.97594 3.44,-36.45594c0,-15.48 -1.72,-27.86938 -3.44,-36.46938c-1.37062,-7.56531 -7.90125,-13.07469 -15.48,-14.79469c-12.04,-1.72 -33.01594,-3.44 -55.71187,-3.44zM83.94406,37.84c24.76531,0 44.70656,2.05594 54.34125,3.77594c5.16,1.38406 9.28531,4.82406 9.97062,9.29875c2.06938,11.00531 3.44,22.70938 3.44,34.74938c-0.33594,14.78125 -2.05594,26.82125 -3.44,35.42125c-1.02125,6.53062 -7.90125,8.6 -9.97062,9.29875c-12.38938,2.40531 -33.02938,4.11187 -53.66938,4.11187c-20.64,0 -41.61594,-1.37062 -53.65594,-4.11187c-5.16,-1.38406 -9.28531,-4.82406 -9.97062,-9.29875c-2.75469,-9.63469 -3.78938,-22.36 -3.78938,-35.08531c0,-15.82937 1.38406,-27.52 2.75469,-34.73594c1.03469,-6.54406 8.25063,-8.61344 9.97063,-9.29875c11.35469,-2.40531 32.34406,-4.12531 54.01875,-4.12531zM65.36,58.48v55.04l48.16,-27.52zM72.24,70.18406l27.52,15.81594l-27.52,15.81594z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                            <a href="https://www.instagram.com/assets_ugm/">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                        stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                        text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#146c43">
                                            <path
                                                d="M55.04,10.32c-24.65626,0 -44.72,20.06374 -44.72,44.72v61.92c0,24.65626 20.06374,44.72 44.72,44.72h61.92c24.65626,0 44.72,-20.06374 44.72,-44.72v-61.92c0,-24.65626 -20.06374,-44.72 -44.72,-44.72zM55.04,17.2h61.92c20.9375,0 37.84,16.9025 37.84,37.84v61.92c0,20.9375 -16.9025,37.84 -37.84,37.84h-61.92c-20.9375,0 -37.84,-16.9025 -37.84,-37.84v-61.92c0,-20.9375 16.9025,-37.84 37.84,-37.84zM127.28,37.84c-3.79972,0 -6.88,3.08028 -6.88,6.88c0,3.79972 3.08028,6.88 6.88,6.88c3.79972,0 6.88,-3.08028 6.88,-6.88c0,-3.79972 -3.08028,-6.88 -6.88,-6.88zM86,48.16c-20.85771,0 -37.84,16.98229 -37.84,37.84c0,20.85771 16.98229,37.84 37.84,37.84c20.85771,0 37.84,-16.98229 37.84,-37.84c0,-20.85771 -16.98229,-37.84 -37.84,-37.84zM86,55.04c17.13948,0 30.96,13.82052 30.96,30.96c0,17.13948 -13.82052,30.96 -30.96,30.96c-17.13948,0 -30.96,-13.82052 -30.96,-30.96c0,-17.13948 13.82052,-30.96 30.96,-30.96z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                            <a href="https://twitter.com/assets_ugm">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                        stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                        stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                        text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#146c43">
                                            <path
                                                d="M117.7125,18.8125c-20.57281,0 -37.3025,16.72969 -37.3025,37.3025c0,1.23625 0.30906,2.44563 0.43,3.655c-25.43719,-2.43219 -47.93156,-14.68719 -63.21,-33.4325c-0.71219,-0.90031 -1.81406,-1.38406 -2.96969,-1.30344c-1.14219,0.08062 -2.16344,0.73906 -2.72781,1.73344c-3.21156,5.52281 -5.0525,11.87875 -5.0525,18.705c0,8.26406 2.95625,15.82938 7.525,22.0375c-0.88687,-0.38969 -1.85437,-0.60469 -2.6875,-1.075c-1.06156,-0.56437 -2.33812,-0.5375 -3.37281,0.08063c-1.03469,0.61812 -1.66625,1.73344 -1.67969,2.92937v0.43c0,12.67156 6.5575,23.67688 16.2325,30.4225c-0.1075,-0.01344 -0.215,0.02688 -0.3225,0c-1.1825,-0.20156 -2.37844,0.215 -3.17125,1.11531c-0.79281,0.90031 -1.04812,2.15 -0.69875,3.29219c3.84313,11.94594 13.6525,21.07 25.8,24.4025c-9.675,5.75125 -20.89531,9.1375 -33.0025,9.1375c-2.62031,0 -5.13312,-0.13437 -7.6325,-0.43c-1.6125,-0.215 -3.15781,0.72563 -3.69531,2.2575c-0.55094,1.53188 0.05375,3.23844 1.43781,4.085c15.52031,9.95719 33.94313,15.8025 53.75,15.8025c32.10219,0 57.28406,-13.41062 74.175,-32.5725c16.89094,-19.16187 25.6925,-44.04812 25.6925,-67.295c0,-0.98094 -0.08062,-1.935 -0.1075,-2.9025c6.30219,-4.82406 11.9325,-10.48125 16.34,-17.0925c0.87344,-1.27656 0.77938,-2.98312 -0.22844,-4.16562c-0.99438,-1.1825 -2.67406,-1.54531 -4.07156,-0.88688c-1.77375,0.79281 -3.84312,0.87344 -5.6975,1.505c2.44563,-3.26531 4.54188,-6.78594 5.805,-10.75c0.43,-1.35719 -0.04031,-2.84875 -1.15562,-3.73562c-1.11531,-0.87344 -2.67406,-0.98094 -3.89688,-0.24188c-5.87219,3.48031 -12.37594,5.92594 -19.2425,7.4175c-6.665,-6.235 -15.43969,-10.4275 -25.2625,-10.4275zM117.7125,25.6925c8.77469,0 16.70281,3.74906 22.2525,9.675c0.83313,0.86 2.05594,1.22281 3.225,0.9675c4.48813,-0.88687 8.74781,-2.19031 12.9,-3.87c-2.39187,3.225 -5.34812,5.97969 -8.815,8.0625c-1.57219,0.76594 -2.31125,2.58 -1.73344,4.23281c0.56437,1.63937 2.28437,2.59344 3.99094,2.21719c3.44,-0.41656 6.50375,-1.81406 9.7825,-2.6875c-2.94281,3.18469 -6.16781,6.06031 -9.675,8.6c-0.95406,0.69875 -1.47812,1.8275 -1.3975,3.01c0.05375,1.3975 0.1075,2.78156 0.1075,4.1925c0,21.5 -8.25062,44.84094 -23.9725,62.6725c-15.72187,17.83156 -38.8075,30.315 -69.015,30.315c-13.71969,0 -26.67344,-3.03687 -38.3775,-8.385c14.5125,-1.11531 27.89625,-6.24844 38.7,-14.7275c1.12875,-0.90031 1.57219,-2.40531 1.11531,-3.77594c-0.45688,-1.37063 -1.72,-2.31125 -3.15781,-2.35156c-11.34125,-0.20156 -20.84156,-6.79937 -25.9075,-16.125c0.18813,0 0.34938,0 0.5375,0c3.39969,0 6.75906,-0.43 9.89,-1.29c1.505,-0.44344 2.53969,-1.84094 2.48594,-3.41312c-0.05375,-1.57219 -1.16906,-2.91594 -2.70094,-3.25188c-12.24156,-2.4725 -21.41937,-12.44312 -23.5425,-24.8325c3.46688,1.19594 7.01438,2.13656 10.8575,2.2575c1.57219,0.09406 2.99656,-0.88687 3.48031,-2.37844c0.48375,-1.49156 -0.1075,-3.13094 -1.43781,-3.96406c-8.17,-5.46906 -13.545,-14.78125 -13.545,-25.37c0,-3.92375 1.02125,-7.525 2.365,-10.965c17.2,18.87969 41.28,31.41688 68.4775,32.7875c1.075,0.05375 2.12313,-0.38969 2.82188,-1.20937c0.69875,-0.83313 0.9675,-1.935 0.72562,-2.98313c-0.52406,-2.23062 -0.86,-4.59562 -0.86,-6.9875c0,-16.85062 13.57188,-30.4225 30.4225,-30.4225z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </a>

                            <a href="https://www.linkedin.com/company/association-of-software-engineering-technology-students-ugm/mycompany/">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                    width="35" height="35"
                                    viewBox="0 0 172 172"
                                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#146c43"><path d="M35.83333,21.5c-7.91917,0 -14.33333,6.41417 -14.33333,14.33333v100.33333c0,7.91917 6.41417,14.33333 14.33333,14.33333h100.33333c7.91917,0 14.33333,-6.41417 14.33333,-14.33333v-100.33333c0,-7.91917 -6.41417,-14.33333 -14.33333,-14.33333zM35.83333,35.83333h100.33333v100.33333h-100.33333zM55.75163,45.26758c-6.14183,0 -9.82617,3.69207 -9.82617,8.6084c0,4.91633 3.68479,8.5944 9.21029,8.5944c6.14183,0 9.82617,-3.67807 9.82617,-8.5944c0,-4.91633 -3.68479,-8.6084 -9.21029,-8.6084zM46.41536,71.66667v50.16667h18.08464v-50.16667zM79.42122,71.66667v50.16667h18.08464v-27.4209c0,-8.16283 5.82392,-9.33626 7.57259,-9.33626c1.74867,0 6.42481,1.75393 6.42481,9.33626v27.4209h17.49674v-27.4209c0,-15.74517 -6.99657,-22.74577 -15.74707,-22.74577c-8.7505,0 -13.4179,2.91369 -15.74707,6.99869v-6.99869z"></path></g></g>
                                </svg>
                            </a>

                            <!-- <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                viewBox="0 0 172 172" style=" fill:#000000;">
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                    stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                    text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g fill="#146c43">
                                        <path
                                            d="M86,6.88c-43.6552,0 -79.12,35.4648 -79.12,79.12c0,14.03209 3.84829,27.12743 10.26625,38.5589l-10.13859,36.19391c-0.32961,1.17862 -0.00828,2.44361 0.84387,3.32204c0.85215,0.87843 2.1068,1.23803 3.29488,0.94436l37.73922,-9.3525c11.0895,5.92016 23.67289,9.45328 37.11437,9.45328c43.6552,0 79.12,-35.4648 79.12,-79.12c0,-43.6552 -35.4648,-79.12 -79.12,-79.12zM86,13.76c39.9368,0 72.24,32.3032 72.24,72.24c0,39.9368 -32.3032,72.24 -72.24,72.24c-12.80359,0 -24.7951,-3.33806 -35.21969,-9.1711c-0.76244,-0.42603 -1.65837,-0.54613 -2.5061,-0.33594l-33.04953,8.19016l8.86203,-31.61844c0.25624,-0.90292 0.13246,-1.87134 -0.34266,-2.68078c-6.3353,-10.74275 -9.98406,-23.24194 -9.98406,-36.6239c0,-39.9368 32.3032,-72.24 72.24,-72.24zM57.25047,44.72c-2.20517,0 -5.35447,0.82041 -7.94156,3.60797c-1.5539,1.67432 -8.0289,7.98315 -8.0289,19.07453c0,11.56363 8.01999,21.54162 8.98969,22.8236h0.00672v0.00672c-0.09199,-0.12088 1.23082,1.79472 2.99656,4.09172c1.76575,2.29699 4.2349,5.31383 7.33688,8.57984c6.20394,6.53203 14.92665,14.08115 25.75297,18.69828c4.98566,2.12306 8.91892,3.40494 11.8989,4.34031c5.52255,1.7341 10.55261,1.4705 14.3311,0.91375c2.82823,-0.4165 5.93885,-1.77449 9.01656,-3.72219c3.07772,-1.9477 6.09406,-4.36949 7.42422,-8.04906c0.9529,-2.63791 1.43732,-5.07565 1.6125,-7.08156c0.08758,-1.00296 0.09871,-1.88815 0.03359,-2.70765c-0.06526,-0.8195 0.00447,-1.44725 -0.75922,-2.70094c-1.60156,-2.62959 -3.41532,-2.69822 -5.30781,-3.63485c-1.0515,-0.52041 -4.04526,-1.9823 -7.04797,-3.41312c-2.99933,-1.42922 -5.5964,-2.69503 -7.19578,-3.26531c-1.01048,-0.36355 -2.24435,-0.8869 -4.02453,-0.68531c-1.78018,0.20158 -3.53839,1.48601 -4.56203,3.00328c-0.97027,1.43816 -4.87621,6.04872 -6.06703,7.40406c-0.01582,-0.00963 0.08751,0.03797 -0.38297,-0.19485c-1.47277,-0.72889 -3.27396,-1.34866 -5.93938,-2.75469c-2.66541,-1.40603 -5.99961,-3.48227 -9.64812,-6.6986v-0.00672c-5.43043,-4.78075 -9.23423,-10.78301 -10.43422,-12.79922c0.08084,-0.09618 -0.00961,0.0203 0.16125,-0.14781l0.00672,-0.00672c1.22641,-1.20797 2.31331,-2.65072 3.23172,-3.70875c1.30217,-1.50014 1.87683,-2.82258 2.49937,-4.05812c1.24072,-2.46244 0.54988,-5.17212 -0.16797,-6.59781v-0.00672c0.04957,0.09862 -0.38831,-0.86752 -0.86,-1.98203c-0.47303,-1.11769 -1.076,-2.5667 -1.72,-4.11188c-1.288,-3.09035 -2.72595,-6.55646 -3.58109,-8.58656v-0.00672c-1.00739,-2.39124 -2.37031,-4.11391 -4.15219,-4.945c-1.78188,-0.83109 -3.35616,-0.59481 -3.41984,-0.59797h-0.00672c-1.27158,-0.05866 -2.66694,-0.0739 -4.0514,-0.0739zM57.25047,51.6c1.32626,0 2.63379,0.01617 3.7289,0.06719c1.12658,0.05614 1.05651,0.06075 0.83985,-0.04031c-0.22013,-0.10265 0.07854,-0.13598 0.71891,1.38406c0.83733,1.98782 2.28238,5.46648 3.57437,8.56641c0.646,1.54996 1.25058,3.00458 1.73344,4.14547c0.48286,1.14089 0.74449,1.77788 1.04813,2.38515v0.00672l0.00672,0.00672c0.2977,0.58738 0.27137,0.21132 0.16797,0.41656c-0.72594,1.44077 -0.82444,1.79453 -1.55875,2.64047c-1.11807,1.28805 -2.25852,2.72447 -2.86219,3.31906c-0.52814,0.51882 -1.48109,1.32709 -2.0761,2.90922c-0.59592,1.58455 -0.31779,3.7586 0.63828,5.38172c1.27291,2.16099 5.46756,8.98838 11.98625,14.7275c4.10524,3.61896 7.92985,6.01407 10.98515,7.62578c3.05531,1.61171 5.54379,2.55301 6.10063,2.8286c1.32226,0.6544 2.76742,1.16255 4.44781,0.96078c1.68039,-0.20176 3.12916,-1.22133 4.0514,-2.26422l0.00672,-0.00672c1.2274,-1.39152 4.87455,-5.55605 6.62469,-8.12297c0.07417,0.02614 0.04988,0.00585 0.63156,0.215v0.00672h0.00672c0.26557,0.09457 3.59181,1.58337 6.5575,2.99656c2.96569,1.41319 5.97581,2.88202 6.95391,3.3661c1.41155,0.6986 2.07852,1.15339 2.25078,1.15562c0.01164,0.30267 0.02341,0.63065 -0.02016,1.12875c-0.12064,1.38163 -0.48995,3.29404 -1.22953,5.34141c-0.36231,1.00226 -2.24937,3.06941 -4.62922,4.57547c-2.37984,1.50606 -5.2765,2.56983 -6.34922,2.72781c-3.22536,0.47525 -7.05485,0.64875 -11.26063,-0.67188c-2.91618,-0.91535 -6.55236,-2.10022 -11.26062,-4.10515c-9.5488,-4.07231 -17.66452,-11.00199 -23.46188,-17.10594c-2.89867,-3.05197 -5.22106,-5.89303 -6.87328,-8.04234c-1.64914,-2.1453 -2.36926,-3.26169 -2.96969,-4.05141l-0.00672,-0.00672c-1.06581,-1.40946 -7.59219,-10.48746 -7.59219,-18.66469c0,-8.65422 4.01963,-12.04796 6.19469,-14.39156c1.14187,-1.23035 2.39024,-1.41094 2.89578,-1.41094z">
                                        </path>
                                    </g>
                                </g>
                            </svg> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <div class="container">
        <footer class="py-3 my-4 footer">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="#tentang" class="nav-link px-2 text-muted">Tentang Kami</a></li>
                <li class="nav-item"><a href="#struktur" class="nav-link px-2 text-muted">Struktur Organisasi</a></li>
                <li class="nav-item"><a href="#visi" class="nav-link px-2 text-muted">Visi Misi</a></li>
                <li class="nav-item"><a href="#lokasi" class="nav-link px-2 text-muted">Lokasi</a></li>
                <li class="nav-item"><a href="#galeri" class="nav-link px-2 text-muted">Galeri</a></li>
                <li class="nav-item"><a href="#media" class="nav-link px-2 text-muted">Media Partner</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Vote</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Hubungi Kami</a></li>
            </ul>
            <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
        </footer>
    </div>

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
<script>
        $(document).ready(function() {
            $('.btn-galeri').on('click', function(e) {
                e.preventDefault();

                var year = $(this).data('year');
                window.location.href = '/galeri/' + year;
            });
        });
</script>

<!--===== SCROLL REVEAL =====-->
<script src="https://unpkg.com/scrollreveal"></script>

<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
@endsection