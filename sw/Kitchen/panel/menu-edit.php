<?php 
include "../../connect.php";
include "header.php";
$hid=$row['id'];
$id=$_GET['id'];

if(isset($_POST['submit']))
{
	$nm=mysqli_real_escape_string($conn, $_POST['name']);
	$des=mysqli_real_escape_string($conn, $_POST['des']);
	$op=mysqli_real_escape_string($conn, $_POST['op']);
	$hp=mysqli_real_escape_string($conn, $_POST['hp']);

$mp=round($hp+(($hp*3)/10));
$dp=round($hp+($hp/4));
if($op<=$hp)
{
$query = "UPDATE food set name='$nm',op='$op',hp='$hp',mp='$mp',dp='$dp',descrip='$des' where id='$id' and hid='$hid'";
	
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
				
 <?php  $result1 = mysqli_query($conn," SELECT * FROM `food` where id='$id' and hid='$hid'") or die( mysqli_error($conn) );
                           $row1 = mysqli_fetch_array($result1);
							   ?>
      <form action="menu-edit.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data" >
       <h1>Add Menu Item</h1>
         <br>
         <div class="form-group">
            <label for="heading">Item Name</label>
			
           <br> <input type="text" class="form-control" id="heading" name="name" placeholder="Name..." required="" value="<?php echo $row1['name'];?>">
		  
		    <label for="heading">Item Original Price</label>
			
           <br> <input type="number" class="form-control" id="heading" name="op" placeholder="In RS..." required=""  value="<?php echo $row1['op'];?>">
		    <label for="heading">Item Actual Price</label>
			
           <br> <input type="number" class="form-control" id="heading" name="hp" placeholder="In RS..." required=""  value="<?php echo $row1['hp'];?>" >
		  
		  Description<br>
		    <textarea type="text" rows="5" class="form-control" id="description" name="des" placeholder="Description..."  required=""> <?php echo $row1['descrip'];?></textarea>
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