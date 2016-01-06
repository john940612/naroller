<?php
    
	$dbtype_sql = 'mysql';
	$host_sql = '140.117.194.50';
	$dbname_sql = 'sad';
	$username_sql = 'sad';
    $password_sql = 'a0123456789';

	// 資料庫連線
	try {
		$dbh = new PDO($dbtype_sql . ':host=' . $host_sql . '; dbname=' . $dbname_sql, $username_sql, $password_sql);
		// 資料庫使用 UTF8 編碼
		$dbh->query('SET NAMES UTF8');
	}
	catch (PDOException $e) {
		echo 'Error!: ' . $e->getMessage() . '<br />';
	}
?>