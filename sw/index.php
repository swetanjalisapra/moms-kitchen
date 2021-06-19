<?php include"header.php";?>
<!-- slider -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
	<?php
$i=0;
	$result00 = mysqli_query($conn," SELECT * FROM `slider`") or die( mysqli_error($conn) );
                           while ($row00 = mysqli_fetch_array($result00)){
							   if($i==0){
							   ?>
			<li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class="active"></li>
							   <?php } else {?>
			<li data-target="#myCarousel" data-slide-to="<?php echo $i;?>" class=""></li>
						   <?php } $i=$i+1;}?>
			
		</ol>
		<div class="carousel-inner" role="listbox">
		<?php
$i=0;
	$result01 = mysqli_query($conn," SELECT * FROM `slider`") or die( mysqli_error($conn) );
                           while ($row01 = mysqli_fetch_array($result01)){
							   if($i==0){
							   ?>
		
		
			<div class="item active" style="background: url(images/<?php echo $row01['img'];?>)no-repeat center 0px;
    background-size: cover;
    height: 760px!important;"> 
			 <?php } else {?>
			<div class="item item<?php echo $i;?>" style="background: url(images/<?php echo $row01['img'];?>)no-repeat center 0px;
    background-size: cover;
    height: 760px!important;"> 
			 <?php }?>
			
				<div class="banner-dott">
				<div class="container">
					<div class="carousel-caption">
						<h3><?php echo $row01['txt'];?></h3>
						<h4></h4>
						<div class="contrast">
							  <p></p>
						 </div>
						<div class="thim-click-to-bottom">
							<a href="#hj" class="scroll">
								<i class="fa  fa-chevron-down"></i>
							</a>
						</div>
					</div>
				</div>
				</div>
			</div>
			<?php $i=$i+1;} ?>
			
		
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
    </div> 
	<!-- //slider -->
<!-- // banner -->
<br>
<!-- instagram section -->
<section id="hj">
<div data-target="clients" class="clients" id="clients">
		<!-- instagram -->
	<div class="w3agile-spldishes">
			<div class="spldishes-agileinfo">
				<div class="spldishes-grids">
					<!-- Owl-Carousel -->
					<div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
					 <?php 
                           $result0 = mysqli_query($conn," SELECT * FROM `home` where verify=1 and active=1") or die( mysqli_error($conn) );
                           while ($row0 = mysqli_fetch_array($result0)) {
                           ?>
						<div class="item g1">
							<img class="lazyOwl" src="images/<?php echo $row0['img'];?>" title="Our latest gallery" alt="" style="height:213.75px;width:285px;"/>
							<div class="agile-dish-caption">
								<a href="kitchen.php?id=<?php echo $row0['id'];?>"><?php echo $row0['name'];?></a>
							</div>
						</div>
						   <?php } ?>
						
					</div> 
				</div>  
				<div class="clearfix"> </div>
			</div>
	<!-- //instagram --> 
	</div>
</div>
</section>
<br>
<!-- banner bottom section
<div class="bannerbottom">
	<div class="container">
		<div class="bannerbottomgrids">
			<div class="col-md-6 bottomleft">
				<h5>we are special in</h5>
				<h3>making delicious dishes</h3>
				<p>Vestibulum ante ipsum primis in faucibus  ante ipsum primis in faucibus orci luctus et orci luctus et ultrices.faucibus orci luctus et ultrices lore ipsum dolor sit amet faucibus  ante ipsum primis in faucibus orci luctus</p>
					<div class="agile-services-left-grid">
						<div class="services-icon">
							<div class="col-md-2">
								<div class="services-icon-info">
									<i class="fa fa-glass" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-10 services-icon-text">
								<h3>Maecenas cursus ligula</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Maecenas cursus ligula quis malesuada placerat. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="services-icon">
							<div class="col-md-2">
								<div class="services-icon-info">
									<i class="fa fa-cutlery" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-10 services-icon-text">
								<h3>Maecenas cursus ligula</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Maecenas cursus ligula quis malesuada placerat. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="services-icon">
							<div class="col-md-2">
								<div class="services-icon-info">
									<i class="fa fa-spoon" aria-hidden="true"></i>
								</div>
							</div>
							<div class="col-md-10 services-icon-text">
								<h3>Maecenas cursus ligula</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Maecenas cursus ligula quis malesuada placerat. </p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-5 bottomright">
				<img src="images/bottom.jpg" alt="" />
				<div class="positiongrid1">
					<h4>Cooking is one of the great gifts you can give to your love</h4>
				</div>
				<div class="positiongrid2">
					<h4>Food is essential to life therefore make it good and eat it</h4>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
 //banner bottom section -->
<!-- special -->
	<div class="special">
		<div class="container">
		<h2 class="heading">Our<span>  Menu</span></h2>
		<p class="heading">Let's Try It Out !!</p>
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
		</div>
	</div>
<!-- //special -->

<!-- team -->
	<div class="team">
		<div class="container">
		<h3 class="heading">Chef Of <span>The Week</span></h3>
		<p class="heading">Our Food Specialists</p>
			<div class="w3_agile_team_grids">
			  <?php 
                           $result2 = mysqli_query($conn," SELECT * FROM `chef`") or die( mysqli_error($conn) );
                           while ($row2 = mysqli_fetch_array($result2)) {
                           ?>
				<div class="col-md-3 w3_agile_team_grid">
					<div class="hover14 column">
						<figure><img src="images/<?php echo $row2['img']; ?>" alt=" " class="img-responsive" style="height:321px;" /></figure>
					</div>
					<div class="team-tt">
						<h4><?php echo $row2['name']; ?></h4>
						<p><?php echo $row2['orders']; ?> Orders Completed</p>
						
					</div>
				</div>
						   <?php } ?>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- team -->

<!-- testimonials -->
<div class="testimonials">
	<div class="container">
		<h3 class="heading">Testimonials</h3>
		<p class="heading">What our customers says ??</p>
		<div class="w3_testimonials_grids">
			<div class="slider">
				<div class="flexslider">
					<ul class="slides">
					  <?php 
                           $result3 = mysqli_query($conn," SELECT * FROM `people`") or die( mysqli_error($conn) );
                           while ($row3 = mysqli_fetch_array($result3)) {
                           ?>
						<li>
							<div class="col-md-7 w3_testimonials_grid_left">
								<p><img src="images/q1.png" alt=" " class="" /><?php echo $row3['say']; ?><img src="images/q2.png" alt=" " class="" /></p>
									<br>
									<b>- <?php echo $row3['name']; ?></b>
							</div>
							<div class="col-md-5 w3_testimonials_grid_right">
								<img src="images/<?php echo $row3['img']; ?>" alt=" " class="img-responsive" style="height:200px; width:200px;" />
							</div>
							<div class="clearfix"> </div>
						</li>
						   <?php } ?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //testimonials -->


<!-- instagram section -->


<!-- News letter 
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