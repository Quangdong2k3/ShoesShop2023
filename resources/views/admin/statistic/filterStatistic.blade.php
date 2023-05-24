@extends("admin.statistic.index")
@section('statistic')
@if(Session::get("fromday"))
<div class="row">
  <h3 class="text-primary">Doanh thu từ ngày {{Session::get("fromday")}} đến {{Session::get("today")}}:  @foreach($sum as $r)<span class="text-danger">{{number_format($r->sum_pay)}} VNĐ</span>@endforeach</h3>
</div>@else{
    
}
@endif
<!-- <table id="datatable" class="table table-striped bg-lightblue color-palette">
      <thead>
        <tr>
          <th>ID</th>
          <th>Customer_id</th>
          <th>Recieved Name</th>
          <th>Total_payment</th>
        </tr>

      </thead>
      <tbody>
        <?php $id = 1 ?>
        @foreach($sum as $r)
        <tr>
          <td>{{$id}}</td>
          <td>{{$r->customer_id}}</td>
          <td>{{$r->receiver_name}}</td>
          <td>{{number_format($r->sum_pay)}} VND</td>
        </tr>
        <?php $id++; ?>
        @endforeach

      </tbody>
      <tbody>

      </tbody>
    </table> -->
    @endsection