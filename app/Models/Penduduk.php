<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    public function gampongs(){
        return $this->hasOne(Gampong::class,'id','gampongs_id');
    }
}
