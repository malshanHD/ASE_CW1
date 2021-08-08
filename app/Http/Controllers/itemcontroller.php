<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use App\ItemImage;

class itemcontroller extends Controller
{
    public function saveItem(Request $request){

        $path = [];

        $item = new item();

        $item = $item->create([
            'itemCode' => $request->code,
            'itemName' => $request->name,
            'itemDescription' => $request->description,
            'itemPrice' => $request->code,
            'itemWarrenty' => $request->Warranty,
            'itemQTY' => $request->Quantity,
            'itemDiscount' => $request->Discount,
            'itemMainCat' => $request->category,
            'itemSubCat' => $request->subcate,
        ]);


        foreach( $request->file('pictures') as $file){
            $path[] = $file->store('public/avatars');
        }

        if(!empty($path)){
            
            foreach($path as $filename){

                $itemImage = new ItemImage();

                $itemImage->create([
                    'item_id' => $item->id,
                    'image' => $filename
                ]);
            }
        }
        

        dd($path);
    }
}
