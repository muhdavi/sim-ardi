<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id', 'kode', 'nama'];

    public function pegawai()
    {
        return $this->belongsToMany(Pegawai::class);
    }
}
