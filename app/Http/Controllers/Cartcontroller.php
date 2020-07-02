<?php

namespace App\Http\Controllers;

use App\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\product;
use Session;

class Cartcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     return view('website.cart');

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
//if the desired item in not in the cart then do this...
        else {
            $cart = new cart();
            if (Auth::check()) {
                $cart->user_id = Auth::id();
            }else{
            $cart->ip_address = request()->ip();
            $cart->product_id = $request->product_id;

            }
            //dd($cart);
            $cart->save();

        }
        Session::flash('cart', 'Product is added to Cart');
        return back();
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $cart=cart::find($id);
        if (!is_null($cart)) {
            $cart->product_qty = $request->product_qty;
            $cart->save();
            //dd($cart);
        }else{
            return redirect()->route('cart');
        }
        Session::flash('cart', 'Cart is updated!!');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart=cart::find($id);
        if (!is_null($cart)) {
            $cart->delete();
            //dd($cart);
        }else{
            return redirect()->route('cart');
        }
        Session::flash('cart', 'Cart is Deleted!');
        return back();
    }
}
