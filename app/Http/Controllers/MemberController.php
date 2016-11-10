<?php

namespace App\Http\Controllers;

use App\Ress;
use Illuminate\Http\Request;

use App\Http\Requests;

class MemberController extends Controller
{
    public function MyRessList(Request $request){
        $ressList = Ress::where("member_id","=",\Auth::user()->id)->get();
        return view("member.myRessList",[
            "ressList"=>$ressList
        ]);
    }

    public function memberModif(){
        return view("member.memberModif");
    }

    public function changeThumbnail(){
        return view("member.changeThumbnail");
    }
}
