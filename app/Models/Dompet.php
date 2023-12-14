<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Withdraw;


class Dompet extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_request',
        'id_berita',
        'tanggal',
        'view',
        'status',
    ];

    public function withdraw(): BelongsTo
    {
        return $this->belongsTo(Withdraw::class, 'kode_request');
    }
}
