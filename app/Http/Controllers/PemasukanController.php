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

        Pemasukan::create([
            'tanggal_pemasukan' => $tanggalPemasukan,
            'ket_pendanaan' => $request->input('deskripsiPemasukan'),
            'total' => $request->input('nominal'),
        ]);

        LaporanKeuangan::create([
            'name' => $request->input('jenisPemasukan'),
            'tipe' => 'Pemasukan',
            'debit' => $request->input('nominal'),
        ]);

        return redirect()->route('donations.berhasil')
            ->with('success', 'Pemasukan created successfully.');
    }
}
