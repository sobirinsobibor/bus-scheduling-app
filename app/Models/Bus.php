<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    public function detail_peminjamen(){
        return $this->hasMany(DetailPeminjaman::class, 'bus_id');
    }

    public function detail_jadwal(){
        return $this->hasMany(DetailJadwal::class, 'bus_id');
    }
    

    public function special_identity(){
        return $this->belongsTo(SpecialIdentity::class, 'identity_id');
    }

}
