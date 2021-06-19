<?php include"header.php";?>
<?php 
include "../../connect.php";







?>

            <!--// top-bar -->

            <!-- main-heading -->
           
          <div class="card-footer">
           <a href="addtour.php"> <button type="submit" name="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i>+ Add Tour</a>
		
         </div>
 <div class="row">
 
         <div class="col-md-12">
		  
		
		
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
						    <th>Category</th>
							<th>Destination</th>
							<th>Price</th>
							<th>Stock</th><th>Front Image</th><th>Active</th><th>Trending</th><th>Special</th><th>Edit</th><th>Details</th><th>Reviews</th>
						   </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $result1 = mysqli_query($conn," SELECT * FROM `tour`") or die( mysqli_error($conn) );
                           while ($row1 = mysqli_fetch_array($result1)) {
							   $id=$row1['id'];8
                           ?>
                        <tr>
						<td>
                              <?php echo "<p>".$row1['id']."</p>"; ?>
                           </td>
						   <td>
                              <?php echo "<p>".$row1['name']."</p>"; ?>
                           </td>
                        	
							 <td>
                              <?php echo "<p>".$row1['tcat']."</p>"; ?>
                           </td>
						    <td>
                              <?php echo "<p>".$row1['lcat']."</p>"; ?>
                           </td> 
						    <td>
                            <p><strike>Rs <?php echo  $row1['mp']; ?></strike> <?php echo  $row1['dp']; ?></p>  
                           </td>
						    <td>
                              <?php echo "<p>".$row1['stock']."</p>"; ?>
                           </td> 
						   <td>
                            <img style="width: 80px; height: 80px;" src="../../images/tour/<?php echo $row1['fimg']; ?>">
                           </td> 
						   <td>
                            <?php 
							// $result4 =  mysqli_query($conn," SELECT * FROM tour WHERE id='$id'") or die( mysqli_error($conn) );
							if ($row1['active']==1)
			{ ?>
	   Active ( <b><a href="tremove.php?id=<?php echo $id;?>&f=1&x=a" style="color:blue;">Remove</a></b> )
			<?php }
			else { ?>
			 Disabled ( <b><a href="tremove.php?id=<?php echo $id;?>&f=0&x=a" style="color:blue;">Make It</a></b> )
			<?php }?>
                           </td> 
						   <td>
                            <?php 
							 $result3 =  mysqli_query($conn," SELECT * FROM ads WHERE id='$id'") or die( mysqli_error($conn) );
							if (mysqli_num_rows($result3) == 1)
			{ ?>
		 Trending ( <b><a href="tremove.php?id=<?php echo $id;?>&f=1&x=t" style="color:blue;">Remove</a></b> )
			<?php }
			else { ?>
			 No( <b><a href="tremove.php?id=<?php echo $id;?>&f=0&x=t" style="color:blue;">Make It</a></b> )
			<?php }?>
                           </td> 
						      <td>
                            <?php 
							 $result3 =  mysqli_query($conn," SELECT * FROM spcl WHERE id='$id'") or die( mysqli_error($conn) );
							if (mysqli_num_rows($result3) == 1)
			{ ?>
		 Special ( <b><a href="tremove.php?id=<?php echo $id;?>&f=1&x=s" style="color:blue;">Remove</a></b> )
			<?php }
			else { ?>
			 No( <b><a href="tremove.php?id=<?php echo $id;?>&f=0&x=s" style="color:blue;">Make It</a></b> )
			<?php }?>
                           </td> 
						   <td>
                            <?php  $s=$row1['id'];
							echo "<a class='img11'  href=tour-edit.php?id=".$s."> <i class='fa fa-edit' style='font-size:24px; color:green;' title='Edit'></i></a><br>";?>
                       </td> 
                             <td>
                            <?php  $s=$row1['id'];
							echo "<a class='img11'  href=../../tour.php?id=".$s."> <i class='fa fa-eye' style='font-size:24px; color:green;' title='Edit'></i></a><br>";?>
                       </td> 
					    <td>
                            <?php  $s=$row1['id'];
							echo "<a class='img11'  href=reviews.php?id=".$s."> <i class='fa fa-user' style='font-size:24px; color:green;' title='Edit'></i></a><br>";?>
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

function ads(id){
		 if (document.getElementById('ch').checked) 
  {   var f=1;

window.location.href="ads.php?q="+id+"&f=1";
 }
else 
{  var f=0; 
	window.location.href="ads.php?q="+id+"&f=0";
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