<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign In - NaRoller Management</title>
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
			<a href="#" class="navbar-brand"><img id="logo" src="../images/NaRollerLogo-w500.png" class="img-responsive" alt="logo"></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<!-- <li><a href="contact.html" class="active">Sign In</a></li> -->
			</ul>
		</div>
	</div>
</div>		

<!-- contact header section -->
<div id="contact-header">
	<div class="container">
		<div class="row">
            <div class="container signInDiv">
            <?php
            	//include("login.php");
            ?>
                <div id="contact" class="row">
                    <div id="signInTitleArea" class="col-md-6 col-sm-4">
                        <h2>Sign In</h2>
                        <span class="fa fa-5x fa-sign-in"></span>
                    </div>
                    <div id="formArea" class="col-md-6 col-sm-6">
                        <form id="signInForm" action="login.php" method="post" role="form">
                        
                            <input name="username" type="text" class="form-control" id="name" placeholder="帳號｜Username" />
                            <input name="password" type="password" class="form-control" id="email" placeholder="密碼｜Password" />
                            <button id="signInButton" type="submit" name="submit" class="btn btn-default">Sign In</button>
                        </form>
                    </div>
                </div>
            </div>
        
        
        
            
            
            
            
            
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
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>	
<script src="../js/nivo-lightbox.min.js"></script>
<script src="../js/custom.js"></script>

</body>
</html>