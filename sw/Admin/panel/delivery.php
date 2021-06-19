<?php include"header.php";?>
<?php 
include "../../connect.php";

if(isset($_POST['submit']))
{
	$nm=mysqli_real_escape_string($conn, $_POST['name']);
	$em=mysqli_real_escape_string($conn, $_POST['email']);
	$adno=mysqli_real_escape_string($conn, $_POST['adno']);
	$phno=mysqli_real_escape_string($conn, $_POST['phno']);
	$aphno=mysqli_real_escape_string($conn, $_POST['aphno']);
	$add=mysqli_real_escape_string($conn, $_POST['add']);



		$result5 =  mysqli_query($conn," SELECT * FROM delivery WHERE email='$em' or adno='$adno'") or die( mysqli_error($conn) );

  			if (mysqli_num_rows($result5) == 0) 
			{   	$query = "INSERT INTO delivery (name,adno,email,phno,aphno,address,pass) 
					  VALUES('$nm','$adno','$em','$phno','$aphno','$add','0')";
		       $sql=mysqli_query($conn, $query);
	        if($sql==true){
               echo  "<script type='text/javascript'>alert('Uploaded successfully !!');</script>";
                    }
               else{
                  echo "<script type='text/javascript'>alert('Failed to upload !!');javascript:history.back();</script>";
                  } 
             }
	     else{
				echo "<script type='text/javascript'>
			alert('Already Registerd');
			window.location.href='delivery.php';
			</script>";
	
	         }
	

	
	
	
}





?>

            <!-- main-heading -->
            

            <!-- Cards content -->

              <div class="col-md-8">
				
   
      <form action="delivery.php" method="post" enctype="multipart/form-data" >
       
         <br>
         <div class="form-group">
            <label for="heading">Delivery Person Name</label>
			
           <br> <input type="text" class="form-control" id="heading" name="name" placeholder="Name..." required="">
		    <label for="heading">Aadhar No</label>
			
           <br> <input type="text" class="form-control" id="heading" name="adno" placeholder="12 Digit Aadhar No..." required="" maxlength="12">
		   <label for="heading"> Email</label>
			
           <br> <input type="email" class="form-control" id="heading" name="email" placeholder="Email..." required="" >
		    <label for="heading">Phno</label>
			
           <br> <input type="text" class="form-control" id="heading" name="phno" placeholder="Phno..." required="" maxlength="10">
		     
		   <label for="heading">Alternate Phno</label>
			
           <br> <input type="text" class="form-control" id="heading" name="aphno" placeholder="Alternate Phno..." required="" maxlength="10">
		   <label for="heading">Address</label>
			<br>
		    <textarea type="text" rows="5" class="form-control" id="description" name="add" placeholder="Address as per aadhar card..."  required=""></textarea>
         
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
						 <th>ID</th>
                           <th>Name</th>
						       <th>Aadhar No</th>
						    <th>Email</th>
							<th>Phno</th><th>Alternate Phno</th>
							<th>Address</th>
							 <th>Password</th><th>Active</th>
                           <th>Action</th>
                        </tr> 
                     </thead>
                     <tbody>
                        <?php 
                           $result1 = mysqli_query($conn," SELECT * FROM `delivery`") or die( mysqli_error($conn) );
                           while ($row1 = mysqli_fetch_array($result1)) {
                           ?>
                        <tr>
						<td>
                              <?php echo "<p>".$row1['id']."</p>"; ?>
                           </td>
                        	<td>
                        		<?php echo "<p>".$row1['name']."</p>"; ?>
                        	</td>
							<td>
                        		<?php echo "<p>".$row1['adno']."</p>"; ?>
                        	</td>
                           <td>
                        		<?php echo "<p>".$row1['email']."</p>"; ?>
                        	</td><td>
                        		<?php echo "<p>".$row1['phno']."</p>"; ?>
                        	</td><td>
                        		<?php echo "<p>".$row1['aphno']."</p>"; ?>
                        	</td>
							<td>
                        		<?php echo "<p>".$row1['address']."</p>"; ?>
                        	</td>
							
							<td>
                        		<?php
                                  if($row1['pass']==0)
								  {
									  echo"<p>Not set</p>";
								  }
								  else
								  {
									  echo "<p>".$row1['pass']."</p>";
								  }

								 ?>
                        	</td>
                          <td><p>
                              <?php  
							  if($row1['active']== 1)
							  {
							  echo "Active"; 
							
							  }
							  else{ 
								  echo "--"; 
							 }?>
                          </p> </td>
                           <td>
                              <?php  echo "<a class='img11 delete' data-confirm='Are you sure to delete ?' href=delete.php?t=7&id=".$row1['id']."> <i class='fa fa-trash' style='font-size:24px; color:red;' title='Delete'></i></a><br>";?>

                               <?php  echo "<a class='img11'  href=delivery-edit.php?id=".$row1['id']."> <i class='fa fa-edit' style='font-size:24px; color:green;' title='Edit'></i></a><br>";?>
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

           
            <!--// Copyright -->
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