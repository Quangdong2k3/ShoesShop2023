@extends("admin.index")
@section("contentAdmin")
@if($mess = Session::get("success"))
<p class="alert alert-success">{{$mess}}</p>
@endif
<!-- <a href="/admin/categories/addcategory" class="btn btn-outline-primary mb-3">Add Employee</a> -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Danh sách Order</h3>


                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped bg-lightblue color-palette">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <!-- <th>Username</th>
                                    <th>Fullname</th> -->
                                    <!-- <th>Date of birth</th> -->
                                    <th>Date</th>
                                    <!-- <th>Phone</th> -->
                                    <!-- <th>Identity Number</th> -->

                                    <th>ToTal</th>
                                    <!-- <th>Avatar</th> -->
                                    <th>Status</th>

                                    <th>Control</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $count = 1; ?>

                                @foreach($order as $row)
                                <tr>
                                    <td> {{$count}}</td>
                                    <!-- <td>{{$row->username}}</td>

                                    <td>{{$row->fullname}}</td> -->
                                    <!-- <td>@if(Str::length($row->dob)>0) {{ date('d-m-Y', strtotime($row->dob)) }}
                                        @endif
                                    </td> -->
                                    <!-- <td>@if($row->gender==true)
                                        <i class="fa fa-male fa-2x text-lime" aria-hidden="true"></i>
                                        @else
                                        <i class="fa fa-female fa-2x text-fuchsia" aria-hidden="true"></i>
                                        @endif
                                    </td> -->
                                    <td>{{ date('d-m-Y', strtotime($row->created_at)) }}</td>
                                    <!-- <td>{{$row->phone}}</td> -->

                                    <td>{{number_format($row->total_payment)}} VND</td>
                                    <td style="align-items: center;" class="d-flex">
                                        <!-- @if($row->status==1)
                                    <form action="/order_status/{{$row->id}}" method="post">
                                        @csrf
                                        <input type="hidden" name="status" value="2">
                                        <button class="btn btn-info" type="submit"><i class="fa fa-heart" aria-hidden="true"></i></button>
                                    </form>
                                    @endif -->
                                        <!-- @if($row->status==5)
                                    <a class="btn btn-danger"><i class="fa-solid fa-road-circle-xmark"></i></a>
                                    @endif -->
                                        <!-- @if($row->status==2)
                                    <a class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></a>
                                    @endif -->


                                        <a class="btn btn-default" href="/admin/order_detail/{{$row->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a>

                                    </td>
                                    <!-- <td style="max-width: 100px;"><img src="{{asset('public/image/'.$row->avatar)}}" class="w-100" alt="..."></td> -->
                                    <td class="" style="align-items: center;">
                                        <!-- <a href="/admin/customers/editCustomer/{{$row->id}}" class="btn bg-lime"><i class="fas fa-edit"></i></a> -->
                                        <div class="d-flex align-center">
                                        <form action="/admin/orderdetails/deleteOrderdetail/{{$row->id}}" method="post" onsubmit="return confirm('Bạn có muốn xóa bản ghi {{$row->id}} này không???')">
                                            @method("delete")
                                            @csrf
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                        @if($row->status===1)
                                        <form action="/order_status/{{$row->id}}"  method="post">
                                            @csrf
                                            <input type="hidden" name="status" value="2">
                                            <button class="btn btn-info" type="submit">Duyệt</button>
                                        </form>
                                        <p class="text-info">{{$row->description}}</p>
                                        @endif
                                        @if($row->status===2)
                                        <form action="/order_status/{{$row->id}}"  method="post">
                                            @csrf
                                            <input type="hidden" name="status" value="3">
                                            <button class="btn btn-info" type="submit"><i class="fa-solid fa-truck"></i></button>
                                        </form>
                                        <p class="text-info">{{$row->description}}</p>
                                        @endif
                                        @if($row->status===3)

                                        <form action="/order_status/{{$row->id}}"  method="post">
                                            @csrf
                                            <input type="hidden" name="status" value="4">
                                            <button class="btn btn-info" type="submit"><i class="fa-solid fa-check-double"></i></button>

                                        </form>
                                        <p class="text-info">{{$row->description}}</p>

                                        @endif
                                        @if($row->status===4)
                                        <button class="btn btn-success"><i class="fa-solid fa-check-double"></i></button>

                                        <p class="text-info">{{$row->description}}</p>

                                        @endif
                                        </div>
                                    </td>
                                    <?php $count++; ?>
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </session>


    @endsection