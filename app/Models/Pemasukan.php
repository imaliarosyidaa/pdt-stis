<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;
    protected $table = 'pemasukan';
    protected $fillable = ['id_lap', 'ket_pendanaan', 'total'];

    public function lapKeuangan()
    {
        return $this->belongsTo(LapKeuangan::class, 'id_lap');
    }
}
