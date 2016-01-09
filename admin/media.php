<?php
	
	$name = $_FILES["file"]["name"];
	$type = $_FILES["file"]["type"];
	$size = $_FILES["file"]["size"] / 1024 / 1024;

	if($_FILES["file"]["error"] > 0)
	{
		echo "Error: " . $_FILES["file"]["error"];
	}	
	else{
		
		echo "檔案名稱: " . $name . "<br/>";
		echo "檔案類型: " . $type . "<br/>";
		echo "檔案大小: " . $size . " MB<br />";
		echo "暫存名稱: " . $_FILES["file"]["tmp_name"];
		
		if(file_exists("upload/" . $_FILES["file"]["name"]))
		{
			echo "檔案已經存在，請勿重覆上傳相同檔案";
		}
		else
		{
			if(mediaType($type) && mediaSize($size))
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$name);
				switch ($type) {
					case 'image/bmp':
						$src = imagecreatefromwbmp("upload/".$name);
						break;
					case 'image/gif':
						$src = imagecreatefromgif("upload/".$name);
						break;
					case 'image/jpeg':
						$src = imagecreatefromjpeg("upload/".$name);
						break;
					case 'image/png':
						$src = imagecreatefrompng("upload/".$name);
						break;
				}			

				if(!$src)
				{
					/* Create a black image */
					$src = imagecreatetruecolor(150, 30);
					$bgc = imagecolorallocate($src, 255, 255, 255);
					$tc = imagecolorallocate($src, 0, 0, 0);

					imagefilledrectangle($src, 0, 0, 150, 30, $bgc);

					/* Output an error message */
					imagestring($src, 1, 5, 5, 'Error loading ' . $name, $tc);
				}

				else
				{
					// 取得來源圖片長寬
					$src_w = imagesx($src);
					$src_h = imagesy($src);
					//$src_w = imagesx($name);
					//$src_h = imagesy($name);
	
					// 假設要長寬不超過90
					if($src_w > $src_h)
					{
						$thumb_w = 90;
						$thumb_h = intval($src_h / $src_w * 90);
					}
					else
					{
						$thumb_h = 90;
						$thumb_w = intval($src_w / $src_h * 90);
					}
	
					// 建立縮圖
					$thumb = imagecreatetruecolor($thumb_w, $thumb_h);
	
					// 開始縮圖
					imagecopyresampled($thumb, $src, 0, 0, 0, 0, $thumb_w, $thumb_h, $src_w, $src_h);
	
					// 儲存縮圖到指定 thumb 目錄
					imagejpeg($thumb, "thumb/".$_FILES["file"]["name"]);}

			}
			
			else if(!mediaType($type))
				echo "檔案格式不符合";
			else if(!mediaSize($size))
				echo "檔案大小超過限制(最大10MB)";
		}
	}

	function mediaType($type)
	{
		if($type == "image/bmp"||$type == "image/gif"||$type == "image/jpeg"||$type == "image/png")
			return 1;
		else
			return 0;
	}
	function mediaSize($size)
	{
		if($size <= 1024*1024*10)
			return 1;
		else
			return 0;
	}

?>