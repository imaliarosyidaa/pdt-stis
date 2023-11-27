<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Category;

class BeritaController extends Controller
{
    // unpas start
    public function index() {
        $title = '';
        $activeCategory = null;

        if(request('category')) {
            $activeCategory = Category::firstWhere('slug', request('category'));
            $title = ": " . $activeCategory->name;
        }
        return view('berita', [
            "title" => "Berita" . $title,
            "berita" => Berita::latest()->filter(request(['search', 'category']))->paginate(5)->withQueryString(),
            "categories" => Category::all(),
            "activeCategory" => $activeCategory,      
            "recentPost" => Berita::latest()->take(5)->get()
        ]);
    }

    // public function show(Berita $berita) {
    //     $activeCategory = null;
    //     return view('berita-single', [
    //         "title" => $berita->title,
    //         "berita" => $berita,
    //         "categories" => Category::all(),
    //         "activeCategory" => $activeCategory,   
    //         "recentPost" => Berita::latest()->take(5)->get()
    //     ]);
    // }

    public function show($slug) {
        $berita = Berita::where('slug', $slug)->firstOrFail();
    
        return view('berita-single', [
            "title" => $berita->title,
            "berita" => $berita,
            "categories" => Category::all(),
            "activeCategory" => null,
            "recentPost" => Berita::latest()->take(5)->get()
        ]);
    }

    // unpas end

    //menampilkan semua berita
    // public function index(Request $request) {
    //     $search = $request->input('search');
    
    //     // Query untuk mencari berdasarkan judul atau konten
    //     $posts = Berita::where('title', 'like', "%$search%")
    //                   ->orWhere('body', 'like', "%$search%")
    //                   ->orWhere('author', 'like', "%$search%")
    //                   ->latest()
    //                   ->paginate(5)
    //                   ->withQueryString();
    
    //     return view('berita', [
    //         "title" => "Berita",
    //         "posts" => $posts,
    //         "categories" => Category::all()
    //     ]);
    // }

    // //menampilkan satu post berdasarkan judul atau slug
    // public function show($slug) {
    //     $post = Berita::where('slug', $slug)->firstOrFail();
    //     $posts = Berita::latest()->take(5)->get();
    //     return view('berita-single', [
    //         "title" => $post->title,
    //         "post" => $post,
    //         "posts" => $posts,
    //         "categories" => Category::all()
    //     ]);
    // }

    // public function showByCategory($categorySlug) {
    //     $category = Category::where('slug', $categorySlug)->firstOrFail();
    //     $posts = $category->posts()->latest()->paginate(5)->withQueryString();
    
    //     return view('berita', [
    //         "title" => "Post By Category: $category->name",
    //         "posts" => $posts,
    //         "categories" => Category::all()
    //     ]);
    // }
}

