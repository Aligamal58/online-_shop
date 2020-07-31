<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Post;
use App\Catagory;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class Product extends Controller
{
    public function addcart(Post $product ){
        if(session()->has('cart')){
            $cart=new Card(session()->get('cart'));
        }else{
            $cart=new Card();
        }
        $cart->add($product);
            //dd($cart);
            session()->put('cart',$cart);
            
           return redirect()->back();
        }


        public function showcart(){

          
        
                $catagory=Catagory::all();

            if(session()->has('cart')){
                $cart=new Card(session()->get('cart'));
            }else{
                $cart=null;
            }

            return view("showcart",compact("cart","catagory"));
        }

        

        public function delete(Post $product){
            $cart=new Card(session()->get('cart'));
$cart->remove($product->id);
if($cart->totalqty<=0){
    session()->forget('cart');
}else{
    session()->put('cart',$cart);
}
return redirect()->back();

        }
       






        public function checkout($amount){
            $catagory=Catagory::all();

            if(session()->has('cart')){
                $cart=new Card(session()->get('cart'));
            }else{
                $cart=null;
            }
return view("checkout",compact("amount","cart","catagory"));

}

public function charge(Request $request){


    //dd($request->stripeToken);
    $charge=Stripe::charges()->create([
'currency'=>'USD',
'source'=>$request->stripeToken,
'amount'=>$request->amount,
'description'=>'test from laravel'


    ]);
    $chargeId=$charge['id'];
    //return view("charge");
    if($chargeId)
    {

auth()->user()->orders()->create([

    'cart'=>serialize(session()->get('cart'))
]);



session()->forget('cart');
return redirect('/');


    }
else{

    return redirect()->back();
}

    }


public function update(Request $request,Post $product){

$request->validate([
'qty'=>'required|numeric|min:1'

]);
$cart=new Card(session()->get('cart'));
$cart->updateqty($product->id,$request->qty);
session()->put('cart',$cart);
return redirect()->back();
}






}