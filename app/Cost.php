<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $table = 'costs';
    
    
   public function tours()
   {
    //    return $this->belongsTo('App\Tour','idCost','idTour');
    
       return $this->hasOne('App\Tour','id');
   }
}
