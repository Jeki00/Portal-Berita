<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;

class Iklan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'gambar',
        'tanggal_keluar',
        'tanggal_hilang',
        'perusahaan',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
