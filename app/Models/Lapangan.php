<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lapangan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'lapangan';

    public function pemilik()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
