@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Dokter</h1>

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

        <form action="{{ route('dokter.update', $dokter->id_dokter) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="id_dokter" class="form-label">ID Dokter</label>
                <input type="text" name="id_dokter" class="form-control" id="id_dokter" value="{{ $dokter->id_dokter }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nama_dokter" class="form-label">Nama Dokter</label>
                <input type="text" name="nama_dokter" class="form-control" id="nama_dokter" value="{{ $dokter->nama_dokter }}">
            </div>
            <div class="mb-3">
                <label for="spesialis_dokter" class="form-label">Spesialis</label>
                <input type="text" name="spesialis_dokter" class="form-control" id="spesialis_dokter" value="{{ $dokter->spesialis_dokter }}">
            </div>
            <div class="mb-3">
                <label for="jadwal_kerja" class="form-label">Jadwal Kerja</label>
                <input type="text" name="jadwal_kerja" class="form-control" id="jadwal_kerja" value="{{ $dokter->jadwal_kerja }}">
            </div>
            <div class="mb-3">
                <label for="jam_mulai" class="form-label">Jam Mulai</label>
                <input type="time" name="jam_mulai" class="form-control" id="jam_mulai" value="{{ $dokter->jam_mulai }}">
            </div>
            <div class="mb-3">
                <label for="jam_selesai" class="form-label">Jam Selesai</label>
                <input type="time" name="jam_selesai" class="form-control" id="jam_selesai" value="{{ $dokter->jam_selesai }}">
            </div>
            <div class="mb-3">
                <label for="kontrak_kerja" class="form-label">Kontrak Kerja</label>
                <input type="text" name="kontrak_kerja" class="form-control" id="kontrak_kerja" value="{{ $dokter->kontrak_kerja }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
