@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Dokter</h1>
        <a href="{{ route('dokter.create') }}" class="btn btn-primary mb-3">Tambah Dokter</a>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered table-light">
            <tr>
                <th>ID Dokter</th>
                <th>Nama Dokter</th>
                <th>Spesialis</th>
                <th>Jadwal Kerja</th>
                <th>Jam Mulai</th>
                <th>Jam Selesai</th>
                <th>Kontrak Kerja</th>
                <th>Action</th>
            </tr>
            @foreach ($dokters as $dokter)
                <tr>
                    <td>{{ $dokter->id_dokter }}</td>
                    <td>{{ $dokter->nama_dokter }}</td>
                    <td>{{ $dokter->spesialis_dokter }}</td>
                    <td>{{ $dokter->jadwal_kerja }}</td>
                    <td>{{ $dokter->jam_mulai }}</td>
                    <td>{{ $dokter->jam_selesai }}</td>
                    <td>{{ $dokter->kontrak_kerja }}</td>
                    <td>
                        <form action="{{ route('dokter.destroy', $dokter->id_dokter) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('dokter.show',$dokter->id_dokter) }}">Show</a>
                            <a href="{{ route('dokter.edit', $dokter->id_dokter) }}" class="btn btn-primary">Edit</a>
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
