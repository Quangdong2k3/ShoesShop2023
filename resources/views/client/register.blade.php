<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body {
        color: #000;
        overflow-x: hidden;
        height: 100%;
        background-color: #B0BEC5;
        background-repeat: no-repeat;
    }

    .card0 {
        box-shadow: 0px 4px 8px 0px #757575;
        border-radius: 0px;
    }

    .card2 {
        margin: 0px 40px;
    }

    .logo {
        width: 200px;
        height: 100px;
        margin-top: 20px;
        margin-left: 35px;
    }

    .image {
        width: 360px;
        height: 280px;
    }

    .border-line {
        border-right: 1px solid #EEEEEE;
    }

    .facebook {
        background-color: #3b5998;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer;
    }

    .twitter {
        background-color: #1DA1F2;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer;
    }

    .linkedin {
        background-color: #2867B2;
        color: #fff;
        font-size: 18px;
        padding-top: 5px;
        border-radius: 50%;
        width: 35px;
        height: 35px;
        cursor: pointer;
    }

    .line {
        height: 1px;
        width: 45%;
        background-color: #E0E0E0;
        margin-top: 10px;
    }

    .or {
        width: 10%;
        font-weight: bold;
    }

    .text-sm {
        font-size: 14px !important;
    }

    ::placeholder {
        color: #BDBDBD;
        opacity: 1;
        font-weight: 300
    }

    :-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    ::-ms-input-placeholder {
        color: #BDBDBD;
        font-weight: 300
    }

    input,
    textarea {
        padding: 10px 12px 10px 12px;
        border: 1px solid lightgrey;
        border-radius: 2px;
        margin-bottom: 5px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 14px;
        letter-spacing: 1px;
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #304FFE;
        outline-width: 0;
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0;
    }

    a {
        color: inherit;
        cursor: pointer;
    }

    .btn-blue {
        background-color: #1A237E;
        width: 150px;
        color: #fff;
        border-radius: 2px;
    }

    .btn-blue:hover {
        background-color: #000;
        cursor: pointer;
    }

    .bg-blue {
        color: #fff;
        background-color: #1A237E;
    }

    @media screen and (max-width: 991px) {
        .logo {
            margin-left: 0px;
        }

        .image {
            width: 300px;
            height: 220px;
        }

        .border-line {
            border-right: none;
        }

        .card2 {
            border-top: 1px solid #EEEEEE !important;
            margin: 0px 15px;
        }
    }
</style>

<body>
    <!-- <h1 class="text-center">Sign in</h1>
<div class="row w-50 m-auto">
    <div class="col-md-12">
        <form action="/Customer/SignIn" method="post">
            @csrf
            <div class="form-group">
                <label for="" class="form-label">Username:</label>
                <input type="text" name="username" class="form-control" id="">
            </div>
            <div class="form-group mt-3">
                <label for="" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" id="">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Login</button>
        </form>
    </div>
</div> -->
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row">
                            <img src="https://th.bing.com/th/id/OIP.NnCQ4M6eLF0ElK0cPN2N7wHaFm?pid=ImgDet&w=187&h=141&c=7&dpr=1.3" class="logo">
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="https://th.bing.com/th/id/OIP.ATVUFANoIvUaiNQZ2VwdpwHaFp?pid=ImgDet&rs=1" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <!-- <div class="row mb-4 px-3">
                            <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                            <div class="facebook text-center mr-3">
                                <div class="fa fa-facebook"></div>
                            </div>
                            <div class="twitter text-center mr-3">
                                <div class="fa fa-twitter"></div>
                            </div>
                            <div class="linkedin text-center mr-3">
                                <div class="fa fa-linkedin"></div>
                            </div>
                        </div> -->
                        <!-- <div class="row px-3 mb-4">
                            <div class="line"></div>
                            <small class="or text-center">Or</small>
                            <div class="line"></div>
                        </div> -->
                        <form action="{{route('customers.add')}}" method="post">
                            @csrf
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm d-inline">Username</h6>@if($errors->has('username'))
                                    <span class="text-danger">({{ $errors->first('username') }}) <i class="fa fa-warning" aria-hidden="true"></i></span>
                                    @endif
                                </label>
                                <input class="mb-4" type="text" name="username" value="{{old('username')}}" placeholder="Enter username">
                            </div>
                            <div class="row px-3">
                            <h6 class="mb-0 text-sm d-inline">Email Address</h6>@if($errors->has('email'))
                                    <span class="text-danger">({{ $errors->first('email') }}) <i class="fa fa-warning" aria-hidden="true"></i></span>
                                    @endif
                                <input class="mb-4" type="text" value="{{old('email')}}" name="email" placeholder="Enter a valid email address">
                            </div>

                            <div class="row mb-4 px-3">
                            <label class="mb-1">
                                    <h6 class="mb-0 text-sm d-inline">Password</h6>@if($errors->has('password'))
                                    <span class="text-danger">({{ $errors->first('password') }}) <i class="fa fa-warning" aria-hidden="true"></i></span>
                                    @endif
                                </label>
                                <input type="password" name="password" placeholder="Enter password">
                            </div>
                            <div class="row mb-4 px-3">
                            <label class="mb-1">
                                    <h6 class="mb-0 text-sm d-inline">Confirm Password</h6>@if($errors->has('repassword'))
                                    <span class="text-danger">({{ $errors->first('repassword') }}) <i class="fa fa-warning" aria-hidden="true"></i></span>
                                    @endif
                                </label>
                                <input type="password" name="repassword" placeholder="Enter password">
                            </div>
                            <!-- <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input id="chk1" type="checkbox" name="remember" class="custom-control-input">
                                    <label for="chk1" class="custom-control-label text-sm">Remember me</label>
                                </div>
                                <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                            </div> -->
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn btn-blue text-center">Register</button>
                            </div>
                        </form>
                        <div class="row mb-4 px-3">
                            <small class="font-weight-bold">I have already an account? <a class="text-danger " href="/Customer/Login">Sign In</a></small>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                    <div class="social-contact ml-4 ml-sm-auto">
                        <span class="fa fa-facebook mr-4 text-sm"></span>
                        <span class="fa fa-google-plus mr-4 text-sm"></span>
                        <span class="fa fa-linkedin mr-4 text-sm"></span>
                        <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- @if(count($errors) > 0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
    @endif -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>