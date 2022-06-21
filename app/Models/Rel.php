<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id', 'rel', 'keterangan'];

    public function lemaris()
    {
        return $this->hasMany(Lemari::class);
    }
}
