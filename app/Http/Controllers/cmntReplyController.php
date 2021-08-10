<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cmntreply;
use Illuminate\Support\Facades\Route;

class cmntReplyController extends Controller
{
    public function replySave(Request $request){
        $reply=new cmntreply;
        $this->validate($request,[
            'cmntreply'=>'required|max:180|min:2',
        ]);

        $reply->email=$request->email;
        $reply->answer=$request->cmntreply;
        $reply->id=$request->mainCmtID;
        $reply->save();

        route::get('/BuyItem/{mainCmtID}','itemcontroller@itemView');

    }
}
