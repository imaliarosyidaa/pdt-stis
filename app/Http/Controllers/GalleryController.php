<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Styr;

class GalleryController extends Controller
{
    public function create()
    {
        //$gallery = Gallery::all();
        return view('upload-galeri');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photoFile' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'photoTitle' => 'required',
            'photoDescription' => 'required',
            'photoYear' => 'required',
        ]);

        $gallery = new Gallery;
        $gallery->filename = $request->file('photoFile')->store('gallery');
        $gallery->title = $validatedData['photoTitle'];
        $gallery->caption = $validatedData['photoDescription'];
        $gallery->tahun = $validatedData['photoYear'];
        // Set nilai urutan secara otomatis (misalnya, +1 dari urutan terakhir pada tahun yang sama)
        $lastOrder = Gallery::where('tahun', $gallery->tahun)->max('urutan');
        $gallery->urutan = $lastOrder + 1;
        $gallery->save();

        return redirect('/admin/upload-galeri')->with('succes', 'Foto berhasil ditambahkan!');
    }

}
