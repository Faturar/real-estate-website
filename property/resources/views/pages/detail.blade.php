@extends('layouts.app')

@section('title')
    {{ $rumah_dijual->name }} - {{ $informasi->title }}
@endsection

@section('content')
    <!-- Header Start -->
    <div class="container header bg-white p-0 mt-5">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-12 p-5 mt-lg-5 text-center">
                <h1 class="display-5 animated fadeIn mb-4">{{ $rumah_dijual->name }}</h1> 
                    <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Rumah dijual</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">{{ $rumah_dijual->name }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <img src="{{ Storage::url($rumah_dijual->image) }}" width="60%" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Main -->
    <div class="container">
        <div class="row mx-5 mt-5 g-3">
            <div class="col-4">
                <div class="d-flex justify-content-between align-items-center border rounded p-3">
                    <h5 class="m-0">Ukuran Tanah: </h5>
                    <p class="m-0">{{ $rumah_dijual->ukuran_tanah }}</p>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-between align-items-center border rounded p-3">
                    <h5 class="m-0">Harga Cash: </h5>
                    <p class="m-0">{{ $rumah_dijual->harga_cash }} JT</p>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-between align-items-center border rounded p-3">
                    <h5 class="m-0">Harga DP: </h5>
                    <p class="m-0">{{ $rumah_dijual->harga_dp }} JT</p>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-between align-items-center border rounded p-3">
                    <h5 class="m-0">Tipe Property: </h5>
                    <p class="m-0">{{ $rumah_dijual->tipe }}</p>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-between align-items-center border rounded p-3">
                    <h5 class="m-0">Kamar Tidur: </h5>
                    <p class="m-0">{{ $rumah_dijual->kamar_tidur }}</p>
                </div>
            </div>
            <div class="col-4">
                <div class="d-flex justify-content-between align-items-center border rounded p-3">
                    <h5 class="m-0">Kamar Mandi: </h5>
                    <p class="m-0">{{ $rumah_dijual->kamar_mandi }}</p>
                </div>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-12">
                <h2>Deskripsi: </h2>
                <p class="mt-3">{{ $rumah_dijual->description }}</p>
            </div>
        </div>
    </div>
    <!-- End Main -->


  <!-- Call to Action Start -->
  <div class="container-xxl py-5">
    <div class="container">
        <div class="bg-light rounded p-3">
            <div class="bg-white rounded p-4" style="border: 1px dashed rgba(0, 185, 142, .3)">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid rounded w-100" src="{{ url('frontend/img/call-to-action.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="mb-4">
                            <h1 class="mb-3">Hubungi kami segera untuk info lebih lanjut</h1>
                            <p>Tim Assalam Village akan menjelaskan dan menjawab pertanyaan Anda hubungi kami segera!</p>
                        </div>
                        <a href="tel:{{ $informasi->no_telepon }}" class="btn btn-primary py-3 px-4 me-2"><i class="fa fa-phone-alt me-2"></i>Telepon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Call to Action End -->
@endsection