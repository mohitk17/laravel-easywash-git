<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $fillable = [ 'dos', 'laundry_weight','dryclean','user_id','sp_id','service_id','drycleaning_id','tailoring_id' ];

    public function drycleanings()
    {
      return $this->belongsToMany('App\drycleaning');
    }

    public function washandfolds()
    {
      return $this->belongsToMany('App\washandfold');
    }

    public function tailorings()
    {
      return $this->belongsToMany('App\tailoring');
    }

}
