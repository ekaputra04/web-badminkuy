<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPenyewaanLapangan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function penyewaanLapangan()
    {
        return $this->belongsTo(PenyewaanLapangan::class, 'id_penyewaan');
    }
}
