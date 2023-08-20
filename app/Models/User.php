<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'kelas',
        'username',
        'password',
    ];

    public function ekskul1()
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'eksul1');
    }
    public function ekskul2()
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'eksul1');
    }
    public function ekskul3()
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'eksul1');
    }

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
    ];
}
