<?php include"header.php";?>
		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<div class="menu">
	<div class="container">
		<h3 class="heading">Our <span>Menu</span> List</h3>
		<p class="heading">Our Food Items List</p>
		<div class="special-grids">
			    <?php 
                           $result1 = mysqli_query($conn," SELECT * FROM `cat`") or die( mysqli_error($conn) );
                           while ($row1 = mysqli_fetch_array($result1)) {
                           ?>
				<div class="col-md-6 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img" style="background: #000 url(images/<?php echo $row1['img']; ?>) no-repeat 0px 0px;    background-size: cover;">
						<div class="w3ls-special-text effect-1">
							<h4></h4>
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<a href="kitchens.php?catid=<?php echo $row1['id'];?>"><h4><?php echo $row1['nm'];?></h4></a>
						<p><?php  echo $row1['descrip'];?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
						   <?php }  ?>
			
				
				
				
				<div class="clearfix"> </div>
			</div>
			</div></div>
			
			
			
			
<!-- Services --><div class="background">
	<div class="container">
		<h3>order online</h3>
		<h5><span class="fa fa-phone" aria-hidden="true"></span> +12 877 345 9667</h5>
		<p>We are committed to your satisfaction with every order.Get start today</p>
	</div>
</div>
<div class="services agileits w3layouts" id="services">
	<div class="container">
		<h2 class="heading">Our <span>Services</span></h2>
		<p class="heading">what we do</p>
		<div class="col-md-8 col-sm-6 agileits w3layouts services-grid services-grid-1">
			<div class="col-md-4 col-sm-4 agileits w3layouts services-info services-info-1">
				<i class="fa fa-cutlery" aria-hidden="true"></i>
				<h4 class="agileits w3layouts">Breakfast</h4>
				<p>Quisque accumsan erat dolor. Ve stibulum id lacus placerat Pleas ureblame belongs to duty</p>
			</div>
			<div class="col-md-4 col-sm-4 agileits w3layouts services-info services-info-2">
				<i class="fa fa-glass" aria-hidden="true"></i>
				<h4 class="agileits w3layouts">Drinks</h4>
				<p>Quisque accumsan erat dolor. Ve stibulum id lacus placerat Pleas ureblame belongs to duty</p>
			</div>
			<div class="col-md-4 col-sm-4 services-info agileits w3layouts services-info-3">
				<i class="fa fa-lemon-o" aria-hidden="true"></i>
				<h4 class="agileits w3layouts">Starters recipes</h4>
				<p>Quisque accumsan erat dolor. Ve stibulum id lacus placerat Pleas ureblame belongs to duty</p>
			</div>
			<div class="col-md-4 agileits w3layouts col-sm-4 services-info services-info-4">
				<i class="fa fa-spoon" aria-hidden="true"></i>
				<h4 class="agileits w3layouts">Soup recipes</h4>
				<p>Quisque accumsan erat dolor. Ve stibulum id lacus placerat Pleas ureblame belongs to fall in the lacusiner duty</p>
			</div>
			<div class="col-md-4 col-sm-4 services-info services-info-5 agileits w3layouts">
				<i class="fa fa-cutlery" aria-hidden="true"></i>
				<h4 class="agileits w3layouts">Dinner Food</h4>
				<p>Quisque accumsan erat dolor. Ve stibulum id lacus placerat Pleas ureblame belongs to fall in the lacusiner duty</p>
			</div>
			<div class="col-md-4 agileits w3layouts col-sm-4 services-info services-info-6">
				<i class="fa fa-coffee" aria-hidden="true"></i>
				<h4 class="agileits w3layouts">Coffee</h4>
				<p>Quisque accumsan erat dolor. Ve stibulum id lacus placerat Pleas ureblame belongs to fall in the lacusiner duty</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-4 agileits w3layouts col-sm-6 services-grid services-grid-2">
			<img src="images/bottom.jpg" alt="" />
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //Services -->

<!-- background -->

<!-- //background -->

<!-- blog -->

<!-- //blog -->

<!-- News letter -->

<?php include"footer.php";?>