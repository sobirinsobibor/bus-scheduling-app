<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailPeminjaman extends Model
{
    use HasFactory;

    public function bus(){
        return $this->BelongsTo(Bus::class, 'bus_id');
    }
}
