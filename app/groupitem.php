<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groupitem extends Model
{
    public function subgroup(){
        return $this->hasMany(subgroupitem::class,'grp_id');
    }
}
