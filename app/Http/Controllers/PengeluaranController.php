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

        $tanggalPengeluaran = Carbon::parse($request->input('tanggal'));
        Pengeluaran::create([
            'tanggal_pengeluaran' => $request->input('tanggal'),
            'ket_pendanaan' => $request->input('deskripsiPengeluaran'),
            'total' => $request->input('nominal'),
        ]);

        $debit = $request->input('nominal');

        LaporanKeuangan::create([
            'name' => $request->input('jenisPengeluaran'),
            'tipe' =>'Pengeluaran',
            'debit' =>$debit,
            'tanggal'=> $request->input('tanggal'),
        ]);

        return redirect()->route('donations.berhasil')
            ->with('success', 'Pengeluaran created successfully.');
    }
    public function edit($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);

        return view('keuangan.edit_pengeluaran', compact('pengeluaran'));
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
        $pengeluaran->update([
            'tanggal_pengeluaran' => $request->input('tanggal'),
            'ket_pendanaan' => $request->input('deskripsiPengeluaran'),
            'total' => $request->input('nominal'),
        ]);

        $debit = $request->input('nominal');

        LaporanKeuangan::where('tanggal', $pengeluaran->tanggal_pengeluaran)
            ->where('tipe', 'Pengeluaran')
            ->update(['debit' => $debit, 'name' => $request->input('jenisPengeluaran')]);

        return redirect()->route('donations.berhasil')
            ->with('success', 'Pengeluaran updated successfully.');
    }

    public function destroy($id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $jenisPengeluaran = $pengeluaran->ket_pendanaan;

        $pengeluaran->delete();

        LaporanKeuangan::where('tanggal', $pengeluaran->tanggal_pengeluaran)
            ->where('tipe', 'Pengeluaran')
            ->delete();

        return redirect()->route('donations.berhasil')
            ->with('success', 'Pengeluaran deleted successfully.');
    }
}
