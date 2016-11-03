<?php 
	//排行榜接口数据
/*
	1、获取数据
	2、把获取到的数据组装成接口数据，通信
*/
	require("../db.php");

	$connect = Db::getInstance()->connect();
	$sql = "select * from cms_news where catid=3 and status=1 order by news_id desc limit 3";

	$result = mysql_query($sql, $connect);
	while ($row = mysql_fetch_assoc($result)) {
		$res[] = $row;
	}

	return show(1, "success", $res);

	//制作接口方法
	function show($code=0, $message="error", $data=array())
	{
		$result = array(
			'code' => $code,
			'message' => $message,
			'data' => $data, 
		);
		echo json_encode($result);
	}

