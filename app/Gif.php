<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gif extends Model
{
	/*
	* Model Gif user 
	* relationship with user
	 */

    public function user()
    {
    	return $this->belongsTo('App\User');
    }


}
