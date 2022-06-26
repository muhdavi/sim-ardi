<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatDaerah extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id', 'perangkat_daerah'];

    public function pegawais()
    {
        return $this->hasMany(Pegawai::class, 'perangkat_daerah_id');
    }
}
