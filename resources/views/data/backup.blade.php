<!DOCTYPE html>
<html>

<head>
    <title>Laravel Ajax CRUD Tutorial Example - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('cssku/fff.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cssku/ggg.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cssku/hhh.css') }}" rel="stylesheet" type="text/css">
    
    <script src="{{ asset('cssku/aaa.js') }}"></script>
    <script src="{{ asset('cssku/bbb.js') }}"></script>
    <script src="{{ asset('cssku/ccc.js') }}"></script>
    <script src="{{ asset('cssku/ddd.js') }}"></script>
    <script src="{{ asset('cssku/eee.js') }}"></script>

</head>

<body>
    {{-- <div class="container">
        <h1>Laravel Ajax CRUD Tutorial Example - ItSolutionStuff.com</h1>
        <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct"> Create New Product</a>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th class="bg-primary">Name</th>
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
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">nik</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Enter nik"
                                    required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">alamat</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="alamat" name="alamat"
                                    placeholder="Enter alamat" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">jenis</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="jenis" name="jenis"
                                    placeholder="Enter jenis" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">pendidikan</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="pendidikan" name="pendidikan"
                                    placeholder="Enter pendidikan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">jurusan</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="jurusan" name="jurusan"
                                    placeholder="Enter jurusan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">hari</label>
                            <div class="col-sm-12">
                                <input type="date" class="form-control" id="hari" name="hari" placeholder="Enter hari"
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
    </div> --}}

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
            {data: 'DT_RowIndex', name: 'DT_RowIndex', class: 'bg-primary'},
            {data: 'nama', name: 'nama', class: 'bg-warning text-white'},
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
    JIKA TOMBOL EDIT DI TEKAN MAKA DIA AKAN MENANGKAP VARIABEL CONTOH #DATA BERDASARKAN ID YANG BERSIFAT PRIMARY
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