<?php include"header.php";?>
<?php 
include "../../connect.php";

if(isset($_POST['submit']))
{
	
	$image= $_FILES['image']['name'];
     
       $target = "../../images/".basename($image);
    
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
      
	$nm=mysqli_real_escape_string($conn, $_POST['name']);
	
	$sy=mysqli_real_escape_string($conn, $_POST['dec']);
	$query = "INSERT INTO menu (name,img,say) 
					  VALUES('$nm','$image','$sy')";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Uploaded successfully!');</script>";
   }
     else{
          echo "<script type='text/javascript'>alert('Failed to upload!');javascript:history.back();</script>";
        } 
      
	
	
}





?>


            <!-- main-heading -->
           
            <!--// main-heading -->   <div class="col-md-8 ">
<form style="align-content:center;"  action="menu.php" method="post" enctype="multipart/form-data" >
       
         <br>
       
         <div class="form-group">
            <label for="heading">Name</label>
            <input type="text" class="form-control" id="heading" name="name" placeholder="Enter Name" required="">
         </div>
       <div class="form-group">
            <label for="Content">Choose Image</label>
            <input type="file" class="form-control" id="fileToUpload" name="image" required="" >
            <br>
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
						    <th>Image</th>
							
                           <th>Description</th>
						     <th>Action</th>
						      
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $result1 = mysqli_query($conn," SELECT * FROM `menu`") or die( mysqli_error($conn) );
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
                        		<img style="width: 80px; height: 80px;" src="../../images/<?php echo $row1['img']; ?>">
                        	</td>
							
                             <td>
                              <?php echo "<p>".$row1['say']."</p>"; ?>
                           </td>
                          
                           <td>
                              <?php  echo "<a class='img11 delete' data-confirm='Are you sure to delete this item?' href=delete.php?t=2&id=".$row1['id']."> <i class='fa fa-trash' style='font-size:24px; color:red;' title='Delete'></i></a><br>";?>

                               <?php  echo "<a class='img11'  href=menu-edit.php?id=".$row1['id']."> <i class='fa fa-edit' style='font-size:24px; color:green;' title='Edit'></i></a><br>";?>
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