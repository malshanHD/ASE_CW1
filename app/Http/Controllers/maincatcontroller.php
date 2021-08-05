<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\maincategory;

class maincatcontroller extends Controller
{
    public function savedata(Request $request)
    {
        $category=new maincategory;

        $category->categoryName=$request->categorytype;
        $category->save();
    }
}
