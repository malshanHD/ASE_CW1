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

/*Route::get('/', function () {
    return view('home');
});*/

Route::get('/', function () {
    //$item=App\item::all();
    //return view('home')->with('item',$item);

    $maincategory=App\maincategory::all();

    $WomensFashion=App\item::where('itemMainCat','100')->orderBy('id','DESC')->take(6)->get();
    $MensFashion=App\item::where('itemMainCat','101')->orderBy('id','DESC')->take(6)->get();
    $Jewelleryitems=App\item::where('itemMainCat','102')->orderBy('id','DESC')->take(6)->get();
    $Babyitems=App\item::where('itemMainCat','103')->orderBy('id','DESC')->take(6)->get();
    $Furnitures=App\item::where('itemMainCat','104')->orderBy('id','DESC')->take(6)->get();
    $Books=App\item::where('itemMainCat','106')->orderBy('id','DESC')->take(6)->get();
    $Electronicitems=App\item::where('itemMainCat','107')->orderBy('id','DESC')->take(6)->get();
    

    return view('home', compact('MensFashion', 'maincategory','WomensFashion','Jewelleryitems','Babyitems','Furnitures','Books','Electronicitems'));
    
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

route::get('/BuyItem/{itemCode}','itemcontroller@itemView');

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

Route::get('/CategoryItem',function(){
    return view('categoryitemsearch');
});

Route::get('/SignUpseller',function(){
    return view('sellerSignUp');
});
Route::get('/Help',function(){
    return view('help');
});



Route::get('ItemInsert','subcatcontroller@getCountries');
Route::get('dropdownlist/getstates/{id}','subcatcontroller@getStates');


Route::get('/findSubCat','subcatcontroller@subcatfind');

Route::post('/categorySave','maincatcontroller@savedata');
Route::post('/subcategorySave','subcatcontroller@subsavedata');
Route::post('/itemUpload','itemcontroller@saveItem');
Route::post('/sellerInfoSave','sellerSignUpController@saveSellerInfo');
Route::post('/buyerInfoSave','BuyerSignUpController@saveBuyerInfo');