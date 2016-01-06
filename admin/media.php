<?php
	
	$name = $_FILES["file"]["name"];
	$type = $_FILES["file"]["type"];
	$size = $_FILES["file"]["size"] / 1024 / 1024;

	if($_FILES["file"]["error"] > 0)
	{
		echo "Error: " . $_FILES["file"]["error"];
	}	
	else{
		/*
		echo "檔案名稱: " . $name . "<br/>";
		echo "檔案類型: " . $type . "<br/>";
		echo "檔案大小: " . $size . " MB<br />";
		echo "暫存名稱: " . $_FILES["file"]["tmp_name"];
		*/
		if(file_exists("upload/" . $_FILES["file"]["name"]))
		{
			echo "檔案已經存在，請勿重覆上傳相同檔案";
		}
		else
		{
			if(mediaType($type) && mediaSize($size))
				move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
			else if(!mediaType($type))
				echo "檔案格式不符合";
			else if(!mediaSize($size))
				echo "檔案大小超過限制(最大10MB)";
		}
	}

	function mediaType($type)
	{
		if($type == "image/bmp"||$type == "image/png"||$type == "image/svg"||$type == "image/gif"||$type == "image/jpeg")
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