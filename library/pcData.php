<?php
/*
PC端公共异步处理页
*/
include "openFunction.php";
/***************测试第一个判断***************************************************/
if($get['type'] == "test"){
	//赋值
	$test = $post['test'];//测试参数1
	//判断
	if(empty($test)){
		$json['warn'] = "测试参数1为空";
	}else{
		$json['warn'] = "测试成功";
	}
}
/***************返回信息***************************************************/
echo json_encode($json);
?>