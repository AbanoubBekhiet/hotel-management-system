<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function housekeeping() {
        return $this->hasMany(Housekeeping::class);
    }

    public function maintenance() {
        return $this->hasMany(Maintenance::class);
    }

    public function reservation() {
        return $this->hasMany(Reservation::class);
    }

}
