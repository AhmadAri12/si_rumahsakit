<?php

namespace App\Http\Controllers;

use App\Models\Perawat;
use Illuminate\Http\Request;

class PerawatController extends Controller
{
    public function index()
    {
        $perawats = Perawat::all();
        return view('perawat.index', compact('perawats'));
    }

    public function create()
    {
        return view('perawat.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_perawat' => 'required',
            'nama_perawat' => 'required',
            'spesialis_perawat' => 'required',
            'jadwal_kerja' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'kontrak_kerja' => 'required',
        ]);

        Perawat::create($request->all());
        return redirect()->route('perawat.index')->with('success', 'Perawat created successfully.');
    }

    public function show(Perawat $perawat)
    {
        return view('perawat.show', compact('perawat'));
    }

    public function edit(Perawat $perawat)
    {
        return view('perawat.edit', compact('perawat'));
    }

    public function update(Request $request, Perawat $perawat)
    {
        $request->validate([
            'nama_perawat' => 'required',
            'spesialis_perawat' => 'required',
            'jadwal_kerja' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'kontrak_kerja' => 'required',
        ]);

        $perawat->update($request->all());
        return redirect()->route('perawat.index')->with('success', 'Perawat updated successfully.');
    }

    public function destroy(Perawat $perawat)
    {
        $perawat->delete();
        return redirect()->route('perawat.index')->with('success', 'Perawat deleted successfully.');
    }
}

