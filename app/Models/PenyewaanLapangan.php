<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenyewaanLapangan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'penyewaan_lapangan';

    public function detailPenyewaanLapangan()
    {
        return $this->hasMany(DetailPenyewaanLapangan::class);
    }
}
