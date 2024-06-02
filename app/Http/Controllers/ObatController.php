<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Obat;
use Illuminate\Support\Facades\Validator;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::all();
        return view('obat.index', compact('obats'));
    }

    public function create()
    {
        return view('obat.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_obat' => 'required|unique:tb_obat|max:20',
            'nama_obat' => 'required|max:100',
            'dosis_obat' => 'required|max:50',
            'keterangan' => 'required|max:200',
            'stok_obat' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $obat = new Obat();
        $obat->id_obat = $request->id_obat;
        $obat->nama_obat = $request->nama_obat;
        $obat->dosis_obat = $request->dosis_obat;
        $obat->keterangan = $request->keterangan;
        $obat->stok_obat = $request->stok_obat;
        $obat->save();

        return redirect()->route('obat.index')->with('success', 'Obat created successfully.');
    }

    public function edit($id)
    {
        $obat = Obat::find($id);
        return view('obat.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_obat' => 'required|max:100',
            'dosis_obat' => 'required|max:50',
            'keterangan' => 'required|max:200',
            'stok_obat' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $obat = Obat::find($id);
        $obat->nama_obat = $request->nama_obat;
        $obat->dosis_obat = $request->dosis_obat;
        $obat->keterangan = $request->keterangan;
        $obat->stok_obat = $request->stok_obat;
        $obat->save();

        return redirect()->route('obat.index')->with('success', 'Obat updated successfully.');
    }

    public function destroy($id)
    {
        $obat = Obat::find($id);
        $obat->delete();

        return redirect()->route('obat.index')->with('success', 'Obat deleted successfully.');
    }
}
