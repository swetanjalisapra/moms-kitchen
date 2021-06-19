<?php include"header.php";?>
<?php 
include "../../connect.php";
$id=$row['id'];
if(isset($_POST['submit']))
{
	
	$image= $_FILES['image']['name'];
     
       $target = "../../images/blog/".basename($image);
    
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
      
	$nm=mysqli_real_escape_string($conn, $_POST['name']);
	 date_default_timezone_set('Asia/Kolkata');
  $dt= date('Y-m-d H:i:s');

	$pby=mysqli_real_escape_string($conn, $_POST['pby']);
	$l=mysqli_real_escape_string($conn, $_POST['likes']);
		$dec=mysqli_real_escape_string($conn, $_POST['dec']);
	$query = "INSERT INTO blog (title,img,dt,pby,decrip,likes) 
					  VALUES('$nm','$image','$dt','$pby','$dec','$l')";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Uploaded successfully!');</script>";
   }
     else{
          echo "<script type='text/javascript'>alert('Failed to upload!');javascript:history.back();</script>";
        } 
      
	
	
}

date_default_timezone_set('Asia/Kolkata'); 
$dt=date("Y-m-d"); 


?>

            <!--// top-bar -->

            <!-- main-heading -->
           
            <!--// main-heading -   <div class="col-md-8 ">
<form style="align-content:center;"  action="blog.php" method="post" enctype="multipart/form-data" >
       
         <br>
       
         <div class="form-group">
            <label for="heading">Title</label>
            <input type="text" class="form-control" id="heading" name="name" placeholder="Enter Name" required="">
         </div>
       <div class="form-group">
            <label for="Content">Choose Image</label>
            <input type="file" class="form-control" id="fileToUpload" name="image" required="" >
            <br>
         </div>
		
		   <div class="form-group">
            <label for="heading">Posted By</label>
            <input type="text" class="form-control" id="heading" name="pby" placeholder="Enter Posted by" required="">
         </div>
		 <div class="form-group">
            <label for="heading">Likes</label>
            <input type="text" class="form-control" id="heading" name="likes" placeholder="Enter Total Likes" required="">
         </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" rows="5" class="form-control" id="description" name="dec" placeholder="Description..."></textarea>
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
	  </div>-->
            
 <div class="row">
         <div class="col-md-12">
		 <br><br><br>
		 <hr>
            <div class="card">
               <div class="card-header">
                  <strong class="card-title">All Orders</strong>
               </div>
               <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                     <thead>
                        <tr>
						 <th>Order ID</th>
						 <th>User Name</th>
	                    <th>User Phno</th>
						  <th>Address</th>
							 <th>Kitchen Name</th>
	                    <th>Chef Name</th>
						 <th>Chef Phno</th>
						  <th>Kitchen Address</th>
							 <th>Date/Time</th>
						
	                   	<th>Action/Status</th>
													
					     
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $result3 = mysqli_query($conn,"SELECT * FROM odeli where did='$id' and date<'$dt' ORDER BY ID DESC ") or die( mysqli_error($conn) );
                           while ($row3 = mysqli_fetch_array($result3)) {
							   
							   $oid=$row3['oid'];
							    $result1 =  mysqli_query($conn," SELECT * FROM `orders` WHERE oid='$oid' ORDER BY ID DESC  ") or die( mysqli_error($conn) );
                          $row1 = mysqli_fetch_array($result1);
						  $hid=$row1['hid'];
						
							     $result2 = mysqli_query($conn," SELECT * FROM `home` where id='$hid'") or die( mysqli_error($conn) );
                       $row2 = mysqli_fetch_array($result2);
							    
                           ?>
                        <tr>
						<td>
                              <?php echo "<p>".$row1['oid']."</p>"; ?>
                           </td>
						  
						   <td>
                              <?php echo "<p>".$row1['name']."</p>"; ?>
                           </td>
						    <td>
                              <?php echo "<p>".$row1['phno']."</p>"; ?>
                           </td>
						    <td>
                              <?php echo "<p>".$row1['address']."</p>"; ?>
                           </td>
						    <td>
                              <?php echo "<p>".$row2['name']."</p>"; ?>
                           </td>
						    <td>
                              <?php echo "<p>".$row2['cname']."</p>"; ?>
                           </td>
						    <td>
                              <?php echo "<p>".$row2['phno']."</p>"; ?>
                           </td>
						    <td>
                              <?php echo "<p>".$row2['address']."</p>"; ?>
                           </td>
						      <td>
                              <?php echo "<p>".$row1['date']."<br>".$row1['time']."</p>"; ?>
                           </td> 

						
						 <td>  
						   <p><?php if($row1['stts']==1){ ?>
							   Waiting For Approval
                           						
							  <?php }
							  elseif($row1['stts']==2){ ?>
	Be Ready At the Kitchen !!
							  <?php }
							  else if($row1['stts']==3){ ?>
Delivered
							  <?php }
							  else if($row1['stts']==4){ ?>
Refunded
							  <?php }

							  ?>
                        		
                        	</p></td>
                         
                            
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
<script>
		$(document).ready(function(){
  var show_btn=$('.show-modal');
  var show_btn=$('.show-modal');
  //$("#testmodal").modal('show');
  
    show_btn.click(function(){
      $("#testmodal").modal('show');
  })
});

$(function() {
        $('#element').on('click', function( e ) {
            Custombox.open({
                target: '#testmodal-1',
                effect: 'fadein'
            });
            e.preventDefault();
        });
    });
	
	function abc(id)
	{ 	$("#testmodal"+id).modal('show');
		
	}
		</script>
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
</html>