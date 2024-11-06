<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    
    public function reservation() {
        return $this->hasMany(Reservation::class);
    }
    
}
