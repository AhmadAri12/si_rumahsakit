@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Perawat</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> Please check your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('perawat.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="id_perawat" class="form-label">ID Perawat</label>
                <input type="text" name="id_perawat" class="form-control" id="id_perawat">
            </div>
            <div class="mb-3">
                <label for="nama_perawat" class="form-label">Nama Perawat</label>
                <input type="text" name="nama_perawat" class="form-control" id="nama_perawat">
            </div>
            <div class="mb-3">
                <label for="spesialis_perawat" class="form-label">Spesialis Perawat</label>
                <input type="text" name="spesialis_perawat" class="form-control" id="spesialis_perawat">
            </div>
            <div class="mb-3">
                <label for="jadwal_kerja" class="form-label">Jadwal Kerja</label>
                <input type="text" name="jadwal_kerja" class="form-control" id="jadwal_kerja">
            </div>
            <div class="mb-3">
                <label for="jam_mulai" class="form-label">Jam Mulai</label>
                <input type="time" name="jam_mulai" class="form-control" id="jam_mulai">
            </div>
            <div class="mb-3">
                <label for="jam_selesai" class="form-label">Jam Selesai</label>
                <input type="time" name="jam_selesai" class="form-control" id="jam_selesai">
            </div>
            <div class="mb-3">
                <label for="kontrak_kerja" class="form-label">Kontrak Kerja</label>
                <input type="text" name="kontrak_kerja" class="form-control" id="kontrak_kerja">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
