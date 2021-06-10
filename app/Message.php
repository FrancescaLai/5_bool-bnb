<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $guarded = [];

    //relazione con la tabella dei apartment 
    public function apartment()
    {
        return $this->belongsTo('App\Apartment');
    }

    //relazione con la tabella dei user 
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
