<?php include"header.php";?>

		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<!-- contact -->		
	<div class="contact">
		<div class="container">
			<h2 class="heading">Register<span> Your</span> Kitchen</h2>
				<p class="heading">Join Your Hands with us</p>
			<div class="contact-agileinfo">
				<div class="col-md-7 contact-right"> 
					<form action="submit.php" method="post">  
					   <input type="text" name="kname" placeholder="Kitchen Name" required="">
					     <input type="text" name="name" placeholder="Chef Name" required="" style="margin: 1em 0;">
						<input type="email" class="email" name="email" placeholder="Email" required="">
						<input type="text" name="phno" placeholder="Phone" required="" maxlength="10">
						
								<textarea name="add" placeholder="Address" required=""></textarea>
						<textarea name="descrip" placeholder="Description" required=""></textarea>
						<br><br>
						<input type="submit" value="SUBMIT" name="kreg" > 
					</form>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<!-- //contact -->	


<!-- News letter -->

<?php include "footer.php";?>