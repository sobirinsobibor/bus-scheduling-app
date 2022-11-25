<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialIdentity extends Model
{
    use HasFactory;

    public function bus(){
        return $this->hasMany(Bus::class, 'identity_id');
    }
}
