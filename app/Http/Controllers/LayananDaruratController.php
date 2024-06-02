<?php

namespace App\Http\Controllers;

use App\Models\LayananDarurat;
use App\Models\Pasien;
use Illuminate\Http\Request;

class LayananDaruratController extends Controller
{
    public function index()
    {
        $layanandarurats = LayananDarurat::with('pasien')->get();
        return view('layanandarurats.index', compact('layanandarurats'));
    }
    

    public function create()
    {
        $pasiens = Pasien::all();
        return view('layanandarurats.create', compact('pasiens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_layanan' => 'required|string|max:20|unique:tb_layanandarurat,id_layanan',
            'id_pasien' => 'required|string|max:20',
            'keterangan_kejadian' => 'required|string|max:255',
            'tindakan' => 'required|string|max:100',
        ]);
    
        LayananDarurat::create($request->all());
    
        return redirect()->route('layanandarurats.index')->with('success', 'Layanan Darurat created successfully.');
    }
    

    public function show(LayananDarurat $layanandarurat)
    {
        return view('layanandarurats.show', compact('layanandarurat'));
    }

    public function edit(LayananDarurat $layanandarurat)
    {
        $pasiens = Pasien::all();
        return view('layanandarurats.edit', compact('layanandarurat', 'pasiens'));
    }

    public function update(Request $request, LayananDarurat $layanandarurat)
    {
        $request->validate([
            'id_layanan' => 'required',
            'id_pasien' => 'required',
            'keterangan_kejadian' => 'required|string|max:255',
            'tindakan' => 'required|string|max:100',
        ]);

        $layanandarurat->update($request->all());

        return redirect()->route('layanandarurats.index')->with('success', 'Layanan darurat updated successfully.');
    }

    public function destroy(LayananDarurat $layanandarurat)
    {
        $layanandarurat->delete();

        return redirect()->route('layanandarurats.index')->with('success', 'Layanan darurat deleted successfully.');
    }
}
