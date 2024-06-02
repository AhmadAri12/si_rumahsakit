@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Pasien</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="mb-3">
            <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah Pasien</a>
        </div>

        <table class="table table-bordered table-light">
            <tr>
                <th>ID Pasien</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Alamat Pasien</th>
                <th>Telepon Pasien</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($pasiens as $pasien)
                <tr>
                    <td>{{ $pasien->id_pasien }}</td>
                    <td>{{ $pasien->nama_pasien }}</td>
                    <td>{{ $pasien->jenis_kelamin }}</td>
                    <td>{{ $pasien->alamat_pasien }}</td>
                    <td>{{ $pasien->telp_pasien }}</td>
                    <td>
                        <form action="{{ route('pasien.destroy', $pasien->id_pasien) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('pasien.show',$pasien->id_pasien) }}">Show</a>
                            <a href="{{ route('pasien.edit', $pasien->id_pasien) }}" class="btn btn-primary">Edit</a>
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
