<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $guarded = ['services'];

    //relazione con la tabella dei messages 
    public function messages()
    {
        return $this->hasMany('App\Message');
    }

    //relazione con la tabella dei users 
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    //relazione con la tabella dei services
    public function services()
    {
        return $this->belongsToMany('App\Service');
    }

    //relazione con la tabella dei packages 
    public function packages()
    {
        return $this->belongsToMany('App\Package');
    }
}
