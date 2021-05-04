<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    protected $fillable = [
        'nome', 'regione','provincia','codiceCatastale','cap','lat','lon',
    ];
}
