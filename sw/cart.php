<?php include"header.php";

$uid=$_SESSION['temp'];
 $_SESSION['ccid']="";
 
 $result4 =  mysqli_query($conn," SELECT * FROM cart where uid='$uid'") or die( mysqli_error($conn) );
		

?>
		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<!-- gallery -->
<div class="blog">
	<div class="container">
		<h3 class="heading">My <span>Cart</span></h3>
		<p class="heading">What's in my bag ??</p>
		         <div class="col-md-12">
		
		 <hr>
            <div class="card">
             
               <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                     <thead>
                        <tr>
						 <th>Item</th>
                          <th>Quantity</th>
                         <th>Price</th>
                         <th>Remove</th>
						   
						      
                        </tr>
                     </thead>
                     <tbody>
                         <?php 
						 $deli=0;
                           $tot=0;
                           while ($row4 = mysqli_fetch_array($result4)) {
							   $pid=$row4['pid'];
							   $result5 =  mysqli_query($conn," SELECT * FROM food where id='$pid'") or die( mysqli_error($conn) );
		                       $row5 = mysqli_fetch_array($result5)
                           ?>
                        <tr>
					
						<td>
						    
                              <?php echo "<p>".$row5['name']."</p>"; ?>
                           </td>
                            <td>
                              <?php echo "<p>".$row4['quantity']."</p>"; ?>
                           </td>
						    <td>
                              <?php echo "<p>Rs".$row4['quantity']*$row5['dp']."</p>"; $tot=$tot+$row4['quantity']*$row5['dp']; ?>
                           </td> 
						    <td>
                              <?php  echo "<a class='img11 delete' data-confirm='Are you sure to delete this item?' href=remove.php?id=".$row4['id']."> <i class='fa fa-trash' style='font-size:24px; color:red;' title='Delete'></i></a><br>";?>

                               
                           </td>
                           
                        </tr>
						   <?php }
						   if (mysqli_num_rows($result4)!= 0) { ?>
						   <tr>
						   <td><p>Delivery Charge:</p></td><td></td>
						   <?php 
if($tot<150){ $deli=$deli+20; ?>
						      <td>Rs 20</td>
<?php } else{						 ?>	  <td>Free</td><?php }?>
						  <td></td> </tr>
						   
						   <?php }
						   
						   else{
							   
							   $deli=0;
						   }?>
						    <input style="display:hidden;"  id="jk" name="jk" placeholder="Apply Coupon" value="<?php echo $tot;?>" hidden>
						   <tr>
						   
						   <td>Total Amount :</td>
						    <td></td> <td><?php 
if(isset($_SESSION['q']) && $tot>=100)
					{    
							$tot=$tot+$deli;
						$q=$_SESSION['q'];
							
						$per=$_SESSION['qp'];
						if($per=='%'){
							
							$ab=$tot*$q*0.01;
							
						if($ab>100)
						{
							$rt=$tot-100;
						}
						else
						{
							$rt=$tot*$q*0.01;
						}
							
							
						}
						else{
							$rt=$tot-$q;
							
						}
						?><strike><?php echo $tot; ?></strike>	 <?php echo $rt;
					}
					
					else{
						$rt=$tot+$deli;	
						echo"Rs ".$rt;	
					}
							$_SESSION['tot']=$rt;
							//echo $_SESSION['ccnm'];
							 ?><td style="width:35%;">
							
         
            <input style="width:88%; display: unset;" class="form-control" id="coupon" name="coupon" placeholder="Apply Coupon" required="">
			<button onclick="coupon()">&#128515;</button>
        </td>
						   </tr>
                         
                     </tbody>
                  </table>
				  
               </div>
            </div>
				<div class="row">
				  <div class="col-md-12">
		 <br>
		 <hr>
            <div class="card">
             
               <div class="card-body">
                  <form 
				  <?php if (mysqli_num_rows($result4) == 0) { ?> onsubmit="myFunction1()" <?php } elseif(!isset($_SESSION['user']))
				  { ?> onsubmit="myFunction()" <?php } else { ?> action="oplace.php" <?php } ?> method="post" enctype="multipart/form-data" >
       
         <br>
       
           <div class="form-group" style="align-content:center;">
            <label for="description">Specific Instructions/Message</label>
			<br><br>
            <textarea type="text" rows="3" class="form-control" id="description" name="dew" placeholder="Instructions/Message" ></textarea>
         </div>
        <div class="form-group" style="align-content:center;">
            <label for="description">Delivery Address</label><br><br>
            <textarea type="text" rows="3" class="form-control" id="description" name="dec" placeholder="Enter Address" required=""></textarea>
         </div>
         
         
         <div class="card-footer text-center">
            <button type="submit" name="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> PLace Order
            </button>
			 
           
         </div>
      </form>
               </div>
            </div>
         
      </div>
  
			</div>
         
      </div>
				
<div class="clearfix"></div>
	</div>
	</div>
</div>
<script>
function myFunction() {
  alert("Please Login To Continue !!");
 window.location.href="login.php";
  
}
function myFunction1() {
  alert("Cart Is Empty !!");
  	javascript:history.back();
  
}
function coupon() {
var x = document.getElementById("coupon").value;

var y = document.getElementById("jk").value;

window.location.href="coupon.php?co="+x+"&tot="+y;
}
 

  </script>
<!-- News letter -->
<?php include "footer.php";?>