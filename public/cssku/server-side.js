
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