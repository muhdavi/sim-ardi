<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    public function rak()
    {
        return $this->belongsTo(Rak::class);
    }

    public function pegawai()
    {
        return$this->belongsTo(Pegawai::class);
    }
}
