@extends('layouts.admin')

@section('title') 
    Informasi Perumahan
@endsection

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Testimonial /</span> Tambah</h4>
    </div>

    <form action="{{ route('testimonial.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      
      <div class="row flex-lg-row-reverse">
        <div class="col-12 col-lg-4">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Profile</h5>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <input class="form-control" name="profile" type="file" id="formFile" required />
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-8">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Testimonial</h5>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label" for="nama">Nama</label>
                <input type="text" name="name" class="form-control" id="nama" placeholder="Nama" value="{{ old('name') }}" required />
              </div>
              <div class="mb-3">
                <label class="form-label" for="profesi">Profesi</label>
                <input type="text" name="profesi" class="form-control" id="profesi" placeholder="Profesi" value="{{ old('profesi') }}" required />
              </div>
              <div class="mb-3">
                <label class="form-label" for="deskripsi">Deskripsi</label>
                <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Deskripsi" required> {{ old('deskripsi') }}</textarea>
              </div>
                
              <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  <!-- / Content -->
@endsection