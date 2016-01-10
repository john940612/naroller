<!DOCTYPE html>
<html lang="en">
<head>
	<title>Article Management - Naroller</title>
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
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<style>
		.form-control[type="radio"], #contact input[type="radio"]
		{
			height:13px;
		}
	</style>
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
				<li><a class="activePage" href="articleManagement.php">文章管理</a></li>
                <li><a href="product_list.php">產品管理</a></li>
				<li><a href="mediaManagement.php">媒體管理</a></li>
                <li><a href="employeeManagement.php">員工管理</a></li>
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
				<h1>Article Management</h1>
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
				<h2>Upload</h2>
				<span class="fa fa-upload fa-3x"></span>
				
			</div>
			<div class="col-md-6 col-sm-4 address">
				<div>
					<form id="signInForm" action="article_add.php" method="post" role="form">
						
							<input name="aTitle" type="text" class="form-control" id="name" placeholder="請輸入文章標題" />
							<input name="aSecondTitle" type="text" class="form-control" id="email" placeholder="請輸入文章副標題(可為空)" />
							<input name="aText" type="text" class="form-control" id="email" placeholder="請輸入文章內容" />
							<input name="aSummary" type="text" class="form-control" id="email" placeholder="請輸入文章摘要(可為空)" />
							<button id="updateButton" type="submit" name="submit" class="btn btn-default">上傳文章</button>
					</form>
				</div>
			</div>
			<center>
				<?php					
					include("article_display.php");
				?>
			</center>
			<div class="col-md-12 col-sm-12 mt20">
				<h3>Location</h3>
				<div class="google_map mt20">
					<div id="map-canvas"></div>
                    
				</div>
			</div>
		</div>
	</div>
</div>		

<!-- footer section -->

<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-6">
				<p>Copyright © 2015 Naroller Electronics ｜ All rights reserved.</p>
			</div>
			
		</div>
	</div>
</div>

<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>