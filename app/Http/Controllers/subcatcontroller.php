<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subcategory;
use DB;

class subcatcontroller extends Controller
{
    public function subsavedata(Request $request){
        $Subcategory=new subcategory;

        $Subcategory->subcategoryName=$request->subcategorytype;
        $Subcategory->id=$request->maincategory;
        $Subcategory->save();
    }

    public function getCountries()
    {
        $categoryType = DB::table('maincategories')->pluck("categoryName","id");
        $count2 = DB::table('items')->count();
        return view('itemAdd',compact('categoryType','count2'));
    }

    public function getStates($id) 
    {        
            $states = DB::table("subcategories")->where("id",$id)->pluck("subcategoryName","subcat_id");
            // dd(json_encode($states));
            return json_encode($states);
    }

}
