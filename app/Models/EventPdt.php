<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventPdt extends Model
{
    use HasFactory;
    
    protected $table = 'event_pdt';
    protected $fillable = [
        'title',
        'description',
        'quota',
        'lokasi',
        'waktu_mulai',
        'waktu_akhir',
    ];
}
