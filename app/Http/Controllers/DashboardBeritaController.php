<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;

class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.berita.index', [
            "berita" => Berita::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.berita.create', [
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:beritas',
            'category_id' => 'required',
            'body' => 'required'
        ]);

        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 100);

        Berita::create($validatedData);

        return redirect('/dashboard/berita')->with('success', 'Berita baru berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        return $berita;
        return view('dashboard.show', [
            "berita" => $berita
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }

    public function checkSlug(Request $request) {
        $slug = SlugService::createSlug(Berita::class, 'slug', $request->title);
        return response() -> json(['slug' => $slug]);
    }
}
