<?php 

include "../../connect.php";
$id=$_GET['id'];
$t=$_GET['t'];
if($t==1){
	
	
$query = "UPDATE orders set stts=2 where oid='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
    echo  "<script type='text/javascript'>alert('Accepted successfully!');javascript:history.back();</script>";
	
   }
   else{
    echo  "<script type='text/javascript'>alert('Error Occured !!Try Later!');javascript:history.back();</script>";
   }

	
	
}
else{
	
$query = "UPDATE orders set stts=4 where oid='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Done successfully!');javascript:history.back();</script>";
	
   }
   else{
     echo  "<script type='text/javascript'>alert('Error Occured !!Try Later!');javascript:history.back();</script>";
   }

	
	
}


?>