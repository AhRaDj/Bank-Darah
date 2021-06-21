<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Darah extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Pendonor(){
        return $this->hasMany(Pendonor::class);
    }

    public function Transfusi(){
        return $this->hasMany(Penerima::class);
    }
}
