<?php include"header.php";

$id=$_GET['catid'];



$result0 = mysqli_query($conn," SELECT * FROM `cat` where  id='$id'") or die( mysqli_error($conn) );
                          $row0 = mysqli_fetch_array($result0);
						  
$result1 = mysqli_query($conn," SELECT * FROM `catmap` where  catid='$id'") or die( mysqli_error($conn) );




?>
		<!--//header-->
		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<!-- // banner -->

<!-- menu section -->
<div class="blog">
	<div class="container">
		<h3 class="heading">Our <span>Kitchens</span></h3>
		<p class="heading"><?php echo $row0['nm'];?></p>
		
		<?php 
		$i=0;
		while($row1 = mysqli_fetch_array($result1)){
			if($i==0||$i%4==0){
			?>
		
			<div class="agileits_banner_bottom_grid_three">
			<?php }
			$hid=$row1['homeid'];
$result2 = mysqli_query($conn," SELECT * FROM `home` where verify=1 and active=1 and id='$hid'") or die( mysqli_error($conn) );
                          $row2 = mysqli_fetch_array($result2);
if(mysqli_num_rows($result2) == 0){

echo "Sorry !! Not Available Now !! Please Check Back Later !!";
break;
?>
 <div class="clearfix"> </div>
				</div>
<?php }else{
			?>	
			
			
				<div class="col-md-3 agileinfo_banner_bottom_grid_three_left">
					<div class="wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/<?php echo $row2['img'];?>" alt=" " class="img-responsive" />
							<figcaption>
								<a href="kitchen.php?id=<?php echo $row2['id'];?>"><h3><span><?php echo $row2['name'];?></span></h3></a>
								<p></p>
							</figcaption>			
						</figure>
					</div>
					<p class="w3_agileits_para"><?php echo $row2['descrip'];?></p>
				</div>
				<?php $i=$i+1;
				if($i%4==0){?>
				<div class="clearfix"> </div>
				</div>
		<?php } }
		}?>

				

	</div>
</div>
	<!--	<div class="menu-grids">
			<div class="col-md-4">
				<img src="images/breakfast.jpg" alt="" />
				<div class="menu-items">
					<h4>Easy Banana Bread <span>-12$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur vesti.</p>
				</div>
				<div class="menu-items">
					<h4>Cheese Omelette <span>-19$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.</p>
				</div>
				<div class="menu-items">
					<h4>Oatmeal milk toast<span>-21$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur vesti.</p>
				</div>
				<div class="menu-items">
					<h4>french toast <span>-14$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.</p>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/lunch.jpg" alt="" />
				<div class="menu-items">
					<h4>Glorified rice <span>-31$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.</p>
				</div>
				<div class="menu-items">
					<h4>Charleston red rice <span>-24$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur vesti.</p>
				</div>
				<div class="menu-items">
					<h4>American fried rice <span>-21$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.</p>
				</div>
				<div class="menu-items">
					<h4>Hawaiian haystack <span>-28$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur vesti.</p>
				</div>
			</div>
			<div class="col-md-4">
				<img src="images/dinner.jpg" alt="" />
				<div class="menu-items">
					<h4>Salisbury Steaks <span>-42$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur vesti.</p>
				</div>
				<div class="menu-items">
					<h4>Chicken Fajitas <span>-26$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.</p>
				</div>
				<div class="menu-items">
					<h4>Corn Chowder <span>-22$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur vesti.</p>
				</div>
				<div class="menu-items">
					<h4>Honey Baked Chicken <span>-33$</span></h4>
					<p> Vestibulum eu ligula et pharetra efficitur. Maecenas eleifend.</p>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="readmore">
				<a href="#">Read more</a>
			</div>
		</div>-->
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