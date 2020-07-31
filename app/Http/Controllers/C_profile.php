<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Catagory;
class C_profile extends Controller
{
    public function showSign(){


        return view('users.register');
    }

    public function insertUSER(Request $request){
       
       $validatedData = $request->validate([
            'name'=>'required|string|max:100',
            'email'=>'required|email:rfc,dns|unique:users',
            'password'=>'required|min:7',
            'image'=>'required'
    
        ]
        
    );

    $add=new User;
    $add->name=request('name');
    $add->email=request('email');
    $add->password=bcrypt(request('password'));
    $file=$request->file('image');
    $extension=$file->getClientOriginalExtension();
    $filename=time(). '.' .$extension;
    $file->move('upload/',$filename);
    $add->image=$filename;
$add->save();

auth()->login($add);
return redirect('/');

    }

    public function showLogin(){


        return view('users.login');
    }


    public function Login(){
if (!auth()->attempt(request(['email','password']))){
    return back()->withErrores([
        'massage'=>'email or password incorrect'
    ]);


    }
    return redirect("/");
}

public function show(){


    return view('users.profile');

}

public function showPost(User $post){


    return view('users.show',compact('post'));
}

public function addPost(){
$catagories=Catagory::all();

    return view('users.add',compact('catagories'));
}
public function insertPost(Request $request){

    $validatedData = $request->validate([
        'title'=>'required|string|max:40',
        'content'=>'required|string|',
        'price'=>'required',
        'image'=>'required',
        'catagory'=>'required'
    ]



);




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

    $add->cat_id=request("catagory");

$add->save();
return redirect()->back();

}
public function editPost($id){
    $catagories=Catagory::all();
    $posts=Post::find($id);
    return view("users.edit",compact("catagories","posts"));
}
public function updatePost(Request $request,$id){
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
    $updatepost->cat_id=request("catagory");
    $updatepost->save();
return redirect("profile/show");
}

public function deletePost($id){
    $delet=Post::find($id);

    $delet->delete();
    return redirect()->back();


}

}