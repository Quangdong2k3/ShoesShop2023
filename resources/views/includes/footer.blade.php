<div class="colorlib-partner">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
				<h2>Trusted Partners</h2>
			</div>
		</div>
		<div class="row">
			<div class="col partner-col text-center">
				<img src="{{asset('frontend/images/brand-1.jpg')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
			</div>
			<div class="col partner-col text-center">
				<img src="{{asset('frontend/images/brand-2.jpg')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
			</div>
			<div class="col partner-col text-center">
				<img src="{{asset('frontend/images/brand-3.jpg')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
			</div>
			<div class="col partner-col text-center">
				<img src="{{asset('frontend/images/brand-4.jpg')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
			</div>
			<div class="col partner-col text-center">
				<img src="{{asset('frontend/images/brand-5.jpg')}}" class="img-fluid" alt="Free html4 bootstrap 4 template">
			</div>
		</div>
	</div>
</div>
<footer id="colorlib-footer" role="contentinfo">
	<div class="container">
		<div class="row row-pb-md">
			<div class="col footer-col colorlib-widget">
				<h4>About Footwear</h4>
				<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life</p>
				<p>
				<ul class="colorlib-social-icons">
					<li><a href="#"><i class="icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon-linkedin"></i></a></li>
					<li><a href="#"><i class="icon-dribbble"></i></a></li>
				</ul>
				</p>
			</div>
			<div class="col footer-col colorlib-widget">
				<h4>Customer Care</h4>
				<p>
				<ul class="colorlib-footer-links">
					<li><a href="#">Contact</a></li>
					<li><a href="#">Returns/Exchange</a></li>
					<li><a href="#">Gift Voucher</a></li>
					<li><a href="#">Wishlist</a></li>
					<li><a href="#">Special</a></li>
					<li><a href="#">Customer Services</a></li>
					<li><a href="#">Site maps</a></li>
				</ul>
				</p>
			</div>
			<div class="col footer-col colorlib-widget">
				<h4>Information</h4>
				<p>
				<ul class="colorlib-footer-links">
					<li><a href="#">About us</a></li>
					<li><a href="#">Delivery Information</a></li>
					<li><a href="#">Privacy Policy</a></li>
					<li><a href="#">Support</a></li>
					<li><a href="#">Order Tracking</a></li>
				</ul>
				</p>
			</div>

			<div class="col footer-col">
				<h4>News</h4>
				<ul class="colorlib-footer-links">
					<li><a href="blog.html">Blog</a></li>
					<li><a href="#">Press</a></li>
					<li><a href="#">Exhibitions</a></li>
				</ul>
			</div>

			<div class="col footer-col">
				<h4>Contact Information</h4>
				<ul class="colorlib-footer-links">
					<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
					<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
					<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
					<li><a href="#">yoursite.com</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="copy">
		<div class="row">
			<div class="col-sm-12 text-center">
				<p>
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
					<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> , <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
				</p>
			</div>
		</div>
	</div>
</footer>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>

<!-- jQuery -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script src="{{ asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
@yield("javascript")

<!-- popper -->
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<!-- bootstrap 4.1 -->
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<!-- jQuery easing -->
<script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
<!-- Waypoints -->
<script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
<!-- Flexslider -->
<script src="{{ asset('frontend/js/jquery.flexslider-min.js') }}"></script>
<!-- Owl carousel -->
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/js/magnific-popup-options.js') }}"></script>
<!-- Date Picker -->
<!-- <script src="{{ asset('frontend/js/bootstrap-datepicker.js') }}"></script> -->
<!-- Stellar Parallax -->
<script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
<!-- Main -->
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script>
	$(document).ready(function() {
		var quantitiy = 0;
		$('.quantity-right-plus').click(function(e) {

			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			$('#quantity').val(quantity + 1);


			// Increment

		});

		$('.quantity-left-minus').click(function(e) {
			// Stop acting like a button
			e.preventDefault();
			// Get the field name
			var quantity = parseInt($('#quantity').val());

			// If is not undefined

			// Increment
			if (quantity > 0) {
				$('#quantity').val(quantity - 1);
			}
		});

	});

</script>
<script>
	$(document).ready(function() {
		$(window).scroll(function() {
			if ($(this).scrollTop()) {
				$('#menu_fix').addClass('sticky');
				// alert(123);
			} else {
				$('#menu_fix').removeClass('sticky');

			}
		})
	})
</script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/vn.js"></script>
<script>
	flatpickr("#myID", {
		dateFormat: "d-m-Y",
		maxDate: "today",
		"locale": "vn"
	});
</script>
<script>
	$(document).ready(function(){
		$.ajax({
			type:"get",
			url:"/countCartOrder",
			dataType:"json",
			success:function(data){
				$("#countCart").text(data.cart_count);
				$("#countOrder").text(data.order_count);

				console.log(data.cart_count);
			}
		})
	})
</script>


</body>

</html>