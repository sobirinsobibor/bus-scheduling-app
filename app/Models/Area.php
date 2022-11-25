<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function keberangkatan(){
        return $this->hasMany(DetailJadwal::class, 'keberangkatan_id');
    }
    
    public function kedatangan(){
        return $this->hasMany(DetailJadwal::class, 'kedatangan_id');
    } 
}
