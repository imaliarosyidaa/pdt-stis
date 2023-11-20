<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Models\PostGallery;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

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
            'filename' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'title' => 'required',
            'caption' => 'required',
            'tahun' => 'required',
        ]);

        $gallery = $request->file('filename');
        $gallery->storeAs('public/posts', $gallery->hashName());

        PostGallery::create([
            'filename' => $gallery->hashName(),
            'title' => $request->input('title'),
            'caption' => $request->input('caption'),
            'tahun' => $request->input('tahun')
        ]);

        return redirect('/admin/upload-galeri')->with(['succes'=> 'Foto berhasil ditambahkan!']);
    }
}
