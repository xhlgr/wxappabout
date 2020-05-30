<?php
//微信小程序返回关于我们
header('Content-Type:charset=utf-8');

//内容 用html写小程序用parser解析
$result="测试";
$resdata=array(
    "result"=>$result,
);

echo json_encode($resdata);//结果数组转换成json返回

?>
