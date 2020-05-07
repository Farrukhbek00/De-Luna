<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['arrival', 'checkout', 'breakfast', 'night', 'comment', 'book_time'];

   public function user()
   {
   		return $this->belongsTo('App\User');
   }

   public function payment()
   {
   		return $this->hasOne('App\Payment');
   }

   public function room()
   {
   		return $this->hasOne('App\Room');
   }

   public function cancellation()
   {
   		return $this->hasOne('App\Cancellation');
   }

   public function booktype()
   {
         return $this->hasOne('App\BookType');
   }


}