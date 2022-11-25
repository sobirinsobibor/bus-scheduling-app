<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalJam extends Model
{
    use HasFactory;

    public function jam_keberangkatan(){
        return $this->hasMany(DetailJadwal::class, 'jam_keberangkatan_id');
    }
    public function jam_kedatangan(){
        return $this->hasMany(DetailJadwal::class, 'jam_kedatangan_id');
    }
}
