<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Theme;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function getTopics(){
        $themes = Theme::where('delete_flag', 0)->with('user:id,login')->get();
        return response()->json($themes, 200);
    }

    public function setTopic(Request $request){
        if (Auth::check()){
        Theme::create([
            "title" => $request->title,
            "description" => $request->description,
            'author_id' => $request->id,
        ]);
        return response()->json(true, 200);
    }
    return response()->json(['status' => "Added error"], 400);

    }

    public function deleteTopic(Request $request){
        if (Auth::check()){
            Theme::where('id', $request->id)->update(['delete_flag'=> 1]);
            return response()->json(["status" => "Success delete"],200);
        }
        return response()->json(["error" => "Error data"],400);
    }
}