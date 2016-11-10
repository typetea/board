<?php

namespace App\Http\Controllers;

use App\Ress;
use App\Thread;
use Illuminate\Http\Request;

use App\Http\Requests;

class BoardController extends Controller
{
    public function index()
    {
        return view("board.index");
    }

    public function getRessList(Request $request)
    {
        $thread = $request->input("threadId");
        $ressList = Ress::where("thread_id", "=", $thread)->get();

        return view("board.ressList", [
            "ressList" => $ressList
        ]);
    }

    public function getThreadList()
    {
        $threads = Thread::all();
        return view("board.threadList", [
            "threads" => $threads
        ]);
    }

    public function postRess(Request $request)
    {
        $post = $request->all();
        $post["ress_id"] = Ress::where("thread_id", "=", $post["thread_id"])
                ->orderBy('ress_id', 'desc')->first()["ress_id"] + 1;
        \Auth::user()->ress()->create($post);

    }

    public function createThread(Request $request)
    {
        $data = $request->all();
        $data["type"] = "normal";
        \Auth::user()->threads()->create($data);
    }

    public function deleteRess(Request $request)
    {
        $data = $request->all();
        $ress = Ress::where("ress_id", "=", $data["ress_id"])->where("thread_id", "=", $data["thread_id"])
            ->where("member_id", "=", \Auth::user()->id);
        $ress->delete();
    }



}
