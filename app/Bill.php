<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table = 'bill';

    public function billDetail()
    {
        
            return $this->hasMany('App\BillDetail', 'id_bill', 'id');
    }
}
