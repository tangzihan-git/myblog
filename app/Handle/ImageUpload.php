<?php

namespace App\Handle;

use  Illuminate\Support\Str;
use Image;
class ImageUpload
{
	//图片上传限制
	protected static $allow_ext = ['png','jpg','gif','jpeg'];

	public static function save($file,$folder,$file_prefix,$max_width = false)
	{
		$folder_name = "uploads/images/$folder/".date("Ym/d",time());//文件夹
		$upload_path = public_path().'/'.$folder_name;//上传的路径等于public加图片目录

		//获取文件后缀名
		$extension = strtolower($file->getClientOriginalExtension())?:'png';

		//拼接文件名
		$filename = $file_prefix.'_'.time().'_'.Str::random(10).'.'.$extension;

		//如果上传的不是图片

		if(!in_array($extension, self::$allow_ext)){
			return false;
		}

		//将图片存储到指定路径

		$file->move($upload_path,$filename);
		//如果图片超过了限制宽度
		if($max_width && $extension!='gif'){
			self::reduceSize($upload_path.'/'.$filename,$max_width);
		}
		return [
			'path'=>config('app.url')."/$folder_name/$filename"
		];

	}
	 public static function reduceSize($file_path, $max_width)
    {
        // 先实例化，传参是文件的磁盘物理路径
        $image = Image::make($file_path);

        // 进行大小调整的操作
        $image->resize($max_width, null, function ($constraint) {

            // 设定宽度是 $max_width，高度等比例缩放
            $constraint->aspectRatio();

            // 防止裁图时图片尺寸变大
            $constraint->upsize();
        });

        // 对图片修改后进行保存
        $image->save();
    }
}
