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

        //form validation start
        $request->validate([
            'category_name'=>'required|unique:categories,category_name|max:8' //=>'cant empty|unique field:table_name,field_name|length of field'
        ]);

        //form validation end

        $category=new category();
        $category->category_name = $request->category_name;
        $category->category_slug = $this->slug_generator($request->category_name);

        $category->save();
        Session::flash('add_success','Category is added Successfully!!');
        //return back();
        return redirect()->route('manage-category');
}

//use to change status of category by active or inactive
//using jquery,ajax
    public function categorystatus($id,$category_status){
    $category=category::find($id);
    $category->category_status=$category_status;
    $category->save();
    return response()->json(['message'=>'success']);

}

// change status manually using laravel

    /*public function activecategory($id){
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
    public function deletecategory($id){categorydeleteajax
        $category=category::find($id);
        $category->delete();
        Session::flash('delete-category','Category is Deleted!!');
        return back();
    }*/
    public function categorydeleteajax($id){
        $category=category::find($id);
        $category->delete();

        //return redirect()->route('manage-category');
       // Session::flash('delete-category','Deleting...');
        //return back();
    }

//use to manage category such as active/inactive,Edit,Delete
    public function managecategory(){
        $category= category::orderby('id','DESC')->get();
        //$category=category::all()->toArray();
        return view('admin.managecategory',compact('category'));
    }

    //edit category | the <INPUT> FORM will appear
    public function editcategory($id){
        $category=category::find($id);
        return view('admin.editcategory',compact('category'));
    }

    //update category after visting from EDIT category file
    public function updatecategory(Request $request){
        $request->validate([
            'category_name'=>'required|unique:categories,category_name'
        ]);                 //use to check if input field is empty & if the given value is exists .if category_name is already have the same name save in DB, it will show error

        $category=category::find($request->id);
        $category->category_name = $request->category_name;
        $category->category_slug = $this->slug_generator($request->category_name);

        $category->save();
        Session::flash('update_success','Category is UPDATED Successfully!!');
        return back();

    }





    //use to have a clean line of string without any spaces and some symbol those are given below
    public function slug_generator($string){
        $string= str_replace(' ','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-',$string));
    }
}
