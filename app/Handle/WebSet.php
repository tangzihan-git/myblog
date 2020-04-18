<?php

namespace App\Handle;
use Cache;

class WebSet{
	static $web_title = '唐子涵的个人博客';
	static $web_keys = '博客,唐子涵个人博客,技术博客,个人博客,技术博客,php个人博客,优秀的个人网站,优秀的个人博客,博客模板,唐子涵博客模板';
	static $web_desc = '唐子涵的个人博客，是一个爱音乐，爱分享的男程序猿的个人博客网站，分享个人开发经验的技术博客';
	static $web_copy = '版权信息';
	static $web_banner = 'banner';
	static $web_num = '蜀ICP备20010777号';
	static $web_connect = '2197486242@qq.com';
	static $web_allowip = '0.0.0.0';
	static $web_code = '';

   public static function getset()
   {
   	   return [
   	   	"web_title"=>self::$web_title,
   	   	"web_keys"=>self::$web_keys,
   	   	"web_desc"=>self::$web_desc,
   	   	"web_copy"=>self::$web_copy,
   	   	"web_banner"=>self::$web_banner,
   	   	"web_num"=>self::$web_num,
   	   	"web_connect"=>self::$web_connect,
   	   	"web_allowip"=>self::$web_allowip,
   	   	"web_code"=>self::$web_code
   	   ];
   	

   }
}