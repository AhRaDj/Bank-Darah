<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function Donor(){
        return $this->hasMany(Donor::class);
    }
    
    public function Darah(){
        return $this->belongsTo(Darah::class, 'id_darah');
    }

}
