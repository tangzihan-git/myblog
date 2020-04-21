<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Cate;

class CommentController extends Controller
{
    //
    public function __construct()
    {
          $this->middleware('captcha',['except'=>['getProvince','messages','index','handle']]);
    }
    public function index(Request $request)
    {
        //
        $cates = Cate::all();
       
        $catename = $request->catename?:1;
        $startdate = $request->startdate?:'2020-1-1';
        $enddate = $request->enddate?:'2060-12-31';
        $title = $request->search?:'';
        
        $data =\DB::table('comments')
                ->join('articles','article_id','=','articles.id')
                ->where('cate_id',$catename)
                ->wherebetween('comments.created_at',[$startdate,$enddate])
                ->where('title','like','%'.$title.'%')
                ->select('articles.id','title','articles.title','comments.*')
                ->paginate(10);
        return view('admin.comment',compact('data','cates','catename','startdate','enddate','title'));
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
    //站长回复
     public function handle(Request $request)
    {
        //删除操作
        if($request->statudel){
            Comment::where('id', $request->statudel)->delete();
        }else if($request->alldel){
            foreach ($request->ids as $id) {
                # code...
                Comment::where('id', $id)->delete();
            }
        }
        //回复操作
        Comment::where('id',$request->id)->update(['replay'=>$request->content,'flag'=>1]);
        return response()->json(['status'=>'1']);
    }
   
   
}
