<?php 

include "../../connect.php";
$id=$_GET['id'];

$query = "UPDATE home set verify=1 where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Verified successfully!');javascript:history.back();</script>";
	
   }
   else{
     echo  "<script type='text/javascript'>alert('Error Occured !!Try Later!');javascript:history.back();</script>";
   }

?>