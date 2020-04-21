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
//随机颜色
function randomcolor()
{
    $ocoloc = ['0','1','2','3','4','5','6','7','8','9','A','B' ,'C','D','E','F'];
    $color = '';
    for($i=0;$i<6;$i++){
        $color.=$ocoloc[mt_rand(0,15)];

    }
    return "#".$color;
}
//生成摘要
function make_excerpt($value,$length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\*|\#|\```|<|\n+/',' ',strip_tags($value)));
    return Str::limit($excerpt,$length);
}
//获取小于等于当前时间今年的所有月份呢
function getFullMonth(){
    $year = date('Y',time());
    $month = date('m',time());
     $olddate = [$year.'-01',$year.'-02',$year.'-03',$year.'-04',$year.'-05',$year.'-06',$year.'-07',$year.'-08',$year.'-09',$year.'-10',$year.'-11',$year.'-12'];
    $dates=[];
    //得到满足条件的data
    foreach ($olddate as $key => $value) {
                # code..
        if($value <= $year.'-'.$month){
             $dates[] = $value;
        }
    }
    return $dates;
}