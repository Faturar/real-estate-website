@extends('layouts.admin')

@section('title')
    Informasi Perumahan
@endsection

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 mb-4">Informasi Website</h4>
      <div>
        <a href="{{ route('informasi.edit', 1) }}" class="btn btn-primary"><i class='bx bx-edit'></i> Edit</a>
      </div>
    </div>

    <div class="row flex-lg-row-reverse">
      <div class="col-12 col-lg-4">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Logo</h5>
          </div>
          <div class="card-body">
            <img class="img-fluid" src="{{ Storage::url($informasi->logo) }}" alt="">
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-8">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Informasi Website</h5>
          </div>
          <div class="card-body">
            <!-- Basic Bootstrap Table -->
            <div class="card">
              <h5 class="card-header">Dasar</h5>
              <table class="table">
                <tr>
                  <th>Title</th>
                  <td class="w-75">{{ $informasi->title }}</td>
                </tr>
                <tr>
                  <th>Short Description</th>
                  <td>{{ $informasi->short_description }}</td>
                </tr>
              </table>
              <h5 class="card-header">Contact</h5>
              <table class="table">
                <tr>
                  <th>No Telepon</th>
                  <td class="w-75">{{ $informasi->no_telepon }}</td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td>{{ $informasi->email }}</td>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <td>{{ $informasi->alamat }}</td>
                </tr>
                <tr>
                  <th>Google Maps Link</th>
                  <td>{{ $informasi->gmaps_link }}</td>
                </tr>
              </table>
            </div>
            <!--/ Basic Bootstrap Table -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->
@endsection