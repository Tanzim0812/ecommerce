<?php

namespace App;
use App\product;
use App\order;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class cart extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'ip_address',
        'order_id',
        'product_qty',

    ];

    public function product(){
        return $this->belongsTo(product::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function order(){
        return $this->belongsTo(order::class);
    }

    public static function totalcarts(){
        if (Auth::check()){
            $cart = cart::orWhere('user_id', Auth::id())
                ->orWhere('ip_address',request()->ip())
                ->get();
        }else{
            $cart = cart::orWhere('ip_address',request()->ip())->get();
        }

        return $cart;
    }


    public static function totalitems(){
        if (Auth::check()){
            $cart = cart::orWhere('user_id', Auth::id())
                ->orWhere('ip_address',request()->ip())
                ->get();
        }else{
            $cart = cart::orWhere('ip_address',request()->ip())->get();
        }
        $totalitem=0;
       foreach ($cart as $cr) {
           $totalitem += $cr->product_qty;
       }
       return $totalitem;
}
}
