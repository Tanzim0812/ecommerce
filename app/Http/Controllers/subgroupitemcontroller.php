<?php
namespace App\Http\Controllers;
use App\groupitem;
use App\subgroupitem;
use Illuminate\Http\Request;
use Session;
//use App\Http\Resources\SubgroupResource ;
class subgroupitemcontroller extends Controller
{
    public function manage_sub_groupitem(){
        $savesubgrpitem=subgroupitem::with('groupitem')->get(); //joining start here. $var=model_1::with('model_2 that is join with model_1')->get()all values
       // $data = groupitem::with('subgroup')->get();
        //$ret = SubgroupResource::collection($data);
        //return SubgroupResource::collection($data);

        return view('admin.group.manage_sub_grp_item',compact('savesubgrpitem'));
    }

    public function add_sub_groupitem(){
        $groupitem = groupitem::where('group_status',1)
        ->orderBy('group_name','ASC')
            ->get();

        return view('admin.group.add_sub_grp_item',compact('groupitem'));//get SELECT tag value from another table
    }

    public function delete_sub_groupitem($id){
        $delsubgrpitem=subgroupitem::find($id);
        $delsubgrpitem->delete();
        Session::flash('delsubgrpitem','Sub group item deleted');
        return back();
    }
    public function save_sub_groupitem(Request $request){
        $savesubgrpitem=new subgroupitem();
        $savesubgrpitem->grp_id=$request->grp_id;
        $savesubgrpitem->subgroup_name=$request->subgroup_name;
        $savesubgrpitem->subgroup_slug = $this->slug_generator($request->subgroup_name);
        $savesubgrpitem->save();
        Session::flash('savesubgrpitem_success','New item save successfully');
        return back();
    }
    public function edit_sub_groupitem($id){
        $editsubgrpitem=subgroupitem::find($id);
        return view('admin.group.edit_sub_grp_item',compact('editsubgrpitem'));
    }

    public function update_sub_groupitem(Request $request){
        $updatesubgrpitem= subgroupitem::find($request->id);
        //$updatesubgrpitem->id=$request->id;
        $updatesubgrpitem->subgroup_name=$request->subgroup_name;
        $updatesubgrpitem->save();
        Session::flash('upgrpitem','Item update successfully');
        return back();
    }


    //use to have a clean line of string without any spaces and some symbol those are given below
    public function slug_generator($string){
        $string= str_replace(' ','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-',$string));
    }
}


