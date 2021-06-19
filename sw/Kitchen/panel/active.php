<?php 
include "header.php";
include "../../connect.php";
$t=$_GET['t'];
$id=$row['id'];
if($t==1)
{
	$ac=1;
}
else{
	$ac=0;
}

$query = "UPDATE home set active=$ac where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Updated successfully!');javascript:history.back();</script>";
	
   }
   else{
     echo  "<script type='text/javascript'>alert('Error Occured !!Try Later!');javascript:history.back();</script>";
   }

?>