<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Reservation
 * @package App
 *
 * A Reservation is a client joining a program
 *
 */
class Reservation extends Model
{
    //
    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id', 'id');
    }

    public function program()
    {
        return $this->belongsTo('App\Program', 'room_id', 'id');
    }
}
