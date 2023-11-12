<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventPdt;

class EventPdtController extends Controller
{
    public function create()
    {
        return view('events.createKegiatan');
    }
 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'quota' => 'required|numeric',
            'lokasi' => 'required',
            'waktu_mulai' => 'required|date',
            'waktu_akhir' => 'required|date|after:waktu_mulai',
        ]);

        EventPdt::create($validatedData);

        return redirect()->route('events.index')
            ->with('success', 'Kegiatan berhasil dibuat!');
    }
}
