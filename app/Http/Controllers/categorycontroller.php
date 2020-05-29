<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;
use Session;

class categorycontroller extends Controller
{
    //use for add category
    public function addcategory(){
        return view('admin.addcategory');
    }

    //use to save category to database
public function savecategory(Request $request){
        $category=new category();
        $category->category_name = $request->category_name;
        $category->category_slug = $this->slug_generator($request->category_name);

        $category->save();
        Session::flash('add_success','Category is added Successfully!!');
        return back();
}

//use to change status of category by active or inactive

    public function activecategory($id){
    $category=category::find($id);
    $category->category_status=1;
    $category->save();
    Session::flash('active-category','Category is Activated!!');
    return back();

    }
    public function inactivecategory($id){
        $category= category::find($id);
        $category->category_status=0;
        $category->save();
        Session::flash('inactive-category','Category is Deactivated!!');
        return back();
    }

    //use to delete brand ,but not from database,this is happened bcz we use SOFTDELETE in our Model.
    public function deletecategory($id){
        $category=category::find($id);
        $category->delete();
        Session::flash('delete-category','Category is Deleted!!');
        return back();
    }

//use to manage category such as active/inactive,Edit,Delete
    public function managecategory(){
        $category= category::orderBy('id','ASC')->get();
        //$category=category::all();
        return view('admin.managecategory',compact('category'));
    }

    //use to have a clean line of string without any spaces and some symbol those are given below
    public function slug_generator($string){
        $string= str_replace(' ','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-',$string));
    }
}
