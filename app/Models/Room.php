<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Room extends Model
{

    protected $fillable = [
        'room_type',
        'price_per_night',
        'is_VIP',
        'description',
        'status',
    ];

    public function housekeeping() {
        return $this->hasMany(Housekeeping::class);
    }

    public function maintenance() {
        return $this->hasMany(Maintenance::class);
    }

    public function reservation() {
        return $this->hasMany(Reservation::class);
    }

    static function getRooms () {
        $query = self::select('rooms.*');

        if (!empty(Request::get('room_type'))) {
            $query->where('rooms.room_type',  Request::get('room_type'));
        }
        if (!empty(Request::get('price_per_neight'))) {
            $query->where('rooms.price_per_neight', 'LIKE','%' . Request::get('price_per_neight') . '%');
        }
        if (!empty(Request::get('VIB')) or Request::get('VIB') == '0') {
            $query->where('rooms.is_VIB',Request::get('VIB'));
        }
        if (!empty(Request::get('status')) or Request::get('status') == '0') {
            $query->where('rooms.status',Request::get('status'));
        }

        return $query->paginate(5);
    }

    public static function getRoomById($id) {
        return self::where('id', $id)->first();
    }


}
