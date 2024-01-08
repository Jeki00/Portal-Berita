<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Kategori;
use App\Models\Draft;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_draft',
        'status',
        'id_category',
        'komisi',
        'catatan',
    ];

    public static function customCreate($id_draft, $status, $id_category, $komisi, $catatan)
    {
        return Review::create([
            'id_draft' => $id_draft,
            'status' => $status,
            'id_category' => $id_category,
            'komisi' => $komisi,
            'catatan' => $catatan,
        ]);
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function draft(): BelongsTo
    {
        return $this->belongsTo(Draft::class, 'id_draft');
    }
    public function berita(): HasOne
    {
        return $this->hasOne(Berita::class, 'id_review');
    }
}
