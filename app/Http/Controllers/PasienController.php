<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        $pasiens = Pasien::all();
        return view('pasien.index', compact('pasiens'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pasien' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_pasien' => 'required',
            'telp_pasien' => 'required',
        ]);

        Pasien::create($request->all());
        return redirect()->route('pasien.index')->with('success', 'Pasien created successfully.');
    }

    public function show($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.show', compact('pasien'));
    }

    public function edit($id)
    {
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'alamat_pasien' => 'required',
            'telp_pasien' => 'required',
        ]);

        $pasien = Pasien::find($id);
        $pasien->update($request->all());
        return redirect()->route('pasien.index')->with('success', 'Pasien updated successfully.');
    }

    public function destroy($id)
    {
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect()->route('pasien.index')->with('success', 'Pasien deleted successfully.');
    }
}
