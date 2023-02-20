@extends('layouts.admin')

@section('title')
    Informasi Perumahan
@endsection

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 m-0">Testimonial</h4>
      <div>
        <a href="{{ route('testimonial.create') }}" class="btn btn-primary"><i class='bx bx-plus' ></i> Tambah</a>
      </div>
      
    </div>

    <div class="card">
      <h5 class="card-header">Data Testimonial</h5>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Profile</th>
              <th>Profesi</th>
              <th>Deskripsi</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse ($testimonials as $key => $testimonial)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $testimonial->name }}</td>
                <td class="w-25"><img class="img-thumbnail" src="{{ Storage::url($testimonial->profile) }}" alt=""></td>
                <td>{{ $testimonial->profesi }}</td>
                <td class="w-25">{{ $testimonial->deskripsi }}</td>
                
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('testimonial.edit', $testimonial->id ) }}"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <form action="{{ route('testimonial.destroy', $testimonial->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="dropdown-item"
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
  </div>
  <!-- / Content -->
@endsection