<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;
use Carbon\Carbon;
use App\Models\LaporanKeuangan;

class PengeluaranController extends Controller
{
    public function create()
    {
        return view('keuangan.pengeluaran');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jenisPengeluaran' => 'required|string',
            'deskripsiPengeluaran' => 'required|string',
            'nominal' => 'required|numeric',
        ]);

        $laporan = LaporanKeuangan::create([
            'name' => $request->input('jenisPengeluaran'),
            'tipe' =>'Pengeluaran',
            'debit' =>$request->input('nominal'),
            'tanggal'=> $request->input('tanggal'),
        ]);

        $tanggalPengeluaran = Carbon::parse($request->input('tanggal'));
        Pengeluaran::create([
            'id_lap' => $laporan->id,
            'tanggal_pengeluaran' => $request->input('tanggal'),
            'ket_pendanaan' => $request->input('deskripsiPengeluaran'),
            'total' => $request->input('nominal'),
        ]);

        return redirect()->route('donations.berhasil')
            ->with('success', 'Pengeluaran created successfully.');
    }

    public function edit($id)
    {
        $laporan = LaporanKeuangan::findOrFail($id);
        $pengeluaran = Pengeluaran::where('id_lap', $id)->firstOrFail();
        return view('keuangan.edit_pengeluaran', compact('pengeluaran','laporan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jenisPengeluaran' => 'required|string',
            'deskripsiPengeluaran' => 'required|string',
            'nominal' => 'required|numeric',
        ]);

        $tanggalPengeluaran = Carbon::parse($request->input('tanggal'));
        $pengeluaran = Pengeluaran::findOrFail($id);
        $laporan = LaporanKeuangan::findOrFail($pengeluaran->id_lap);

        $pengeluaran->update([
            'tanggal_pengeluaran' => $request->input('tanggal'),
            'ket_pendanaan' => $request->input('deskripsiPengeluaran'),
            'total' => $request->input('nominal'),
        ]);

        $debit = $request->input('nominal');

        $laporan->update([
            'debit' => $debit,
            'name' => $request->input('jenisPengeluaran'),
            'tipe' => 'Pengeluaran',
        ]);

        notify()->success('Pengeluaran berhasil dibuat');
        return redirect()->route('donations.berhasil')
            ->with('success', 'Pengeluaran updated successfully.');
    }

    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $laporan = LaporanKeuangan::findOrFail($pengeluaran->id_lap);

        $pengeluaran->delete();

        $laporan->delete();

        return redirect()->route('donations.berhasil')
            ->with('success', 'Pengeluaran deleted successfully.');
    }

}
