<?php include"header.php";?>

		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<!-- contact -->		
	<div class="contact">
		<div class="container">
			<h2 class="heading">Register<span></span></h2>
				<p class="heading">Create your Profile</p>
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-right"> 
					<form action="submit.php" method="post">  
					    <input type="text" name="Name" placeholder="Name" required="">
						<input type="email" class="email" name="Email" placeholder="Email" required="">
						<input type="text" name="phno" placeholder="Phone" required="" maxlength="10">

						<input type="password" class="pass" name="pass" placeholder="Password" required="" required="" style="margin: 1em 0;">
								<input type="password" class="pass" name="cpass" placeholder="Confirm Password" required="" required="">
						<br><br>
						<input type="submit" value="SUBMIT" name="reg"> 
					</form>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<!-- //contact -->	


<!-- News letter -->

<?php include "footer.php";?>