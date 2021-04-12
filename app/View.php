<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $fillable = [
        'date'
    ];

    //Relazioni
    protected function apartment(){
        return $this->belongsTo('App\Apartment');
    }
}
