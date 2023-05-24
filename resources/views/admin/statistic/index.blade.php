@extends("admin.index")
@section("contentAdmin")
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$order_count}}</h3>

            <p>New Orders</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="admin/orderdetails/showOrderdetail" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$emp_count}}</h3>
            <!-- <sup style="font-size: 20px">%</sup> -->
            <p>Employee</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="/admin/employees/showEmployees" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$cus_count}}</h3>

            <p>User Registrations</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="/admin/customers/showCustomers" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{$admin_count}}</h3>

            <p>Administrator</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="/admin/employees/showEmployees" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <!-- Left col -->
    <form class="row" id="StatisticForm" action="/statistic/filter" method="get">
      @csrf

      <div class="form-group mx-3">
        <label for="exampleInputEmail1">From date</label>
        <div class="input-group date">
          <input type="text" class="form-control" id="myID" placeholder="From date" name="fromdate" value="{{old('fromdate')}}">
          <span class="input-group-append">
            <span class="input-group-text bg-white">
              <i class="fa fa-calendar" aria-hidden="true"></i>
            </span>
          </span>
        </div>
        <span class="text-danger">{{$errors->first("fromdate")}}</span>

      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">To date</label>
        <div class="input-group date">
          <input type="text" class="form-control" id="myID" placeholder="To Date" name="todate" value="{{old('todate')}}">
          <span class="input-group-append">
            <span class="input-group-text bg-white">
              <i class="fa fa-calendar" aria-hidden="true"></i>
            </span>
          </span>
        </div>
        <span class="text-danger">{{$errors->first("todate")}}</span>

      </div>
      <input type="submit" id="filter" class="btn btn-primary mx-3 d-block" value="Lọc Kết Quả" />

    </form>
    @if(Session::get("fromday"))

@yield("statistic")
  
@endif

    <!-- right col -->
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>

</div>
@endsection
@section("css")
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection


@section("javascript")
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script>
  $(document).ready(function() {

    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    function loaddata(){
      $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        method: "get",
        ajax: '/statistic/filter',
        columns: [
          {
            'data': 'status',
          },
          {
            'data': 'customer_id',
          },
          {
            'data': 'total_payment',
          },



        ]
      });
    }
      
    });



</script> -->


@endsection