@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Data Obat</h1>
        <a href="{{ route('obat.create') }}" class="btn btn-primary mb-3">Tambah Obat</a>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif

        <table class="table table-bordered table-light">
            <tr>
                <th>ID Obat</th>
                <th>Nama Obat</th>
                <th>Dosis Obat</th>
                <th>Keterangan</th>
                <th>Stok Obat</th>
                <th>Action</th>
            </tr>
            @foreach ($obats as $obat)
                <tr>
                    <td>{{ $obat->id_obat }}</td>
                    <td>{{ $obat->nama_obat }}</td>
                    <td>{{ $obat->dosis_obat }}</td>
                    <td>{{ $obat->keterangan }}</td>
                    <td>{{ $obat->stok_obat }}</td>
                    <td>
                        <form action="{{ route('obat.destroy', $obat->id_obat) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('obat.show',$obat->id_obat) }}">Show</a>
                            <a href="{{ route('obat.edit', $obat->id_obat) }}" class="btn btn-primary">Edit</a>
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
