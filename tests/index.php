<?php 
	require '../vendor/libs/function.php';
	require 'rb.php'; 

	$db = require '../config/config_db.php';

	//R::setup( 'mysql:host=localhost;dbname=mydatabase', 'myusername', 'mypassword' );
	R::setup($db['dsn'], $db['user'], $db['pass']);
/* 
	if(R::testConnection() == true)
	{
		echo "ok!";
	}
	else
	{
		echo "Проверьте соединение с базой!";
	} */
	
	//Create tets table Category
	$category = R::dispense('category');
	
	$category->title = 'Name';
	$category->text = 'Text';
	
	$res = R::store($category);
	// $category = R::load('category', 9);
	

	