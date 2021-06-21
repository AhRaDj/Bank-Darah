<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penerima extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Transfusi(){
        return $this->hasMany(Transfusi::class);
    }

    public function Darah(){
        return $this->belongsTo(Darah::class, 'id_darah');
    }
}
