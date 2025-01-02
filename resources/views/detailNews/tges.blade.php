@extends('layouts.orion')
@section('title', 'TGES')
@section('content')

    <div class="container-fluid pt-4 position-relative mb-5">
        @include('components.navbar')
        <div class="container"
            style="background-image: url(images/Liga.jpg); background-size:cover; background-position: center; height:400px !important;">
        </div>
        <div class="green position-absolute z-2" style="top:450px; filter:blur(150px); width:350px; height:350px"></div>
        <div class="blue position-absolute z-2" style="top:550px;width:350px; height:350px; filter:blur(150px)"></div>
        <div class="container bg-white rounded-3 p-5 mb-5">
            <p class="fs-5 fw-bold ">TEDI Games and Electronic Sport 2023</p>
            <p class="text-secondary">Mon August 31,2023 -</p>
            <p class="text-justify"> Keluarga Mahasiswa Teknik Elektro dan Informatika (KMTEDI) Sekolah Vokasi Universitas
                Gadjah
                Mada menyelenggarakan kegiatan TEDI Games and Electronic Sport
                (TEGS) 2023 yang resmi dibuka pada Minggu (30/4/23) oleh Ketua Departemen Teknik Elektro dan Informatika,
                Nur
                Rohman Rosyid, S.T., M.Eng., D.Eng. bertempat
                di Ruang Sidang Gedung Tjahjana Adi Sekip Unit IV.TEGS merupakan kegiatan tahunan yang diprakarsai mahasiswa
                dan
                menargetkan peserta dari empat program
                studi di Departemen Teknik Elektro dan Informatika dalam rangka mempererat kebersamaan dan solidaritas serta
                sebagai wadah penyaluran bakat mahasiswa.
                TEGS 2023 direncanakan akan dilaksanakan hingga 19 Mei 2023 mendatang dengan berbagai kategori perlombaan,
                yaitu
                Lomba Olahraga, E-Sport, Kesenian dan
                Sains Terapan.</p>
        </div>
        @include('components.footer')
    </div>

@endsection
