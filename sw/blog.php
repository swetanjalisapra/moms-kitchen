<?php include"header.php";
$id=$_GET['id'];
$result1 = mysqli_query($conn," SELECT * FROM `blog` where id='$id'") or die( mysqli_error($conn) );
$row1 = mysqli_fetch_array($result1);


?>
		<!--//header-->
		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<!-- // banner -->

<!-- about section -->
<div class="about">
	<div class="container">
		<h2 class="heading"><?php echo $row1['name'];?></h2>
				<p class="heading"><?php echo $row1['sdescrip'];?></p>
		<div class="about-content">
		<div class="col-md-6 bottom-right">
				<img src="images/<?php echo $row1['img'];?>" alt="" />
			</div>
			<div class="col-md-6 bottom-left">
				<h3></h3>
				<p><?php echo $row1['descrip'];?></p>
				
				
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about section -->
<!-- choose-us -->
	

<!-- News letter \
<div class="agile-form">
	<div class="container">
		<div class="col-md-4 newsletter">
		<p>Subscribe to our newsletter</p>
		<h4>For our latest updates</h4>
		</div>
		<div class="col-md-8">
			<form action="#" method="get">
				<input type="email" name="email" placeholder="Enter Your Email Address" required="">
				<input type="submit" value="">
			</form>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- News letter -->

<?php include"footer.php";?>