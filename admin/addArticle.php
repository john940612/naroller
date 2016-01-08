<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add New Article - Naroller</title>
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
				<!--li><a href="index.html" class="active">首頁</a></li -->
				<li><a class="active" href="article.php">最新消息</a></li>
				<li><a href="about.html">媒體管理</a></li>
				<!--li><a href="portfolio.html">產品</a></li>
				<li><a href="portfolio.html">技術</a></li-->
				<li><a href="#">登出</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- contact header section -->
<div id="contact-header">
	<div class="container">
		<div class="row">
			<div id="headerTitle" class="col-md-12 col-sm-12">
                <h1>Add New Article</h1>
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
            <h2>New Article</h2>
            <div id="article">
                <form id="artForm" action="article_add.php" method="post" role="form">
                    <input name="aTitle" type="text" class="form-control" id="artTitle" placeholder="標題" />
                    <input name="aSecondTitle" type="text" class="form-control" id="artSubtitle" placeholder="副標題" />
                    <textarea id="artSummary" name="aText" placeholder="摘要" class="form-control"></textarea>
                    <textarea id="artContent" name="aSummary" placeholder="內容" class="form-control"></textarea>
                    <div id="sendButtonArea">
                        <button id="updateButton" type="submit" name="submit" class="btn btn-default">Send</button>
                    </div>
                </form>
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
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>