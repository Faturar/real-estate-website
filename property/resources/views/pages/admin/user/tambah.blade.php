@extends('layouts.admin')

@section('title')
    Informasi Perumahan
@endsection

@section('content')
   <!-- Content -->
   <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3"><span class="text-muted fw-light">User /</span> Tambah</h4>
    </div>

    <form action="{{ route('user.store') }}" method="POST">
      @csrf

      <div class="row flex-lg-row-reverse">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">User</h5>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label" for="name">Nama</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama" required />
              </div>
              <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required />
              </div>
              <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input type="text" name="password" class="form-control" id="password" placeholder="Password" required />
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