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
    			"created_at"=>date('Y-m-d H:i:s')

    		]);
    	}
    	return view('admin.friend');

    }
   
}
