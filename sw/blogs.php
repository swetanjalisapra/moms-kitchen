<?php include"header.php";?>
		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<!-- gallery -->
<div class="blog">
	<div class="container">
		<h3 class="heading">Our <span>Blogs</span></h3>
		<p class="heading">Let's Read Out !!</p>
		
		<?php 
		$i=0;
		$result1 = mysqli_query($conn," SELECT * FROM `blog`") or die( mysqli_error($conn) );
		while($row1 = mysqli_fetch_array($result1)){
			if($i==0||$i%4==0){
			?>
		
			<div class="agileits_banner_bottom_grid_three">
			<?php }
		

			?>	
			
			
				<div class="col-md-3 agileinfo_banner_bottom_grid_three_left">
					<div class="wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/<?php echo $row1['img'];?>" alt=" " class="img-responsive" />
							<figcaption>
								<a href="blog.php?id=<?php echo $row1['id'];?>"><h3><span><?php echo $row1['name'];?></span></h3></a>
								<p></p>
		</figcaption>			
						</figure>
					</div>
					<p class="w3_agileits_para"><?php echo $row1['sdescrip'];?></p>
				</div>
				<?php $i=$i+1;
				if($i%4==0){?>
				<div class="clearfix"> </div>
				</div>
		<?php } }?>

				
<div class="clearfix"></div>
	</div>
	</div>
</div>

<!-- News letter -->
<?php include "footer.php";?>