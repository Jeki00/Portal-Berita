<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\User;
use App\Models\Dompet;

class Withdraw extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_request',
        'nama_pemilik_kartu',
        'negara',
        'tanggal_pembayaran',
        'status',
        'nominal',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function dompets(): HasMany
    {
        return $this->hasMany(Dompet::class, 'kode_request');
    }
}
