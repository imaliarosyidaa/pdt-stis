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
        return view('beranda', compact('galleries'));
    }
}
