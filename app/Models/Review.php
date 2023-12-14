<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Kategori;
use App\Models\Draft;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_draft',
        'status',
        'id_kategori',
        'komisi',
        'catatan',
    ];

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function draft(): BelongsTo
    {
        return $this->belongsTo(Draft::class, 'id_draft');
    }
    public function berita(): BelongsTo
    {
        return $this->belongsTo(Berita::class, 'id_review');
    }
}
