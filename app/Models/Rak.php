<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function lemari()
    {
        return $this->belongsTo(Lemari::class);
    }
}
