<!DOCTYPE HTML>
<html>
	<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">

	<!-- Theme style  -->
	<!-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
	<link rel="stylesheet" href="{{ asset('css/style1.css') }}">
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.html">Footwear</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
						<ul>
								<li><a href="{{ route('welcome') }}">Home</a></li>
								<li class="has-dropdown">
									<a href="{{ route('men') }}">Men</a>
									<ul class="dropdown">
										<li><a href="{{ route('product_detail') }}">Product Detail</a></li>
										<li><a href="{{ route('cart') }}">Shopping Cart</a></li>
										<li><a href="{{ route('checkout') }}">Checkout</a></li>
										<li><a href="{{ route('order_complete') }}">Order Complete</a></li>
										<li><a href="{{ route('add_to_wishlist') }}">Wishlist</a></li>
									</ul>
								</li>
								<li class=" active"><a href="{{ route('women') }}">Women</a></li>
								<li><a href="{{ route('about') }}">About</a></li>
								<li><a href="{{ route('contact') }}">Contact</a></li>
								<li class="cart"><a href="{{ route('cart') }}"><i class="icon-shopping-cart"></i> Cart [0]</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Women</span></p>
					</div>
				</div>
			</div>
		</div>

		<div class="breadcrumbs-two">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs-img" style="background-image: url(images/cover-img-1.jpg);">
							<h2>Women's</h2>
						</div>
						<div class="menu text-center">
							<p><a href="#">New Arrivals</a> <a href="#">Best Sellers</a> <a href="#">Extended Widths</a> <a href="#">Sale</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-featured">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(images/img_bg_2.jpg);">
								<h2>Casuals</h2>
								<p><a href="#" class="btn btn-primary btn-lg">Shop now</a></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(images/women.jpg);">
								<h2>Dress</h2>
								<p><a href="#" class="btn btn-primary btn-lg">Shop now</a></p>
							</div>
						</div>
					</div>
					<div class="col-sm-4 text-center">
						<div class="featured">
							<div class="featured-img featured-img-2" style="background-image: url(images/item-11.jpg);">
								<h2>Sports</h2>
								<p><a href="#" class="btn btn-primary btn-lg">Shop now</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-product">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-xl-3">
						<div class="row">
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Brand</h3>
									<ul>
										<li><a href="#">Nike</a></li>
										<li><a href="#">Adidas</a></li>
										<li><a href="#">Merrel</a></li>
										<li><a href="#">Gucci</a></li>
										<li><a href="#">Skechers</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Size/Width</h3>
									<div class="block-26 mb-2">
										<h4>Size</h4>
					               <ul>
					                  <li><a href="#">7</a></li>
					                  <li><a href="#">7.5</a></li>
					                  <li><a href="#">8</a></li>
					                  <li><a href="#">8.5</a></li>
					                  <li><a href="#">9</a></li>
					                  <li><a href="#">9.5</a></li>
					                  <li><a href="#">10</a></li>
					                  <li><a href="#">10.5</a></li>
					                  <li><a href="#">11</a></li>
					                  <li><a href="#">11.5</a></li>
					                  <li><a href="#">12</a></li>
					                  <li><a href="#">12.5</a></li>
					                  <li><a href="#">13</a></li>
					                  <li><a href="#">13.5</a></li>
					                  <li><a href="#">14</a></li>
					               </ul>
					            </div>
					            <div class="block-26">
										<h4>Width</h4>
					               <ul>
					                  <li><a href="#">M</a></li>
					                  <li><a href="#">W</a></li>
					               </ul>
					            </div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Style</h3>
									<ul>
										<li><a href="#">Slip Ons</a></li>
										<li><a href="#">Boots</a></li>
										<li><a href="#">Sandals</a></li>
										<li><a href="#">Lace Ups</a></li>
										<li><a href="#">Oxfords</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Colors</h3>
									<ul>
										<li><a href="#">Black</a></li>
										<li><a href="#">White</a></li>
										<li><a href="#">Blue</a></li>
										<li><a href="#">Red</a></li>
										<li><a href="#">Green</a></li>
										<li><a href="#">Grey</a></li>
										<li><a href="#">Orange</a></li>
										<li><a href="#">Cream</a></li>
										<li><a href="#">Brown</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Material</h3>
									<ul>
										<li><a href="#">Leather</a></li>
										<li><a href="#">Suede</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="side border mb-1">
									<h3>Technologies</h3>
									<ul>
										<li><a href="#">BioBevel</a></li>
										<li><a href="#">Groove</a></li>
										<li><a href="#">FlexBevel</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-xl-9">
						<div class="row row-pb-md">
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-2.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Minam Meaghan</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-3.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Men's Taja Commissioner</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Russ Men's Sneakers</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-5.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-6.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-7.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-8.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-9.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-10.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-11.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-12.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="w-100"></div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-13.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-14.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
							<div class="col-lg-4 mb-4 text-center">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="images/item-15.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
									<div class="desc">
										<h2><a href="#">Women's Boots Shoes Maca</a></h2>
										<span class="price">$139.00</span>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12 text-center">
								<div class="block-27">
				               <ul>
					               <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
				                  <li class="active"><span>1</span></li>
				                  <li><a href="#">2</a></li>
				                  <li><a href="#">3</a></li>
				                  <li><a href="#">4</a></li>
				                  <li><a href="#">5</a></li>
				                  <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
				               </ul>
				            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-partner">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
						<h2>Trusted Partners</h2>
					</div>
				</div>
				<div class="row">
					<div class="col partner-col text-center">
						<img src="images/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="images/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="images/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="images/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
					</div>
					<div class="col partner-col text-center">
						<img src="images/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
	<script src="{{ asset('js/jquery.min.js') }}"></script>
   <!-- popper -->
   <script src="{{ asset('js/popper.min.js') }}"></script>
   <!-- bootstrap 4.1 -->
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   <!-- jQuery easing -->
   <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
	<!-- Date Picker -->
	<script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>


	</body>
</html>
