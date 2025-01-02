@extends('layouts.master')
@section('title',"TESTIMONI")
@section('css')
    <link rel="stylesheet" href="{{asset("css/testimoni.css")}}">
@endsection
@include('components.navbar')
@section('content')
<h1 class="text-center fw-bold p-4 text-title">Apa Kata Mereka Tentang <span> <img src="{{asset('images/ASSETS.svg')}}" alt=""></span></h1>
<div class="container-xxl p-5">
    <div class="row row-cols-1 row-cols-lg-2 g-5">
        <div class="col">
            <div class="card mb-3 bg-green-1" >
                <div class="row g-0">
                  <div class="col">
                    <div class="container-fluid m-4 overflow-hidden radius-20 object-fit-cover " style="height:250px; width:230px;">
                        <img src="{{asset('assets/image/testimoni/rangga2.JPG')}}" class="img-fluid " alt="...">
                    </div>

                  </div>
                  <div class="col">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex eaque sed totam sunt, quisquam, illo maxime exercitationem iusto officia sequi natus impedit tenetur quod! Cum vitae ut quae in.</p>
                      <p class="card-text text-end"><small class="text-body-secondary">-Rangga TRPL-21</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 rounded-5 bg-green-2" >
                <div class="row g-0 rounded-5">
                  <div class="col-md">
                    <div class="container-fluid m-4 overflow-hidden radius-20 object-fit-cover " style="height:250px; width:230px;">
                        <img src="{{asset('assets/image/testimoni/wisnu2.JPG')}}" class="img-fluid " alt="...">
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex eaque sed totam sunt, quisquam, illo maxime exercitationem iusto officia sequi natus impedit tenetur quod! Cum vitae ut quae in.</p>
                      <p class="card-text text-end"><small class="text-body-secondary">-Wisnu TRPL-21</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 bg-green-2" >
                <div class="row g-0">
                  <div class="col-md">
                    <div class="container-fluid m-4 overflow-hidden radius-20 object-fit-cover " style="height:250px; width:230px;">
                        <img src="{{asset('assets/image/testimoni/fabih2.JPG')}}" class="img-fluid " alt="...">
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex eaque sed totam sunt, quisquam, illo maxime exercitationem iusto officia sequi natus impedit tenetur quod! Cum vitae ut quae in.</p>
                      <p class="card-text text-end"><small class="text-body-secondary">-Fabih TRPL-22</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3 bg-green-1" >
                <div class="row g-0">
                  <div class="col-md">
                    <div class="container-fluid m-4 overflow-hidden radius-20 object-fit-cover " style="height:250px; width:230px;">
                        <img src="{{asset('assets/image/testimoni/caca2.JPG')}}" class="img-fluid " alt="...">
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="card-body">
                      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ex eaque sed totam sunt, quisquam, illo maxime exercitationem iusto officia sequi natus impedit tenetur quod! Cum vitae ut quae in.</p>
                      <p class="card-text text-end"><small class="text-body-secondary">-Caca TRPL-22</small></p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      </div>
</div>
@include('components.footer')
@endsection
