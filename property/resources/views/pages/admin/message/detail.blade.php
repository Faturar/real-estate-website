@extends('layouts.admin')

@section('title')
    Informasi Perumahan
@endsection

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h4 class="fw-bold py-3"><span class="text-muted fw-light">Message /</span> Detail</h4>
    </div>

    <div class="card">
      <h5 class="card-header">Detail Message</h5>
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th class="w-25">Name</th>
            <td>{{ $message->name }}</td>
          </tr>
          <tr>
            <th>Email</th>
            <td>{{ $message->email }}</td>
          </tr>
          <tr>
            <th>Subject</th>
            <td>{{ $message->subject }}</td>
          </tr>
          
          <tr>
            <th>Waktu</th>
            <td>{{ $message->created_at }}</td>
          </tr>
          <tr>
            <th>Message</th>
            <td>{{ $message->message }}</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <!-- / Content -->
@endsection