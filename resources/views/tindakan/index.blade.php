@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Tindakan</h1>
        <a href="{{ route('tindakan.create') }}" class="btn btn-primary mb-3">Tambah Tindakan</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered table-light">
            <tr>
                <th>ID Tindakan</th>
                <th>ID Layanan</th>
                <th>Dokter</th>
                <th>Diagnosa Penyakit</th>
                <th>Obat</th>
                <th>Biaya Perawatan</th>
                <th>Status Perawatan</th>
                <th>Action</th>
            </tr>
            @foreach ($tindakans as $tindakan)
                <tr>
                    <td>{{ $tindakan->id_tindakan }}</td>
                    <td>{{ $tindakan->id_layanan }}</td>
                    <td>{{ $tindakan->dokter->nama_dokter }}</td>
                    <td>{{ $tindakan->diagnosa_penyakit }}</td>
                    <td>{{ $tindakan->obat->nama_obat }}</td>
                    <td>Rp. {{ number_format($tindakan->biaya_perawatan, 0, ',', '.') }}</td>
                    <td>{{ $tindakan->status_perawatan }}</td>
                    <td>
                        <form action="{{ route('tindakan.destroy', $tindakan->id_tindakan) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('tindakan.show', $tindakan->id_tindakan) }}">Show</a>
                            <a href="{{ route('tindakan.edit', $tindakan->id_tindakan) }}" class="btn btn-primary">Edit</a>
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
