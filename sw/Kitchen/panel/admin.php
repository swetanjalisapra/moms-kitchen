<?php include"header.php";?>
<?php 
include "../../connect.php";

if(isset($_POST['submit']))
{
	 $em=$row['email'];
	$p=mysqli_real_escape_string($conn, $_POST['password']);
	$cp=mysqli_real_escape_string($conn, $_POST['cpassword']);
	if($p==$cp){
		$query = "UPDATE home set pass='$p' where email='$em'";
		       $sql=mysqli_query($conn, $query);
	        if($sql==true){
				
               echo  "<script type='text/javascript'>alert('Updated successfully!');javascript:history.back();</script>";
			  // echo $query;
                    }
               else{
                  echo "<script type='text/javascript'>alert('Failed to upload!');javascript:history.back();</script>";
                  } 
             }
	    
	

	 else{
	         echo  "<script type='text/javascript'>alert('Password Doesnt matched !!');</script>"; 
				  }
	
	
}





?>

            <!-- main-heading -->
            

            <!-- Cards content -->

              <div class="col-md-8">
				
   
      <form action="admin.php" method="post" enctype="multipart/form-data" >
       
         <br>
         <div class="form-group">
            <label for="heading"><b>Change Password</b></label>
			<br><br>
         
		   <label for="heading">Enter Password</label>
			
           <br> <input type="password" class="form-control" id="heading" name="password" placeholder="Password..." required="">
		   <label for="heading">Confirm Password</label>
			
           <br> <input type="password" class="form-control" id="heading" name="cpassword" placeholder="Confirm Password..." required="">
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