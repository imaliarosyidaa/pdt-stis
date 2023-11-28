<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemasukan;
use Carbon\Carbon;
use App\Models\LaporanKeuangan;

class PemasukanController extends Controller
{
    public function create()
    {
        return view('keuangan.pemasukan');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jenisPemasukan' => 'required|string',
            'deskripsiPemasukan' => 'required|string',
            'nominal' => 'required|numeric',
        ]);


        $tanggalPemasukan = Carbon::parse($request->input('tanggal'));


        $laporan =LaporanKeuangan::create([
            'name' => $request->input('jenisPemasukan'),
            'tipe' => 'Pemasukan',
            'debit' => $request->input('nominal'),
            'tanggal'=>$tanggalPemasukan,
        ]);

        Pemasukan::create([
            'id_lap' => $laporan->id,
            'tanggal_pemasukan' => $tanggalPemasukan,
            'ket_pendanaan' => $request->input('deskripsiPemasukan'),
            'total' => $request->input('nominal'),
        ]);

<<<<<<< HEAD
        LaporanKeuangan::create([
            'name' => $request->input('jenisPemasukan'),
            'tipe' => 'Pemasukan',
            'debit' => $request->input('nominal'),
        ]);

        notify()->success('Pemasukan berhasil dibuat');
        return redirect()->to('/admin/keuangan/pemasukan');
=======
        return redirect()->route('donations.berhasil')
            ->with('success', 'Pemasukan created successfully.');
>>>>>>> 481a2574405575cd475cfab16e0873ff80362410
    }


    public function edit($id)
    {
        $laporan = LaporanKeuangan::findOrFail($id);
        $pemasukan = Pemasukan::where('id_lap', $id)->firstOrFail();
        return view('keuangan.edit_pemasukan', compact('pemasukan','laporan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jenisPemasukan' => 'required|string',
            'deskripsiPemasukan' => 'required|string',
            'nominal' => 'required|numeric',
        ]);

        $tanggalPemasukan = Carbon::parse($request->input('tanggal'));
        $pemasukan = Pemasukan::findOrFail($id);
        $laporan = LaporanKeuangan::findOrFail($pemasukan->id_lap);

        $pemasukan->update([
            'tanggal_pemasukan' => $request->input('tanggal'),
            'ket_pendanaan' => $request->input('deskripsiPemasukan'),
            'total' => $request->input('nominal'),
        ]);

        $debit = $request->input('nominal');

        $laporan->update([
            'debit' => $debit,
            'name' => $request->input('jenisPemasukan'),
        ]);

        return redirect()->route('donations.berhasil')
            ->with('success', 'Pemasukan updated successfully.');
    }

    public function destroy($id)
    {
        $pemasukan = Pemasukan::findOrFail($id);
        $laporan = LaporanKeuangan::findOrFail($pemasukan->id_lap);

        $pemasukan->delete();

        $laporan->delete();

        return redirect()->route('donations.berhasil')
            ->with('success', 'Pemasukan deleted successfully.');
    }

}
