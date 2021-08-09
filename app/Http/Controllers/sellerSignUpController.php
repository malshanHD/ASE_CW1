<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\seller_info;

class sellerSignUpController extends Controller
{
    public function saveSellerInfo(Request $request)
    {
        $sellerData=new seller_info;

        $this->validate($request,[
            'companyname'=>'required|max:180|min:2',
        ]);


        $sellerImage=time().'-'.$request->companyname.'.'.$request->picture->extension();

        $request->picture->move(public_path('seller_images'),$sellerImage);

        $sellerData->comapnyname= $request->companyname;
        $sellerData->email= $request->email;
        $sellerData->contactno= $request->contact;
        $sellerData->country= $request->countries;
        $sellerData->streetadd01= $request->stAdd01;
        $sellerData->streetadd02= $request->stAdd02;
        $sellerData->city= $request->city;
        $sellerData->state= $request->state;
        $sellerData->zipcode= $request->zipcode;
        $sellerData->profilePicture= $sellerImage;
        $sellerData->save();
        return redirect()->back()->with('message', 'Item Added Successfully!');
    }
        
}
