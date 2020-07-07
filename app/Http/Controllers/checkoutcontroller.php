<?php

namespace App\Http\Controllers;

use App\cart;
use App\order;
use App\payments;
use App\shippingcost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class checkoutcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments=payments::orderBy('priority','ASC')->get();
        return view('website.checkout',compact('payments'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            //'district' => 'required',
            //'payment_method' => 'required'

        ]);



        if ($request->payment_method != 'cash_in'){
            if ($request->trx_id == NULL || empty($request->trx_id) ){
                Session::flash('sticky_error','Please give Transaction ID of your PAYMENT');
                return back();
            }

        }


        $save=new order();
        if (Auth::check()){
            $save->user_id=Auth::id();
        }else{
            $save->ip_address= request()->ip();
        }



        $Cart_amount = $request->total_price;
        $delivery_charge = $request->shipping_cost;
        $total = $Cart_amount + $delivery_charge;

        $save->total_price = $request->total_price;
        $save->last_cost  = $total;
        $save->name = $request->name;
        $save->phone = $request->phone;
        $save->email = $request->email;
        $save->shipping_cost = $request->shipping_cost;
        $save->district = $request->district;
        $save->upazilla = $request->upazilla;
        $save->full_address = $request->full_address;
        $save->postal_code = $request->postal_code;
        $save->payment_method =$request->payment_method;
        $save->message = $request->message;
        $save->trx_id = $request->trx_id;
        $save->save();

        foreach (cart::totalcarts() as $cart){
            $cart->order_id = $save->id;
            $cart->save();
        }

        Session::flash('cart', 'Order is Placed');
        return back();
        //dd($save);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
