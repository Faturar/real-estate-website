@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('content')
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-4 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img
                  src="{{ url('backend/assets/img/icons/home.png') }}"
                  alt="chart success"
                  class="rounded"
                />
              </div>
            </div>
            <span class="fw-semibold d-block mb-1">Rumah Dijual</span>
            <h3 class="card-title mb-2">{{ $rumah_dijuals }}</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img
                  src="{{ url('backend/assets/img/icons/message.png') }}"
                  alt="Credit Card"
                  class="rounded"
                />
              </div>
            </div>
            <span class="mb-1">Message</span>
            <h3 class="card-title text-nowrap mb-1">{{ $messages }}</h3>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 col-6 mb-4">
        <div class="card">
          <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
              <div class="avatar flex-shrink-0">
                <img
                  src="{{ url('backend/assets/img/icons/user.png') }}"
                  alt="Credit Card"
                  class="rounded"
                />
              </div>
            </div>
            <span class="mb-1">User</span>
            <h3 class="card-title text-nowrap mb-1">{{ $users }}</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->
@endsection