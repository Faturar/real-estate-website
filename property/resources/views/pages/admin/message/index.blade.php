@extends('layouts.admin')

@section('title')
    Informasi Perumahan
@endsection

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3 m-0">Message</h4>
    </div>

    <!-- Basic Bootstrap Table -->
    <div class="card">
      <h5 class="card-header">Data Message</h5>
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Email</th>
              <th>Subject</th>
              <th>Waktu</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            @forelse ($messages as $key => $message)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ $message->subject }}</td>
                <td>{{ $message->created_at }}</td>
                <td>
                  <div class="dropdown">
                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a href="{{ route('message.show', $message->id) }}" class="dropdown-item"
                        ><i class='bx bx-info-circle me-1'></i> Detail</a
                      >
                      <form action="{{ route('message.destroy', $message->id) }}" method="POST">
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