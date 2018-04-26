<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class drycleaning extends Model
{
  public function carts()
  {
    return $this->belongsToMany('App\cart');
  }
}
