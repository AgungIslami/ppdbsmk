<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Seleksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;

    public function pendaftaran(): BelongsTo
    {
        return $this->belongsTo(Pendaftaran::class, 'id_pendaftaran'); // Adjust the foreign key if necessary
    }

    public function status():BelongsTo
    {
        return $this->belongsTo(related: Status::class);
    }
}
