<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
class C_catagory extends Controller
{
   
    public function showcatagory(){
        $catagory=Catagory::all();
            return view("admin.showcatagory",compact("catagory"));
        }   

public function addcatagory(){

    return view("admin.addcatagory");
}

public function insertcatagory(Request $request){
    $add=new Catagory;
    $add->name=request("name");


$add->save();
return redirect()->back();

}
 
public function editcatagory($id){
    
        $catagory=Catagory::find($id);
        
        return view("admin.editcatagory",compact("catagory"));
    }
   public function updatacatagory(Request $request,$id){
        $updata=Catagory::find($id);
      
        $updata->name=request("index");
       
        $updata->save();
        return redirect("/showcatagory");
        //return redirect()->back();
}
public function deletcatagory($id){
    $delet=Catagory::find($id);

    $delet->delete();
    return redirect("/showcatagory");}


}
