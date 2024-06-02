@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Perawat</h1>
        <p>ID Perawat: {{ $perawat->id_perawat }}</p>
        <p>Nama Perawat: {{ $perawat->nama_perawat }}</p>
        <p>Spesialis Perawat: {{ $perawat->spesialis_perawat }}</p>
        <p>Jadwal Kerja: {{ $perawat->jadwal_kerja }}</p>
        <p>Jam Mulai: {{ $perawat->jam_mulai }}</p>
        <p>Jam Selesai: {{ $perawat->jam_selesai }}</p>
        <p>Kontrak Kerja: {{ $perawat->kontrak_kerja }}</p>
        <p>Created At: {{ $perawat->created_at }}</p>
        <p>Updated At: {{ $perawat->updated_at }}</p>
        <a href="{{ route('perawat.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection

