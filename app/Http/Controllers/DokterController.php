<?php

namespace App\Http\Controllers;


use App\Models\Dokter;
use Illuminate\Http\Request;
use PDF;

class DokterController extends Controller
{
    public function index()
    {
        $dokters = Dokter::all();
        return view('dokter.index', compact('dokters'));
    }

    public function create()
    {
        return view('dokter.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_dokter' => 'required|unique:tb_dokter,id_dokter|max:20',
            'nama_dokter' => 'required|max:50',
            'spesialis_dokter' => 'required|max:255',
            'jadwal_kerja' => 'required|max:100',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'kontrak_kerja' => 'required|max:100',
        ]);

        Dokter::create($request->all());

        return redirect()->route('dokter.index')
            ->with('success', 'Dokter created successfully.');
    }

    public function show($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.show', compact('dokter'));
    }

    public function edit($id)
    {
        $dokter = Dokter::find($id);
        return view('dokter.edit', compact('dokter'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_dokter' => 'required|max:50',
            'spesialis_dokter' => 'required|max:255',
            'jadwal_kerja' => 'required|max:100',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'kontrak_kerja' => 'required|max:100',
        ]);

        $dokter = Dokter::find($id);
        $dokter->update($request->all());

        return redirect()->route('dokter.index')
            ->with('success', 'Dokter updated successfully.');
    }

    public function destroy($id)
    {
        $dokter = Dokter::find($id);
        $dokter->delete();

        return redirect()->route('dokter.index')
            ->with('success', 'Dokter deleted successfully.');
    }
}
