@extends('Layouts.app')

@section('title', 'Rumah Sakit Panit Waluya')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
</div>
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-15 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Selamat Datang</h5>
              @if(Auth::check())
                  <a href="javascript:;" class="btn btn-sm btn-outline-primary">Selamat Datang Admin</a>
              @else
                  <!-- Tambahkan tombol atau tautan untuk pengguna yang belum terotentikasi -->
              @endif
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="{{ asset('style/assets/img/illustrations/man-with-laptop-light.png') }}"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
