@extends('layouts.admin')

@section('title')
    Informasi Perumahan
@endsection

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Informasi /</span> Edit</h4>
    </div>

    <form action="{{ route('informasi.update', 1) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-4">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Logo</h5>
            </div>
            <div class="card-body">
              <img class="img-fluid" src="{{ Storage::url($informasi->logo) }}" alt="">
              <div class="my-3">
                <label for="logo" class="form-label">Ubah logo</label>
                <input class="form-control" name="logo" type="file" id="logo" required/>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-8">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Informasi</h5>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label" for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $informasi->title }}" required/>
              </div>
              <div class="mb-3">
                <label class="form-label" for="shortDescription">Short Description</label>
                <input type="text" name="short_description" class="form-control" id="tipe" placeholder="Short Description" value="{{ $informasi->short_description }}" required/>
              </div>
              <div class="mb-3">
                <label class="form-label" for="noTelepon">No Telepon</label>
                <input type="number" name="no_telepon" class="form-control" id="noTelepon" placeholder="No Telepon" value="{{ $informasi->no_telepon }}" required/>
              </div>
              <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ $informasi->email }}" required />
              </div>
              <div class="mb-3">
                <label class="form-label" for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat" value="{{ $informasi->alamat }}" required/>
              </div>
              <div class="mb-3">
                <label class="form-label" for="gmaps">Google Maps Link</label>
                <input type="text" name="gmaps_link" class="form-control" id="gmaps" placeholder="Google Maps Link" value="{{ $informasi->gmaps_link }}" required/>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </div>
        
      </div>
    </form>
  </div>
  <!-- / Content -->
@endsection