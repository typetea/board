<?php

namespace App\Http\Controllers\Auth;

use App\Member;
use Illuminate\Console\Scheduling\ScheduleRunCommand;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller {

    public function getLogin(){
        return view("guest.login");
    }

    public function login(Request $request){
        $user = $request->all();
        if(\Auth::attempt(["name"=>$user["name"],"password"=>$user["password"]])){
            return redirect()->route("board");
        }
        \Session::flash("message","IDまたはパスワードが違います");

        return redirect()->route("login");
    }

    public function logout(){
        \Auth::logout();
        return redirect()->route("login");
    }

    public function getCreateMember(){
        return view("guest.sign-up");
    }

    public function showThumbnail(){
        $img = \Auth::user()->thum;
        if($img =="") {
            $img = public_path() . "/assets/img/default.jpg";
            $img = file_get_contents($img);
        }
        return response($img)->header("Content-Type", "image/jpeg");

    }

    public function signupConfirm(Request $request){

        $data = $request->all();
        $request->session()->put("data",$data);
        return view("guest.sign-up-confirm",[
            "data"=>$data
        ]);
    }

    public function store(Request $request){
        $data =  $request->session()->get("data");
        $data["password"] = bcrypt($data["password"]);
        Member::create($data);
        return redirect()->route("login");
    }
}
