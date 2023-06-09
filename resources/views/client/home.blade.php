@extends("welcome")
@section("content")
<aside id="colorlib-hero">
	<div class="flexslider">
		<ul class="slides">
			<li style="background-image: url('http://127.0.0.1:8000/frontend/images/img_bg_1.jpg')">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 offset-sm-3 text-center slider-text">
							<div class="slider-text-inner">
								<div class="desc">
									<h1 class="head-1">Men's</h1>
									<h2 class="head-2">Shoes</h2>
									<h2 class="head-3">Collection</h2>
									<p class="category"><span>New trending shoes</span></p>
									<p><a href="/men" class="btn btn-primary">Shop Collection</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url('http://127.0.0.1:8000/frontend/images/img_bg_2.jpg')">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 offset-sm-3 text-center slider-text">
							<div class="slider-text-inner">
								<div class="desc">
									<h1 class="head-1">Huge</h1>
									<h2 class="head-2">Sale</h2>
									<h2 class="head-3"><strong class="font-weight-bold">50%</strong> Off</h2>
									<p class="category"><span>Big sale sandals</span></p>
									<p><a href="/women" class="btn btn-primary">Shop Collection</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li style="background-image: url('http://127.0.0.1:8000/frontend/images/img_bg_3.jpg')">
				<div class="overlay"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6 offset-sm-3 text-center slider-text">
							<div class="slider-text-inner">
								<div class="desc">
									<h1 class="head-1">New</h1>
									<h2 class="head-2">Arrival</h2>
									<h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off</h2>
									<p class="category"><span>New stylish shoes for men</span></p>
									<p><a href="/men" class="btn btn-primary">Shop Collection</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</aside>
<div class="colorlib-intro">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
			</div>
		</div>
	</div>
</div>
<div class="colorlib-product">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-6 text-center">
				<div class="featured">
					<a href="#" class="featured-img" style="background-image: url('http://127.0.0.1:8000/frontend/images/men.jpg')"></a>
					<div class="desc">
						<h2><a href="/men">Shop Men's Collection</a></h2>
					</div>
				</div>
			</div>
			<div class="col-sm-6 text-center">
				<div class="featured">
					<a href="#" class="featured-img" style="background-image: url('http://127.0.0.1:8000/frontend/images/women.jpg');"></a>
					<div class="desc">
						<h2><a href="/women">Shop Women's Collection</a></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="colorlib-product">
	<div class="container">
		<div class="row">
			@if($mess = Session::get("unsearch"))

			<img src="https://picturesofmaidenhead.files.wordpress.com/2019/01/image-not-found.jpg?w=1620" class="img-fluid" alt="">
			@endif
		</div>
		<div class="row">
			<div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
				<h2>Best Sellers</h2>
			</div>
		</div>
		<div class="row row-pb-md">


			@foreach($shoes as $row)
			<div class="col-lg-3 mb-4 text-center">
				<div class="product-entry border">
					<a href="/detail-product/{{$row->id}}" class="prod-img">
						<img src="{{asset('public/image/'.$row->avatar)}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
					</a>
					<div class="desc">
						<h2><a href="/detail-product/{{$row->id}}">{{$row->name}}</a></h2>
						<span class="price">{{number_format($row->price)}} VNĐ</span>
					</div>
				</div>
			</div>
			@endforeach


			<div class="w-100"></div>

		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<p><a href="/home/all_product" class="btn btn-primary btn-lg">Shop All Products</a></p>
			</div>
		</div>
	</div>
</div>


@endsection
@section("javascript")


@endsection