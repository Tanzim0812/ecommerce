<?php

namespace App\Http\Controllers;

use App\groupitem;
use Illuminate\Http\Request;
use Session;

class groupitemcontroller extends Controller
{
    public function addgroupitem(){
        return view('admin.group.addgroupitem');
    }
    public function savegroupitem(Request $request){
        $groupitem = new groupitem();
        $groupitem->group_name=$request->group_name;
        $groupitem->group_slug=$this->slug_generator($request->group_name);
        $groupitem->save();
        Session::flash('save-groupitem','Save successfully');
        return back();
    }
    public function managegroupitem(){
        $groupitem=groupitem::orderBy('id','ASC')->get();
        return view('admin.group.managegroupitem',compact('groupitem'));
    }

    //use to have a clean line of string without any spaces and some symbol those are given below
    public function slug_generator($string){
        $string= str_replace(' ','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-',$string));
    }
}
