<?php 

namespace vendor\core\base;

use vendor\core\Db;

abstract class Model {

	protected $pdo;
	protected $table;
	protected $pk = 'id';
	
	public function __construct()
	{
		$this->pdo = Db::instance();
	}
	
	// для запросов
	public function query($sql)
	{
		return $this->pdo->execute($sql);
	}
	
	// выводим все даные таблицы
	public function findAll()
	{
		$sql = "SELECT * FROM {$this->table}";
		return $this->pdo->query($sql);
	}
	
	public function findOne($id, $field = '')
	{
		$field = $field ?: $this->pk; 
		$sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";
		return $this->pdo->query($sql, [$id]);
	}
	
	public function findBySql($sql, $params = [])
	{		
		return $this->pdo->query($sql, $params);
	}
	
	// public function OrderBy($sql, $params = [])
	// {		
		// $sql = "ORDER BY {$this->$params}";
		// return $this->pdo->query($sql, $params);
	// }

}