@extends('layouts.orion')
@section('title', 'Film Setan Alas')
@section('content')
@include('components.navbar-coklat')
    <div class="container-fluid position-relative px-0 mb-5 overflow-hidden ">

        <img src="{{asset('assets/image/news/film.png')}}" alt="" class="container-fluid  p-0" style="height: 572px; object-fit:cover !important;" >
        <div class="green position-absolute z-2" style="top:450px; filter:blur(150px); width:350px; height:350px"></div>
        <div class="blue position-absolute z-2" style="top:550px;width:350px; height:350px; filter:blur(150px)"></div>
        <div class="container rounded-3 p-5 mb-5 text-justify text-white">
            <p class="fs-5 fw-bold text-cream">Dosen TRPL “Film Setan Alas” Raih Penghargaan di JNAFF</p>
            <p class="text-secondary">- 5 Desember 2023 -</p>
            <p class="text-justify"> Film "Setan Alas" (The Draft!), hasil kerja sama antara siswa Sekolah Menengah Kejuruan (SMK), mahasiswa, dan dosen, berhasil meraih penghargaan dalam Indonesian Screen Awards di Jogja-Netpac Asian Film Festival. Penghargaan tersebut meliputi kategori Best Editing, Best Storytelling, dan yang paling prestisius, Best Film pada malam Sabtu (2/12).</p>

                <p class="text-justify">   "Setan Alas!" merupakan proyek kolaboratif yang mencerminkan semangat kerjasama lintas disiplin dalam industri kreatif. Film ini menampilkan sinergi luar biasa antara siswa yang masih dalam proses pembelajaran, mahasiswa yang penuh semangat, dan dosen yang berpengalaman dalam mengarahkan kreativitas. Sutradara film ini, Yusron Fuadi, juga seorang dosen di Departemen Teknik Elektro dan Informatika (DTEDI) Sekolah Vokasi (SV) UGM serta mahasiswa S3 di Pengkajian Seni Rupa dan Seni Pertunjukan di Sekolah Pascasarjana UGM.</p>

                    <p class="text-justify">Proses produksi film ini melibatkan lebih dari 200 siswa SMK, mahasiswa, dan dosen dari berbagai sekolah dan perguruan tinggi, seperti SMKN 6 Yogyakarta, SMKN 7 Semarang, SMKN 6 Solo, dan banyak lainnya. Film ini juga merupakan hasil dari metode pembelajaran Project-Based Learning (PBL), yang melibatkan siswa, mahasiswa, dosen, dan praktisi di bidang seni perfilman dan produksi media.</p>

                        <p class="text-justify">Fani Pramuditya, produser "Setan Alas", menjelaskan bahwa melalui PBL, mahasiswa dari Departemen Ekonomika dan Bisnis melakukan riset pasar dan pemasaran film, sementara mahasiswa Departemen Teknik Elektro dan Informatika membantu dalam produksi terkait pencahayaan, koordinator bakat, tata rias, pakaian, efek khusus, efek visual, dan pembuatan animasi. Proses kolaboratif ini menunjukkan bahwa Pendidikan Vokasi dapat menghasilkan karya kolaboratif yang bermutu.</p>

                            <p class="text-justify">Kemenangan "Setan Alas" dalam kategori Best Editing di Indonesian Screen Awards dianggap sebagai pencapaian besar. Yusron Fuadi menyatakan kebanggaannya atas karya kolaboratif ini, menekankan bahwa ini merupakan bukti nyata bahwa kolaborasi antara generasi muda dengan bimbingan yang tepat dapat menciptakan karya berdampak di industri film Indonesia.</p>

                                <p class="text-justify">Film ini bukan hanya mencuri perhatian dalam festival-festival film regional tetapi juga menjadi inspirasi bagi generasi muda Indonesia untuk mengeksplorasi potensi kolaborasi lintas generasi dalam menciptakan karya-karya kreatif yang berkualitas tinggi. Kemenangan "Setan Alas" menjadi sebuah bentuk apresiasi terhadap imajinasi tanpa batas.</p>

                                    <a class="text-justify text-white  no-underlined" href="https://sv.ugm.ac.id/2023/12/05/setan-alas-a-love-letter-to-indonesian-vocational-education-raih-penghargaan-film-terbaik-di-jogja-netpac-asian-film-festival-2023/">source : https://sv.ugm.ac.id/2023/12/05/setan-alas-a-love-letter-to-indonesian-vocational-education-raih-penghargaan-film-terbaik-di-jogja-netpac-asian-film-festival-2023/</a>
        </div>

    </div>
    @include('components.footer-coklat')
@endsection
