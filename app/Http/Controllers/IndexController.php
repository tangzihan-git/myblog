<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Article;
use App\Tag;
use DB;
use Cache;
class IndexController extends Controller
{
    public function index(Request $request,Article $article){
    	//获取推荐文章
        // dump($this->getProvinceSee('1/01.206.182.166'));

    	$recos = $article->getReco();
    	//获取最新文章
        $newArticles = $article->getNew();
        //获取友情链接
        $friendLinks = $this->friendLinks();
    	//获取网站配置信息
    	return view('index',compact('recos','newArticles','friendLinks'));
    }
    public function friendLinks()
    {
        return Cache::remember('friendlink','86400',function(){
            return DB::table('friend_links')->where('web_status',1)
                                        ->select('web_name','web_link','web_color')
                                        ->orderby('web_order','asc')
                                        ->get();
        });
    }
    function getProvinceSee($ip)
    {
        $pro = preg_replace('/省|市/','',getProvince($ip));//获取用户省份
        $data = [[
        "provinceName"=>"北京",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "天津",
        "PeopleCount"=> 0
       
    ], [
        "provinceName"=> "河北",
        "PeopleCount"=> 0
       
    ], [
        "provinceName"=> "山西",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "内蒙古",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "辽宁",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "吉林",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "黑龙江",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "上海",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "江苏",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "浙江",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "安徽",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "福建",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "江西",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "山东",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "河南",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "湖北",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "湖南",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "广东",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "广西",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "海南",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "重庆",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "四川",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "贵州",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "云南",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "西藏",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "陕西",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "甘肃",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "青海",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "宁夏",
        "PeopleCount"=> 0
    ], [
        "provinceName"=> "新疆",
        "PeopleCount"=> 0
    ]];
        //循环判断，如果用户在某个省份，使某个省份的访问量加1
        for($i=0;$i<count($data);$i++){
            if($data[$i]['provinceName']==$pro){
                $data[$i]['PeopleCount']=$data[$i]['PeopleCount']+1;
                // dump($data[$i]);
            }

        }

        return json_encode($data);//返回数据
    }
}
