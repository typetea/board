<?php

namespace App\Http\Controllers;

use App\Member;
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

    public function uploadThumbnail(Request $request){
        $data = file_get_contents($_FILES["img"]["tmp_name"]);
        $member = Member::findOrFail(\Auth::user()->id);
        $member->update(["thum"=>$data]);
        return redirect()->route("member.changeThum");
    }

}
