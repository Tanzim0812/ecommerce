<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groupitem extends Model
{
    public function subgroupitem(){
        return $this->hasMany(subgroupitem::class,'grp_id');
    }

}
