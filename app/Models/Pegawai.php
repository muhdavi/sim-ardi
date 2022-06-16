<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    public function perangkat_daerah()
    {
        return $this->belongsTo(PerangkatDaerah::class);
    }
}
