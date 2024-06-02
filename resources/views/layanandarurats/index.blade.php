@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Layanan Darurat</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="mb-3">
            <a href="{{ route('layanandarurats.create') }}" class="btn btn-primary">Tambah Layanan Darurat</a>
        </div>

        <table class="table table-bordered table-light">
            <tr>
                <th>ID Layanan</th>
                <th>Pasien</th>
                <th>Keterangan Kejadian</th>
                <th>Tindakan</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($layanandarurats as $layanandarurat)
            <tr>
                <td>{{ $layanandarurat->id_layanan }}</td>
                <td>{{ $layanandarurat->pasien->nama_pasien }}</td>
                <td>{{ $layanandarurat->keterangan_kejadian }}</td>
                <td>{{ $layanandarurat->tindakan }}</td>
                <td>
                    <form action="{{ route('layanandarurats.destroy', $layanandarurat->id_layanan) }}" method="POST">
                        <a class="btn btn-info" href="{{ route('layanandarurats.show', $layanandarurat->id_layanan) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('layanandarurats.edit', $layanandarurat->id_layanan) }}">Edit</a>
                        <form action="{{ route('layanandarurats.destroy', $layanandarurat->id_layanan) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
