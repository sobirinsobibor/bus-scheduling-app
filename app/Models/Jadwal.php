<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    public function detail_jadwal(){
        return $this->hasMany(DetailJadwal::class, 'jadwal_id');
    }
}
