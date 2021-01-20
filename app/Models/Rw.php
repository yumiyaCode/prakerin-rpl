<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    use HasFactory;

    protected $table = "rws";

    public function kelurahan(){
        return $this->hasMany(Kelurahan::class);
    }

    public function kasuse(){
        return $this->hasMany(Kasuses::class);
    }
}
