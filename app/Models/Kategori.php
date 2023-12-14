<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Review;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategori',
    ];

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class, 'id_kategori');
    }
}
