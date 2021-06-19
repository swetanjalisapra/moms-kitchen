<?php include"header.php";


 $id=$_GET['oid'];
 
 
 
 
 $result4 =  mysqli_query($conn," SELECT * FROM orders where oid='$id' ") or die( mysqli_error($conn) );
		
       $row4 = mysqli_fetch_array($result4);


?>
		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<!-- gallery -->
<div class="blog">
	<div class="container">
		<h3 class="heading">Order<span>Accepted</span></h3>
		<p class="heading">Order ID -: <?php echo $id; ?></p>
					<div class="row">
				  <div class="col-md-12">
		
		 <hr>
            <div class="card">
             
               <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                   
                     <tbody>
                        
                        <tr>
						<td>Order ID: </td>
					    <td><?php echo $id; ?></td>
                        </tr>  
						 <tr>
						<td>Name: </td>
					    <td><?php echo $row4['name']; ?></td>
                        </tr>  
						 <tr>
						<td>Phone No: </td>
					    <td><?php echo $row4['phno']; ?></td>
                        </tr>  
						 <tr>
						<td>Transaction Id: </td>
					    <td><?php echo $row4['txnid']; ?></td>
                        </tr>  
						 <tr>
						<td>Payment Status: </td>
					    <td><?php if($row4['stts']==1){echo "Paid" ;}
						 else{echo "Not Paid" ;} ?></td>
                        </tr>  
						<tr>
						<td>Address: </td>
					    <td><?php echo $row4['address']; ?></td>
                        </tr>
                          <tr>
						<td>Total Amount: </td>
					    <td>Rs.<?php echo $row4['total']; ?></td>
                        </tr>
                      
                     </tbody>
                  </table>
               </div>
            </div>
         
      </div>
	  <br>
  <form action="orders.php" method="POST" style="
    margin-left: 40%;">
  <input name="orderid" value="<?php echo $id;  ?>" hidden>
   <br> <br>
   <input name="uid" value="UID<?php echo $row4['uid']; ?>" hidden> <input name="amt" value="<?php echo $row4['total']; ?>" hidden> <input type="submit" name="submit" value="My Orders">
  </form>
			</div>
		

				
<div class="clearfix"></div>
	</div>
	</div>
</div>

<!-- News letter -->
<?php include "footer.php";?>