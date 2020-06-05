<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListCustomer extends Model
{
    //
    protected $table ='listcustomer';

    public function customer()
    {
        return $this->hasMany('App\Customer','id');
    }
}
