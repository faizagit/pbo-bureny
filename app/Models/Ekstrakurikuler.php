<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekstrakurikuler extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->hasMany(User::class);
    }
    
    public function pengumuman(){
        return $this->hasMany(Pengumuman::class);
    }
}
