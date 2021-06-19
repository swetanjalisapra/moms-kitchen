<?php include"header.php";?>
		<!--//header-->
		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<!-- // banner -->

<!-- about section -->
<div class="about">
	<div class="container">
		<h2 class="heading">About <span>our</span> food</h2>
				<p class="heading">About Our History</p>
		<div class="about-content">
			<div class="col-md-6 bottom-left">
				<h3>We make tasty food,the Best grills and drinks</h3>
				<p>Etiam vitae augue odio. Ut laoreet ipsum vel ultrices viverra. Donec nisl dolor, mollis vel libero id, 
				tempor cursus lectus. Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.
				Phasellus antelig.</p>
				<p>Etiam vitae augue odio. Ut laoreet ipsum vel ultrices viverra. Donec nisl dolor, mollis vel libero id, 
				tempor cursus lectus. Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.</p>
				<div class="morebutton">
					<a href="#">Read More</a>
				</div>
			</div>
			<div class="col-md-6 bottom-right">
				<img src="images/about.jpg" alt="" />
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //about section -->
<!-- choose-us -->
	<div class="why-choose-agile">
		<div class="container">
			<div class="w3-heading-grid">
				<h3 class="heading">Why <span>Choose</span> Us</h3>
				<p class="heading">What We Do</p>
				<div class="agileits-border"> </div>
			</div>
			<div class="why-choose-agile-grids-top">
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us">
						<div class="col-xs-9 agile-why-text">
							<h4>Maecenas</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-glass" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-9 agile-why-text">
							<h4>Lorem ipsum</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-gift" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-9 agile-why-text">
							<h4>Duis ipsum</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-heart" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 agileits-w3layouts-grid img">
					<img src="images/bottom.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text agile-icon-left">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-picture-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text two">
							<h4>Donec egestas</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text agile-icon-left">
							<div class="wthree_features_grid hvr-rectangle-out">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text two">
							<h4>Suspendisse</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text agile-icon-left">
								<div class="wthree_features_grid hvr-rectangle-out">
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</div>
						</div>
						<div class="col-xs-9 agile-why-text two">
							<h4>Nunc vitae</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //choose-us -->

<!-- menu section -->
<div id="gallery" class="gallery_main">
		<div class="container">
			<h2 class="heading">Our <span>Gallery</span></h2>
				<p class="heading">Our Food recipes</p>
			<div class="w3l_gallery_grids">
				<ul class="w3l_gallery_grid gallery" id="lightGallery">
			<?php 	
				$result1 = mysqli_query($conn," SELECT * FROM `gallery`") or die( mysqli_error($conn) );
				while($row1 = mysqli_fetch_array($result1)){
				
				
				
				?>
					<li data-title="<?php echo $row1['name'];?>" data-desc="<?php echo $row1['descrip'];?>" data-src="images/<?php echo $row1['img'];?>" data-responsive-src="images/1.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/<?php echo $row1['img'];?>" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3><?php echo $row1['name'];?></h3>
									<p><?php echo $row1['descrip'];?></p>
								</div>
							</a>
						</div>
					</li>
				<?php } ?>
	
				</ul>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	</div>
</div>
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