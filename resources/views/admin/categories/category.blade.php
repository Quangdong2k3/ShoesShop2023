@extends("admin.index")
@section("contentAdmin")
@if($mess = Session::get("success"))
<p class="alert alert-success">{{$mess}}</p>
@endif
<a class="btn btn-primary" href="javascript:void(0)" id="addShoes">Add</a>


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
                                    <th style="width: 10px">ID</th>
                                    <th>Category Name</th>
                                    <th>Avatar</th>
                                    <th>Discription</th>
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
    </session>
    <div class="modal fade" id="model-ajax" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-info">
      <form action="{{url('/admin/categories/saveCategory')}}" class="p-3" id="CateForm" enctype="multipart/form-data" method="post">
        @csrf
        <input type="hidden" name="id" id="id" value="">
        <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="form-group">
          <label for="" class="form-label">Name</label>
          <input type="text" id="category_name" name="name" class="form-control" />
          <span class="text-danger error-text name_error"></span>
        </div>
        <div class="form-group">
          <label for="" class="form-label">Description</label>
          <input type="text" name="description" id="description" class="form-control" />
          <span class="text-danger error-text description_error"></span>

        </div>

        <div class="input-group mb-3">
          <input type="file" class="form-control" name="c_avatar" id="avatar">
          <label class="input-group-text" for="inputGroupFile02">Upload</label>
          <span class="text-danger error-text avatar_error"></span>

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
    // var table = $('#datatable').DataTable({
    //   processing: true,
    //   serverSide: true,
    //   type: "post",
    //   ajax: '{{ route("dashboard") }}',
    //   columns: [{
    //       data: 'category_id',
    //       name: "category_id"
    //     },
    //     {
    //       data: 'category_name',
    //       name: "category_name"
    //     },
    //     {
    //       data: 'avatar',
    //       name: "avatar"
    //     },
    //     {
    //       data: 'description',
    //       name: "description"
    //     },
    //     {
    //       data: 'action',
    //       name: "action",
    //       orderable: false,
    //       searchable: false
    //     },


    //   ]
    // });
    fetchCategory();

    function fetchCategory() {
      $.ajax({
        type: "get",
        url: '/fetchCategory ',
        dataType: "json",
        success: function(data) {
          $("tbody").html("");
          $.each(data.category, function(key, item) {
            $('tbody').append('<tr>\
            <td>' + item.category_id + '</td>\
            <td>' + item.category_name + '</td>\
            <td><img width="100px" height="100px" src="/public/image/' + item.c_avatar + '"/></td>\
            <td>' + item.description + '</td>\
            <td><a href="javascript:void(0)" data-toggle="tooltip" data-id="' + item.category_id + '" data-original-title="Edit" class="edit btn btn-primary btn-sm editCategory">Edit</a>\
            <a href="javascript:void(0)" data-toggle="tooltip" data-id="' + item.category_id + '" data-original-title="Delete" class="btn btn-danger btn-sm deleteCategory">Delete</a></td>\
            </tr>')
          })
        }
      })
    }
    $("#addShoes").click(function() {
      $("#model-ajax").modal("show");
      $("#CateForm").trigger("reset");
      $(".modal-title").html("Them Giay");
      $("#saveBtn").html("Save");
      $("#id").val("");

    });
    $("#CateForm").on("submit", function(e) {
      // alert("test");
      e.preventDefault();

      $.ajax({
        url:$(this).attr("action"),
        data: new FormData(this),
        dataType: "json",
        processData:false,
        method:$(this).attr("method"),
        contentType:false,
        beforeSend:function(){
          $("#CateForm").find("span.error-text").text('');
        },
        success: function(data) {
          if (data.code == 0) {
            $.each(data.error, function(prefix, val) {
              $("#CateForm").find('span.' + prefix + '_error').text(val[0]);
            });
          } else {
            $("#message").html(data.success);
            $("#CateForm").trigger("reset");
            $('#model-ajax').modal("hide");
            // table.draw();
            fetchCategory();
          $("#CateForm").find("span.error-text").text('');

            alert("added");
          }


        },
        error: function(err) {
          // alert("Khong the Saved");

          console.log('Error', err);
        }
      });

    });
    $('body').on("click", ".deleteCategory", function() {
      var category_id = $(this).data("id");
      confirm("Are you sure want to delete " + category_id);
      $.ajax({
        type: "delete",
        url: "/admin/categories/deleteCategory/" + category_id,
        success: function(data) {
          $("#message").html(data.success);

          fetchCategory();


        },
        error: function(data) {
          console.log("ERROR: ", data);

        }
      })
    });
    $('body').on("click", ".editCategory", function() {
      var category_id = $(this).data("id");
      $("#CateForm").find("span.error-text").text('');

      $.get("/editCategory/" + category_id + '"', function(data) {
        $("#model-ajax").modal("show");
        $(".modal-title").html("Cap nhat The loai");
        $("#saveBtn").html("Save");
        $("#id").val(category_id);
        $("#category_name").val(data.category_name);
        $("#description").val(data.description);
        $("#c_avatar").val(data.c_avatar);

        fetchCategory();

      })
    });

  });
</script>


@endsection

