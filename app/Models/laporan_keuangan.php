<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan_keuangan extends Model
{
    use HasFactory;
    protected $table = 'lap_keuangan';
    protected $fillable = ['name', 'debit'];

    public function pengeluarans()
    {
        return $this->hasMany(Pengeluaran::class, 'id_lap');
    }

    public function pemasukans()
    {
        return $this->hasMany(Pemasukan::class, 'id_lap');
    }
}
