<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded = [];

    //relazione con la tabella dei apartments 
    public function apartments()
    {
        return $this->belongsToMany('App\Apartment');
    }
}
