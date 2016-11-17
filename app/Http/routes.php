<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//ログイン状態
Route::group(["middleware"=>"auth"],function (){
    Route::get("/threads-list",["as"=>"threadsList","uses"=>'BoardController@getThreadList']);
    Route::any("/ress-list",["as"=>"ressList","uses"=>'BoardController@getRessList']);
    Route::post("/ress-post",'BoardController@postRess');
    Route::post("/thread-post",'BoardController@createThread');
    Route::post("/ress-delete",'BoardController@deleteRess');
    Route::get("/thumb",["as"=>"thumb","uses"=>'Auth\AuthController@showThumbnail']);

    Route::get("/member/ressList",["as"=>"member.ressList","uses"=>"MemberController@myRessList"]);
    Route::get("/board",["as"=>"board","uses"=>"BoardController@index"]);
    Route::get("/logout",["as"=>"logout","uses"=>'Auth\AuthController@logout']);

    Route::get("/member/modif",["as"=>"member.modif","uses"=>"MemberController@memberModif"]);
    Route::get("/member/change-thumbnail",["as"=>"member.changeThum","uses"=>"MemberController@changeThumbnail"]);
    Route::get("/","BoardController@index");
});


//非ログイン
Route::group(["middleware"=>"guest"],function (){
    Route::get("/",'Auth\AuthController@getLogin');
    Route::get("/login",["as"=>"login","uses"=>'Auth\AuthController@getLogin']);
    Route::post("/login",["as"=>"login","uses"=>'Auth\AuthController@login']);
    Route::get("/sign-up",["as"=>"sign-up","uses"=>'Auth\AuthController@getCreateMember']);
    Route::post("/sign-up-confirm",["as"=>"sign-up-confirm","uses"=>'Auth\AuthController@signupConfirm']);
    Route::post("/sign-up",["as"=>"sign-up","uses"=>'Auth\AuthController@store']);
});




