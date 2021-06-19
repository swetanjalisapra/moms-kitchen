<?php include"header.php";

$id=$_GET['id'];





 $result0 = mysqli_query($conn," SELECT * FROM `home` where verify=1 and active=1 and id='$id' ") or die( mysqli_error($conn) );
                          $row0 = mysqli_fetch_array($result0);
			$_SESSION['kitchen']=$id;	
echo $_SESSION['kitchen'];			
						  
						  
?>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">	<!--//header-->
		<div class="banner-header banner2">
	<div class="banner-dott1">
		
	</div>
</div>
<!-- // banner -->
          <style>
		  .quantity {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
}
.quantity__minus,
.quantity__plus {
  display: block;
  width: 22px;
  height: 23px;
  margin: 0;
  background: #dee0ee;
  text-decoration: none;
  text-align: center;
  line-height: 23px;
}
.quantity__minus:hover,
.quantity__plus:hover {
  background: #575b71;
  color: #fff;
} 
.quantity__minus {
  border-radius: 3px 0 0 3px;
}
.quantity__plus {
  border-radius: 0 3px 3px 0;
}
.quantity__input {
  width: 32px;
  height: 19px;
  margin: 0;
  padding: 0;
  text-align: center;
  border-top: 2px solid #dee0ee;
  border-bottom: 2px solid #dee0ee;
  border-left: 1px solid #dee0ee;
  border-right: 2px solid #dee0ee;
  background: #fff;
  color: #8184a1;
}
.quantity__minus:link,
.quantity__plus:link {
  color: #8184a1;
} 
.quantity__minus:visited,
.quantity__plus:visited {
  color: #fff;
}
</style>		  
<!-- menu section -->
<div class="blog">
	<div class="container">
		<h3 class="heading">Our <span>Menu</span></h3>
		<p class="heading"><?php echo $row0['name'];?></p>
				<div class="menu-grids">
		
							<div class="col-md-4">
				<img src="images/<?php echo $row0['img'];?>" alt="" style="height:233px; "/>
				<?php $result1 = mysqli_query($conn," SELECT * FROM `food` where hid='$id' ") or die( mysqli_error($conn) );
                          while($row1 = mysqli_fetch_array($result1)){?>
						  
				<div class="menu-items">
					<h4><?php echo $row1['name'];?> <span>
<div class="quantity">
    <a  id="<?php echo $row1['id'];?>minus" class="quantity__minus" onclick="addtocart(<?php echo $row1['id'];?>,0)"><span style="float: none;">-</span></a>
    <input name="quantity" type="text" id="in<?php echo $row1['id'];?>" class="quantity__input" value="0">
    <a  id="<?php echo $row1['id'];?>plus" class="quantity__plus" onclick="addtocart(<?php echo $row1['id'];?>,1)"><span style="float: none;box-sizing:none;-webkit-box-sizing: none;">+</span></a>
  </div>
					</span></h4>
					<p> <b>Rs</b> <strike style="color:red;"><b><?php echo $row1['mp'];?></b></strike> <b style="color:green;"><?php echo $row1['dp'];?></b></p>
				</div>
						  <?php } ?>
				
			                </div> 
							
					<div class="col-md-4">
				<img src="images/logo.jpg" alt="" style="height:233px;"/>
				
			                 </div>
							 
				<div class="col-md-4">
				<img src="images/<?php echo $row0['img'];?>" alt=""  style="height:233px; "/>
				
			                 </div>
							
			<div class="clearfix"></div>
			<!--<div class="readmore">
				<a href="#">Read more</a>
			</div>-->
		</div>
			 <a href="cart.php"><img src="images/bag.png" id="element" alt="" class="img-fluid" style="display:none; position: fixed;
  bottom: 50px;
  left: -1%;
  cursor: pointer;
  margin-left: 21px;
 width:150px;
  height: 150px;
  padding: 20px;
  z-index: 99;" ></a>
	</div>
</div>
<script>



function addtocart(id,ac){
		
		 
		if(ac==0)
		{   
	
			$.ajax
({
    type: "POST",
    url: "carting.php?q="+id+"&ac="+ac,

    dataType: 'json',
    cache: false,
    success: function(data)
    {    
	  $("#in"+id).val(data);
       
    }
});
				
		}
		else if(ac==1)
		{   
				$.ajax
({
    type: "POST",
    url: "carting.php?q="+id+"&ac="+ac,
	
    dataType: 'json',
    cache: false,
    success: function(data)
    {
         $("#in"+id).val(data);
    }
});  
document.getElementById("element").style.display = "block";

		$("#element").effect( "shake");
	}
	}
</script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script><script  src="./script.js"></script>
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