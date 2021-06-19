<?php include"header.php";?>
<?php 
include "../../connect.php";

$id=$_GET['id'];


  $resultss = mysqli_query($conn," SELECT * FROM `user` where id='$id'") or die( mysqli_error($conn) );
                         $rows = mysqli_fetch_array($resultss);


?>

            <!--// top-bar -->

            <!-- main-heading -->
           
         
 <div class="row">
         <div class="col-md-12">
		 <br><br><br>
		 <hr>
		    <div class="card">
               <div class="card-header">
                  <strong class="card-title">User Detail</strong>
               </div>
               <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                     <thead>
                        <tr>
				
                           <th>User Name</th>
						    <th><?php echo $rows['name']; ?></th>
			
                           
						      
                        </tr>
						 <tr>
				
                           <th>User Email</th>
						    <th><?php echo $rows['email']; ?></th>
			
                           
						      
                        </tr>
						 <tr>
				
                           <th>User Phno</th>
						    <th><?php echo $rows['phno']; ?></th>
			
                           
						      
                        </tr>
                     </thead>

                  </table>
               </div>
            </div>
			<br><br><hr>
            <div class="card">
               <div class="card-header">
                  <strong class="card-title">User Bookings</strong>
               </div>
                   <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                     <thead>
                        <tr>
						 <th>Booking ID</th>
                           <th>Order ID</th>
						    <th>Booking Date</th>
						  
							<th>Tour Name</th><th>No. of guest</th><th>Amount</th><th>Coupon</th><th>Payment</th><th>Traveller Details</th>
							
                           
						      
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $result1 = mysqli_query($conn," SELECT * FROM `booking` where uid='$id' and sts!=2") or die( mysqli_error($conn) );
                           while ($row1 = mysqli_fetch_array($result1)) {
							  
							   $tid=$row1['tid'];
							   
							   
							    $result3 = mysqli_query($conn," SELECT * FROM `tour` where id='$tid'") or die( mysqli_error($conn) );
                        $row3 = mysqli_fetch_array($result3);
							   
							   
							   
							   
                           ?>
                        <tr>
						<td>
                              <?php echo "<p>".$row1['bid']."</p>"; ?>
                           </td>
						    <td>
                              <?php echo "<p><a href='orderdet.php?id=".$row1['oid']."' style='color:blue;'>".$row1['oid']."</a></p>"; ?>
                           </td>
						    <td>
                              <?php echo "<p>".$row1['bdt']."</p>"; ?>
                           </td>
						   
						  <td>
                              <?php echo "<p><a href='../../tour.php?id=".$row3['id']."' style='color:blue;'>".$row3['name']."</a></p>"; ?>
                           </td>
						  
                        	
							
						    <td>
                              <?php echo "<p>".$row1['g']." guests</p>"; ?>
                           </td> 
						   <td>
                              <?php 
if($row1['amt']==$row1['famt'])
{
	echo "Rs "; echo $row1['amt'];
}
else
{ ?>
	Rs <strike><?php echo $row1['amt'];?></strike> <?php echo $row1['famt'];?> <?php 
	}


							  ?>
                       </td> 
						   <td>
                              <?php echo "<p>".$row1['coupon']."</p>"; ?>
                           </td>
                             <td><p>
                              <?php 
if($row1['mode']=='online')
{
	echo "Paid (Online)";
}
else
{ ?>
	COD Mode
<?php	}


							  ?>
                         </p>  </td>








						 
                          <td>
                             

                               <?php  echo "<a class='img11'  href=traveldet.php?id=".$row1['oid']."> <i class='fa fa-edit' style='font-size:24px; color:green;' title='Edit'></i></a><br>";?>
                           </td>
                          
                        </tr>
                        <?php  }
                           ?>
                     </tbody>
                  </table>
               </div>
            </div>
			<br>
			 
	
         
      </div>
  
            <!--// Cards Header & Footer -->
           
            <!--// Cards Header & Footer -->

            <!--// Cards content -->

      
            <!--// Copyright -->
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