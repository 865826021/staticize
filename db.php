<?php 

/**
* 数据库连接封装
*/
class Db
{
	//存储类的实例的静态成员变量
	static private $_instance;
	//数据库连接语句静态成员变量
	static private $_connectString;
	//数据库连接配置
	private $_dbConfig = array(
		'host' => '127.0.0.1' ,
		'user' => 'root' ,
		'password' => 'root' ,
		'database' => 'imooc_singcms', 
		);
	
	function __construct(){
	}

	/*
	* 实例化
	*/
	static public function getInstance(){
		//判断是否已经被实例化
		if(!(self::$_instance instanceof self)){
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	//数据库连接
	public function connect()
	{
		if(!self::$_connectString){
			//数据库连接
			self::$_connectString = @mysql_connect($this->_dbConfig['host'],$this->_dbConfig['user'],$this->_dbConfig['password']);
			if(!self::$_connectString){
				//抛出异常处理
				throw new Exception("mysql connect error");				
			}
			//选择数据库
			mysql_select_db($this->_dbConfig['database'], self::$_connectString);
			//设置字符编码
			mysql_query("set names UTF8", self::$_connectString);
		}
		return self::$_connectString;
	}

}
