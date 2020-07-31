<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class C_setting extends Controller
{
    public function setting(){
        $stop_post=Setting::where('name','stop_post')->value('value');
                return view('admin.setting',compact('stop_post'));
            }

            public function stop_post(Request $request){
              if($request->stop_post){
                   Setting::where('name','stop_post')->update(['value'=>1]);
               }

               else{

                Setting::where('name','stop_post')->update(['value'=>0]);
               }

               return redirect()->back();




                    }





}
