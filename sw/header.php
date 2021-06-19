<?php  include "connect.php";
  session_start(); 
 
 if(!isset($_SESSION['temp']))
 {
 $resultw =  mysqli_query($conn," SELECT * FROM temp ORDER BY id DESC limit 1") or die( mysqli_error($conn) );

$roww = mysqli_fetch_array($resultw);

$v='Temp';
   if($roww){
    $voiceno=$roww['id']+1;
    }
   else{
    $voiceno=1;
    }
    $demo='1000'+$voiceno;
    $rcptno=$v.$demo;

     $regno=$rcptno;
		
	
		$_SESSION['temp']=$regno;
		
		 $queryw= "INSERT INTO `temp` (tid) 
					  VALUES('$regno')";
		      
			  $sqlw=mysqli_query($conn, $queryw);
 }
  
  ?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mom's Kitchen</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food Recipe a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<!-- for banner css -->
<link href="css/carousel.css" type="text/css" rel="stylesheet" media="all"><!-- carousel css -->  
<!-- //for banner css -->

<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- Theme-CSS -->

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /> <!-- Flexslider-CSS -->

<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->

<!-- font-awesome-icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" />
<!-- //font-awesome-icons -->
<style>
.pass{
	width: 100%;
    color: #999;
    background: none;
    outline: none;
    font-size: .9em;
    padding: .7em .8em;
    border: solid 1px #ccc;
    -webkit-appearance: none;
    display: inline-block;
}
</style>
<!-- google fonts -->
<link href="//fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Muli:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!-- //google fonts -->

</head>
	
<body>
<div class="banner-header">
		<!--header-->
		<div class="header">
		<div class="container-fluid">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="index.php">Mom's &hearts; Kitchen</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">About Us</a></li>
							<li><a href="services.php">Our Services</a></li>
							<li><a href="blogs.php">Blogs</a></li>
							<li class="dropdown">
							<?php   if(isset($_SESSION['user']))
					{    
				$u=$_SESSION['user'];
				
				
				$result =  mysqli_query($conn," SELECT * FROM user WHERE email='$u'") or die( mysqli_error($conn) );

$row = mysqli_fetch_array($result); ?>
                 <a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown"><?php echo $row['name'];?> <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="orders.php">My Orders</a></li>
										<li><a href="cart.php">My Cart</a></li>
										<li><a href="cpass.php">Change Password</a></li>
										<li><a href="logout.php">Logout</a></li>
									</ul>
					<?php }else{?>
									<a href="#" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">User <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="login.php">Login</a></li>
										<li><a href="register.php">Register</a></li>
										<li><a href="cregister.php">Register As Kitchen</a></li>
									</ul>
					<?php }?>
							  </li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
		<!--//header-->
</div>