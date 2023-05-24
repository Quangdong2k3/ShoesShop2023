<!DOCTYPE HTML>
<html>

<head>
    <title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
    <!-- Ion Icon Fonts-->
    <link rel="stylesheet" href="{{ asset('frontend/css/ionicons.min.css') }}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">

    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_orange.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

</head>
<style>
    #content-wrapper{
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
}

.column{
	width: 600px;
	padding: 10px;

}

#featured{
	max-width: 500px;
	max-height: 600px;
	object-fit: cover;
	cursor: pointer;
	border: 2px solid black;

}

.thumbnail{
	object-fit: cover;
	max-width: 180px;
	max-height: 100px;
	cursor: pointer;
	opacity: 0.5;
	margin: 5px;
	border: 2px solid black;

}

.thumbnail:hover{
	opacity:1;
}

.active{
	opacity: 1;
}

#slide-wrapper{
	max-width: 500px;
	display: flex;
	min-height: 100px;
	align-items: center;
}

#slider{
	width: 440px;
	display: flex;
	flex-wrap: nowrap;
	overflow-x: auto;

}

#slider::-webkit-scrollbar {
		width: 8px;

}

#slider::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);

}
 
#slider::-webkit-scrollbar-thumb {
  background-color: #dede2e;
  outline: 1px solid slategrey;
   border-radius: 100px;

}

#slider::-webkit-scrollbar-thumb:hover{
    background-color: #18b5ce;
}

.arrow{
	width: 30px;
	height: 30px;
	cursor: pointer;
	transition: .3s;
}

.arrow:hover{
	opacity: .5;
	width: 35px;
	height: 35px;
}
    .sticky {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        background: #fff;
        z-index: 10;
        color: #fff;
        height: 75px !important;
        box-shadow: 3px 6px 10px 4px #ccc;
        transition: all 0.5s;
    }

    .sticky .top-menu .info-class {
        display: none;
    }

    .sticky>.top-menu {
        padding-top: 0px !important;
    }

    /* #menu_fix>.top-menu{
        background: red;
    } */
    body {
        overflow-x: hidden;
        min-height: 100vh;
        width: 100vw;
    }

    .img-info {
        width: 35px;
        height: 35px;
        border-radius: 100rem;
        box-shadow: 0px 5px 5px 1px #ccc;
    }
</style>

<body>
    <div class="colorlib-loader"></div>
    <div class="row">
        <div class="col-md-10 text-right">

            @if(request()->cookie("cusId") !== null && request()->cookie("cusId")!=="")
          
            <div class="mt-3 ">
                <a href="/profile/customer/{{request()->cookie('cusId')}}" class="h5 text-info mx-3">{{request()->cookie('namecustomer')}}</a>
                <a href="/profile/customer/{{request()->cookie('cusId')}}"><img class="img-info" src="{{asset('public/image/'.request()->cookie('cusAvatar'))}}" alt=""></a>
            </div>


            @endif
        </div>
    </div>
    <nav class="colorlib-nav" role="navigation" id="menu_fix">
        <div class="top-menu" style="padding-top: 10px ;">


            <div class="container">
                <div class="row info-class">
                    <div class="col-sm-7 col-md-9">
                        <div id="colorlib-logo"><a href="/">Footwear</a></div>
                    </div>
                    <div class="col-sm-5 col-md-3">
                        <form action="{{route('search')}}" class="search-wrap" method="get">
                            @csrf
                            <div class="form-group">
                                <input type="search" name="search" class="form-control search" placeholder="Search" @if($tb=session()->get("info"))
                                value="{{$tb}}" @endif>
                                <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-left menu-1">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li class="has-dropdown">
                                <a href="{{ route('men') }}">Men</a>
                                <!-- <ul class="dropdown">
                                    <li><a href="{{ route('product_detail') }}">Product Detail</a></li>
                                    <li><a href="{{ route('cart') }}">Shopping Cart</a></li>
                                    <li><a href="{{ route('checkout') }}">Checkout</a></li>
                                    <li><a href="{{ route('order_complete') }}">Order Complete</a></li>
                                    <li><a href="{{ route('add_to_wishlist') }}">Wishlist (@if(request()->cookie('cusId') ) {{session('count_cart')}} @else{{0}}@endif)</a></li>
                                </ul> -->
                            </li>
                            <li><a href="{{ route('women') }}">Women</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            @if(request()->cookie("cusId") !== null && request()->cookie("cusId")!=="")

                            <li class="has-dropdown">
                                <a href="/profile/customer/{{request()->cookie('cusId')}}">Profile</a>
                                <ul class="dropdown">
                                    <li><a href="/profile/customer/{{request()->cookie('cusId')}}">My Information</a></li>


                                    <li><a href="{{ route('cart') }}">Checkout</a></li>
                                    <!-- <li><a href="{{ route('My_Order') }}">Wishlist(@if(session('sumOrder')){{session('sumOrder')}}@else{{0}}@endif)</a></li>  -->
                                    <li><a href="{{ route('My_Order') }}">Wishlist(<span id="countOrder">0</span>)</a></li>
                                    <li><a href="/Customer/Logout" class="text-link">
                                            Logout
                                        </a></li>
                                </ul>
                            </li>
                            @endif
                            <li class="cart d-flex"><a href="{{ route('cart') }}"><i class="icon-shopping-cart"></i> Cart [<span id="countCart">0</span>] <!--@if(request()->cookie("cusId")){{session("countCart")}}@else{{0}}@endif ]--></a>
                            @if(request()->cookie("cusId") === null || request()->cookie("cusId")==="")
            <a href="/Customer/Login" class="text-link">
                <p class="h5">Login</p>
            </a>
            @else
            <li><a href="/Customer/Logout" class="text-link">
                                            Logout
                                        </a>
            @endif</li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="page">
        <nav class="colorlib-nav" role="navigation">

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