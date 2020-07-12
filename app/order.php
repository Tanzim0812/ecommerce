<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class order extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'ip_address',
        'phone',
        'email',
        'shipping_address',
        'message',
        'is_paid',
        'is_completed',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function cart(){
        return $this->hasMany(cart::class);
    }

}
