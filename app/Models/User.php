<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Komentar;
use App\Models\Draft;
use App\Models\Iklan;
use App\Models\Role;
use App\Models\Withdraw;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'no_hp',
        'id_role',
        'no_rekening'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function komentars(): HasMany
    {
        return $this->hasMany(Komentar::class, 'created_by');
    }

    public function drafts(): HasMany
    {
        return $this->hasMany(Draft::class, 'created_by');
    }

    public function iklans(): HasMany
    {
        return $this->hasMany(Iklan::class, 'created_by');
    }

    public function withdraws(): HasMany
    {
        return $this->hasMany(Withdraw::class, 'created_by');
    }

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'id_kategori');
    }
}
