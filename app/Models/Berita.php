<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use App\Models\Komentar;
use App\Models\Review;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_review',
        'view',
    ];

    public function komentars(): HasMany
    {
        return $this->hasMany(Komentar::class, 'id_berita');
    }

    public function review(): HasOne
    {
        return $this->hasOne(Review::class, 'id_review');
    }

    public function draft(): HasOneThrough
    {
        return $this->through('reviews')->has('draft');
    }
}
