<?php include"header.php";?>
<?php 
include "../../connect.php";

$id=$_GET['id'];
if(isset($_POST['submit']))
{
	
	$image= $_FILES['image']['name'];
     
     
	$nm=mysqli_real_escape_string($conn, $_POST['name']);
	//$str=mysqli_real_escape_string($conn, $_POST['str']);
	$sy=mysqli_real_escape_string($conn, $_POST['dec']);
	if($image)
	{   $target = "../../images/".basename($image);
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
	$query = "UPDATE people set name='$nm',img='$image',say='$sy' where id='$id'";
	
	}
	else{
		$query = "UPDATE people set name='$nm',say='$sy' where id='$id'";
	}

		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Uploaded successfully!');javascript:history.back();</script>";
	
   }
     else{
          echo "<script type='text/javascript'>alert('Failed to upload!');javascript:history.back();</script>";
        } 
      
	
	
}





?>

            <!--// top-bar -->

            <!-- main-heading -->
           
            <!--// main-heading -->   <div class="col-md-8 ">
<form style="align-content:center;"  action="people-edit.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" >
       
         <br>
        <?php   $result2 =  mysqli_query($conn," SELECT * FROM people WHERE id='$id'") or die( mysqli_error($conn) );

$row2 = mysqli_fetch_array($result2);

$i=$row2['img']; ?>
         <div class="form-group">
            <label for="heading">Name</label>
            <input type="text" class="form-control" id="heading" name="name" placeholder="Enter Name" required="" value="<?php echo $row2['name'];?>">
         </div>
       <div class="form-group">
            <label for="Content">Choose Image</label>
            <input type="file" class="form-control" id="fileToUpload" name="image" >
            <br>
         </div>
		 <div>
			<img src="../../images/<?php echo $i; ?>" height="100px" width="100px">
			</div>
			 <input type="text" class="form-control" value="<?php echo $i; ?>" disabled="">
			 
        <div class="form-group">
            <label for="description">Description</label>
            <textarea type="text" rows="5" class="form-control" id="description" name="dec" placeholder="Description..."><?php echo $row2['say'];?></textarea>
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