<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 
/////////////////////catagory////////////////////


Route::group(['middleware'=>'roles', 'roles'=>['admin']],function(){
Route::get('/addcatagory','C_catagory@addcatagory');
Route::post('/insertcatagory','C_catagory@insertcatagory');
Route::get('/showcatagory','C_catagory@showcatagory');
Route::get('/editcatagory/{id}/','C_catagory@editcatagory');
Route::post('/updatacatagory/{id}/','C_catagory@updatacatagory');
Route::get('/deletcatagory/{id}/','C_catagory@deletcatagory');
//////////////////////////////posts///////////

Route::get('/index','C_post@showpost')->name('index');
Route::get('/addpost','C_post@addpost');
Route::post('/insertpost','C_post@insertpost');
Route::get('/showpost','C_post@showposts');
Route::get('/editpost/{id}/','C_post@editpost');
Route::post('/updatapost/{id}/','C_post@updatapost');
Route::get('/deletpost/{id}/','C_post@deletpost');
//////////////////////users//////////////////////////

Route::get('/showuser','C_user@showuser');
Route::get('/adduser','C_user@adduser');
Route::post('/addrole','C_user@addrole');
Route::post('/insertuser','C_user@insertuser');
Route::get('/deleteuser/{id}/','C_user@deleteuser');
///////////////////////////////gallary////////////////

Route::get('/addgallary','C_gallary@addgallary');
Route::post('/insertgallary','C_gallary@insertgallary');
Route::get('/showgallary','C_gallary@showgallary');
Route::get('/editgallary/{id}/','C_gallary@editgallary');
Route::post('/updatagallary/{id}/','C_gallary@updatagallary');
Route::get('/deletgallary/{id}/','C_gallary@deletgallary');
//////////////////////////////////////////
Route::get('/staticse','C_post@staticse');
Route::get('/setting','C_setting@setting');
Route::post('/stop_post','C_setting@stop_post');

Route::get('/home', 'HomeController@index')->name('home');
//});


Route::get('/logout',function(){

   
        Auth::logout();
        return redirect("login");

});

});



Route::get('/user/logout',function(){

   
        Auth::logout();
        return redirect("/");

});
/////////////////////////////front////////////////////////////////////

Route::get('/','Website@index');

Route::get('/showcat/{catagory}','Website@showcat');


Route::get('/showpost/{post}','Website@showpost');
Route::post('/showpost/{post}','Website@insertcomment');
Route::get('/deleteComment/{id}','Website@deleteComment');
//////////////////////////////////////////////////////////

//Route::get('/index', 'HomeController@index')->name('home');

Auth::routes();





 /////////////////////////cart//////////////////////////////////////////

 Route::get('/addcart/{product}/','Product@addcart')->name('cart.add');
Route::get('/showcart','Product@showcart');
Route::get('/show','Product@show');

Route::get('/checkout/{amount}','Product@checkout');
Route::post('/charge','Product@charge');

Route::delete('/delete/{product}','Product@delete');
Route::post('/update/{product}','Product@update');
//////////////////////////////////{profile }////////////////////////////////
Route::group(['prefix'=>'/profile'],function(){
        Route::get('/sign','C_profile@showSign')->name('profile.sign');
        Route::post('/insertUSER','C_profile@insertUSER');
        Route::get('/login','C_profile@showLogin')->name('profile.login');
        Route::post('/login','C_profile@Login')->name('profile.login.attemp');
        Route::get('/','C_profile@show')->name('profile');
        Route::get('/show/{post}','C_profile@showPost');
        Route::get('/add','C_profile@addPost')->name('profile.add.post');
        Route::post('/insert','C_profile@insertPost')->name('profile.insert.post');
        Route::get('/edit/{id}','C_profile@editPost');
        Route::post('/update/{id}','C_profile@updatePost');
        Route::get('/delete/{id}','C_profile@deletePost');
});



/////////////////////////////////////////////////////////////////////////////