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

    public static function customCreate($kode_request, $id_berita, $tanggal, $view, $status)
    {
        return Dompet::create([
            'kode_request' => $kode_request,
            'id_berita' => $id_berita,
            'tanggal' => $tanggal,
            'view' => $view,
            'status' => $status,
        ]);
    }


    public function withdraw(): BelongsTo
    {
        return $this->belongsTo(Withdraw::class, 'kode_request');
    }
    public function berita(): BelongsTo
    {
        return $this->belongsTo(Berita::class, 'id_berita');
    }
}
