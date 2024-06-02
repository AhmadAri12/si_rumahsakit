@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Dokter</h1>
        <p>ID Dokter: {{ $dokter->id_dokter }}</p>
        <p>Nama Dokter: {{ $dokter->nama_dokter }}</p>
        <p>Spesialis: {{ $dokter->spesialis_dokter }}</p>
        <p>Jadwal Kerja: {{ $dokter->jadwal_kerja }}</p>
        <p>Jam Mulai: {{ $dokter->jam_mulai }}</p>
        <p>Jam Selesai: {{ $dokter->jam_selesai }}</p>
        <p>Kontrak Kerja: {{ $dokter->kontrak_kerja }}</p>
        <p>Created At: {{ $dokter->created_at }}</p>
        <p>Updated At: {{ $dokter->updated_at }}</p>
        <a href="{{ route('dokter.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
