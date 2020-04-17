<?php
use GuzzleHttp\Client;//Http 发送请求
//根据当前路由响应对应模型
function routeName($route){
	return request()->route()->named($route);
}
//获取一年12个月份
function getallmonth()
{
	$dates = [];
	$z = date('Y-m');
	$a = date('Y-m', strtotime('-12 months'));
	$begin = new DateTime($a);
	$end = new DateTime($z);
	$end = $end->modify('+1 month');
	$interval = new DateInterval('P1M');
	$daterange = new DatePeriod($begin, $interval ,$end);

	foreach($daterange as $date){ 
	  $dates[]=$date->format("Y-m");
	}
	return $dates;
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