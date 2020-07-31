<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallary;
class C_gallary extends Controller
{
    public function addgallary(){
       
            return view("admin.addgallary");
        }
        
        public function insertgallary(Request $request){
            $add=new Gallary;
           
            $file=$request->file('avatar');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' .$extension;
            $file->move('upload/',$filename);
            $add->avatar=$filename;
           
        
        $add->save();
        return redirect("/index");
        
        }

        public function showgallary(){
            $gallary=Gallary::all();
                return view("admin.showgallary",compact("gallary"));
            }   


        public function editgallary($id){
    
            $gallary=Gallary::find($id);
            
            return view("admin.editgallary",compact("gallary"));
        }
       public function updatagallary(Request $request,$id){
           
        $updatepost=Gallary::find($id);
        if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' .$extension;
            $file->move('upload/',$filename);
            $updatepost->avatar=$filename;}
        $updatepost->save();

            return redirect("/showgallary");
            //return redirect()->back();
    }
    public function deletgallary($id){
        $delet=Gallary::find($id);
    
        $delet->delete();
        return redirect("/showgallary");
    
    
    }
}
