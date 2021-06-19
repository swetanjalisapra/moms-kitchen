<?php 
include "../../connect.php";
include "header.php";
$id=$row['id'];

if(isset($_POST['submit']))
{
	$nm=mysqli_real_escape_string($conn, $_POST['name']);
	$des=mysqli_real_escape_string($conn, $_POST['des']);
	$op=mysqli_real_escape_string($conn, $_POST['op']);
	$hp=mysqli_real_escape_string($conn, $_POST['hp']);

$mp=round($hp+(($hp*3)/10));
$dp=round($hp+($hp/4));

//echo $nm;
if($op<=$hp)
{	$query = "INSERT INTO food (name,op,hp,mp,dp,hid,descrip) 
					  VALUES('$nm','$op','$hp','$mp','$dp','$id','$des')";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Uploaded successfully!');</script>";
   }
     else{
          echo "<script type='text/javascript'>alert('Failed to upload!');javascript:history.back();</script>";
        } 
      
}
else{
 echo "<script type='text/javascript'>alert('Original Price cannnot be greater than Actual Price !!');javascript:history.back();</script>";	
	
}
	
}





?>


<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
       

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
           
            <!--// top-bar -->

            <!-- main-heading -->
            

            <!-- Cards content -->

              <div class="col-md-8">
				
   
      <form action="menu.php" method="post" enctype="multipart/form-data" >
       <h1>Add Menu Item</h1>
         <br>
         <div class="form-group">
            <label for="heading">Item Name</label>
			
           <br> <input type="text" class="form-control" id="heading" name="name" placeholder="Name..." required="">
		  
		    <label for="heading">Item Original Price</label>
			
           <br> <input type="number" class="form-control" id="heading" name="op" placeholder="In RS..." required="">
		    <label for="heading">Item Actual Price</label>
			
           <br> <input type="number" class="form-control" id="heading" name="hp" placeholder="In RS..." required="">
		  
		  Description<br>
		    <textarea type="text" rows="5" class="form-control" id="description" name="des" placeholder="Description..."  required=""></textarea>
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
                  <strong class="card-title">All Menu Items</strong>
               </div>
               <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                     <thead>
                        <tr>
						 <th>ID</th>
                             <th>Name</th><th>Original Price</th><th>Actual Price</th><th>Description</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $result1 = mysqli_query($conn," SELECT * FROM `food` where hid='$id'") or die( mysqli_error($conn) );
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
                        		<?php echo "<p> Rs ".$row1['op']."</p>"; ?>
                        	</td> <td>
                        		<?php echo "<p> Rs ".$row1['hp']."</p>"; ?>
                        	</td> 
							
							
                           <td>
                        		<?php echo "<p>".$row1['descrip']."</p>"; ?>
                        	</td>
                          
                           <td>
                              <?php  echo "<a class='img11 delete' data-confirm='Are you sure to delete this item?' href=delete.php?t=0&id=".$row1['id']."> <i class='fa fa-trash' style='font-size:24px; color:red;' title='Delete'></i></a><br>";?>

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