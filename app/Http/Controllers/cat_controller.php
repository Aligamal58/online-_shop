<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;
class cat_controller extends Controller
{
    public function index(){
        $catagory=Catagory::all();
            return response()->json($catagory);
        }   
}
