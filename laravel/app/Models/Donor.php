<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Pendonor(){
        return $this->belongsTo(Pendonor::class, 'id_pendonor');
    }

    public function Waktu(){
        return $this->belongsTo(Waktu::class, 'id_waktu');
    }
}
