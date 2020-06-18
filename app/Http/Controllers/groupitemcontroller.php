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
    public function editgroupitem($id){
        $groupitem = groupitem::find($id);
        return view('admin.group.editgroupitem',compact('groupitem'));
    }
    public function updategroupitem(Request $request){
        $request->validate([
            'group_name'=>'required|unique:groupitems,group_name'
        ]);
        $groupitem = groupitem::find($request->id);
        $groupitem->group_name = $request->group_name;
        $groupitem->group_slug = $this->slug_generator($request->group_name);
        $groupitem->save();
        Session::flash('upgrpitem','Group Item update successfully');
        return redirect()->route('manage-groupitem');
    }
    public function deletegroupitem($id){
        $groupitem= groupitem::find($id);
        $groupitem->delete();
        Session::flash('delgrpitem','Item deleted!!');
        return back();
    }

    public function groupitemstatus($id,$groupitem_status){
        $groupitem=groupitem::find($id);
        $groupitem->group_status=$groupitem_status;
        $groupitem->save();
        return response()->json(['message'=>'success']);
    }

    //use to have a clean line of string without any spaces and some symbol those are given below
    public function slug_generator($string){
        $string= str_replace(' ','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-',$string));
    }
}
