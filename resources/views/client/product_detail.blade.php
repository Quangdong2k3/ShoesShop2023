<?php

use Symfony\Component\Console\Input\Input;
?>
@section("css")

@endsection
@extends('welcome')
@section('content')
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col">
				<p class="bread"><span><a href="index.html">Home</a></span> / <span>Product Details</span></p>
			</div>
		</div>
	</div>
</div>

@if(Session::get("success")!=null||Session::get("success")!="")
<p class="alert alert-success">{{Session::get("success")}}</p>
@endif

<div class="colorlib-product" style="padding-top: 0 !important;">
	<div class="container">
		<div class="row row-pb-lg product-detail-wrap">
		<div class="col-sm-8">
			<img id=featured src="{{asset('public/image/'.$shoe_detail->avatar)}}">

			<div id="slide-wrapper" >
				<img id="slideLeft" class="arrow" src="https://icon-library.com/images/back-icon-png/back-icon-png-16.jpg">

				<div id="slider">
					@foreach($shoesimgs as $img)
					<img class="thumbnail active" src="{{asset('public/image/'.$img->picture)}}">
					@endforeach
				</div>

				<img id="slideRight" class="arrow" src="https://th.bing.com/th/id/R.34430d40d721d9e7d6ef59d1802380ca?rik=yf97wLJATIMUsA&riu=http%3a%2f%2fpluspng.com%2fimg-png%2fnext-button-png-arrow-next-right-icon-512.png&ehk=HurbUZvWK18qVGuCSBoywX4wjbI%2bm0EFJJPfwFjcaX0%3d&risl=&pid=ImgRaw&r=0">
			</div>
		</div>
			<div class="col-sm-3">
				<div class="product-desc">
					<h3>{{$shoe_detail->name}}</h3>
					@if($sizes>0)
					<p class="text-info" style="font-weight: bold;">Con Hang</p>
					@else
					<p class="text-info" style="font-weight: bold;">Het Hang</p>

					@endif

					<p class="price">
						<span>{{number_format($shoe_detail->price) }} VNĐ</span>
						<!-- <span class="rate">
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-full"></i>
							<i class="icon-star-half"></i>
							(74 Rating)
						</span> -->
					</p>
					<p>{{$shoe_detail->desc_shoes}}</p>
					<div class="size-wrap">

						<div class="block-26 mb-2">
							<h4>Size</h4>
							<ul>

								<form action="/cart/addCart" method="post">
									@csrf
									<div class="form-group">
										<select name="size_id" id="mySelect" class="form-control" onchange="myQuantity()">
											<option selected value="0">---chọn size---</option>

											@foreach($size as $row)

											<option class="form-select" value="{{$row->size_id}}"><span class="h3 text-danger">{{$row->size}}(Inventory: {{$row->quantity}})</span></option>


											@endforeach

										</select>
									</div>
									@if($errors->has('size_id'))
									<div class="alert alert-danger">{{ $errors->first('size_id') }} <i class="fa fa-warning" aria-hidden="true"></i></div>
									@endif



							</ul>
						</div>
						<!-- <div class="block-26 mb-4">
									<h4>Width</h4>
				               <ul>
				                  <li><a href="#">M</a></li>
				                  <li><a href="#">W</a></li>
				               </ul>
				            </div> -->
					</div>
					<div class="input-group mb-4">
						<div class="block-26 mb-2">
							<h4>Quantity</h4>
						</div>

						<span class="input-group-btn">
							<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
								<i class="icon-minus2"></i>
							</button>
						</span>
						<input type="text" id="quantity" name="quantity" class="form-control input-number" value="{{old('quantity',1)}}" minlength="1" min="1">
						<span class="input-group-btn ml-1">
							<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
								<i class="icon-plus2"></i>
							</button>
						</span>
					</div>
					@if($errors->has('quantity'))
					<div class="alert alert-danger">{{ $errors->first('quantity') }} <i class="fa fa-warning" aria-hidden="true"></i></div>
					@endif
					@if(Session::get("err")!=null||Session::get("err")!="")
					<p class="alert alert-danger">{{Session::get("err")}}</p>
					@endif
					<div class="row">
						<div class="col-sm-12 text-center">
							<p class="addtocart"><button type="submit" class="btn btn-primary btn-addtocart  d-flex"><i class="icon-shopping-cart"></i> Add to Cart</button></p>
						</div>
					</div>

				</div>
				</form>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

								<li class="nav-item">
									<a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Description</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Manufacturer</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
								</li>
							</ul>

							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
									<ul>
										<li>The Big Oxmox advised her not to do so</li>
										<li>Because there were thousands of bad Commas</li>
										<li>Wild Question Marks and devious Semikoli</li>
										<li>She packed her seven versalia</li>
										<li>tial into the belt and made herself on the way.</li>
									</ul>
								</div>

								<div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
									<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
									<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
								</div>

								<div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
									<div class="row">
										<div class="col-md-8">
											<h3 class="head">23 Reviews</h3>
											<div class="review">
												<div class="user-img" style="background-image: url(images/person1.jpg)"></div>
												<div class="desc">
													<h4>
														<span class="text-left">Jacob Webb</span>
														<span class="text-right">14 March 2018</span>
													</h4>
													<p class="star">
														<span>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-half"></i>
															<i class="icon-star-empty"></i>
														</span>
														<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
													</p>
													<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
												</div>
											</div>
											<div class="review">
												<div class="user-img" style="background-image: url(frontend/images/person2.jpg)"></div>
												<div class="desc">
													<h4>
														<span class="text-left">Jacob Webb</span>
														<span class="text-right">14 March 2018</span>
													</h4>
													<p class="star">
														<span>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-half"></i>
															<i class="icon-star-empty"></i>
														</span>
														<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
													</p>
													<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
												</div>
											</div>
											<div class="review">
												<div class="user-img" style="background-image: url(frontend/images/person3.jpg)"></div>
												<div class="desc">
													<h4>
														<span class="text-left">Jacob Webb</span>
														<span class="text-right">14 March 2018</span>
													</h4>
													<p class="star">
														<span>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-half"></i>
															<i class="icon-star-empty"></i>
														</span>
														<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
													</p>
													<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="rating-wrap">
												<h3 class="head">Give a Review</h3>
												<div class="wrap">
													<p class="star">
														<span>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															(98%)
														</span>
														<span>20 Reviews</span>
													</p>
													<p class="star">
														<span>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-empty"></i>
															(85%)
														</span>
														<span>10 Reviews</span>
													</p>
													<p class="star">
														<span>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-empty"></i>
															<i class="icon-star-empty"></i>
															(70%)
														</span>
														<span>5 Reviews</span>
													</p>
													<p class="star">
														<span>
															<i class="icon-star-full"></i>
															<i class="icon-star-full"></i>
															<i class="icon-star-empty"></i>
															<i class="icon-star-empty"></i>
															<i class="icon-star-empty"></i>
															(10%)
														</span>
														<span>0 Reviews</span>
													</p>
													<p class="star">
														<span>
															<i class="icon-star-full"></i>
															<i class="icon-star-empty"></i>
															<i class="icon-star-empty"></i>
															<i class="icon-star-empty"></i>
															<i class="icon-star-empty"></i>
															(0%)
														</span>
														<span>0 Reviews</span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="colorlib-product" style="padding-top: 0 !important;">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
				<h2>Related Products</h2>
			</div>
		</div>
		<div class="row">
			@foreach($shoes_related as $row)
			<div class="col-md-3 col-lg-3 mb-4 text-center">
				<div class="product-entry border">
					<a href="/detail-product/{{$row->id}}" class="prod-img">
						<img src="{{asset('public/image/'.$row->avatar)}}" class="img-fluid" alt="Free html5 bootstrap 4 template">
					</a>
					<div class="desc">
						<h2><a href="/detail-product/{{$row->id}}">{{$row->name}}</a></h2>
						<span class="price">{{number_format($row->price)}} VND</span>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>







</div>
</div>

@endsection
@section("javascript")
<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})


	</script>
@endsection