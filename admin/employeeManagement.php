<?php
	session_start();
	if($_SESSION['permission'] != "admin" && $_SESSION['permission'] != "general")
	{
		header("location: signIn.php");
	}
	include("connect_db.php");
	$catch = "SELECT * FROM Employee";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Employee Management - Naroller</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
OneTel Template
http://www.templatemo.com/tm-468-onetel
-->

	<!-- stylesheet css -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/font-awesome.min.css" />
	<link rel="stylesheet" href="../css/nivo-lightbox.css" />
	<link rel="stylesheet" href="../css/nivo_themes/default/default.css" />
	<link rel="stylesheet" href="../css/templatemo-style.css" />
	<link rel="stylesheet" href="../css/main.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/table.css" />
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />

</head>
<body>
	
<!-- navigation -->

	<div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="admin.php" class="navbar-brand">
				<img id="logo" src="../images/NaRollerLogo-w500.png" />
			</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="articleManagement.php">文章管理</a></li>
                <li><a href="product_list.php">產品管理</a></li>
				<li><a href="mediaManagement.php">媒體管理</a></li>
				<li><a class="activePage" href="employeeManagement.php">員工管理</a></li>
				<li><a href="logout.php">登出</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- contact header section -->
<div id="contact-header">
	<div class="container">
		<div class="row">
			<div id="headerTitle" class="col-md-12 col-sm-12">
				<h1>Employee Management</h1>
				<a class="downButton" href="#contact"><span class="fa fa-angle-double-down fa-2x"></span></a>
			</div>
		</div>
	</div>
</div>

<!-- contact section -->
<div id="contact">
	<div class="container">
		<div class="row">
			<!--div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Get in touch</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
			</div-->
			<div class="col-md-6 col-sm-8 mt30 halfSideTitle">
				<h2>Add</h2>
				<span class="fa fa-user-plus fa-3x"></span>
			</div>
			<div class="col-md-6 col-sm-4 address">
				<div>

					<?php
						if($_SESSION['permission'] == "admin")
						{
							echo"<div>";
							echo'<form id="signInForm" action="employee_add.php" method="post" role="form">';
						  	echo'<input name="eId" type="text" class="form-control" id="email" placeholder="請輸入員工ID" />';
							echo'<input name="eName" type="text" class="form-control" id="email" placeholder="請輸入員工名稱" />';
							echo'<input name="ePwd" type="text" class="form-control" id="email" placeholder="請輸入員工密碼" />';
							echo'<button id="updateButton" type="submit" name="submit" class="btn btn-default">新增員工</button>';
					echo"</form>";
				echo"</div>";
							include("employee_display.php");
						}
						
						if($_SESSION['permission'] == "general")
						{
							include("employee_password_modify.php");
						}
					?>
				</div>
			</div>
			<!--<div id="fileListArea" class="col-md-12 col-sm-12 mt20">
				<h3>Employee List</h3>
					<form id="signInForm" action="employee_modify.php" method="post" role="form">
						<table>
							<tr class="headRow">
								<th class="checkCol"><input class="btn" type="submit" value="Delete" /></th>
								<th class="nameCol">Username</th>
								<th class="accessCol">Access</th>
							</tr>
<?php
/*							$i=1;
	foreach($dbh->query($catch) as $row){
		if($i==1){
			echo '<tr class="trtd1">';
			echo '<td>';
				echo '<input name="eId" type="radio" id="eId" value="'.$row['eId'].'"/>';
				//print_r ($row['eId']);
			echo '</td>';	
			echo '<td>';
				print_r ($row['eName']);
				//echo '<input name="eName" type="hidden" class="form-control" id="email" value="'.$row['eName'].'"/>';
			echo '</td>';
			echo '<td>';
				print_r ($row['ePerm']);
				//echo '<input name="ePerm" type="hidden" class="form-control" id="email"value="'.$row['ePerm'].'" />';
			echo '</td>';
		  echo '</tr>';
			$i=2;
		}
		else{
			echo '<tr class="trtd2">';
				echo '<td>';
					echo '<input name="eId" type="radio" id="name" value="'.$row['eId'].'"/>';
					//print_r ($row['eId']);
				echo '</td>';	
				echo '<td>';
					print_r ($row['eName']);
					//echo '<input name="eName" type="hidden" class="form-control" id="email" value="'.$row['eName'].'"/>';
				echo '</td>';
				echo '<td>';
					print_r ($row['ePerm']);
					//echo '<input name="ePerm" type="hidden" class="form-control" id="email"value="'.$row['ePerm'].'" />';
				echo '</td>';
			echo '</tr>';
			$i=1;
		}

	}*/?>
						</table>
					</form>
				</div>
			</div>-->
		</div>
	</div>
</div>

<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<p>Copyright © 2015 Naroller Electronics ｜ All rights reserved.</p>
	</div>
</div>

<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>