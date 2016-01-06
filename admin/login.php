<?php
	include("connect_db.php");
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		// username and password sent from Form
		$username = addslashes($_POST['username']);
		$password = addslashes($_POST['password']);
		
		try
		{

			$stmt = $dbh->prepare("SELECT eId FROM employee WHERE eName = '$username' and ePwd = '$password'");
			$stmt->execute(array($username, $password));
			$userRow = $stmt->fetch(PDO::FETCH_ASSOC);

			if($stmt->rowCount() == 1)
			{
					$_SESSION['user_session'] = $userRow['username'];
					$_SESSION['login_user'] = $username;
					//$_SESSION['permission'] = 1;
					header("location: admin.php");
			}

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