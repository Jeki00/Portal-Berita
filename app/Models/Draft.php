<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\User;
use App\Models\Review;

class Draft extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail',
        'judul',
        'kata_kunci',
        'isi',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function review(): HasOne
    {
        return $this->hasOne(Review::class, 'id_draft');
    }
}
