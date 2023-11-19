<?php

namespace App\Models;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //memakai posts karena hubungannya one to many
    public function posts() {
        return $this->hasMany(Berita::class);
    }
}
