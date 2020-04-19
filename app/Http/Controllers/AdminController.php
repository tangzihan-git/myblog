<?php

namespace App\Http\Controllers;
use App\Handle\WebSet;
use Illuminate\Http\Request;
use App\Handle\ImageUpload;
use Cache;
use \DB;
class AdminController extends Controller
{
    //
    public function webset(Request $request)
    {
    	if(empty($_POST)){
    		return view('admin.websetting');
    	}else{
    		//将上传的焦点图存放在缓存中
    	
    		if($request->banner){
    			// ImageUploadHandler
    			$result = ImageUpload::save($request->banner,'banners','banner');
    			if($result){
    				Cache::forget('banner');
    				Cache::forever('banner',array($result['path']));
    				\DB::table('webset')->update(['web_banner'=>$result['path']]);
    				return "上传成功";
    			}
    		}
    	}
    }
    //友情链接
    public function friend(Request $request){
    	if(!empty($_POST)){
    		DB::table('friend_links')->insert([
    			"web_name"=>$request->web_name,
    			"web_link"=>$request->web_link,
    			"web_email"=>$request->web_email,
    			"web_order"=>$request->web_order,
                "web_color"=>$request->web_color,
    			"created_at"=>date('Y-m-d H:i:s')

    		]);
    	}
        $data = DB::table('friend_links')->get();
    	return view('admin.friend',compact('data'));

    }
    //友情链接操作
     public function handle(Request $request)
    {
       
        //删除操作
        if($request->statudel){
            \DB::table('friend_links')->where('id', $request->statudel)->delete();
        }else if($request->alldel){
            foreach ($request->ids as $id) {
                # code...
                 \DB::table('friend_links')->where('id', $id)->delete();
            }
        }
        //更新颜色
         if($request->color){
             \DB::table('friend_links')->where('id',$request->id)->update(['web_color'=>$request->color,"updated_at"=>date('Y-m-d H:i:s')]);
        }//更新名称
        if($request->content){
            \DB::table('friend_links')->where('id',$request->id)->update(['tag_name'=>$request->content,"updated_at"=>date('Y-m-d H:i:s')]);
        
        }
        //下架&上架
        if($request->change){
            \DB::table('friend_links')->where('id',$request->id)->update(['web_status'=>$request->status,"updated_at"=>date('Y-m-d H:i:s')]);
        
        }
        return response()->json(['status'=>'1']);
        

    }
}
