<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    protected $table = "kelurahans";
    protected $fillable = ['nama_kelurahan','id_kecamatan'];
    public $timestamps = true;

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class,'id_kecamatan');
    }
}
