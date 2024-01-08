<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Seleksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = ['id_seleksi', 'id_pendaftaran', 'nilai_rata_rata', 'id_status'];


    public function pendaftaran(): BelongsTo
    {
        return $this->belongsTo(Pendaftaran::class ,'id_pendaftaran'); // Adjust the foreign key if necessary
    }

    public function status():HasMany
    {
        return $this->hasMany(Status::class, 'id_status');
    }
}
