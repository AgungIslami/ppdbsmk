<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seleksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function pendaftaran()
    {
        return $this->belongsTo(Pendaftaran::class);
    }
}
