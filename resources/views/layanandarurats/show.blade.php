@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Layanan Darurat</h1>
        <p>ID Layanan: {{ $layanandarurat->id_layanan }}</p>
        <p>Pasien: {{ $layanandarurat->id_pasien }}</p>
        <p>Keterangan Kejadian: {{ $layanandarurat->keterangan_kejadian }}</p>
        <p>Tindakan: {{ $layanandarurat->tindakan }}</p>
        <p>Created At: {{ $layanandarurat->created_at }}</p>
        <p>Updated At: {{ $layanandarurat->updated_at }}</p>
        <a href="{{ route('layanandarurats.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
