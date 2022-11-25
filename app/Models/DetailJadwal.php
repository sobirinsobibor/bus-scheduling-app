<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailJadwal extends Model
{
    use HasFactory;
    
    protected $guarded = [
        'id'
    ];

    public function jadwal(){
        return $this->belongsTo(Jadwal::class, 'jadwal_id');
    }

    public function jam_keberangkatan(){
        return $this->belongsTo(JadwalJam::class, 'jam_keberangkatan_id');
    }

    public function jam_kedatangan(){
        return $this->belongsTo(JadwalJam::class, 'jam_kedatangan_id');
    }

    public function bus(){
        return $this->belongsTo(Bus::class, 'bus_id');
    }

    public function keberangkatan(){
        return $this->belongsTo(Area::class, 'keberangkatan_id');
    }
    public function kedatangan(){
        return $this->belongsTo(Area::class, 'kedatangan_id');
    }
}
