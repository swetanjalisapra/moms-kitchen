<?php 
include "connect.php";

 session_start(); 
 $tot=$_SESSION['tot'];

 
 $item='';
	$u=$_SESSION['user'];
	$cou=$_SESSION['ccnm'];
				$k=$_SESSION['kitchen'];
if (isset($_POST['submit'])) {
		  
		  $add=$_POST['dec'];
		    $ins=$_POST['dew'];
		  $result =  mysqli_query($conn," SELECT * FROM user WHERE email='$u'") or die( mysqli_error($conn) );

$row = mysqli_fetch_array($result);

$uid=$row['id'];
		  
		  $result4 =  mysqli_query($conn," SELECT * FROM cart where uid='$uid' ") or die( mysqli_error($conn) );
		
      while($row4 = mysqli_fetch_array($result4))
	  {
		  
		  $on=$row4['pid'].'^'.$row4['quantity'];
		  $item .= $on.","; 
		  
		  
	  }
	   
	   
	  
     
	  $result1 =  mysqli_query($conn," SELECT * FROM orders ORDER BY id DESC limit 1") or die( mysqli_error($conn) );

$row1 = mysqli_fetch_array($result1);

$v='ODD';
   if($row){
    $voiceno=$row1['id']+1;
    }
   else{
    $voiceno=1;
    }
    $demo=date('y').'1000'+$voiceno;
    $rcptno=$v.$demo;

     $regno=$rcptno;

   $uid=$row['id'];
       $nm=$row['name'];
	   $ph=$row['phno'];
	  
	   $dt=date("Y-m-d"); 
	   $t=date("h:i:s");
	
	   
	   $query = "INSERT INTO `orders`(oid,uid,name,phno,total,items,address,date,time,instruc,coupon,hid) 
					  VALUES('$regno','$uid','$nm','$ph','$tot','$item','$add','$dt','$t','$ins','$cou','$k')";
		      
			 if( $sql=mysqli_query($conn, $query)){
			  $query1 = "DELETE FROM cart where uid='$uid'";
		      
			  $sql1=mysqli_query($conn, $query1);
	             if($sql==true){
                      
			           echo $_SESSION['ccid'];
			           echo "<script>window.location.href='order.php?oid=$regno'</script>";
                    }
               else{
                  echo "<script type='text/javascript'>alert('Failed to order!');javascript:history.back();</script>";
                  } 
			
unset($_SESSION['q']);
				unset($_SESSION['qp']);
			 }
			  else{
                  echo "<script type='text/javascript'>alert('Failed to order!');javascript:history.back();</script>";
                  } 
			
}
?>