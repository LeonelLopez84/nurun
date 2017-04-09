<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gif extends Model
{


    public function user()
    {
    	return $this->belongsTo('App\User');
    }


}
