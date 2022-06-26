<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lemari extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id', 'rel_id', 'lemari', 'keterangan'];

    public function rel()
    {
        return $this->belongsTo(Rel::class);
    }

    public function raks()
    {
        return $this->hasMany(Rak::class);
    }
}
