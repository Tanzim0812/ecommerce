<?php

namespace App\Http\Controllers;

use App\sliderimage;
use Illuminate\Http\Request;
use Session;

class sliderimagecontroller extends Controller
{
    public function addsliderimage(){
        return view('admin.group.addslider');
    }

    public function savesliderimage(Request $request){
        $saveslider = new sliderimage();
        $saveslider->title=$request->title;
        $saveslider->sub_title=$request->sub_title;
        $saveslider->slug=$this->slug_generator($request->title);

        if ($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.'. $extension;
            $file->move('files/uploads/',$filename);
            $saveslider->image= $filename;

        }else{
            return $request;
            $saveslider ->image= '';
        }
        $saveslider->save();
        Session::flash('img_success','Slider upload successfully');
        return back();

    }
    public function managesliderimage(){
        $slider=sliderimage::orderBy('id','ASC')->get();
        return view('admin.group.manageslider',compact('slider'));
    }
    public function deletesliderimage($id){
        $delsliderimg=sliderimage::find($id);
        $delsliderimg->delete();
        Session::flash('img_success','Slider Deleted successfully');
        return back();
    }

    //use to have a clean line of string without any spaces and some symbol those are given below
    public function slug_generator($string){
        $string= str_replace(' ','-',$string);
        $string= preg_replace('/[^A-Za-z0-9\-]/','',$string);
        return strtolower(preg_replace('/-+/','-',$string));
    }
}
