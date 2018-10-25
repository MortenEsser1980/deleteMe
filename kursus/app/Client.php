<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


/**
 * Class Client
 * @package App
 *
 * A Client participates in a course
 */
class Client extends Model
{
    //
    public function reservations()
    {
        return $this->hasMany('App\Reservation');
    }
}
