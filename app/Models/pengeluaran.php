<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    use HasFactory;
    protected $table = 'pengeluaran';
    protected $fillable = ['id_lap', 'jenis_pengeluaran', 'harga_satuan', 'jumlah_unit', 'total', 'ket_pendanaan'];

    public function lapKeuangan()
    {
        return $this->belongsTo(LapKeuangan::class, 'id_lap');
    }
}
