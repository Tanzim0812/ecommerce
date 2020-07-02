<?php

namespace App\Http\Controllers;
use App\groupitem;
use App\subgroupitem;
use App\product;
use Illuminate\Http\Request;
use Session;
class productcontroller extends Controller
{
    public function add_product(){
        $groupitem=groupitem::get();
        $subgrpitem=subgroupitem::get();
        //$showproduct=subgroupitem::orderBy('id','ASC')->get();
        return view('admin.product.addproduct',compact('groupitem','subgrpitem'));
    }
    public function findProductName(Request $request){


        //if our chosen id and products table prod_cat_id col match the get first 100 data

        //$request->id here is the id of our chosen option id
        $data=subgroupitem::select('id','subgroup_name')->where('grp_id',$request->id)->get();
        return response()->json($data);//then sent this data to ajax success
    }




    public function manage_product(){
        $product=product::get();
        //$product=product::with('subgroupitem','groupitem')->get();
        return view('admin.product.manageproduct',compact('product'));
    }
    public function save_product(Request $request){
        $product = new product();
        $product->grp_id = $request->grp_id;
        $product->subgrp_id = $request->subgrp_id;
        $product->title = $request->title;
        $product->sub_title = $request->sub_title;
        $product->previous_price = $request->previous_price;
        $product->offer_price = $request->offer_price;

        if ($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.'. $extension;
            $file->move('files/uploads/',$filename);
            $product->image= $filename;

        }else{
            return $request;
            $product ->image= '';
        }
        $product->save();
        Session::flash('pro_success','Save product successfully');
        return back();

    }
}

