<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class C_user extends Controller
{
    public function showuser(){
        $user=User::all();

      
        return view('users.showuser',compact("user"));
    }

    public function adduser(){
       
      
        return view('users.adduser');
    }

    public function addrole(Request $request){
        $user=User::where('id',$request['id'])->first();
        $user->roles()->detach();
          if($request["user_role"]){
            $user->roles()->attach(Role::where('name','user')->first());
          }
         
          if($request["admin_role"]){
            $user->roles()->attach(Role::where('name','admin')->first());
          }
          return redirect()->back();
          } 

          public function insertuser(Request $request){
            $add=new User;
            $add->name=request("name");
            $add->email=request("email");
            $add->password=bcrypt(request("password"));
           
        
        $add->save();
        $add->roles()->attach(Role::where('name','user')->first());
        return redirect("/showuser");

          }

          public function deleteuser($id){
            $delet=User::find($id);
        
            $delet->delete();
            return redirect("/showuser");
        
        
        }



}
