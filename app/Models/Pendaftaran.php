<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function status():BelongsTo
    {
        return $this->belongsTo(Status::class, 'id_status');
    }
}
