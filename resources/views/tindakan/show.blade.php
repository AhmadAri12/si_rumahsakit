@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Tindakan</h1>
        <p>ID Tindakan: {{ $tindakan->id_tindakan }}</p>
        <p>ID Layanan: {{ $tindakan->id_layanan }}</p>
        <p>Dokter: {{ $tindakan->dokter->nama_dokter }}</p>
        <p>Diagnosa Penyakit: {{ $tindakan->diagnosa_penyakit }}</p>
        <p>Obat: {{ $tindakan->obat->nama_obat }}</p>
        <p>Biaya Perawatan: Rp. {{ number_format($tindakan->biaya_perawatan, 0, ',', '.') }}</p>
        <p>Status Perawatan: {{ $tindakan->status_perawatan }}</p>
        <p>Created At: {{ $tindakan->created }}</p>
        <p>Updated At: {{ $tindakan->updated }}</p>
        <a href="{{ route('tindakan.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
