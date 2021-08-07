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

Route::get('/', function () {
    return view('home');
});

Route::get('/Saledashboard',function(){
    return view('salesdashboard');
});

Route::get('/SignUp',function(){
    return view('SignUp');
});
Route::get('/BuyItem',function(){
    return view('buyitem');
});
Route::get('/SignIn',function(){
    return view('signin');
});
/*
Route::get('/CategoryAdd',function(){
    return view('categoryadd');
});*/
Route::get('/MyOrders',function(){
    return view('myorders');
});

Route::get('/ChangeAdvertiestment',function(){
    return view('AdminAddChange');
});

Route::get('/returnItem',function(){
    return view('ItemReturn');
});

Route::get('/CategoryAdd',function(){
    $categoryType=App\maincategory::all();
    return view('CategoryAdd')->with('cat',$categoryType);
});



Route::get('ItemInsert','subcatcontroller@getCountries');
Route::get('dropdownlist/getstates/{id}','subcatcontroller@getStates');


Route::get('/findSubCat','subcatcontroller@subcatfind');

Route::post('/categorySave','maincatcontroller@savedata');
Route::post('/subcategorySave','subcatcontroller@subsavedata');


