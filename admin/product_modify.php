<?php
	include("connect_db.php");

	echo '<form id="signInForm" action="product_add.php" method="post" role="form">';
		echo '<input name="pName" type="text" class="form-control" id="name" placeholder="請輸入產品名稱" />';
		echo '<input name="pDesc" type="text" class="form-control" id="email" placeholder="請輸入產品敘述" />';
		echo '<input name="pFile" type="hidden" class="form-control" id="email" value="'.$_POST['pFile'].'" />'.$_POST['pFile'];
		//echo '<input name="pThumb" type="hidden" class="form-control" id="email" value="'.$_POST['pThumb'].'" />'.$_POST['pThumb'];
		echo '<button id="updateButton" type="submit" name="submit" class="btn btn-default">添加圖片</button>';
	echo '</form>';

?>