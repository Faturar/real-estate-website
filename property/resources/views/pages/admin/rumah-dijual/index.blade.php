@extends('layouts.admin')

@section('title')
    Informasi Perumahan
@endsection

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 m-0">Rumah Dijual</h4>
      <div>
        <a href="{{ route('rumah-dijual.create') }}" class="btn btn-primary"><i class='bx bx-plus' ></i> Tambah</a>
      </div> 
    </div>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Data Rumah Dijual</h5>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Image</th>
              <th>Harga Cash</th>
              <th>Harga DP</th>
              <th>Tipe</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse ($rumah_dijuals as $key => $rumah_dijual)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $rumah_dijual->name }}</td>
                <td class="w-25">
                  <img style="width: 120px;" src="{{ Storage::url($rumah_dijual->image) }}" alt="">
                </td>
                <td>{{ $rumah_dijual->harga_cash }} JT</td>
                <td>{{ $rumah_dijual->harga_dp }} JT</td>
                <td>{{ $rumah_dijual->tipe }}</td>
                <td>
                  <span class="badge bg-label-primary me-1">{{ $rumah_dijual->status }}</span>
                </td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('rumah-dijual.show', $rumah_dijual->id) }}"
                        ><i class='bx bx-info-circle me-1'></i> Detail</a
                      >
                      <a class="dropdown-item" href="{{ route('rumah-dijual.edit', $rumah_dijual->id) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <form action="{{ route('rumah-dijual.destroy', $rumah_dijual->id) }}" method="POST">
                        @csrf
                        @method('DELETE');
                        
                        <button type="submit" class="dropdown-item">
                          <i class="bx bx-trash me-1"></i> 
                          Delete
                        </button>
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