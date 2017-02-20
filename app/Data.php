<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public function title()
    {
    	return $this->belongsTo('App\Title');
    }
}
