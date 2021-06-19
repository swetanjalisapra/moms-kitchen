<?php include"header.php";?>
<?php 
include "../../connect.php";

$id=$_GET['id'];
if(isset($_POST['submit']))
{
	$nm=mysqli_real_escape_string($conn, $_POST['name']);
	$em=mysqli_real_escape_string($conn, $_POST['email']);
	$p=mysqli_real_escape_string($conn, $_POST['password']);
	$cp=mysqli_real_escape_string($conn, $_POST['cpassword']);
	if($p==$cp){
		
		$result5 =  mysqli_query($conn," SELECT * FROM admin WHERE email='$em'") or die( mysqli_error($conn) );

  			if (mysqli_num_rows($result5) == 0||mysqli_num_rows($result5) == 1) 
			{  
	$query = "UPDATE admin set name='$nm',email='$em',password='$p' where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Uploaded successfully!');javascript:history.back();</script>";
	
   }
     else{
          echo "<script type='text/javascript'>alert('Failed to upload!');javascript:history.back();</script>";
        } 
      }
	  else{
				echo "<script type='text/javascript'>
			alert('Already Registerd');
			window.location.href='admin.php';
			</script>";
	
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
				
   
      <form action="admin-edit.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" >
       
         <br>
		<?php  $result1 =  mysqli_query($conn," SELECT * FROM admin WHERE id='$id'") or die( mysqli_error($conn) );

$row1 = mysqli_fetch_array($result1); ?>

         <div class="form-group">
            <label for="heading">Admin Name</label>
			
           <br> <input type="text" class="form-control" id="heading" name="name" placeholder="Name..." required="" value="<?php echo $row1['name']; ?>">
		   <label for="heading">Admin Email</label>
			
           <br> <input type="email" class="form-control" id="heading" name="email" placeholder="Email..." required="" value="<?php echo $row1['email']; ?>">
		   <label for="heading">Enter Password</label>
			
           <br> <input type="password" class="form-control" id="heading" name="password" placeholder="Password..." required="" value="<?php echo $row1['password']; ?>">
		   <label for="heading">Confirm Password</label>
			
           <br> <input type="password" class="form-control" id="heading" name="cpassword" placeholder="Confirm Password..." required="" value="<?php echo $row1['password']; ?>">
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