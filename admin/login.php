<?php
	include("connect_db.php");
	session_start();
	$_SESSION['permission'] = 0;
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// username and password sent from Form
		$username = addslashes($_POST['username']);
		$password = addslashes($_POST['password']);
		
		try
		{

			$stmt = $dbh->prepare("SELECT * FROM employee WHERE eName = '$username' and ePwd = '$password'");
			$stmt->execute(array($username, $password));
			//$userRow = $stmt->fetch(PDO::FETCH_ASSOC);

			if($stmt->rowCount() == 1)
			{
					//$_SESSION['user_session'] = $userRow['username'];
					$_SESSION['user_session'] = $row['eName'];
					$_SESSION['login_user'] = $username;
					//$_SESSION['permission'] = $row['ePerm'];
					$_SESSION['permission'] = 1;
					header("location: admin.php");
			}
/*
			$_SESSION["myusername"];
			$_SESSION['login_user'] = $myusername;
			$_SESSION['permission'] = 1;
		
			header("location: admin.php");
*/
			else
			{
				$error = "Your Login Name or Password is invalid";
				header("location: signIn.php");
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
?>