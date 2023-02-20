@extends('layouts.admin')

@section('title')
    Informasi Perumahan
@endsection

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tipe Rumah /</span> Edit</h4>
    </div>

    <form action="{{ route('tipe-rumah.update', $tipe_rumah->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-4">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Gambar</h5>
            </div>
            <div class="card-body">
              <img class="img-fluid mb-3" src="{{ Storage::url($tipe_rumah->icon) }}" alt="{{ $tipe_rumah->name }}">
              <div class="mb-3">
                <label for="formFile" class="form-label text-danger">Jangan diubah jika tidak ingin mengedit</label>
                <input class="form-control" name="icon" type="file" id="formFile" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-8">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Tipe Rumah</h5>
            </div>
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label class="form-label" for="name">Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $tipe_rumah->name }}" required />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="deskripsi">Deskripsi</label>
                  <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi" required>{{ $tipe_rumah->deskripsi }}</textarea>
                </div>
                  
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- / Content -->
@endsection