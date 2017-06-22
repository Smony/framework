<?php 
	require '../vendor/libs/function.php';
	require 'rb.php'; 

	$db = require '../config/config_db.php';

	//R::setup( 'mysql:host=localhost;dbname=mydatabase', 'myusername', 'mypassword' );
	R::setup($db['dsn'], $db['user'], $db['pass']);
	R::freeze( TRUE ); //не изменять размер колонок
	R::fancyDebug( TRUE ); //включить отладчик on-true off-false
/* 
	if(R::testConnection() == true)
	{
		echo "ok!";
	}
	else
	{
		echo "Проверьте соединение с базой!";
	} */
	
	//CREATE
	 // $category = R::dispense('category');
	
	 // $category->title = 'new title5';
	 // $category->text = 'new text5';
	
	 // $res = R::store($category);
	 
	
	//READ
/* 	$res = R::load('category', 27);
	echo $res->title;
	echo $res['title']; */
	
	 // UPDATE
	 // $cat_name = R::load('category', 6);
	 // $cat_name->title = 'new title6';
	 // $cat_name->text = 'new text6';
	 // R::store($cat_name);
	 // echo $cat_name->title .'<br>';  
	
	// DELETE
	// $delete = R::load('category', 26);
	// R::trash($delete); 
    // R::wipe( 'category' ); 
	
	// $res = R::findAll('category', 'id > ?', [5]);
	// $res = R::findAll('category', 'title LIKE ?', ['%cat%']);
	// $res = R::findOne('category', 'id = 2');
	// $res = R::findOne('category', 'id = 2');
	// dd($res);
	
	