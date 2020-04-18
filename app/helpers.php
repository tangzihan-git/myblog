<?php
use GuzzleHttp\Client;//Http 发送请求
use App\Handle\WebSet;
//根据当前路由响应对应模型
function routeName($route){
	return request()->route()->named($route);
}


 //根据获取用户省份
   function getProvince($ip)
    {
        //配置信息
        $http = new Client;
        $ak = config('services.baidu_map.ak');
        $api = 'https://api.map.baidu.com/location/ip?ak='.$ak.'&ip='.$ip.'&coor=bd09ll';
        $response =$http->get($api);
        $result = json_decode($response->getBody());
        if($result->status==0){
            return $province = $result->content->address_detail->province;
        }
     

    }
//获取网站配置函数
function webset()
{
	return WebSet::getset();
}