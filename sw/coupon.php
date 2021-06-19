<?php 
include "connect.php";

 session_start(); 
 
$cou=$_GET['co'];
$tot=$_GET['tot'];
if($tot>=100){
 $result =  mysqli_query($conn," SELECT * FROM coupon WHERE name='$cou'") or die( mysqli_error($conn) );
if (mysqli_num_rows($result) == 1) {

$row = mysqli_fetch_array($result);
$_SESSION['ccnm']=$row['name'];
$_SESSION['q']=$row['des'];
$_SESSION['qp']=$row['per'];
echo "<script type='text/javascript'>alert('Coupon Applied');javascript:history.back();</script>";

$uid=$row['id'];}
	else {
				 echo "<script type='text/javascript'>alert('Incorrect Coupon Code!!');javascript:history.back();</script>";
			}
}
else{
	
	 echo "<script type='text/javascript'>alert('Minimum Order value should be Rs 100!!');javascript:history.back();</script>";
}

?>