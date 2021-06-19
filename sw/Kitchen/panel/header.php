<?php 
include "../../connect.php";
include "session.php";




?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kitchen Panel</title>
	 <link rel="shortcut icon" href="../../images/logo.png" type="image/x-icon">
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
	<style>
	<style>
  h2 h4{
   font-family: 'Lato', sans-serif;
   }
   p {
   font-family: 'Muli', sans-serif;
   text-align: justify;
   } 

 

 
* {
    box-sizing: border-box;
}

@media (min-width: 992px) {
  .col-md-1-5 { width: 20%; }
  .col-md-2-5 { width: 40%; }
  .col-md-3-5 { width: 60%; }
  .col-md-4-5 { width: 80%; }
  .col-md-5-5 { width: 100%; }
}

@media (min-width: 1200px) {
  .col-lg-1-5 { width: 20%; }
  .col-lg-2-5 { width: 40%; }
  .col-lg-3-5 { width: 60%; }
  .col-lg-4-5 { width: 80%; }
  .col-lg-5-5 { width: 100%; }
}

/* Demo only, no need for this */

.show-grid [class^=col-] span,
.container-fluid .show-grid [class^=col-] {
  display: block;
  padding-top: 10px;
  height: 125px;
  padding-bottom: 10px;
  /*background-color: #eee;*/
  /*background-color: rgba(86,61,124,.15);*/
  text-align: center;
  /*border: 1px solid #ddd;*/
  /*border: 1px solid rgba(86,61,124,.2);*/
}

[class^=col-] {
  margin-bottom: 30px;
}
	
	
	</style>
	
	
	
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                   &nbsp;&nbsp;  Kitchen
                </h1>
                <span>K</span>
				
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="dashboard.php">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
			
				 <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="fas fa-table"></i>
                          Orders
              <i class="menu-arrow"></i>
            </a>
			
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="todayorders.php">Today's Orders</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="orders.php">All Orders</a>
                </li>
				
              </ul>
            </div>
          </li>	<li>
                    <a href="blog.php">
                        <i class="fa fa-list-alt"></i>
                   Transactions
                    </a>
                </li>
		  <li>
                    <a href="menu.php">
                        <i class="fas fa-th"></i>
                           Menu
                    </a>
                </li>
				<li>
                    <a href="slider-edit.php">
                        <i class="fas fa-laptop"></i>
            Change Image
                    </a>
                </li>
			
				
				
			
				 
				
			
				
				<li>
                    <a href="admin.php">
                        <i class="fas fa-chart-pie"></i>
                      Change Password
                    </a>
                </li>
				
			
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                    <form action="#" method="post" class="form-inline mx-auto search-form">
				 <h2 class="main-title-w3layouts mb-2 text-center">Kitchen Dashboard</h2>
                        
                    </form>
				
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-spinner"></i>
                            </a>
                           <!-- <div class="dropdown-menu top-grid-scroll drop-2">
                                <h3 class="sub-title-w3-agileits">Shortcuts</h3>
                                <a href="../../index.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-chart-pie mr-3"></i>Home</h4>
                                </a>
                                <a href="../../index.php#about" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-connectdevelop mr-3"></i>About us</h4>
                                </a>
                                <a href="../../index.php#service" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-tasks mr-3"></i>Menu</h4>
                                </a>
                                <a href="../../index.php#gallery" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-superpowers mr-3"></i>Promotions</h4>
                                </a>
                            </div>-->
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                  
									<?php $username=$_SESSION['kusername'];
$result =  mysqli_query($conn," SELECT * FROM home WHERE email='$username'") or die( mysqli_error($conn) );

$row = mysqli_fetch_array($result);
 ?>  <div class="profile-l align-self-center">
                                        <img src="../../images/<?php echo $row['img'];?>" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits"><?php echo $row['name']; ?></h3>
                                        <a href="mailto:info@example.com"><?php echo $row['email']; ?></a>
                                    </div>
                                </div>
                                <a href="logout.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-user mr-3"></i>Logout</h4>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->

            <!-- main-heading -->
           
            <!--// main-heading -->
