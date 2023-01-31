{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 DataTables CRUD Tutorial From Scratch - Tutsmake.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Laravel 9 CRUD using DataTables Tutorial</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('data.create') }}"> Create Data</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="card-body">
            <table class="table table-bordered" id="datatable-crud">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>nama</th>
                        <th>alamat</th>
                        <th>nik</th>
                        <th>jenis</th>
                        <th>pendidikan</th>
                        <th>jurusan</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#datatable-crud').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('data') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'alamat',
                        name: 'alamat'
                    },
                    {
                        data: 'nik',
                        name: 'nik'
                    },
                    {
                        data: 'jenis',
                        name: 'jenis'
                    },
                    {
                        data: 'pendidikan',
                        name: 'action',
                    },
                    {
                        data: 'jurusan',
                        name: 'jurusan'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false
                    },
                ],
                order: [
                    [0, 'desc']
                ]
            });
            $('body').on('click', '.delete', function () {
                if (confirm("Delete Record?") == true) {
                    var id = $(this).data('id');
                    // ajax
                    $.ajax({
                        type: "POST",
                        url: "{{ url('delete-data') }}",
                        data: {
                            id: id
                        },
                        dataType: 'json',
                        success: function (res) {
                            var oTable = $('#datatable-crud').dataTable();
                            oTable.fnDraw(false);
                        }
                    });
                }
            });
        });
    </script>
</body>



</html> --}}









<!DOCTYPE html>
<html>

<head>
    <title>Laravel Ajax CRUD Tutorial Example - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>

    <div class="container">
        <h1>Laravel Ajax CRUD Tutorial Example - ItSolutionStuff.com</h1>
        <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct"> Create New Product</a>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>nik</th>
                    <th>alamat</th>
                    <th>jenis</th>
                    <th>pendidikan</th>
                    <th>jurusan</th>
                    <th>hari</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="productForm" name="productForm" class="form-horizontal">
                        <input type="hidden" name="id" id="id">

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">nama</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Name"
                                    value="NAMA" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">nik</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Enter nik" value="nik"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">alamat</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Enter alamat" value="alamat"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">jenis</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Enter jenis" value="jenis"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">pendidikan</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="pendidikan" name="pendidikan" placeholder="Enter pendidikan" value="pendidikan"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">jurusan</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="jurusan" name="jurusan" placeholder="Enter jurusan" value="jurusan"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">hari</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="hari" name="hari" placeholder="Enter hari" value="hari"
                                    required>
                            </div>
                        </div>
                       
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

<script type="text/javascript">
    $(function () {
      
    /*------------------------------------------
     --------------------------------------------
     Pass Header Token
     --------------------------------------------
     --------------------------------------------*/ 
    $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });
      
    /*------------------------------------------
    --------------------------------------------
    Render DataTable
    --------------------------------------------
    --------------------------------------------*/
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('data.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nama', name: 'nama'},
            {data: 'nik', name: 'nik'},
            {data: 'alamat', name: 'alamat'},
            {data: 'jenis', name: 'jenis'},
            {data: 'pendidikan', name: 'pendidikan'},
            {data: 'jurusan', name: 'jurusan'},
            {data: 'hari', name: 'hari'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
      
    /*------------------------------------------
    --------------------------------------------
    Click to Button
    --------------------------------------------
    --------------------------------------------*/
    $('#createNewProduct').click(function () {
        $('#saveBtn').val("create-product");
        $('#id').val('');
        $('#productForm').trigger("reset");
        $('#modelHeading').html("Create New Product");
        $('#ajaxModel').modal('show');
    });
      
    /*------------------------------------------
    --------------------------------------------
    Click to Edit Button
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.editProduct', function () {
      var id = $(this).data('id');
      $.get("{{ route('data.index') }}" +'/' + id +'/edit', function (data) {
          $('#modelHeading').html("Edit Product");
          $('#saveBtn').val("edit-user");
          $('#ajaxModel').modal('show');
            $('#id').val(data.id);
            $('#nama').val(data.nama);
            $('#nik').val(data.nik);
            $('#alamat').val(data.alamat);
            $('#jenis').val(data.jenis);
            $('#pendidikan').val(data.pendidikan);
            $('#jurusan').val(data.jurusan);
            $('#hari').val(data.hari);
      })
    });
      
    /*------------------------------------------
    --------------------------------------------
    Create Product Code
    --------------------------------------------
    --------------------------------------------*/
    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Sending..');
      
        $.ajax({
          data: $('#productForm').serialize(),
          url: "{{ route('data.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
       
              $('#productForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
           
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Save Changes');
          }
      });
    });
      
    /*------------------------------------------
    --------------------------------------------
    Delete Product Code
    --------------------------------------------
    --------------------------------------------*/
    $('body').on('click', '.deleteProduct', function () {
     
        var id = $(this).data("id");
        confirm("Are You sure want to delete !");
        
        $.ajax({
            type: "DELETE",
            url: "{{ route('data.store') }}"+'/'+id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
       
  });
</script>

</html>