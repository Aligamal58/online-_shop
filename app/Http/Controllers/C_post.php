<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Post;
use App\Like;
use App\User;
use App\Setting;
use App\Card;
class C_post extends Controller
{
    
  



public function addpost(){
$catagories=Catagory::all();
$stop_post=Setting::where('name','stop_post')->value('value');
    return view("admin.addpost",compact("catagories","stop_post"));
}

public function insertpost(Request $request){
    $add=new Post;
    $add->title=request("title");
    $add->content=request("content");
    $add->price=request("price");
    $add->user_id=request("user_id");
    $file=$request->file('image');
    $extension=$file->getClientOriginalExtension();
    $filename=time(). '.' .$extension;
    $file->move('upload/',$filename);
    $add->image=$filename;
    $add->cat_id=request("cat_id");

$add->save();
return redirect("/index");

}
public function showpost(){
    $posts=Post::all();
    $catagories=Catagory::all();
    return view('index',compact("posts","catagories"));
}

public function showposts(){
 

    $post=Post::all();
        return view("admin.showpost",compact("post"));
    }  


    public function editpost($id){
        $catagories=Catagory::all();
        $post=Post::find($id);
        return view("admin.editpost",compact("catagories","post"));
    }
    public function updatapost(Request $request,$id){
        $updatepost=Post::find($id);
      
       

        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time(). '.' .$extension;
            $file->move('upload/',$filename);
            $updatepost->image=$filename;}


    $updatepost->title=request("title");
    $updatepost->content=request("content");
    $updatepost->price=request("price");
        $updatepost->cat_id=request("catid");
        $updatepost->save();
    return redirect("showpost");
}



public function deletpost($id){
    $delet=Post::find($id);

    $delet->delete();
    return redirect("/showpost");


}

public function staticse(){
$user=User::count();
$post=Post::count();
$catagory=Catagory::count();
return view('staticse',compact('user','post','catagory'));
}


}