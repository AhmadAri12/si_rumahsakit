@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Obat</h1>
        <p>ID Obat: {{ $obat->id_obat }}</p>
        <p>Nama Obat: {{ $obat->nama_obat }}</p>
        <p>Dosis Obat: {{ $obat->dosis_obat }}</p>
        <p>Keterangan: {{ $obat->keterangan }}</p>
        <p>Stok Obat: {{ $obat->stok_obat }}</p>
        <p>Created At: {{ $obat->created_at }}</p>
        <p>Updated At: {{ $obat->updated_at }}</p>
        <a href="{{ route('obat.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
