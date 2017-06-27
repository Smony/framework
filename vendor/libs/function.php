<?php 

	function dd($arr) {
		echo '<pre>' . print_r($arr, true) . '</pre>';
	}

	function formatstr($str)
	{
		$str = trim($str);
		$str = stripslashes($str);
		$str = htmlspecialchars($str);
		return $str;
	}