@extends("welcome")
@section("content")
<style>
     .card{
        border: 0;
        box-shadow: 0px 1px 10px 5px #ccc;
     }
    .card:hover{
        opacity: 0.8;background: #000;
        border: 0;
        transition: all 0.3s;
    }
    .card:hover>.edit-img-profile{
        display: flex;
    }
    .edit-img-profile{
        position: absolute;
        margin: auto;
        width: 100%;justify-content: center;
        display: none;
        
        top: 50%;
    }
    .edit-img-profile>.fa-edit{
        max-width:  100%;
        min-height: 100vh;
        font-size: 30px;
        
    }
    .edit-img-profile:hover>.fa-edit{
        display: block;
    }
</style>
@if(Session::get("message")!=null||Session::get("message")!="")
<p class="alert alert-success">{{Session::get("message")}}</p>
@endif
@if($errors->has('avatar'))
					<div class="alert alert-danger">{{ $errors->first('avatar') }} <i class="fa fa-warning" aria-hidden="true"></i></div>
					@endif
    <p class="h1 text-center">Thông Tin Cá Nhân</p>

<div class="container mt-4">
    <div class="row">

    <div class="col-4">
    <form action="/profile/customer/upload/avatar/{{request()->cookie('cusId')}}" method="post" enctype="multipart/form-data">
        @method("PATCH")
        @csrf
    
        <div class="card" style="width: 18rem;" style="position: relative;">
            <img src="{{asset('public/image/'.$customer->avatar)}}" class="card-img-top" alt="...">
            <div class="edit-img-profile"><i class="fa fa-edit" aria-hidden="true"></i></div>
            <input type="file" name="avatar" style="position: absolute; width: 100%;height: 100vh;opacity: 0;border: 0; outline: 0;" onchange="javascript:this.form.submit();">
            <!-- <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div> -->
        </div>
        </form>
    </div>
    <div class="col-8">
        <div class="row">
            <span><span class="h5">Tên đăng nhập: </span><span class="h6">{{$customer->username}}</span></span>
        </div>
        <div class="row mt-2">
            <span><span class="h5">Họ và tên: </span><span class="h6">{{$customer->fullname}}</span></span>
        </div>
        <div class="row mt-2">
            <span><span class="h5">Ngày sinh: </span><span class="h6">{{ date('d-m-Y', strtotime($customer->dob)) }}</span></span>
        </div>
        <div class="row mt-2">
            <span><span class="h5">Số điện thoại: </span><span class="h6">{{ ($customer->phone) }}</span></span>
        </div>
        <div class="row mt-2">
            <span><span class="h5">Email: </span><span class="h6">{{ ($customer->email) }}</span></span>
        </div>
        <div class="row mt-2">
            <span><span class="h5">Địa chỉ: </span><span class="h6">{{ ($customer->address) }}</span></span>
        </div>
        <div class="row mt-2">
            <span><span class="h5">Thành phố: </span><span class="h6">{{ ($customer->city) }}</span></span>
        </div>
        <div class="row mt-2">
            <span><span class="h5">Số Chứng minh: </span><span class="h6">{{ ($customer->identity_number) }}</span></span>
        </div>
        <div class="row mt-2">
            <a style="text-decoration: underline;" href="/profile/edit/{{request()->cookie('cusId')}}">Chỉnh sửa thông tin <i class="fa fa-edit" aria-hidden="true"></i></a>
        </div>
    </div>
    </div>
</div>
@endsection