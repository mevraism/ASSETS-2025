@extends('layouts.orion')
@section('title', 'PIMNAS-2023')
@section('content')
@include('components.navbar-coklat')
    <div class="container-fluid position-relative px-0 mb-5 overflow-hidden ">

        <img src="{{asset('assets/image/news/pimnas.png')}}" alt="" class="container-fluid  p-0" style="height: 572px; object-fit:cover !important;" >
        <div class="green position-absolute z-2" style="top:450px; filter:blur(150px); width:350px; height:350px"></div>
        <div class="blue position-absolute z-2" style="top:550px;width:350px; height:350px; filter:blur(150px)"></div>
        <div class="container rounded-3 p-5 mb-5 text-justify text-white">
            <p class="fs-5 fw-bold text-cream">Mahasiswa TRPL Raih Medali Emas di PIMNAS</p>
            <p class="text-secondary">- 30 November 2023 -</p>
            <p class="text-justify">Universitas Gadjah Mada (UGM) meraih gelar Juara Umum pada Pekan Ilmiah Mahasiswa Nasional (PIMNAS) ke-36 yang berlangsung di Universitas Padjajaran, Bandung, pada tanggal 27-30 November. UGM berhasil mendominasi dengan meraih total 29 medali, terdiri dari 11 emas, 9 perak, dan 9 perunggu.</p>

            <p class="text-justify">Rektor UGM, Prof.dr. Ova Emilia, M.Med., Ed., Sp.OG(K)., Ph.D., mengungkapkan kebahagiaannya atas prestasi ini, terutama karena tim UGM berhasil membawa pulang piala bergilir sebagai juara umum PIMNAS. Ova menekankan bahwa pencapaian ini merupakan hasil kerja keras, mengingat PIMNAS adalah kompetisi bergengsi di Indonesia dengan persaingan yang semakin ketat setiap tahunnya.</p>

            <p class="text-justify">“Selamat untuk kontingen UGM bisa meraih juara umum kembali,” ujar Ova pada Kamis (30/11) malam setelah menerima Piala Bergilir Adhikarta Kertawidya di Universitas Padjajaran. Ia menambahkan bahwa kemenangan ini mencerminkan peningkatan kualitas penelitian dan karya yang dihasilkan oleh mahasiswa UGM.</p>

            <p class="text-justify">Dalam PIMNAS ke-36, UGM berhasil meloloskan 62 tim ke babak final dari total 282 tim yang mendapatkan pendanaan untuk melaksanakan program. Kontingen UGM meraih 5 emas, 5 perak, dan 5 perunggu dari kategori presentasi, serta 6 emas, 4 perak, dan 4 perunggu dari kategori poster.</p>

            <p class="text-justify">Selain itu, dua mahasiswa UGM, yaitu Muhammad Jhony Fonsen dalam kategori PKM PM 1 dan Seravin Afra Secunda dalam kategori PKM K 4, meraih penghargaan individu sebagai mahasiswa bertalenta.</p>

            <p class="text-justify">PIMNAS ke-36, diselenggarakan oleh Kemenristekdikti, merupakan ajang tahunan untuk meningkatkan kreativitas mahasiswa dalam pengembangan IPTEKS serta meningkatkan kompetensi dalam menyampaikan karya intelektual. Kompetisi ini diikuti oleh 525 kelompok Program Kreativitas Mahasiswa (PKM) dari 106 perguruan tinggi di Indonesia, dengan total 2.411 peserta dan 77 juri yang terlibat.</p>
            <a class=" text-white no-underlined text-justify" href="https://ugm.ac.id/id/berita/ugm-juara-umum-pimnas-2023/">Source : https://ugm.ac.id/id/berita/ugm-juara-umum-pimnas-2023/</a>
        </div>

    </div>
    @include('components.footer-coklat')
@endsection
