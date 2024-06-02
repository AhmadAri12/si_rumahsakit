@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Tambah Layanan Darurat</h1>

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

        <form action="{{ route('layanandarurats.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="id_layanan" class="form-label">ID Layanan</label>
                <input type="text" name="id_layanan" class="form-control" id="id_layanan">
            </div>
            <div class="mb-3">
                <label for="id_pasien" class="form-label">Pasien</label>
                <select name="id_pasien" class="form-control" id="id_pasien">
                    @foreach ($pasiens as $pasien)
                        <option value="{{ $pasien->id_pasien }}">{{ $pasien->nama_pasien }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="keterangan_kejadian" class="form-label">Keterangan Kejadian</label>
                <input type="text" name="keterangan_kejadian" class="form-control" id="keterangan_kejadian">
            </div>
            <div class="mb-3">
                <label for="tindakan" class="form-label">Tindakan</label>
                <input type="text" name="tindakan" class="form-control" id="tindakan">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
