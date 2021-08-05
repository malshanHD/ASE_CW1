<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subcategory;

class subcatcontroller extends Controller
{
    public function subsavedata(Request $request){
        $Subcategory=new subcategory;

        $Subcategory->subcategoryName=$request->subcategorytype;
        $Subcategory->id=$request->maincategory;
        $Subcategory->save();
    }
}
