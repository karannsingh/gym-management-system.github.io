<!-- Footer Start -->
<footer class="footersection" id="aboutus">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 col-12 footer-div">
				<div>
					<h3>About Adiansh</h3>
					<p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit sed.</p>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12 footer-div text-center">
				<div>
					<h3>Navigation Links</h3>
					<li><a href="#">Home</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Price</a></li>
					<li><a href="#">About</a></li>
				</div>
			</div>
			<div class="col-lg-4 col-md-12 col-12 footer-div">
				<div>
					<h3>Newsletter</h3>
					<p>Lorem ipsum dolor sit amet, consec-tetur adipiscing elit sed.</p>
					<div class="container newsletter-main">
						<div class="row">
							<div class="col-lg-12 col-12">
								<div class="input-group mb-3">
									<input type="text" class="form-control news-input" placeholder="Your Email">
									<div class="input-group-append">
										<span class="input-group-text">Subscribe</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-5 text-center">
			<p>Copyright ©2022 All rights reserved | This template is made by Almas Khan</p>
		</div>

		<div class="scrolltop float-right">
			<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
		</div>
	</div>
</footer>
<!-- Footer End -->

<!-- Bootstrap JS Files -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<!-- Ajax JS File -->
<script src="js/jquery-3.2.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

<!-- Share Button Link -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-623f50c5fa03553f"></script>

<!-- Main JS File -->
<script src="js/main.js"></script>
<script src="admin/assets/vendor/quill/quill.min.js"></script>
<script src="admin/assets/js/main.js"></script>

<script>

	$('.count').counterUp({
		duration: 3000,
		delay: 16
	})

	mybutton = document.getElementById("myBtn");

	window.onscroll = function(){scrollfunction()};

	function scrollfunction(){
		if(document.body.scrollTop > 20 || document.documentElement.scrollTop>20){
			mybutton.style.display = "block";
		}else{
			mybutton.style.display = "none";
		}
	}


	function topFunction(){
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
	
</script>

</body>
</html>