<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subgroupitem extends Model
{
    public function groupitem(){
        return $this->belongsTo(groupitem::class,'grp_id');//joining completed by making connection with another model and use foreignkey
    }

}
