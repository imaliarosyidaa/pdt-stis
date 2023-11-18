<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;

    protected $table = 'donations';
    protected $fillable = [
        'user_id', 
        'nominal', 
        'link', 
        'pesan', 
        'nama',
        'metode',
        'event_pdt_id',
        'email_pembuat',
    ];

    public function eventPdt()
    {
        return $this->belongsTo(EventPdt::class);
    }

}
