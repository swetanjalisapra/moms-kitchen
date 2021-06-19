<?php include"header.php";?>


<?php
include "connect.php";
$id=$_GET['id'];
  $result1 = mysqli_query($conn," SELECT * FROM `home` where id=$id") or die( mysqli_error($conn) );
                          $row1 = mysqli_fetch_array($result1);
						  $hash=md5($row1['name']);
$h=$_GET['h'];

if($hash==$h){

if (isset($_POST['cpassq'])) {
		$p=mysqli_real_escape_string($conn, $_POST['pass']);
			$cp=mysqli_real_escape_string($conn, $_POST['cpass']);
			//$id=$_SESSION['id'];
		//	echo $id;
			//echo $p; Echo $cp;
	if($p==$cp){
			// $password = md5($password);
			$query = "UPDATE home set pass='$p' where id='$id' ";
		 $sql=mysqli_query($conn, $query);
	             if($sql==true){
					  echo "<script type='text/javascript'>alert('Set Successfully. You can now Login!!');</script>";
					  echo"<script> window.location.href='Kitchen/login/login.php'; </script>";
				 }
                    
		
			else {
				 echo "<script type='text/javascript'>alert('Unable to Set!!');javascript:history.back();</script>";
			}
	}
	 else{
	        echo  "<script type='text/javascript'>alert('Password Doesnt matched !!');javascript:history.back();</script>"; 
				  }
	}
}
else{
	 echo  "<script type='text/javascript'>alert('Don't Try To Hack !!');</script>"; 
}?>
		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<!-- contact -->		
	<div class="contact">
		<div class="container">
			<h2 class="heading">Set<span>Password</span></h2>
				<p class="heading">Welcome Onboard !!</p>
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-right"> 
					<form action="onboarding.php?id=<?php echo $id;?>&h=<?php echo $h;?>" method="post">  
					

						<input type="password" class="pass" name="pass" placeholder="Password" required="" required="" style="margin: 1em 0;">
							<input type="password" class="pass" name="cpass" placeholder="Confirm Password" required="" required="">
							
						<br><br>
						<input type="submit" name="cpassq" value="SUBMIT" > 
					</form>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<!-- //contact -->	


<!-- News letter -->

<?php include "footer.php";?>