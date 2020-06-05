<?php

namespace App;
use App\Tour;

use Illuminate\Database\Eloquent\Model;

class SlideTour extends Model
{
    protected $table='slidetours';

    public function tours()
    {
        return $this->hasMay('Tour','id');
    }
}
