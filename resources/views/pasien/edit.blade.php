@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Pasien</h1>

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

        <form action="{{ route('pasien.update', $pasien->id_pasien) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="id_pasien" class="form-label">ID Pasien</label>
                <input type="text" name="id_pasien" class="form-control" id="id_pasien" value="{{ $pasien->id_pasien }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nama_pasien" class="form-label">Nama Pasien</label>
                <input type="text" name="nama_pasien" class="form-control" id="nama_pasien" value="{{ $pasien->nama_pasien }}">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    <option value="L" {{ $pasien->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                    <option value="P" {{ $pasien->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat_pasien" class="form-label">Alamat Pasien</label>
                <input type="text" name="alamat_pasien" class="form-control" id="alamat_pasien" value="{{ $pasien->alamat_pasien }}">
            </div>
            <div class="mb-3">
                <label for="telp_pasien" class="form-label">Telepon Pasien</label>
                <input type="text" name="telp_pasien" class="form-control" id="telp_pasien" value="{{ $pasien->telp_pasien }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
