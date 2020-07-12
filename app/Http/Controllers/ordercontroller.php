<?php

namespace App\Http\Controllers;
use App\cart;
use App\order;
use App\shippingcost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use PDF;
class ordercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $view=order::get();
       return view('admin.order',compact('view'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=order::find($id);
        return response()->json(['data'=>$show],200);
       // return view('admin.order',compact('show'));
    }
    public function showw($id)
    {
        $showw=order::find($id);
        //return response()->json(['dataa'=>$showw],200);
         return view('admin.formshow',compact('showw'));
    }
    public function pdf($id){
        $show=order::find($id);
        $pdf = PDF::loadView('admin.invoice', compact('show'));
        return $pdf->stream('Olpokenakata_invoice.pdf');
       // return view('admin.invoice', compact('show'));
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
        $cart=cart::find($id);
        if (!is_null($cart)) {
            $cart->product_qty = $request->product_qty;

            $cart->save();
            //dd($cart);
        }else{
            return redirect()->route('order');
        }
        Session::flash('cart', 'Cart is updated!!');
        return back();
    }

    public function updateadmin(Request $request, $id)
    {
       $admin=order::find($id);
       $admin->comment = $request->comment;
       $admin->save();

        Session::flash('update_success', 'Updated');
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
        $delete=cart::find($id);
        $delete->delete();
        Session::flash('delete', 'Deleted!!');
        return back();
    }
    public function destroyadmin($id)
    {
        $delete=order::find($id);
        $delete->delete();
        Session::flash('delete', 'Order Deleted !!');
        return back();
    }
}
