<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Ekstrakurikuler;

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
        'jurusan_id',
        'ekskul1',
        'ekskul2',
        'ekskul3',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }
    public function ekskulpertama()
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'ekskul1', 'id');
    }
    public function ekskulkedua()
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'ekskul2', 'id');
    }
    public function ekskulketiga()
    {
        return $this->belongsTo(Ekstrakurikuler::class, 'ekskul3', 'id');
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
