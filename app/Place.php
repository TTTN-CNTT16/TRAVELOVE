<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';
    
    public function tours()
    {
        return $this->hasMany('App\Tour','id_place','id');
    }
    
}
