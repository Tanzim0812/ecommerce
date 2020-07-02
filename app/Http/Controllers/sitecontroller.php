<?php

namespace App\Http\Controllers;

use App\groupitem;
use App\product;
use App\shippingcost;
use App\sliderimage;
use App\subgroupitem;
use Illuminate\Http\Request;

class sitecontroller extends Controller
{
public function home(){

//    $savesubgrpitem=groupitem::first()->with('subgroupitem.products')->get();
//    //$groupitem=groupitem::where('group_status',1)->get();
   $sld=sliderimage::where('status',1)->get();
    $grpitem=groupitem::with('subgroupitem')->where('group_status',1)->get();
    //return $grpitem;
    $productn=product::get();
    return view('website.home',compact('grpitem','sld','productn'));
}
public function product($id){
    //$products = subgroupitem::where('subgrp_id',$id)->product ;
    //$products = subgroupitem::find($id)->get();
    $products=product::where('id',$id)->get();
    return view('website.product',compact('products'));

}
    public function productnew($id){
        //$products = subgroupitem::where('subgrp_id',$id)->product ;
        //$products = subgroupitem::find($id)->get();
        $productn=product::where('id',$id)->get();
        return view('website.home',compact('productn'));

    }
    public function subgroup($id){
        $subgroup = subgroupitem::find($id)->product ;
        //$subgroup = subgroupitem::with('product')->get();
        return view('website.subgroup',compact('subgroup'));

    }


}
