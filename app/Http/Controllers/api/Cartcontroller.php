<?php

namespace App\Http\Controllers\api;

use App\cart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cartcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//if user is already login then check his 'id' to store value on 'id' reference
        if (Auth::check()) {
            $cart = cart::where('user_id', Auth::id())
                ->where('product_id', $request->product_id)
                ->first();
//else system will take users ip_address
        } else {
            $cart = cart::where('ip_address', request()->ip())
                ->where('product_id', $request->product_id)
                ->first();

        }

//if the item on the cart is not empty (means desired item is already in cart) then increment quantity
        if (!is_null($cart)) {
            $cart->increment('product_qty');
        }
//if the desired item is not in the cart then do this...
        else {
            $cart = new cart();
            if (Auth::check()) {
                $cart->user_id = Auth::id();
            }else{
                $cart->ip_address = request()->ip();
            }
            $cart->product_id = $request->product_id;


            //dd($cart);
            $cart->save();

        }
        return json_encode([ 'status' => 'success','Message' => 'Item added to cart','totalitems'=>cart::totalitems()

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
