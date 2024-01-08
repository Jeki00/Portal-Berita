<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\Komentar;
use App\Models\Review;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_review',
        'view',
    ];

    public static function customCreate($id_review, $view)
    {
        return Berita::create([
            'id_review' => $id_review,
            'view' => $view
        ]);
    }

    public function komentars(): HasMany
    {
        return $this->hasMany(Komentar::class, 'id_berita');
    }
    public function dompets(): HasMany
    {
        return $this->hasMany(Dompet::class, 'id_berita');
    }

    public function review(): BelongsTo
    {
        return $this->belongsTo(Review::class, 'id_review');
    }
}
