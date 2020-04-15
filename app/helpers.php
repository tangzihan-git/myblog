<?php
//根据当前路由响应对应模型
function routeName($route){
	return request()->route()->named($route);
}
