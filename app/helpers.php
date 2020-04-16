<?php
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

