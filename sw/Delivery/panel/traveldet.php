<?php include"header.php";?>
<?php 
include "../../connect.php";

$id=$_GET['id'];


  $results1 = mysqli_query($conn," SELECT * FROM `traveldet` where oid='$id'") or die( mysqli_error($conn) );
                         $row1 = mysqli_fetch_array($results1);
$a=explode('^',$row1['title']);
$b=explode('^',$row1['fnm']);
$c=explode('^',$row1['lnm']);
$d=explode('^',$row1['gender']);
$e=explode('^',$row1['dob']);
$f=explode('^',$row1['country']);
$g=explode('^',$row1['em']);
$h=explode('^',$row1['phno']);


?>

            <!--// top-bar -->

            <!-- main-heading -->
           
         
 <div class="row">
         <div class="col-md-12">
		 <br><br><br>
		 <hr>
		 <?php $i=0;
		 while(isset($a[$i])){ ?>
		    <div class="card">
               <div class="card-header">
                  <strong class="card-title">Traveller Detail <?php echo $i+1;?></strong>
               </div>
               <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                     <thead>
                        <tr>
				
                           <th>Full Name</th>
						    <th><?php echo $a[$i];echo $b[$i];echo " ";echo $c[$i]; ?></th>
			
                           
						      
                        </tr>
						 <tr>
				
                           <th>Gender</th>
						    <th><?php   echo $d[$i]; ?></th>
			
                           
						      
                        </tr>
						 <tr><th>Email</th>
						    <th><?php echo $g[$i]; ?></th> </tr>
						    <tr>     <th>Phno</th>
						    <th><?php echo $h[$i]; ?></th> </tr>
						 <tr>
				
                           <th>DOB</th>
						    <th><?php  echo $e[$i]; ?></th> </tr>
			
                           <tr>   <th>Country</th>
						    <th><?php echo $f[$i]; ?></th>

							
                        </tr>
                     </thead>

                  </table>
               </div>
            </div>
		 <?php $i=$i+1; }?>
			<br><br><hr>
          
			<br>
			 
	
         
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