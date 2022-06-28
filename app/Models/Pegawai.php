<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'nip', 'nama', 'keterangan', 'perangkat_daerah_id'];

    public function perangkat_daerah()
    {
        return $this->belongsTo(PerangkatDaerah::class);
    }

    public function lokasi()
    {
        return $this->hasOne(Lokasi::class);
    }

    public function dokumen()
    {
        return $this->belongsToMany(Dokumen::class)->withPivot(['file', 'nomor', 'tanggal']);
    }
}
