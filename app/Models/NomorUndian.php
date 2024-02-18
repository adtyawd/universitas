<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NomorUndian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function peserta(): HasOne{
        return $this->hasOne(Peserta::class);
    }
}
