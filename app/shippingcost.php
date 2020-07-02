<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shippingcost extends Model
{
    protected $fillable = [
        'place', 'cost',
    ];
   public static function cost(){
        $cost=shippingcost::get();
        return $cost;
    }
}
