<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'title','num_room','num_beds','num_baths','mq','city','province','state','latitude','longitude','description','main_img','price','active'
    ];
    //relation with user *
    public function user(){
        return $this->belongsTo('App/User');
    }
    //relation with message 1
    public function messages(){
        return $this->hasMany('App/Message');
    }

    //relation with service{BRIDGE}
    public function services(){
        return $this->belongsToMany('App/Service');
    }
    //relation with view 1
    public function views(){
        return $this->hasMany('App/View');
    }
    //relation with sponsor{BRIDGE}
    public function sponsors(){
        return $this->belongsToMany('App/Sponsor');
    }
    //relation with images 1
    public function images(){
        return $this->hasMany('App/Image');
    }
}