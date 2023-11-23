<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    public function testimoni_feedback()
    {
        return $this->hasMany(testimoni_feedback::class);
    }
}
