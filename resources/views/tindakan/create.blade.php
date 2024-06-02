@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Tindakan</h1>

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

        <form action="{{ route('tindakan.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="id_tindakan" class="form-label">ID Tindakan</label>
                <input type="text" name="id_tindakan" class="form-control" id="id_tindakan">
            </div>
            <div class="mb-3">
                <label for="id_layanan" class="form-label">Layanan</label>
                <select name="id_layanan" class="form-control" id="id_layanan">
                    @foreach($layanans as $layanan)
                        <option value="{{ $layanan->id_layanan }}">{{ $layanan->id_layanan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="id_dokter" class="form-label">Dokter</label>
                <select name="id_dokter" class="form-control" id="id_dokter">
                    @foreach($dokters as $dokter)
                        <option value="{{ $dokter->id_dokter }}">{{ $dokter->nama_dokter }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="diagnosa_penyakit" class="form-label">Diagnosa Penyakit</label>
                <input type="text" name="diagnosa_penyakit" class="form-control" id="diagnosa_penyakit">
            </div>
            <div class="mb-3">
                <label for="id_obat" class="form-label">Obat</label>
                <select name="id_obat" class="form-control" id="id_obat">
                    @foreach($obats as $obat)
                        <option value="{{ $obat->id_obat }}">{{ $obat->nama_obat }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="biaya_perawatan" class="form-label">Biaya Perawatan</label>
                <input type="number" name="biaya_perawatan" class="form-control" id="biaya_perawatan">
            </div>
            <div class="mb-3">
                <label for="status_perawatan" class="form-label">Status Perawatan</label>
                <input type="text" name="status_perawatan" class="form-control" id="status_perawatan">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
