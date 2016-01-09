
		<?php
			$db_server = "140.117.194.50";
			//資料庫名稱
			$db_name = "sad";
			//資料庫管理者帳號
			$db_user = "sad";
			//資料庫管理者密碼
			$db_passwd = "a0123456789";

			//對資料庫連線
			if(!@mysql_connect($db_server, $db_user, $db_passwd))
			        die("無法對資料庫連線");
		//資料庫連線採UTF8
		mysql_query("SET NAMES utf8");
		//選擇資料庫
			if(!@mysql_select_db($db_name))
		        die("無法使用資料庫");   
			$sql1 = "SELECT * FROM article";
        	$result = mysql_query($sql1);  
			while($row = mysql_fetch_row($result))
	        	{	        		
		             echo "<center><table bgcolor=#FFDC35 ><tr><td width='20%'>Topic: $row[1] </td> <td width='20%'>Second Title：$row[2]</td> " . 
		             "<td width='20%'>Summary：$row[4]</td></tr> <tr><td colspan='3'>Content：$row[3]</td></tr></table><br>";
	        	}
		?>
		

		</center>
