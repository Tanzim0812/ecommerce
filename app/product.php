<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function subgroupitem(){
        return $this->hasMany(subgroupitem::class,'subgrp_id');
    }
}
