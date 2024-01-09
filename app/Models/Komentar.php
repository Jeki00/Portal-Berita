<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;
use App\Models\Berita;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_berita',
        'komentar',
        'created_by'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function berita(): BelongsTo
    {
        return $this->belongsTo(Berita::class, 'id_berita');
    }
}
