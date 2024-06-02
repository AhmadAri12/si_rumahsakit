@extends('layouts.app')

@section('content')
    <div class="container">
    <h1>Detail Pasien</h1>
    <p>ID Pasien: {{ $pasien->id_pasien }}</p>
    <p>Nama Pasien: {{ $pasien->nama_pasien }}</p>
    <p>Jenis Kelamin: {{ $pasien->jenis_kelamin }}</p>
    <p>Alamat: {{ $pasien->alamat_pasien }}</p>
    <p>Telepon: {{ $pasien->telp_pasien }}</p>
    <p>Created At: {{ $pasien->created_at }}</p>
    <p>Updated At: {{ $pasien->updated_at }}</p>
    <a href="{{ route('pasien.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
