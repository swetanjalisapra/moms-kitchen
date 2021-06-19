<?php 
 
 include "connect.php";
 $id=$_GET['id'];
$query = "DELETE from cart where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Deleted successfully!');</script>";
	header('location: cart.php');
   }
     else{
          echo "<script type='text/javascript'>alert('Failed to Delete!');javascript:history.back();</script>";
        } 
     




?>