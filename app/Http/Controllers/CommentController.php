<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;


class CommentController extends Controller
{
    //
    public function __construct()
    {
          $this->middleware('captcha',['except'=>['getProvince','messages']]);
    }
    //存储用户评论
    public function store(Comment $comment ,Request $request)
    {
        $comment->article_id = $request->articleid;
    	$comment->user_ip = '12030324';
    	$comment->parent_id = $request->parentid | 0;
    	$comment->level = $request->level;
    	$comment->content = $request->con;
        //记录用户评论ip
        $comment->user_ip = $request->getClientIps()[0];
        
    	if($comment->save()){
    		return response()->json([
			    'id'=>$comment->id,
			    'time'=>date('Y-m-d H:i:s',time()),
                'province'=> '#@热心网友'
			]);

    	}
    }
    //存储用户留言
    public function messages(Request $request)
    {
        if(empty($_POST)){
            $data = \DB::table('messages')->paginate(10);
            return view('liuyan',compact('data'));
        }else{
            $time = date('Y-m-d H:i:s');
            \DB::table('messages')->insert([
                "user_qq"=>133,
                "user_ip"=>$request->getClientIps()[0],
                "user_con"=>clean($request->content, 'user_body'),
                "created_at"=>$time
            ]);
            return response()->json([
                "time"=>$time,

            ]);
        }
        

    }
   
   
}
