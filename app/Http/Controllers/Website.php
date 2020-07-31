<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
use App\Post;
use App\Comment;
use App\User;

class Website extends Controller
{
    public function index(){
        $catagory=Catagory::all();
        $post=Post::all();
        
        return view("first",compact("catagory","post"));
    }

   /* public function showcart(){
        $catagory=Catagory::all();
        $post=Post::all();
       
        return view("show",compact("catagory","post","gallary"));
    }*/

    public function showcat(Catagory $catagory){
        
        //$post=Post::all();
       return view("front.showcat",compact("catagory")); 
    }

    public function showpost(Post $post){



        return view('front.showpost',compact('post'));
    }

    public function insertcomment(Request $request){

      $add=New Comment;
      $add->comment=request("comment");
      $add->post_id=request("post_id");
$add->user_id=request("user_id");
$add->save();
        
               return redirect()->back();
            }
        

            public function deleteComment($id){
                $delet=Comment::find($id);
            
                $delet->delete();
                return redirect()->back();}
            
            
            

}
