<?php

namespace App\Http\Controllers;
use App\Handle\WebSet;
use Illuminate\Http\Request;
use App\Handle\ImageUpload;
use Cache;
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
    				Cache::forever('banner',$result['path']);
    				\DB::table('webset')->update(['web_banner'=>$result['path']]);
    				return "上传成功";
    			}
    		}
    	}

    	

    }
   
}
