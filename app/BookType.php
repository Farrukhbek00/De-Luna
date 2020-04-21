<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookType extends Model
{
    //
    public function booking() 
    {
    	return $this->belongsTo('App\Booking');
    }
}
