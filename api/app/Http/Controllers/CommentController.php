<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function getComments(Request $request)
    {
        $generalComment = Comment::where('delete_flag', 0)->where('theme_is', $request->id)->where("parrent_id", null)->with('user:id,login')->get();
        $comments = $this->getChildComment($generalComment);


        return response()->json($comments, 200);
    }

    private function getChildComment($parrent)
    {
        $commentList = [];
        foreach ($parrent as $comment) {
            $child = Comment::where('delete_flag', 0)->where('parrent_id', $comment['id'])->with('user:id,login')->get();
            if (count($child)) {
                //var_dump("<pre>".$child."</pre>");
                $comment['child'] = $this->getChildComment($child);
            }
            $commentList[] = $comment;
        }
        return $commentList;
    }

    public function deleteComment(Request $request)
    {
        if(Auth::check()){
            Comment::where('id', $request->id)->update(['delete_flag'=> 1]);
            return response()->json(["status" => "Success delete"],200);
        }
        return response()->json(["error" => "Error data"],400);
    }

    public function addcomment(Request $request)
    {
        if (Auth::check()) {
            Comment::create([
                'theme_is' => $request->topic_id,
                'user_id' => Auth::user()->id,
                'date' => date("Y-m-j H:i:s", time()),
                'text' => $request->text,
                'parrent_id' => $request->parrent_id
            ]);
            return response()->json(true, 200);
        }
        return response()->json(['status' => "Added error"], 400);
    }
}
