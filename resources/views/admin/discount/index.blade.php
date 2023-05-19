@extends("admin.index")
@section("contentAdmin")
@if($mess = Session::get("success"))
<p class="alert alert-success">{{$mess}}</p>
@endif
<a href="javascript:void(0)" id="discountAdd" class="btn btn-primary">ADD DISCOUNT</a>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Bordered Table</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-striped bg-lightblue color-palette">
                            <thead>
                                <tr>
                                    <th style="width: 100px !important">Mã ID</th>
                                    <th>Discount Rate</th>
                                    <th>From date</th>
                                    <th>To date</th>
                                    <th>Disciption</th>
                                    <th>Control</th>

                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span id="message"></span>
    </session>
    <div class="modal fade" id="model-ajax" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-info">
                <form action="{{url('/admin/discount/saveDiscount')}}" class="p-3" id="DiscountForm" method="post">
                    @csrf
                    <input type="hidden" name="id" id="id" value="">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Discount Rate</label>
                        <input type="number"  name="discount_rate" class="form-control description" />
                        <span class="text-danger error-text discount_rate_error"  style="font-weight:bold;"></span>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">From Date</label>
                        <div class="input-group date">
                            <input type="text" class="form-control fromdate" id="myID" placeholder="Ngày bắt đầu" name="fromdate" value="{{old('fromdate')}}">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </span>
                        </div>
                        <span class="text-danger error-text fromdate_error"  style="font-weight:bold;"></span>


                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">To Date</label>
                        <div class="input-group date">
                            <input type="text" class="form-control todate" id="myID" placeholder="Ngày hết hạn" name="todate" value="{{old('todate')}}">
                            <span class="input-group-append">
                                <span class="input-group-text bg-white">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </span>
                        </div>
                        <span class="text-danger error-text todate_error" style="font-weight:bold;"></span>


                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <input type="text" name="description"  class="form-control description" />
                        <span class="text-danger error-text description_error"  style="font-weight:bold;"></span>

                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-light" id="saveBtn"></button>
                    </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        @endsection
        @section("javascript")
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                fetchDiscount();

                function fetchDiscount() {
                    $.ajax({
                        type: "get",
                        url: "/admin/discount_list",
                        dataType: "json",
                        success: function(data) {
                            $("tbody").html("");
                            $.each(data.discount, function(key, item) {
                                $('tbody').append('<tr>\
            <td>' + item.id + '</td>\
            <td>' + item.discount_rate + '</td>\
            <td>' + $.datepicker.formatDate('dd-mm-yy', new Date(item.fromdate)) + '</td>\
            <td>' + $.datepicker.formatDate('dd-mm-yy', new Date(item.todate)) + '</td>\
            <td>' + item.description + '</td>\
            <td><a href="javascript:void(0)" data-toggle="tooltip" data-id="' + item.id + '" data-original-title="Edit" class="edit btn btn-primary btn-sm editDiscount">Edit</a>\
            <a href="javascript:void(0)" data-toggle="tooltip" data-id="' + item.id + '" data-original-title="Delete" class="btn btn-danger btn-sm deleteDiscount">Delete</a></td>\
            </tr>')
                            })
                        },
                        error: function(data) {
                            console.log(data.error);
                        }
                    })
                }
                $("#discountAdd").click(function() {
                    $("#model-ajax").modal("show");
                    $("#DiscountForm").trigger("reset");
                    $(".modal-title").html("Thêm Mã Giảm Giá");
                    $("#saveBtn").html("Save");
                    $("#id").val("");

                });
                $("#DiscountForm").on("submit", function(e) {
                    // alert("test");
                    e.preventDefault();

                    $.ajax({
                        url: $(this).attr("action"),
                        data: new FormData(this),
                        dataType: "json",
                        processData: false,
                        method: $(this).attr("method"),
                        contentType: false,
                        beforeSend: function() {
                            $("#DiscountForm").find("span.error-text").text('');
                        },
                        success: function(data) {
                            if (data.code == 0) {
                                $.each(data.error, function(prefix, val) {
                                    $("#DiscountForm").find('span.' + prefix + '_error').text(val[0]);
                                });
                            } else {
                                $("#message").html(data.success);
                                $("#DiscountForm").trigger("reset");
                                $('#model-ajax').modal("hide");
                                // table.draw();
                                fetchDiscount();
                                $("#DiscountForm").find("span.error-text").text('');

                                alert("added");
                            }


                        },
                        error: function(err) {
                            // alert("Khong the Saved");

                            console.log('Error', err);
                        }
                    });

                });
                $('body').on("click", ".deleteDiscount", function() {
                    var discount_id = $(this).data("id");
                    confirm("Are you sure want to delete " + discount_id);
                    $.ajax({
                        type: "delete",
                        url: "/admin/discount/deleteDiscount/" + discount_id,
                        success: function(data) {
                            $("#message").html(data.success);

                            fetchDiscount();


                        },
                        error: function(data) {
                            console.log("ERROR: ", data);

                        }
                    })
                });
                $('body').on("click", ".editDiscount", function(e) {
                    e.preventDefault();
                    var discount_id = $(this).data("id");
                    $("#DiscountForm").find("span.error-text").text('');

                    $.get("/admin/discount/edit/" + discount_id, function(res) {
                        $("#model-ajax").modal("show");
                        $(".modal-title").html("Cập nhật mã giảm giá");
                        $("#saveBtn").html("Save");
                        $("#id").val(discount_id);
                        $(".discount_rate").val(res.discount_rate);
                        $(".description").val(res.description);
                        $(".fromdate").val(res.fromdate);
                        $(".todate").val(res.todate);
                    })

                });

            });
        </script>


        @endsection