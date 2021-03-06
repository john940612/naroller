<!DOCTYPE html>
<html lang="en">
<head>
	<title>News - Naroller</title>
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
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/nivo-lightbox.css" />
	<link rel="stylesheet" href="css/nivo_themes/default/default.css" />
	<link rel="stylesheet" href="css/templatemo-style.css" />
	<link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/dropdown.css" />
    <link rel="stylesheet" href="css/list.css" />
    <!--文章用css & js-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!--script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script-->
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css' />

</head>
<body>
	<?php include_once("analyticstracking.php") ?>
<!-- navigation -->

<div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">
                <img id="logo" src="images/NaRollerLogo-w500.png" />
            </a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right drop-down-menu">
				<li><a href="about.html">關於我們</a></li>
				<li><a class="active"  href="news.html">最新消息</a></li>
				<li><a href="portfolio.html">產品</a>
                    <ul>
                        <li><a href="#">Mini Sedan</a>
                            <ul>
                                <li><a href="Hyundai Accent.html">Hyundai Accent</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Compact Sedan</a>
                            <ul>
                                <li><a href="Ford Focus.html">Ford Focus</a></li>
                                <li><a href="Hyundai Elantra.html">Hyundai Elantra</a></li>
                            </ul>
                        </li>
                    </ul>
				</li>
				<li><a href="portfolio.html">技術</a></li>
				<li><a href="contact.html">聯繫我們</a></li>
			</ul>
		</div>
	</div>
</div>
<!-- about header section -->
<div id="news-header">
	<div class="container">
		<div class="row">
			<div id="headerTitle" class="col-md-12 col-sm-12">
                <h1>News</h1>
                <a class="downButton" href="#team"><span class="fa fa-angle-double-down fa-2x"></span></a>
            </div>
		</div>
	</div>
</div>

<!-- team section -->
<div id="team">
	<div class="container">
    
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>News</h2>
			</div>
         </div>
	</div>
</div><!-- End div#team -->	

<!--news show-->
         <?php
	      	 include("admin/connect_db.php");
	      	$sql1 = "SELECT * FROM article";       
 		?>
		<!--div class="container"-->
		<!--  <h2>Dynamic Tabs</h2>
		  <p>The <strong>show</strong> method shows the tab.</p>-->
		  <ul class="nav nav-tabs">
			  	<?php 
		          $count=1;
		         foreach($dbh->query($sql1) as $row)
		          {
		            echo "<li><a href='#menu$count'>";
		            print_r ($row['aTitle'])."</a></li>";
		            $count+=1;
		          }
	        	?>
				<!--<li class="active"><a href="#home"></a></li>
			    <li><a href="#menu1">Menu 1</a></li>
			    <li><a href="#menu2">Menu 2</a></li>
			    <li><a href="#menu3">Menu 3</a></li>
			    <li><a href="#menu3">Menu 4</a></li>-->
		  </ul>

		  <div class="tab-content">
		    <!--<div id="home" class="tab-pane fade in active">
		      <h3>HOME</h3>
		      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		    </div>-->
			    <?php 
		          $count1=1;
		         foreach($dbh->query($sql1) as $row)
		          {
		            echo "<div id='menu$count1' class='tab-pane fade'>";
		            echo "<h3>";
		            print_r ($row['aSecondTitle']);
		            echo "</h3><p>";
					print_r ($row['aText']);
		            echo "</p></div>";
		            $count1+=1;
		          }
	        	?>
     		</div>
     		<script>
				$(document).ready(function(){
				    $(".nav-tabs a").click(function(){
				        $(this).tab('show');
				    });
				});
			</script>
	<!--news show-->
       <!--  <div class="row mt30">
			<div class="col-md-3 col-sm-4 col-xs-9">
				<div class="team-wrapper newsListArea">
					<a class="newsListItem" href="#">各種文章</a>
                    <a class="newsListItem" href="#">各種文章</a>
                    <a class="newsListItem" href="#">各種文章</a>
                    <a class="newsListItem" href="#">各種文章</a>
                    <a class="newsListItem" href="#">各種文章</a>
				</div>
			</div>
			<div class="col-md-9  col-sm-4 col-xs-9 articleArea">
                <h3>大標題</h3>
				<h4>副標題</h4>
                <p>
                混合動力在新興國家機車規模佔全球產量的前5名，利用高馬力比的馬達輔助加速系統的研發和專利，是各家機車車廠全力投入的龐大商機和技術。
Downsizing、energy-saving和減少二氧化碳和硫化物排放的觀念高漲，消費者對於對車輛動力操控和加速度的感受要求增加，車輛動力已經成為新的趨勢主流。本計畫剎車再生儲能之高扭力比馬達於Nano-Hybrid System(輔助加速系統)是能輸出較以往更豐沛的推進力道，更安全可靠，且為更創新的科技：保留原產品的功能特性，於後輪加裝小容量的FSPM作為輔助傳動，搭配已發展成功的ADAPTIVE SERVO DRIVE即時偵測前後輪馬達的速差，再依此適應控制後輪馬達的扭矩，且開發剎車再生儲能裝置，不但效率可大幅提升，車子的行車穩定安全性與功率輸出將會更高，增加加速效率油耗低減。

                </p>
            </div>
				
         </div>-->
        
        
         <!--div class="row mt30"> 
			<div class="col-md-12 col-sm-12">
				<hr>
			</div>
			<div class="col-md-6 col-sm-6">
				<h3>Onetel Design Studio</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet.</p>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismo.</p>
			</div>
			<div class="col-md-6 col-sm-6">
				<strong>HTML5 &AMP; CSS3</strong>
				<span class="pull-right">100%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
					</div>
				<strong>BOOTSTRAP</strong>
				<span class="pull-right">80%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
					</div>
				<strong>UX Design</strong>
				<span class="pull-right">70%</span>
					<div class="progress">
						<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
					</div>
			</div>
		</div-->

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">

			<div id="footerInfo" class="col-md-4 col-sm-4">
				<img src="images/NaRollerLogo-w500.png" class="img-responsive" alt="logo">
				<p>Naroller Electronics<br/ >奈美電子公司，電磁設計解決方案供應商</p>
                <p><i class="fa fa-user"></i>連絡人：Roger Lee</p>
				<p><i class="fa fa-phone"></i>（03）222-2500</p>
				<p><i class="fa fa-envelope-o"></i><a class="mailAddr" href="mailto: roger.lee@naroller.com">roger.lee@naroller.com</a></p>
                <p><i class="fa fa-map-marker"></i>桃園市龜山區民生北路ㄧ段580號6樓</p>
			</div>

			<div id="footerMenu" class="col-md-3 col-sm-4">
				<h3>Menu</h3>
				<p class="menu"><a href="about.html">About</a></p>
				<p class="menu"><a href="#">News</a></p>
				<p class="menu"><a href="#">Products</a></p>
				<p class="menu"><a href="#">Technology</a></p>
				<p class="menu"><a href="#">Contact</a></p>
			</div>

			<div class="col-md-5 col-sm-4 newsletter">
				<h3>Map</h3>
				<div id="googleMap"></div>
			</div>
            
		</div><!-- End class="row"-->
	</div>
</footer>

<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-sm-6">
				<p>Copyright © 2015 Naroller Electronics ｜ All rights reserved.</p>
			</div>
			<div id="socialLinkArea" class="col-md-4 col-sm-6">
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
					<li><a href="https://twitter.com" class="fa fa-twitter"></a></li>
					<li><a href="mailto: roger.lee@naroller.com" class="fa fa-envelope-o"></a></li>
				</ul>
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