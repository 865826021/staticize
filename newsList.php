<?php 
// echo phpinfo();exit;  //phpinfo中可查看开启的mod，判断rewrite模式是否开启等


/*
通过正则表达式分析为伪静态URL地址

http://static.com/newsList.php?type=2&catid=1

http://static.com/newsList.php/2/1.html
2 => type=2
1 => catid=1
*/

// /2/1.html

if(preg_match('/^\/(\d+)\/(\d+).html/', $_SERVER['PATH_INFO'], $arr)){
	/*
		echo "<pre>";
		print_r($arr);
		echo "<pre>";
	*/

	//URL匹配成功
	$type = $arr[1];
	$catid = $arr[2];

	// 下一步根据得到的$type和$catid，从数据库中取数据，展示到页面
	//虽然是静态页面，但数据是动态数据
	// ……

}else{
	//URL匹配失败，跳转404页面等

}


