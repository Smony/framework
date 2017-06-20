<?php

namespace vendor\core;

class Db {

	protected $pdo;
	protected  static $instance;
	public static $countSql = 0; 
	public static $queryes = []; 

	protected function __construct() 
	{
		$db = require ROOT . '/config/config_db.php';
		
		$options = [
			\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
			\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
		];
		
		$this->pdo = new \PDO($db['dsn'], $db['user'], $db['pass'], $options);
	}
	
	public static function instance()
	{
		if(self::$instance === null)
		{
			self::$instance = new self;
		}
		return self::$instance;
	}
	
	//return false or true
	public function execute($sql)
	{
		self::$countSql++;
		self::$queryes[] = $sql;
		$stmt = $this->pdo->prepare($sql);
		return $stmt->execute();
	}
	
	public function query($sql)
	{
		self::$countSql++;
		self::$queryes[] = $sql;
		$stmt = $this->pdo->prepare($sql);
		$res = $stmt->execute();
		if($res != false)
		{
			return $stmt->fetchAll();
		}
		return []; //empty
	}
}	
