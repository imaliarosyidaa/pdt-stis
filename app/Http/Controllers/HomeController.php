<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;
use App\Models\testimoni_feedback;
use App\Models\Berita;
use App\Models\Gallery;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\PostGallery;

class HomeController extends Controller
{
    /**
     * welcome, landing page utama
     *
     * @return void
     */

    public function index()
    {
        $title = '';
        $activeCategory = null;

        if(request('category')) {
            $activeCategory = Category::firstWhere('slug', request('category'));
            $title = ": " . $activeCategory->name;
        }

        $berita = [
            "title" => "Berita" . $title,
            "berita" => Berita::latest()->filter(request(['search', 'category']))->paginate(5)->withQueryString(),
            "categories" => Category::all(),
            "activeCategory" => $activeCategory,      
            "recentPost" => Berita::latest()->take(3)->get()
        ];

        $data = [
            'testimoni_feedback' => testimoni_feedback::where('status', 1)->orderBy('created_at', 'desc')->get(),
        ];

       // $galleries = PostGallery::all();
        $foto = PostGallery::where('urutan', '!=', null)
            ->limit(3)
            ->orderby('urutan', 'asc')
            ->get();

        return view('welcome',$data, $berita, $foto);
    }
}
