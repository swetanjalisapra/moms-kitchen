<?php include"header.php";?>
<?php 
include "../../connect.php";

$id=$_GET['id'];


  $results1 = mysqli_query($conn," SELECT * FROM `odd` where oid='$id'") or die( mysqli_error($conn) );
                         $row1 = mysqli_fetch_array($results1);
						 $uid=$row1['uid'];
						 $tid=$row1['tid'];
						 
  $result2 = mysqli_query($conn," SELECT * FROM `user` where id='$uid'") or die( mysqli_error($conn) );
                          $row2 = mysqli_fetch_array($result2); 
$unm=$row2['name'];
						  $result3 = mysqli_query($conn," SELECT * FROM `tour` where id='$tid'") or die( mysqli_error($conn) );
                          $row3 = mysqli_fetch_array($result3);
  $result4 = mysqli_query($conn," SELECT * FROM `billing` where oid='$id'") or die( mysqli_error($conn) );
                          $row4 = mysqli_fetch_array($result4);

?>

            <!--// top-bar -->

            <!-- main-heading -->
           
         
 <div class="row">
         <div class="col-md-12">
		 <br><br><br>
		 <hr>
		
		    <div class="card">
               <div class="card-header">
                  <strong class="card-title">Order Details </strong>
               </div>
               <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                     <thead>
                        <tr>
                           <th>Order ID</th>
						    <th><?php echo $id; ?></th>
						</tr>
						 <tr>
                           <th>User Name</th>
						   <th><a href="userdet.php?id=<?php echo $uid;?>" style="color:blue;"><?php echo $unm;?></a></th>
						</tr>
			 <tr>
                           <th>Tour Name</th>
						   <th><a href="../../tour.php?id=<?php echo $tid;?>" style="color:blue;"><?php echo $row3['name'];?></a></th>
						</tr>
			 <tr>
                           <th>Booking Date</th>
						    <th><?php echo $row1['bdt'];?></th>
						</tr>
			 <tr>
                           <th>Order Date</th>
						    <th><?php echo $row1['odt'];?></th>
						</tr>
						 <tr>
                           <th>Payment Date</th>
						  <th><?php echo $row1['pdt'];?></th>
						</tr>
		
						 <tr>
                           <th>Amount</th>
						  <th>Rs <?php echo $row1['amt'];?></th>
						</tr>
							 <tr>
                           <th>Coupon</th>
						    <th><?php echo $row1['coupon'];?></th>
						</tr>
			 <tr>
                           <th>Final Amount</th>
						   <th>Rs <?php echo $row1['famt'];?></th>
						</tr>
			 <tr>
                           <th>Status</th>
						   <th><?php if($row1['sts']==1){echo"Paid";}
						   else{ echo"Not Paid";}?></th>
						</tr>
			 <tr>
                           <th>Transaction No</th>
						  <th><?php echo $row1['txn'];?></th>
						</tr>
						
			
			 <tr>
                           <th>Payment Mode</th>
						    <th><?php echo $row1['mode'];?></th>
						</tr>
					<?php	if($row1['gstno']!=0){?>
				 <tr>
                           <th>GST Number</th>
						    <th><?php echo $row1['gstno'];?></th>
						</tr>
				 <tr>
                           <th>Company Name</th>
						    <th><?php echo $row1['gstnm'];?></th>
						</tr>
					<?php }?>
			
                          
						      
                      
						
                     </thead>

                  </table>
               </div>
            </div>
	
			<br><br><hr>
          
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