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
            'tipe' => 'Pengeluaran',
            'debit' => $debit,
        ]);

        notify()->success('Pengeluaran berhasil dibuat');
        return redirect()->to('/admin/keuangan/pengeluaran');
    }
}
