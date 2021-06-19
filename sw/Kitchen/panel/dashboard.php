<?php include"header.php";
$a=$row['active'];
?>
            <!-- Cards content -->
            <section class="cards-section">
                <div class="container-fluid">
   <div class="row">
   
   <?php if($a==1){?>
      <a href="#">
         <div class="col-md-3 col-sm-6">
            <div class="box1">
               <img src="images/tick.jpg" style="height:200px; width:200px;">
			   <br><br>
               <div class="box-content">
                  <div class="inner-content">
                     <h3 class="title">Active</h3>
                     <span class="post"><a href="active.php?t=0" style="color:blue;">Click Here To Deactivate</a></span>
                  </div>
                  <ul class="icon">
                     <!-- <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li> -->
                  </ul>
               </div>
            </div>
         </div>
      </a>
   <?php }
   else{ ?>
       <a href="#">
         <div class="col-md-3 col-sm-6">
            <div class="box1">
               <img src="images/cross.jpg"  style="height:200px; width:200px;">
			   <br> <br> 
               <div class="box-content">
                  <div class="inner-content">
                     <h3 class="title">Not Active</h3>
                     <span class="post"><a href="active.php?t=1" style="color:blue;">Click Here To Activate</a></span>
                  </div>
                  <ul class="icon">
                     <!-- <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li> -->
                  </ul>
               </div>
            </div>
         </div>
      </a>
   <?php }?>
	  
     
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