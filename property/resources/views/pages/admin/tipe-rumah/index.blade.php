@extends('layouts.admin')

@section('title')
    Informasi Perumahan
@endsection

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 m-0">Tipe Rumah</h4>
      <div>
        <a href="{{ route('tipe-rumah.create') }}" class="btn btn-primary"><i class='bx bx-plus' ></i> Tambah</a>
      </div>
      
    </div>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Data Tipe Rumah</h5>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Icon</th>
              <th>Dekripsi</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse ($tipe_rumahs as $key => $tipe_rumah)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td class="w-25">{{ $tipe_rumah->name }}</td>
                <td><img class="w-px-100" src="{{ Storage::url($tipe_rumah->icon) }}" alt=""></td>
                <td class="w-25">{{ $tipe_rumah->deskripsi }}</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('tipe-rumah.edit', $tipe_rumah->id) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <form action="{{ route('tipe-rumah.destroy', $tipe_rumah->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        
                        <button type="submit" class="dropdown-item"
                          ><i class="bx bx-trash me-1"></i> Delete</button
                        >
                      </form>
                    </div>
                  </div>
                </td>
              </tr>
            @empty
              <tr class="text-center">
                <td colspan="6">Tidak Ada Data</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
    <!--/ Basic Bootstrap Table -->
  </div>
  <!-- / Content -->
@endsection