<?php 

include "../../connect.php";
include "header.php";
$id=$_GET['id'];

 $results3 =  mysqli_query($conn," SELECT * FROM tour where id='$id'") or die( mysqli_error($conn));
               $row3 = mysqli_fetch_assoc($results3);
if(isset($_POST['submit']))
{
 $name=mysqli_real_escape_string($conn, $_POST['name']);
 $ttype=mysqli_real_escape_string($conn, $_POST['ttype']);
	$dtype=mysqli_real_escape_string($conn, $_POST['dtype']);
	$price=mysqli_real_escape_string($conn, $_POST['price']);
	$discount=mysqli_real_escape_string($conn, $_POST['discount']);
	$time=mysqli_real_escape_string($conn, $_POST['time']);
	$plimit=mysqli_real_escape_string($conn, $_POST['plimit']);
	$stock=mysqli_real_escape_string($conn, $_POST['stock']);
//	$fimg=mysqli_real_escape_string($conn, $_POST['fimg']);
//	$image=mysqli_real_escape_string($conn, $_POST['image']);
	$det=mysqli_real_escape_string($conn, $_POST['det']);
	$tname=$_POST['tname'];
		$tcontent=$_POST['tcontent'];
		//$img=implode("^",$image); 
		$tnm=implode("^",$tname);
	$tdet=implode("^",$tcontent);
		
	//	$folder = "../images/darzee/".$id ;

 $fimg= $_FILES['fimg']['name'];
     if($fimg)
	 {
       $target = "../../images/tour/".basename($fimg);
	   
	   	    move_uploaded_file($_FILES['fimg']['tmp_name'],$target);
	   
	 }
     else {
		 $fimg=$row3['fimg'];
	 }
     
    //    move_uploaded_file($_FILES['image']['tmp_name'], $target);
		
		$j="";
	   if($_FILES["image"]["name"]){
	  for($i=0;$i< count($_FILES["image"]["name"]);$i++)
             {
			 $image1= $_FILES['image']['name'][$i];	 
				 if($image1){

	   $target1 = "../../images/tour/".basename($image1);
	       move_uploaded_file($_FILES['image']['tmp_name'][$i],$target1);
	//move_uploaded_file($_FILES['fileToUpload']['tmp_name'][$i], $target1);
	$j .= $image1."^";

 }
  
 
 }
	   }
	   else{
		   $j=$row3['img'];
	   }
		
	$query = "UPDATE tour set name='$name',mp='$price',dp='$discount',limi='$plimit',stock='$stock',time='$time',tcat='$ttype',ptitle='$tnm',pdesc='$tdet',fimg='$fimg',img='$j' ,lcat='$dtype',descrip='$det' where id='$id'"; 
					
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
  echo  "<script type='text/javascript'>alert('Uploaded successfully!');</script>";
   }
     else{
        echo "<script type='text/javascript'>alert('Failed to upload!');javascript:history.back();</script>";
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
				
   
     <form action="tour.php" method="post" enctype="multipart/form-data">
         <h3 style="text-align: center;">Tour Details</h3>
         <br>
         <div class="form-group">
            <label for="Content">Tour Name</label>
            <input type="text" class="form-control" id="paragraph" name="name" placeholder="Product Name" value="<?php echo $row3['name']; ?>" required="" readonly>
         </div>
		 <div class="form-group">
            <label for="select" class=" form-control-label">Tour Type</label>
            <select name="ttype" id="select" class="form-control" required="" readonly>
              <?php $g=$row3['tcat'];
$result5 = mysqli_query($conn," SELECT * FROM `tcategory` where name='$g'") or die( mysqli_error($conn) );
                           $row5 = mysqli_fetch_array($result5); 
						  ?>
               <option value="<?php echo $row5['name'];?>"> <?php echo $row5['name'];?></option>
              

            </select>
         </div>
		 <div class="form-group">
            <label for="select" class=" form-control-label">Destination Type</label>
            <select name="dtype" id="select" class="form-control" required="" readonly>
               <?php $g=$row3['lcat'];
$result5 = mysqli_query($conn," SELECT * FROM `dcategory` where name='$g'") or die( mysqli_error($conn) );
                           $row5 = mysqli_fetch_array($result5); 
						  ?>
               <option value="<?php echo $row5['name'];?>"> <?php echo $row5['name'];?></option>
             
  </select>
         </div>
         <div class="form-group">
            <label for="Heading">Tour Price</label>
            <input type="text" class="form-control" id="heading" name="price" placeholder="Product Price" value="<?php echo $row3['mp']; ?>" required="" readonly>
         </div>
         <div class="form-group">
            <label for="Heading">Tour Discount Price</label>
            <input type="text" class="form-control" id="heading" name="discount" placeholder="Discount Price"  value="<?php echo $row3['dp']; ?>"required="" readonly>
         </div>
          <div class="form-group">
            <label for="Heading">Tour Time</label>
            <input type="text" class="form-control" id="heading" name="time" placeholder="Tour Time" value="<?php echo $row3['time']; ?>" required="" readonly>
         </div><div class="form-group">
            <label for="Heading">Tour Person Limit</label>
            <input type="text" class="form-control" id="heading" name="plimit" placeholder="Tour Person Limit" value="<?php echo $row3['limi']; ?>" required="" readonly>
         </div>
		 <div class="form-group">
            <label for="Heading">Tour Stock</label>
            <input type="text" class="form-control" id="heading" name="stock" placeholder="Tour Stock" value="<?php echo $row3['stock']; ?>" required="" readonly>
         </div>
         
		  <div class="form-group">
            <label for="Content">Choose Front Image</label>
            <input type="file" class="form-control" id="image" name="fimg">
         </div>
         <div class="form-group">
            <label for="Content">Choose Multiple Image</label>
            <input type="file" class="form-control" id="image" name="image[]"  multiple="" >
         </div>
         <div class="form-group">
            <label for="Content">Product Detail</label>
            <textarea rows="5" class="form-control" name="det" readonly><?php echo $row3['descrip']; ?></textarea>
         </div>
		  <b><label for="Content">Itenaries</label></b><br><br>
		  <?php $t=explode("^",$row3['ptitle']);
		  $d=explode("^",$row3['pdesc']);
							$i=0;
							while($d[$i]){ ?>
<div>
 <label for="Content">Title</label><br>
   <input id="textinput" name="tname[]" type="text" placeholder=" "  value="<?php echo $t[$i];?> " class="form-control input-md" readonly>
   <br>
    <label for="Content">Detail</label>
            <textarea rows="5" class="form-control" placeholder="" name="tcontent[]" readonly><?php echo $d[$i];?> </textarea>
 <br>
 </div>
							<?php $i=$i+1;} ?>
 
   <div id="new_chq"></div>
 
  <br>
  <br>

  <input type="hidden" value="1" id="total_chq">


         <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> Go Back
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



// Call the closeModal function on the clicks/keyboard



</script>
<script type="text/javascript">
	function add(){
      var new_chq_no = parseInt($('#total_chq').val())+1;
      var new_input='<div id="new_'+new_chq_no+'"><label for="Content">Title</label><br> <input id="textinput" name="tname[]" type="text" placeholder="" class="form-control input-md" readonly> <br>  <label for="Content">Detail</label> <textarea rows="5" class="form-control" name="tcontent[]" readonly></textarea> <br></div>';
      $('#new_chq').append(new_input);
      $('#total_chq').val(new_chq_no)
    }
    function remove(){
      var last_chq_no = $('#total_chq').val();
      if(last_chq_no>1){
        $('#new_'+last_chq_no).remove();
        $('#total_chq').val(last_chq_no-1);
      }
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