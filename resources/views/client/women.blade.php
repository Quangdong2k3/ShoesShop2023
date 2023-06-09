@extends("welcome")
@section("content")
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
				<div class="breadcrumbs-img" style="background-image: url(http://127.0.0.1:8000/frontend/images/cover-img-1.jpg);">
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
					<div class="featured-img featured-img-2" style="background-image: url(http://127.0.0.1:8000/frontend/images/img_bg_2.jpg);">
						<h2>Casuals</h2>
						<p><a href="#" class="btn btn-primary btn-lg">Shop now</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 text-center">
				<div class="featured">
					<div class="featured-img featured-img-2" style="background-image: url(http://127.0.0.1:8000/frontend/images/women.jpg);">
						<h2>Dress</h2>
						<p><a href="#" class="btn btn-primary btn-lg">Shop now</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-4 text-center">
				<div class="featured">
					<div class="featured-img featured-img-2" style="background-image: url(http://127.0.0.1:8000/frontend/images/item-11.jpg);">
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
								@foreach($brand as $b)
								<li><a href="/women/women_brand/{{$b->brand_id}}">{{$b->brand_name}}</a></li>
								@endforeach

							</ul>
						</div>
					</div>
					<div class="col-sm-12">
						<div class="side border mb-1">
							<h3>Size/Width</h3>
							<div class="block-26 mb-2">
								<h4>Size</h4>
								<ul>
									@foreach($size as $s)
												<li><a href="/women/size_filter/{{$s->size}}">{{$s->size}}</a></li>

									@endforeach

									<!-- <li><a href="#">7.5</a></li>
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
					                  <li><a href="#">14</a></li> -->
								</ul>
							</div>
							<!-- <div class="block-26">
								<h4>Width</h4>
								<ul>
									<li><a href="#">M</a></li>
									<li><a href="#">W</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<!-- <div class="col-sm-12">
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
					</div> -->
				</div>
			</div>
			@yield("contentone")
		</div>
	</div>
</div>
@endsection