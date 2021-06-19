<?php 
include "connect.php";
session_start();

if(isset($_POST['reg']))
{
	$nm=mysqli_real_escape_string($conn, $_POST['Name']);
	$em=mysqli_real_escape_string($conn, $_POST['Email']);
	$ph=mysqli_real_escape_string($conn, $_POST['phno']);
	$p=mysqli_real_escape_string($conn, $_POST['pass']);
	$cp=mysqli_real_escape_string($conn, $_POST['cpass']);
	if($p==$cp){
		
		$result5 =  mysqli_query($conn," SELECT * FROM user WHERE email='$em' or phno='$ph'") or die( mysqli_error($conn) );

  			if (mysqli_num_rows($result5) == 0) 
			{   	$query = "INSERT INTO user (name,email,pass,phno) 
					  VALUES('$nm','$em','$p','$ph')";
		       $sql=mysqli_query($conn, $query);
	             if($sql==true){
                    
					  $query3 = "SELECT * FROM user WHERE email='$em'";
			$results3 = mysqli_query($conn, $query3);
			$row3 = mysqli_fetch_array($results3);
				
		$id= $row3['id'];
		$tid=$_SESSION['temp'];
$query1 = "DELETE from temp where tid='$tid'";

		$sql1=mysqli_query($conn, $query1);
	
		$query2 = "UPDATE cart set uid='$id' where uid='$tid'";

		$sql2=mysqli_query($conn, $query2);
			            
						 	
				$_SESSION['temp'] = $id;
			             $_SESSION['user']=$em;
						 	
				
				$_SESSION['id'] = $id;
				  echo  "<script type='text/javascript'>alert('Successfully Registerd !!');</script>";
			     echo "<script type='text/javascript'>window.location.href='index.php'</script>";
                    }
               else{
                  echo "<script type='text/javascript'>alert('Failed to upload!');javascript:history.back();</script>";
                  } 
             }
	     else{
				echo "<script type='text/javascript'>
			alert('Already Registerd');
			javascript:history.back();
			</script>";
	
	         }
	}

	 else{
	         echo  "<script type='text/javascript'>alert('Password Doesnt matched !!');javascript:history.back();</script>"; 
				  }
	
	
}
if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['pass']);

			// $password = md5($password);
			$query = "SELECT * FROM user WHERE email='$username' AND pass='$password'";
			$results = mysqli_query($conn, $query);

			if (mysqli_num_rows($results) == 1) {
					
				$row = mysqli_fetch_array($results);
				
		$id= $row['id'];
	
						
				$tid=$_SESSION['temp'];
$query1 = "DELETE from temp where tid='$tid'";

		$sql1=mysqli_query($conn, $query1);
	
		$query2 = "UPDATE cart set uid='$id' where uid='$tid'";

		$sql2=mysqli_query($conn, $query2);
			            
						 	
				$_SESSION['temp'] = $id;
				
				
				$_SESSION['user'] = $username;
				
			
				$_SESSION['id'] = $id;
//echo $_SESSION['user'];
		
				 echo  "<script type='text/javascript'>alert('Login Successful !!');</script>";
			 echo "<script type='text/javascript'>window.location.href='index.php'</script>";
		//	echo  "<script type='text/javascript'>window.history.back();window.history.back();
//location.reload(); </script>"; 
// echo'<meta http-equiv="refresh" content="0;url=">';  
			}
			else {
				 echo "<script type='text/javascript'>alert('Incorrect Email Or Password !!');javascript:history.back();</script>";
			}
		
	}
	
	if (isset($_POST['cpassq'])) {
		$p=mysqli_real_escape_string($conn, $_POST['pass']);
			$cp=mysqli_real_escape_string($conn, $_POST['cpass']);
			$id=$_SESSION['id'];
		//	echo $id;
			//echo $p; Echo $cp;
	if($p==$cp){
			// $password = md5($password);
			$query = "UPDATE user set pass='$p' where id='$id' ";
		 $sql=mysqli_query($conn, $query);
	             if($sql==true){
					  echo "<script type='text/javascript'>alert('Changed Successfully !!');javascript:history.back();</script>";
				 }
                    
		
			else {
				 echo "<script type='text/javascript'>alert('Unable to Change!!');javascript:history.back();</script>";
			}
	}
	 else{
	        echo  "<script type='text/javascript'>alert('Password Doesnt matched !!');javascript:history.back();</script>"; 
				  }
	}
if(isset($_POST['kreg']))
{
	 $knm=mysqli_real_escape_string($conn, $_POST['kname']);
	$nm=mysqli_real_escape_string($conn, $_POST['name']);
	$em=mysqli_real_escape_string($conn, $_POST['email']);
	$ph=mysqli_real_escape_string($conn, $_POST['phno']);
	$add=mysqli_real_escape_string($conn, $_POST['add']);
	$descrip=mysqli_real_escape_string($conn, $_POST['descrip']);

		
		$result5 =  mysqli_query($conn," SELECT * FROM home WHERE email='$em' or phno='$ph'") or die( mysqli_error($conn) );

  			if (mysqli_num_rows($result5) == 0) 
			{   	$query = "INSERT INTO home (name,cname,phno,email,address,pass,verify,img,descrip) 
					  VALUES('$knm','$nm','$ph','$em','$add',0,0,'demo.jpg','$descrip')";
					//  echo $query;
		       $sql=mysqli_query($conn, $query);
	             if($sql==true){
                    
					 
				  echo  "<script type='text/javascript'>alert('Successfully Registerd !! We will contact you shortly !!');</script>";
			     echo "<script type='text/javascript'>window.location.href='index.php'</script>";
                    }
               else{
                  echo "<script type='text/javascript'>alert('Failed to upload!');javascript:history.back();</script>";
                  } 
             }
	     else{
				echo "<script type='text/javascript'>
			alert('Already Registerd');
			javascript:history.back();
			</script>";
	
	         }
	
	
}
if(isset($_POST['contact']))
{
	// $knm=mysqli_real_escape_string($conn, $_POST['kname']);
	$nm=mysqli_real_escape_string($conn, $_POST['name']);
	$em=mysqli_real_escape_string($conn, $_POST['email']);
	$ph=mysqli_real_escape_string($conn, $_POST['phno']);
	$msg=mysqli_real_escape_string($conn, $_POST['msg']);
	//$descrip=mysqli_real_escape_string($conn, $_POST['descrip']);

		
	//	$result5 =  mysqli_query($conn," SELECT * FROM home WHERE email='$em' or phno='$ph'") or die( mysqli_error($conn) );

  			 	$query = "INSERT INTO contact (name,msg,phno,email) 
					  VALUES('$nm','$msg','$ph','$em')";
					//  echo $query;
		       $sql=mysqli_query($conn, $query);
	             if($sql==true){
                    
					 
				  echo  "<script type='text/javascript'>alert('Successfully Submitted !! We will contact you shortly !!');</script>";
			     echo "<script type='text/javascript'>window.location.href='index.php'</script>";
                    }
               else{
                  echo "<script type='text/javascript'>alert('Failed to upload!');javascript:history.back();</script>";
                  } 
          
	   
	
	
}

?>
