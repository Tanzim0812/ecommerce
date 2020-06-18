<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//  App\groupitem::first()->with('subgroupitem.products')->get()
class subgroupitem extends Model
{
    public function groupitem(){
        return $this->belongsTo(groupitem::class,'grp_id');//joining completed by making connection with another model and use foreignkey
    }

    public function product(){
        return $this->hasMany(product::class,'subgrp_id');
    }

}
