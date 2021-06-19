<?php 
include "../../connect.php";
include "session.php";
if(isset($_POST['submit']))
{
	
	$image= $_FILES['image']['name'];
     
       $target = "../../images/".basename($image);
    
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
   
	$query = "INSERT INTO banner(img) 
					  VALUES('$image')";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Uploaded successfully!');</script>";
   }
     else{
          echo "<script type='text/javascript'>alert('Failed to upload!');javascript:history.back();</script>";
        } 
      
	
	
}





?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>"0 0" B.C !!</title>
	 <link rel="shortcut icon" href="../../images/logo1.png" type="image/x-icon">
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
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
               <h1>

                   &nbsp;&nbsp;  Admin
                </h1>
                <span>A</span>
            </div>
            <div class="profile-bg"></div>
            <ul class="list-unstyled components">
                <li>
                    <a href="dashboard.php">
                        <i class="fas fa-th-large"></i>
                        Dashboard
                    </a>
                </li>
				<li class="active">
                    <a href="slider.php">
                        <i class="fas fa-laptop"></i>
                        Slider
                    </a>
                </li><li>
                    <a href="menu.php">
                        <i class="fas fa-table"></i>
                        Menu
                    </a>
                </li><li>
                    <a href="category.php">
                        <i class="fas fa-chart-pie"></i>
                       Category
                    </a>
                </li><li>
                    <a href="promo.php">
                        <i class="far fa-window-restore"></i>
                        Promotions
                    </a>
                </li><li>
                    <a href="people.php">
                        <i class="fas fa-users"></i>
                        People Say
                    </a>
                </li>
				<li>
                    <a href="user.php">
                        <i class="fas fa-user"></i>
                        New User
                    </a>
                </li>
				
				<li>
                    <a href="list.php">
                        <i class="fas fa-th"></i>
                        Customers List
                    </a>
                </li>
				<li>
                    <a href="admin.php">
                        <i class="fas fa-user"></i>
                        New Admin 
                    </a>
                </li>
				<li>
                    <a href="subscribers.php">
                        <i class="fas fa-users"></i>
                        Subscribers
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
                     <h2 class="main-title-w3layouts mb-2 text-center">Banner</h2>
            <!--// main-heading -->
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                       <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fas fa-spinner"></i>
                            </a>
                           <div class="dropdown-menu top-grid-scroll drop-2">
                                <h3 class="sub-title-w3-agileits">Shortcuts</h3>
                                <a href="../../index.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-chart-pie mr-3"></i>Home</h4>
                                </a>
                                <a href="../../index.php#about" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-connectdevelop mr-3"></i>About us</h4>
                                </a>
                                <a href="../../index.php#menu" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-tasks mr-3"></i>Menu</h4>
                                </a>
                                <a href="../../index.php#promo" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fab fa-superpowers mr-3"></i>Promotions</h4>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="images/profile.jpg" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
									<?php $username=$_SESSION['username'];
$result =  mysqli_query($conn," SELECT * FROM admin WHERE email='$username'") or die( mysqli_error($conn) );

$row = mysqli_fetch_array($result);
 ?>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits"><?php echo $row['name'] ?></h3>
                                        <a href="mailto:info@example.com"><?php echo $row['email'] ?></a>
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
          

            <!-- Cards content -->

              <div class="col-md-8">
				
   
      <form action="banner.php" method="post" enctype="multipart/form-data">
        
         <br>
         <div class="form-group">
            <label for="Content">Choose Image</label>
            <input type="file" class="form-control" id="image" name="image" required="">
            <p style="color: red;">* File Format Should be .jpeg, .jpg and size less than 1 MB</p>
         </div>
         <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> Reset
            </button>
         </div>
      </form>
	   <br> &nbsp;&nbsp;&nbsp;&nbsp;<a href="slider.php"><button class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i>Back To Slider </button></a>
	  </div>
  



  
      <div class="row">
         <div class="col-md-12">
		 <br><br><br>
		 <hr>
            <div class="card">
               <div class="card-header">
                  <strong class="card-title">Data Table</strong>
               </div>
               <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>Image</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $result1 = mysqli_query($conn," SELECT * FROM `banner` ORDER BY id DESC") or die( mysqli_error($conn) );
                           while ($row1 = mysqli_fetch_array($result1)) {
                           ?>
                        <tr>
						
                        	<td>
                        		<img style="width: 100px; height: 100px;" src="../../images/<?php echo $row1['img']; ?>">
                        	</td>
                           
                          
                           <td>
                              <?php  echo "<a class='img11 delete' data-confirm='Are you sure to delete this item?' href=delete.php?t=8&id=".$row1['id']."> <i class='fa fa-trash' style='font-size:24px; color:red;' title='Delete'></i></a><br>";?>

                             
                           </td>
                        </tr>
                        <?php  }
                           ?>
                     </tbody>
                  </table>
               </div>
            </div>
         
      </div>
  

                     
             

            <!--// Cards Header & Footer -->
           
            <!--// Cards Header & Footer -->

            <!--// Cards content -->

            <!-- Copyright -->
         
        </div>
    </div>
</div>
<script type="text/javascript">
  var deleteLinks = document.querySelectorAll('.delete');

for (var i = 0; i < deleteLinks.length; i++) {
  deleteLinks[i].addEventListener('click', function(event) {
    event.preventDefault();

    var choice = confirm(this.getAttribute('data-confirm'));

    if (choice) {
      window.location.href = this.getAttribute('href');
    }
  });
}
</script>
    <!-- Required common Js -->
    <script src='js/jquery-2.2.3.min.js'></script>
    <!-- //Required common Js -->

    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->

    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="js/bootstrap.min.js"></script>
    <!-- //Js for bootstrap working -->
<!--Dropdown Script Start-->
<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<!--Dropdown Script End-->
<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/lib/data-table/datatables-init.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
     $('#bootstrap-data-table-export').DataTable();
   } );
</script>
</body>

</html>