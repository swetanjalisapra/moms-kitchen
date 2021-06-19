<?php include"header.php";?>
            <!-- Cards content -->
            <section class="cards-section">
                <div class="container-fluid">
   <div class="row">
      <a href="slider.php">
         <div class="col-md-3 col-sm-6">
            <div class="box1">
               <img src="images/images.jpg">
               <div class="box-content">
                  <div class="inner-content">
                     <h3 class="title">Slider</h3>
                     <span class="post"></span>
                  </div>
                  <ul class="icon">
                     <!-- <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li> -->
                  </ul>
               </div>
            </div>
         </div>
      </a>
      <a href="menu.php">
         <div class="col-md-3 col-sm-6">
            <div class="box1">
               <img src="images/images.jpg">
               <div class="box-content">
                  <div class="inner-content">
                     <h3 class="title">Menu</h3>
                     <span class="post"></span>
                  </div>
                  <ul class="icon">
                     <!-- <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li> -->
                  </ul>
               </div>
            </div>
         </div>
      </a>
      <a href="gallery.php">
         <div class="col-md-3 col-sm-6">
            <div class="box1">
               <img src="images/images.jpg">
               <div class="box-content">
                  <div class="inner-content1">
                     <h3 class="title">Gallery</h3>
                     <span class="post"></span>
                  </div>
                  <ul class="icon">
                     <!-- <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li> -->
                  </ul>
               </div>
            </div>
         </div>
      </a>
	  <a href="people.php">
         <div class="col-md-3 col-sm-6">
            <div class="box1">
               <img src="images/images.jpg">
               <div class="box-content">
                  <div class="inner-content1">
                     <h3 class="title">People Say</h3>
                     <span class="post"></span>
                  </div>
                  <ul class="icon">
                     <!--  <li><i class="fa fa-search"></i></li>
                        <li><i class="fa fa-link"></i></li> -->
                  </ul>
               </div>
            </div>
         </div>
      </a>
	  </div>
	  <div class="row">
     
	   
	   <a href="user.php">
         <div class="col-md-3 col-sm-6">
            <div class="box1">
               <img src="images/images.jpg">
               <div class="box-content">
                  <div class="inner-content1">
                     <h3 class="title">New User</h3>
                     <span class="post"></span>
                  </div>
                  <ul class="icon">
                     <!--  <li><i class="fa fa-search"></i></li>
                        <li><i class="fa fa-link"></i></li> -->
                  </ul>
               </div>
            </div>
         </div>
      </a>
	 
	  <a href="list.php">
         <div class="col-md-3 col-sm-6">
            <div class="box1">
               <img src="images/images.jpg">
               <div class="box-content">
                  <div class="inner-content1">
                     <h3 class="title">Customers list</h3>
                     <span class="post"></span>
                  </div>
                  <ul class="icon">
                     <!--  <li><i class="fa fa-search"></i></li>
                        <li><i class="fa fa-link"></i></li> -->
                  </ul>
               </div>
            </div>
         </div>
      </a>
	    <a href="admin.php">
         <div class="col-md-3 col-sm-6">
            <div class="box1">
               <img src="images/images.jpg">
               <div class="box-content">
                  <div class="inner-content1">
                     <h3 class="title">New Admin</h3>
                     <span class="post"></span>
                  </div>
                  <ul class="icon">
                     <!--  <li><i class="fa fa-search"></i></li>
                        <li><i class="fa fa-link"></i></li> -->
                  </ul>
               </div>
            </div>
         </div>
      </a>
   </div>

            </section>

            <!--// Cards Header & Footer -->
           
            <!--// Cards Header & Footer -->

            <!--// Cards content -->

            <!-- Copyright -->
           
            <!--// Copyright -->
        </div>
    </div>


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

</body>

</html>