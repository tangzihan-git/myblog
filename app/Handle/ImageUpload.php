<?php

namespace App\Handle;

use  Illuminate\Support\Str;
class ImageUpload
{
	//图片上传限制
	protected static $allow_ext = ['png','jpg','gif','jpeg'];

	public static function save($file,$folder,$file_prefix)
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
		return [
			'path'=>config('app.url')."/$folder_name/$filename"
		];





	}
}
