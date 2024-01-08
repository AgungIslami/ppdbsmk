<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Status extends Model
{
    use HasFactory;
    public function pendaftaran():BelongsTo
    {
        return $this->belongsTo(related:Pendaftaran::class);
    }
    public function selesksi():BelongsTo
    {
        return $this->belongsTo(related:Seleksi::class);
    }
}
