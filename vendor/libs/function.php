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

	function baseURL(){
		return sprintf(
			"%s://%s%s",
			isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
			$_SERVER['SERVER_NAME'],
			dirname($_SERVER['REQUEST_URI'])
		);
	}

	function getImageUpload()
	{
		if(is_uploaded_file($_FILES['photo']['tmp_name']))
		{
			$dir_img = '/upload/photos/';
			$sz = $_FILES['photo']['size'];
			$tp = $_FILES['photo']['type'];
			if ($tp == "image/jpeg" || $tp == "image/pjpeg" || $tp == "image/jpg")
			{
				$new_name = ROOT . $dir_img . "new_mob_".md5(rand()).".jpg";
			}
			else
			{
				echo "Возможная атака с участием загрузки файла: ";
				echo "файл '". $_FILES['photo']['tmp_name'] . "'.";
			}
			if ($sz > 4485760)
			{
				echo "Загрузите не больше 2мб";
			}
		}

		if (is_uploaded_file($_FILES['photo']['tmp_name']))
		{
			$nw = 250;// DESTINATION WIDTH

			$tn = $_FILES['photo']['tmp_name'];
			if ($src = imagecreatefromjpeg($tn))
			{

				$kf = number_format((imagesx($src) /$nw),2);
				$nh = (int)(imagesy($src) / $kf);

				$dest = imagecreatetruecolor($nw,$nh);
				imagecopyresampled($dest,$src,0,0,0,0,$nw,$nh,imagesx($src),imagesy($src));
				imagejpeg($dest,$new_name,80);
				//echo "<img src=$new_name width=$nw height=$nh>";

			}
			else
			{
				echo "not JPEG format!";
			}
		}
		return $new_name;
	}