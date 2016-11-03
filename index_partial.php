<?php 
/*
	1、连接数据库，然后从数据库里获取数据
	2、把获取到的信息填充到模板文件里面
	3、把动态页面转化为静态页面，生成纯静态文件
*/

	//如果存在静态文件，且改文件距离上次修改的时间小于1分钟，则直接调用
if (is_file('./html/partial.html') && time()-filemtime('./html/partial.html') < 60 ) {
	require_once('./html/partial.html');
}else	//不存在静态文件或距离上次修改的时间大于1分钟，则重新生成
{
	/*
	require_once("./db.php");
	$connect = Db::getInstance()->connect();
	$sql = "select * from cms_news where catid=3 and status=1 order by news_id desc limit 5";
	$result = mysql_query($sql, $connect);
	$news = array();
	while ($row = mysql_fetch_array($result)) {
		$news[] = $row;
	}
	*/

	//引入模板文件
	ob_start();
	require_once('./template/partial.php');
	//使用file_put_contents输出内容，生成纯静态页面
	file_put_contents("./html/partial.html", ob_get_contents());

/*
	//这里，ob_get_clean()函数，php_buffer中的内容不输出到终端
	if (file_put_contents("./html/cms.html", ob_get_clean())) {
		echo "Success";
	}else{
		echo "Error!";
	}
*/

}


