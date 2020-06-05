<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';

    public function listCustomer()
    {
       
            return $this->hasOne('App\listCustomer', 'id_customer', 'id');
    }
}
