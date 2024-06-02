@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Perawat</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="mb-3">
            <a href="{{ route('perawat.create') }}" class="btn btn-primary">Tambah Perawat</a>
        </div>

        <table class="table table-bordered table-light">
            <tr>
                <th>ID Perawat</th>
                <th>Nama Perawat</th>
                <th>Spesialis Perawat</th>
                <th>Jadwal Kerja</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Kontrak Kerja</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($perawats as $perawat)
                <tr>
                    <td>{{ $perawat->id_perawat }}</td>
                    <td>{{ $perawat->nama_perawat }}</td>
                    <td>{{ $perawat->spesialis_perawat }}</td>
                    <td>{{ $perawat->jadwal_kerja }}</td>
                    <td>{{ $perawat->jam_mulai }}</td>
                    <td>{{ $perawat->jam_selesai }}</td>
                    <td>{{ $perawat->kontrak_kerja }}</td>
                    <td>
                        <form action="{{ route('perawat.destroy', $perawat->id_perawat) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('perawat.show', $perawat->id_perawat) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('perawat.edit', $perawat->id_perawat) }}">Edit</a>
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
