<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class jadwal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function bus(){
        return $this->belongsTo(bus::class);
    }
    public function supir()
    {
        return $this->belongsTo(supir::class);
    }
}
