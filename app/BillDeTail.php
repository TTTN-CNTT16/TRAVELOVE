<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BillDeTail extends Model
{
    protected $table = 'bill_detail';

    public function bill()
    {
        
            return $this->belongsTo('App\Bill','id');
    }
}
