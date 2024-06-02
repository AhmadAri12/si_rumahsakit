<?php
namespace App\Http\Controllers;

use App\Models\Tindakan;
use App\Models\Dokter;
use App\Models\Obat;
use App\Models\LayananDarurat;
use Illuminate\Http\Request;

class TindakanController extends Controller
{
    public function index()
    {
        $tindakans = Tindakan::with(['dokter', 'obat', 'layanan'])->get();
        return view('tindakan.index', compact('tindakans'));
    }

    public function create()
    {
        $dokters = Dokter::all();
        $obats = Obat::all();
        $layanans = LayananDarurat::all();
        return view('tindakan.create', compact('dokters', 'obats', 'layanans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_tindakan' => 'required',
            'id_layanan' => 'required',
            'id_dokter' => 'required',
            'diagnosa_penyakit' => 'required',
            'id_obat' => 'required',
            'biaya_perawatan' => 'required',
            'status_perawatan' => 'required',
        ]);

        $tindakan = new Tindakan([
            'id_tindakan' => $request->get('id_tindakan'),
            'id_layanan' => $request->get('id_layanan'),
            'id_dokter' => $request->get('id_dokter'),
            'diagnosa_penyakit' => $request->get('diagnosa_penyakit'),
            'id_obat' => $request->get('id_obat'),
            'biaya_perawatan' => $request->get('biaya_perawatan'),
            'status_perawatan' => $request->get('status_perawatan'),
            'created' => now(),
            'updated' => now()
        ]);

        $tindakan->save();
        return redirect()->route('tindakan.index')->with('success', 'Tindakan berhasil ditambahkan');
    }

    public function show($id)
    {
        $tindakan = Tindakan::with(['dokter', 'obat', 'layanan'])->findOrFail($id);
        return view('tindakan.show', compact('tindakan'));
    }

    public function edit($id)
    {
        $tindakan = Tindakan::findOrFail($id);
        $dokters = Dokter::all();
        $obats = Obat::all();
        $layanans = LayananDarurat::all();
        return view('tindakan.edit', compact('tindakan', 'dokters', 'obats', 'layanans'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_tindakan' => 'required',
            'id_layanan' => 'required',
            'id_dokter' => 'required',
            'diagnosa_penyakit' => 'required',
            'id_obat' => 'required',
            'biaya_perawatan' => 'required',
            'status_perawatan' => 'required',
        ]);

        $tindakan = Tindakan::findOrFail($id);
        $tindakan->id_tindakan = $request->get('id_tindakan');
        $tindakan->id_layanan = $request->get('id_layanan');
        $tindakan->id_dokter = $request->get('id_dokter');
        $tindakan->diagnosa_penyakit = $request->get('diagnosa_penyakit');
        $tindakan->id_obat = $request->get('id_obat');
        $tindakan->biaya_perawatan = $request->get('biaya_perawatan');
        $tindakan->status_perawatan = $request->get('status_perawatan');
        $tindakan->updated = now();

        $tindakan->save();
        return redirect()->route('tindakan.index')->with('success', 'Tindakan berhasil diperbarui');
    }

    public function destroy($id)
    {
        $tindakan = Tindakan::findOrFail($id);
        $tindakan->delete();
        return redirect()->route('tindakan.index')->with('success', 'Tindakan berhasil dihapus');
    }
}


