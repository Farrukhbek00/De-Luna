<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //

   public function customer()
   {
   		return $this->hasOne('App\Customer');
   }

   public function payment()
   {
   		return $this->hasOne('App\Payment');
   }

   public function room()
   {
   		return $this->hasOne('App\Room');
   }


}