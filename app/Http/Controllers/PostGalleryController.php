<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostGallery;

class PostGalleryController extends Controller
{
    /**
     * index
     * 
     * @return void
     */
    public function index()
    {
        //get post
        $galleries = PostGallery::all();

        //render view with posts
<<<<<<< HEAD
        return view('welcome', compact('galleries'));
=======
        return view('gallery', compact('galleries'));
>>>>>>> a3e262417d964660bea319c3c3519a212a2c76d4
    }

    public function filterByYear($year)
    {
        $galleries = PostGallery::where('tahun', $year)->get();
        return view('galeri-filter', compact('galleries'));
    }
}
