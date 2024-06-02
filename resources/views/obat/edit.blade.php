@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Obat</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong> Please check your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('obat.update', $obat->id_obat) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="id_obat" class="form-label">ID Obat</label>
                <input type="text" name="id_obat" class="form-control" id="id_obat" value="{{ $obat->id_obat }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nama_obat" class="form-label">Nama Obat</label>
                <input type="text" name="nama_obat" class="form-control" id="nama_obat" value="{{ $obat->nama_obat }}">
            </div>
            <div class="mb-3">
                <label for="dosis_obat" class="form-label">Dosis Obat</label>
                <input type="text" name="dosis_obat" class="form-control" id="dosis_obat" value="{{ $obat->dosis_obat }}">
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="keterangan" value="{{ $obat->keterangan }}">
            </div>
            <div class="mb-3">
                <label for="stok_obat" class="form-label">Stok Obat</label>
                <input type="number" name="stok_obat" class="form-control" id="stok_obat" value="{{ $obat->stok_obat }}">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
