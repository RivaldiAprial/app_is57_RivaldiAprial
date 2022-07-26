<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gampong extends Model
{
    public function gampong(){
        return $this->belongTo(Penduduk::class);
    }
}
