<?php include"header.php";



 $u=$_SESSION['user'];
				$result =  mysqli_query($conn," SELECT * FROM user WHERE email='$u'") or die( mysqli_error($conn) );

$row = mysqli_fetch_array($result);
 
 $id=$row['id'];
 
 

?>
		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<!-- gallery -->
<div class="blog">
	<div class="container">
		<h3 class="heading">My<span>Orders</span></h3>
		<p class="heading">See our relation journey !!</p>
					  <div class="row">
	<div class="col-sm-12">
		
		 <hr>
            <div class="card">
             
               <div class="card-body" >
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                   
                        <thead>
                        <tr>
						 <th>Order ID</th>
                           <th>Name</th>
						    <th>Phno</th> 
							<th>Total</th> 
							<th>Address</th> 
							<th>Time</th>
							<th>Status</th>
							
                        </tr>
                     </thead>
					 <tbody>
                       <?php 
                           $result1 =  mysqli_query($conn," SELECT * FROM orders where uid='$id' ORDER BY ID DESC ") or die( mysqli_error($conn) );
                           while ($row1 = mysqli_fetch_array($result1)) {
							   $oid=$row1['oid'];
                           ?>
                        <tr>
						<td>
                              <?php echo "<p>".$row1['oid']."</p>"; ?>
                           </td>
                        	<td>
                        		<?php echo "<p>".$row1['name']."</p>"; ?>
                        	</td>
							<td>
                        		<?php echo "<p>".$row1['phno']."</p>"; ?>
                        	</td><td>
                        		<?php echo "<p>Rs.".$row1['total']."</p>"; ?>
                        	</td>
							<td>
                        		<?php echo "<p>".$row1['address']."</p>"; ?>
                        	</td>
                          <td>
                        		<?php echo "<p>".$row1['date']."<br>".$row1['time']."</p>"; ?>
                        	</td>
							  <td>  
						   <p><?php if($row1['stts']==1){ ?>
							    Waiting
							  <?php }
							  elseif($row1['stts']==2){ ?>
							<div id="element" onclick="abc(<?php echo $row1['id'];?>)"class="btn btn-default">Delivery Details</div>
							  <?php }
							  else if($row1['stts']==3){ ?>
Delivered
							  <?php }
							  else if($row1['stts']==4){ ?>
Refunded
							  <?php }

							  ?>
                        		
                        	</p></td>
							
							<!--
							stts 0-: not paid
							stts 1-: paid
							stts 2-: approved
							stts 3-: delivered
							stts 4-: canceled by us and refunded
							-->
                           		<div id="testmodal<?php echo $row1['id'];?>" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
			  <?php $result2 =  mysqli_query($conn," SELECT * FROM odeli where oid='$oid' ") or die( mysqli_error($conn) );
                          $row2 = mysqli_fetch_array($result2); ?>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Delivery Details</h4>
            </div>
            <div class="modal-body" style="text-align:center; text-size:30px;">
                <p><b>Name -:    <?php echo $row2['name'];?></b> </p>
				<p><b>Phno-:    <?php echo $row2['phno'];?></b>  </p>
               
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
            </div>
        </div>
    </div>
</div>
                        </tr>
                        <?php  }
                           ?>
                      
                     </tbody>
                  </table>
               </div>
            </div>
         
      </div>
  
			</div>


		<script>
		$(document).ready(function(){
  var show_btn=$('.show-modal');
  var show_btn=$('.show-modal');
  //$("#testmodal").modal('show');
  
    show_btn.click(function(){
      $("#testmodal").modal('show');
  })
});

$(function() {
        $('#element').on('click', function( e ) {
            Custombox.open({
                target: '#testmodal-1',
                effect: 'fadein'
            });
            e.preventDefault();
        });
    });
	
	function abc(id)
	{
		$("#testmodal"+id).modal('show');
		
	}
		</script>

				
<div class="clearfix"></div>
	</div>
	</div>
</div>

<!-- News letter -->
<?php include "footer.php";?>