<!-- Footer -->
<div class="footer w3ls">
	<div class="container">
		<div class="footer-main">
			<div class="footer-top">
				<div class="col-md-4 ftr-grid fg1">
					<h3>opening timings</h3>
					<p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Mon - friday</span> : 9am to 8pm</p>
					<p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Saturday</span> : 9am to 5pm</p>
					<p><span class="fa fa-clock-o" aria-hidden="true"></span><span>Sunday</span> : 6am to 11pm</p>
				</div>
				<div class="col-md-4 ftr-grid fg2 mid-gd">
					
						<h1><a href="index.php" style="color:white;font-size:43px;">Mom's &hearts; Kitchen</a></h1>
					
				</div>
				<div class="col-md-4 ftr-grid fg2">
					<h3>Our Address</h3>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>Lorem ipsum dolor sit amet.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p>+1 (512) 154 8176</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="ftr-address">
						<div class="local">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="ftr-text">
							<p><a href="mailto:info@example.com">info@example.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			   <div class="clearfix"> </div>
			</div>
			
		</div>
	</div>
</div>
 <div class="copyrights">
	<div class="container">
		<div class="copyright">
			<p><b>Made With Lots Of L&hearts;VE </b></p>
		</div>
		<div class="social-icons">
			<ul>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- Footer -->	

<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 5,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
<!-- //Owl-Carousel-JavaScript -->  

<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(window).load(function(){
  $('.flexslider').flexslider({
	animation: "slide",
	start: function(slider){
	  $('body').removeClass('loading');
	}
  });
});
</script>
<!-- //flexSlider -->


<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>

<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>

	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->

<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->

</body>
</html>