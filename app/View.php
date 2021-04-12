<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = [
        'date'
    ];

    //Relazioni
    protected function apartments(){
        return $this->belongsTo('App\Apartment');
    }
}
