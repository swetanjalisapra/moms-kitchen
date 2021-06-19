<?php include"header.php";?>
<?php 
include "../../connect.php";







?>

            <!--// top-bar -->

            <!-- main-heading -->
           
            
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
						
						 <th>Tour</th>
                           <th>Name</th>
						    <th>Phno</th>
							<th>Email</th><th>Message</th>
					    </tr>
                     </thead>
                     <tbody>
                        <?php 
                           $result1 = mysqli_query($conn," SELECT * FROM `spclquery`") or die( mysqli_error($conn) );
                           while ($row1 = mysqli_fetch_array($result1)) {
                           ?>
                        <tr>
						<td><p><?php
						$id=$row1['tid'];
  $result2 = mysqli_query($conn," SELECT * FROM `tour` where id='$id'") or die( mysqli_error($conn) );
                       $row2 = mysqli_fetch_array($result2);
					   echo $row2['name'];
						?>
						
						</p></td>
						
						   <td>
                              <?php echo "<p>".$row1['name']."</p>"; ?>
                           </td>
                        	
							 <td>
                              <?php echo "<p>".$row1['phno']."</p>"; ?>
                           </td>
						    <td>
                              <?php echo "<p>".$row1['email']."</p>"; ?>
                           </td> <td>
                              <?php echo "<p>".$row1['d']."</p>"; ?>
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