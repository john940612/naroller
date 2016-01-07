<!DOCTYPE html>
<html lang="en">
<head>
	<title>Media Management - Naroller</title>
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
			<a href="index.html" class="navbar-brand">
                <img id="logo" src="../images/NaRollerLogo-w500.png" />
            </a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<!--li><a href="index.html" class="active">首頁</a></li -->
				<li><a href="articleManagement.html">文章管理</a></li>
                <li><a href="">產品管理</a></li>
				<li><a class="active" href="mediaManagement.php">媒體管理</a></li>
                <li><a href="">員工管理</a></li>
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
                <h1>Media Management</h1>
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
                    <form id="uploadForm" action="#" method="post" role="form">
                            <!--label for="name">NAME</label-->
                            <input name="name" type="text" class="form-control" id="name" placeholder="檔案命名" />
                            <input name="file" type="file" class="form-control" id="file" />
                            <!--input name="file" type="file" class="btn" id="file" /-->
                            <!--input name="file" type="file" class="btn btn-default" id="file" /-->
                            <a type="submit" class="btn btn-default">SEND</a>
                            <!--input value="SEND" type="submit" class="btn btn-default" /-->
                    </form>
				</div>
			</div>
			<div id="fileListArea" class="col-md-12 col-sm-12 mt20">
            	<h3>Media File List</h3>
				<div class="listTableArea">
					<table>
                        <tr class="headRow">
                            <th class="checkCol"><input class="btn" type="submit" value="Delete" /></th>
                            <th class="timeCol">Upload Time</th>
                            <th class="fileNameCol">File Name</th>
                            <th class="sizeCol">Size</th>
                            <th class="uploaderCol">Uploader</th>
                        </tr>
                        <tr class="trtd1">
                            <td class="check"><input type="checkbox" /></td>
                            <td class="timeCol">2015/12/31 13:01:00</td>
                            <td class="fileNameCol">My Rabbit Is Cute.jpg</td>
                            <td class="sizeCol">1Mb</td>
                            <td class="uploaderCol">ymayho</td>
                        </tr>
                        <tr class="trtd2">
                            <td class="check"><input type="checkbox" /></td>
                            <td class="timeCol">2015/12/31 13:01:00</td>
                            <td class="fileNameCol">My Rabbit Is Cute.jpg</td>
                            <td class="sizeCol">20Mb</td>
                            <td class="uploaderCol">ymayho</td>
                        </tr>
                        <tr class="trtd1">
                            <td class="check"><input type="checkbox" /></td>
                            <td class="timeCol">2015/12/31 13:01:00</td>
                            <td class="fileNameCol">My Rabbit Is Cute.jpg</td>
                            <td class="sizeCol">355kb</td>
                            <td class="uploaderCol">ymayho</td>
                        </tr>
                        <tr class="trtd2">
                            <td class="check"><input type="checkbox" /></td>
                            <td class="timeCol">2015/12/31 13:01:00</td>
                            <td class="fileNameCol">My Rabbit Is Cute.jpg</td>
                            <td class="sizeCol">1.5Gb</td>
                            <td class="uploaderCol">ymayho</td>
                        </tr>
                        <tr class="trtd1">
                            <td class="check"><input type="checkbox" /></td>
                            <td class="timeCol">2015/12/31 13:01:00</td>
                            <td class="fileNameCol">My Rabbit Is Cute.jpg</td>
                            <td class="sizeCol">1Mb</td>
                            <td class="uploaderCol">ymayho</td>
                        </tr>
                        <tr class="trtd2">
                            <td class="check"><input type="checkbox" /></td>
                            <td class="timeCol">2015/12/31 13:01:00</td>
                            <td class="fileNameCol">My Rabbit Is Cute.jpg</td>
                            <td class="sizeCol">1Mb</td>
                            <td class="uploaderCol">ymayho</td>
                        </tr>
                    </table>
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
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>