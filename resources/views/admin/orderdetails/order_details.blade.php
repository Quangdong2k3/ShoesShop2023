@extends("admin.index")
@section("contentAdmin")
@if($mess = Session::get("success"))
<p class="alert alert-success">{{$mess}}</p>
@endif
<a href="/admin/categories/addcategory" class="btn btn-outline-primary mb-3">Add Employee</a>

<section class="content">
    <div class="container-fluid">
    <a class="btn btn-success" href="{{route('Order')}}"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
        <div class="row">
            <div class="col-md">
            @foreach($orders as $row)
            
                <div class="card">

                    <div class="card-header d-flex justify-content-between">

                        
                    @if($row->status===1)
                        <form action="/order_status/{{$row->id}}" style="margin-top: 50px !important;" method="post">
                            @csrf
                            <input type="hidden" name="status" value="2">
                            <button class="btn btn-info" type="submit">Duyệt</button>
                        </form>
                        <p class="text-info">{{$row->description}}</p>
                        @endif
                        @if($row->status===2)
                        <form action="/order_status/{{$row->id}}" style="margin-top: 50px !important;" method="post">
                            @csrf
                            <input type="hidden" name="status" value="3">
                            <button class="btn btn-info" type="submit"><i class="fa-solid fa-truck"></i></button>
                        </form>
                        <p class="text-info">{{$row->description}}</p>
                        @endif
                        @if($row->status===3)

                        <form action="/order_status/{{$row->id}}" style="margin-top: 50px !important;" method="post">
                            @csrf
                            <input type="hidden" name="status" value="4">
                            <button class="btn btn-info" type="submit"><i class="fa-solid fa-check-double"></i></button>

                        </form>
                        <p class="text-info">{{$row->description}}</p>

                            @endif
                            @if($row->status===4)
                            <button class="btn btn-success" ><i class="fa-solid fa-check-double"></i></button>

                            <p class="text-info">{{$row->description}}</p>

                            @endif
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped bg-lightblue color-palette">
                            <thead>
                                <tr>
                                    <th style="width: 10px">Orderdeatil_id</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Size</th>

                                    <th>Quantity</th>
                                    <th>Discount</th>




                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td> {{$row->orderdetail_id}}</td>
                                    <td>{{$row->name}}</td>

                                    <td>{{number_format($row->price)}} VNĐ</td>

                                    <td>{{$row->size}}</td>
                                    <td>{{$row->quantity}}</td>

                                    <td>@if($row->discount_amount>0)
                                        {{$row->discount_amount}}
                                        @else
                                        {{0}}
                                        @endif
                                    </td>

                                    <!-- <td style="max-width: 100px;"><img src="{{asset('public/image/'.$row->avatar)}}" class="w-100" alt="..."></td> -->

                                    

                            </tbody>
                        </table>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    </session>


    @endsection