<?php 
/*
	ob_start();					//php.ini中没开启buffer时，通过函数开启
	echo 1;
	echo "<br/>";
	echo ob_get_contents();		//获取php_buffer中的内容
*/
/*
	file_put_contents('html/index.shtml','把内容写进文件中aaaaaa');
*/

	ob_start();
	echo 222222333;
	//file_put_contents('html/php_buffer.html',ob_get_contents());	
	//ob_clean();

	file_put_contents('html/php_buffer.html',ob_get_clean());
