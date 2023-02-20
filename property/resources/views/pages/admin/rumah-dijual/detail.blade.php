@extends('layouts.admin')

@section('title')
    Informasi Perumahan
@endsection

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Rumah Dijual /</span> Detail</h4>
    </div>

    <div class="row flex-lg-row-reverse">
      <div class="col-12 col-lg-4">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Gambar</h5>
          </div>
          <div class="card-body">
            <img class="img-fluid" src="{{ Storage::url($rumah_dijual->image) }}" alt="">
          </div> 
        </div>
      </div>
      <div class="col-12 col-lg-8">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Rumah <span class="badge bg-label-primary ms-1">{{ $rumah_dijual->status }}</span></h5>
          </div>
          <div class="card-body">
            <!-- Basic Bootstrap Table -->
            <div class="card">
              <h5 class="card-header">Data Rumah Dijual</h5>
              <div class="table-responsive text-nowrap">
                <table class="table">
                  <tr>
                    <th>Name</th>
                    <td>{{ $rumah_dijual->name }}</td>
                  </tr>
                  <tr>
                    <th>Tipe</th>
                    <td>{{ $rumah_dijual->tipe }}</td>
                  </tr>
                  <tr>
                    <th>Ukuran Tanah</th>
                    <td>{{ $rumah_dijual->ukuran_tanah }}</td>
                  </tr>
                  <tr>
                    <th>Lokasi</th>
                    <td>{{ $rumah_dijual->lokasi }}</td>
                  </tr>
                  <tr>
                    <th>Kamar Tidur</th>
                    <td>{{ $rumah_dijual->kamar_tidur }}</td>
                  </tr>
                  <tr>
                    <th>Kamar Mandi</th>
                    <td>{{ $rumah_dijual->kamar_mandi }}</td>
                  </tr>
                  <tr>
                    <th>Harga Cash</th>
                    <td>{{ $rumah_dijual->harga_cash }}</td>
                  </tr>
                  <tr>
                    <th>Harga DP</th>
                    <td>{{ $rumah_dijual->harga_dp }}</td>
                  </tr>
                  <tr>
                    <th>Deskripsi</th>
                    <td>{{ $rumah_dijual->description }}</td>
                  </tr>
                </table>
              </div>
            </div>
            <!--/ Basic Bootstrap Table -->
          </div>
        </div>
      </div>
      
    </div>
  </div>
  <!-- / Content -->
@endsection