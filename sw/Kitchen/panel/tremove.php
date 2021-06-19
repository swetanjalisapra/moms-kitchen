<?php 
include "../../connect.php";
include "session.php";

$id=$_GET['id'];
$f=$_GET['f'];
$x=$_GET['x'];

if($x=='t')
{
if($f==0)
{   $query = "INSERT INTO ads (id) 
					  VALUES('$id')";
		       $sql=mysqli_query($conn, $query);
			 }
			   
			   if($f==1)
{   $query = "delete from ads where id='$id'";
		       $sql=mysqli_query($conn, $query);
			
			   }
}
else if($x=='a')
{
if($f==0)
{   
$query = "UPDATE tour SET active='1' where id ='$id'";

		       $sql=mysqli_query($conn, $query);
			 }
			   
			   if($f==1)
{   $query = "UPDATE tour SET active='0' where id ='$id'";
		       $sql=mysqli_query($conn, $query);
			
			   }	
	
	
	
	
}
else if($x=='s')
{
if($f==0)
{   $query = "INSERT INTO spcl (id) 
					  VALUES('$id')";
		       $sql=mysqli_query($conn, $query);
			 }
			   
			   if($f==1)
{   $query = "delete from spcl where id='$id'";
		       $sql=mysqli_query($conn, $query);
			
			   }
}
header("location:tour.php");
?>