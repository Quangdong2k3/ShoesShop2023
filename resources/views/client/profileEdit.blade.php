@extends("welcome")
@section("content")


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cập nhật Thông Tin</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="post" action="/profile/customer/update/{{request()->cookie('cusId')}}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="h5">Username</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username Employee" name="username" value="{{$cus->username}}">
                                <span class="text-danger">{{$errors->first("username")}}</span>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="h5">Fullname</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter fullname Employee" name="fullname" value="{{$cus->fullname}}">
                                <span class="text-danger">{{$errors->first("fullname")}}</span>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="h5">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="{{$cus->email}}">
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputPassword1">Email</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter email" name="email" value="{{$cus->email}}">
                                <span class="text-danger">{{$errors->first("email")}}</span>
                            </div> -->
                            <div class="form-group">
                                <span class="text-danger">{{$errors->first("dob")}}</span>
                                <label for="exampleInputEmail1" class="h5">Date Of Birth </label>
                                <div class="input-group date">
                                    <input type="text" class="form-control" id="myID" placeholder="Ngày sinh của bạn" name="dob" value="{{$date}}">
                                    <span class="input-group-append">
                                        <span class="input-group-text bg-white">
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                        </span>
                                    </span>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="h5">Gender<span class="text-danger">{{$errors->first("gen")}}</span></label>
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gen" value="1" {{($cus->gender == true ) ? "checked" : "" }} id="Nam"><label for="" class="form-check-label">Nam</label>
                                </div>

                                <div class="form-check">
                                    <input type="radio" class="form-check-input" name="gen" value="0" {{($cus->gender == false) ? "checked" : "" }} id="Nữ"><label for="" class="form-check-label">Nữ</label>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="h5">Phone<span class="text-danger">{{$errors->first("phone")}}</span></label>
                                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter phone" name="phone" value="{{$cus->phone}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="h5">Address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter address" name="address" value="{{$cus->address}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="h5">City</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter city" name="city" value="{{$cus->city}}">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="h5">Identity Number</label>
                                <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter identity number" name="identity_number" value="{{$cus->identity_number}}">

                            </div>





                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Cập nhật mới</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </session>




    @endsection