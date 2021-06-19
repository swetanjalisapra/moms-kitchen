<?php 

include "../../connect.php";
include "session.php";
$t=$_GET['t'];
$id=$_GET['id'];
if($t==0)
{  
$query = "DELETE from dcategory where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Deleted successfully!');javascript:history.back();</script>";
	
   }
     else{
          echo "<script type='text/javascript'>alert('Failed to Delete!');javascript:history.back();</script>";
        } 
      

}
if($t==1)
{  
$query = "DELETE from tcategory where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Deleted successfully!');javascript:history.back();</script>";

   }
     else{
          echo "<script type='text/javascript'>alert('Failed to Delete!');javascript:history.back();</script>";
        } 
      

}
if($t==2)
{  
$query = "DELETE from incat where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Deleted successfully!');javascript:history.back();</script>";
	
   }
     else{
          echo "<script type='text/javascript'>alert('Failed to Delete!');javascript:history.back();</script>";
        } 
      

}
if($t==3)
{  
$query = "DELETE from faq where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Deleted successfully!');javascript:history.back();</script>";
	
   }
     else{
          echo "<script type='text/javascript'>alert('Failed to Delete!');javascript:history.back();</script>";
        } 
      

}
if($t==4)
{  
$query = "DELETE from blog where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Deleted successfully!');javascript:history.back();</script>";

   }
     else{
          echo "<script type='text/javascript'>alert('Failed to Delete!');javascript:history.back();</script>";
        } 
      

}
if($t==5)
{  
$query = "DELETE from coupon where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Deleted successfully!');javascript:history.back();</script>";

   }
     else{
          echo "<script type='text/javascript'>alert('Failed to Delete!');javascript:history.back();</script>";
        } 
      

}

if($t==6)
{  
$query = "DELETE from peoplesay where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Deleted successfully!');javascript:history.back();</script>";

   }
     else{
          echo "<script type='text/javascript'>alert('Failed to Delete!');javascript:history.back();</script>";
        } 
      

}
if($t==7)
{  
$query = "DELETE from admin where id='$id'";
		$sql=mysqli_query($conn, $query);
	  if($sql==true){
    echo  "<script type='text/javascript'>alert('Deleted successfully!');javascript:history.back();</script>";

   }
     else{
          echo "<script type='text/javascript'>alert('Failed to Delete!');javascript:history.back();</script>";
        } 
      

}









?>

