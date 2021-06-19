<?php 
 include"connect.php";
session_start();
  $uid=$_SESSION['temp'];
	 
 $id=$_GET['q'];
  $ac=$_GET['ac'];
  
  
  $query2= "SELECT * FROM `cart` WHERE uid='$uid' AND pid='$id'";
			$results2 = mysqli_query($conn, $query2);
			$row2 = mysqli_fetch_array($results2);
  if($ac==1)
  {     
     if (mysqli_num_rows($results2) == 0) {
		 
   	  
	$query = "INSERT INTO `cart`(uid,pid,quantity) 
					  VALUES('$uid','$id','1')";
		      
			  $sql=mysqli_query($conn, $query);
			
			echo"1";
	
	
}
else
{
	$query = "UPDATE `cart` set quantity=quantity+1 where pid='$id' and uid='$uid'";
					
		      
			  $sql=mysqli_query($conn, $query);
			  
	$r=$row2['quantity']+1;
	echo $r;
}

  }
  
   if($ac==0)
  {   

	if($row2['quantity']==1)
{    
	  $query1 = "DELETE FROM `cart` where pid='$id' and uid='$uid'";
		      
			  $sql1=mysqli_query($conn, $query1);
	
	echo "0";
}
else
{
	$query = "UPDATE `cart` set quantity=quantity-1 where pid='$id' and uid='$uid'";
					
		      
			  $sql=mysqli_query($conn, $query);
			  $r=$row2['quantity']-1;
			  if($r<0)
			  {
				  echo '0';
			  }
	else{echo $r;}
	
}

  }
 