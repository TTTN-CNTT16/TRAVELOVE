<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    

    protected $table = 'tours';
    
    
    public function costTour()
    {
        return $this->belongsTo('App\Cost','id_tour','id');
    }

    public function placeTour()
    {
        return $this->belongsTo('App\Place','id');
    }
    public function slideTour()
    {
        return $this->belongsTo('App\SlideTour','id_tour','id');
    }
}
