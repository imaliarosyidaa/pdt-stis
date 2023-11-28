<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostGallery extends Model
{
    protected $table = 'galleries';
    protected $fillable = ['filename', 'title', 'tahun'];
}