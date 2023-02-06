<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" />

    <!-- TITLE -->
    <title>E-Documents</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/dark-style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/transparent-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet " />

    <script src="{{ asset('/vendor/datatables/buttons.server-side.js') }}"></script>

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all"  href="{{ asset('assets/colors/color1.css') }}" />

</head>

<body class="app sidebar-mini ltr light-mode">

    @yield('main')

    <script src="{{ asset('assets/dist/sweetalert2.all.min.js') }}"></script>
    <!-- JQUERY JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- INPUT MASK JS-->
    <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- SIDE-MENU JS -->
    <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- TypeHead js -->
    <script src="{{ asset('assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
    <script src="{{ asset('assets/js/typehead.js') }}"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- DATA TABLE JS-->
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/table-data.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll-1.js') }}"></script>

    <!-- Color Theme js -->
    <script src="{{ asset('assets/js/themeColors.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assets/js/sticky.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    <!-- INTERNAL Notifications js -->
    <script src="{{ asset('assets/plugins/notify/js/rainbow.js')}}"></script>
    <script src="{{ asset('assets/plugins/notify/js/sample.js')}}"></script>
    <script src="{{ asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
    <script src="{{ asset('assets/plugins/notify/js/notifIt.js')}}"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    
    <script type="text/javascript">
        $(function() {
        
                 
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
        
                  
                    var table = $('.data-table').DataTable({
                        processing: true,
                        serverSide: true,
                        ajax: "{{ route('data.index') }}",
                        columns: [{
                                data: 'DT_RowIndex',
                                name: 'DT_RowIndex'
                            },
                            {
                                data: 'nama_lengkap',
                                name: 'nama_lengkap'
                            },
                            //  {data: 'nik', name: 'nik'},
                            {
                                data: 'alamat_domisili',
                                name: 'alamat_domisili'
                            },
                            {
                                data: 'jenis_kelamin',
                                name: 'jenis_kelamin'
                            },
                            {
                                data: 'pendidikan_terakhir',
                                name: 'pendidikan_terakhir'
                            },
                            {
                                data: 'jurusan',
                                name: 'jurusan'
                            },
                            {
                                data: 'tanggal_pengesahan',
                                name: 'tanggal_pengesahan'
                            },
                            {
                                data: 'action',
                                name: 'action',
                                orderable: false,
                                searchable: false
                            },
                        ]
                    });
        
               
                    $('#createNewProduct').click(function() {
                        $('#saveBtn').val("create-product");
                        $('#id').val('');
                        $('#productForm').trigger("reset");
                        $('#modelHeading').html("Create New Product");
                        $('#ajaxModel').modal('show');
                    });
        
                    
                    $('body').on('click', '.editProduct', function() {
                        var id = $(this).data('id');
                        $.get("{{ route('data.index') }}" + '/' + id + '/edit', function(data) {
                            $('#modelHeading').html("Edit Product");
                            $('#saveBtn').val("edit-user");
                            $('#ajaxModel').modal('show');
                            $('#id').val(data.id);
                            $('#nama_lengkap').val(data.nama_lengkap);
                            //  $('#nik').val(data.nik);
                            $('#alamat_domisili').val(data.alamat_domisili);
                            $('#jenis_kelamin').val(data.jenis_kelamin);
                            $('#pendidikan_terakhir').val(data.pendidikan_terakhir);
                            $('#jurusan').val(data.jurusan);
                            $('#tanggal_pengesahan').val(data.tanggal_pengesahan);
                        })
                    });
        
                 
                    $('#saveBtn').click(function(e) {
                        e.preventDefault();
                        $(this).html('Simpan');
        
                        $.ajax({
                            data: $('#productForm').serialize(),
                            url: "{{ route('data.store') }}",
                            type: "POST",
                            dataType: 'json',
                            success: function(data) {
        
                                $('#productForm').trigger("reset");
                                $('#ajaxModel').modal('hide');
                                table.draw();
        
                            },
                            error: function(data) {
                                console.log('Error:', data);
                                $('#saveBtn').html('Save Changes');
                            }
                        });
                    });
        
                  
                    $('body').on('click', '.deleteProduct', function() {
        
                        var id = $(this).data("id");
                        confirm("Are You sure want to delete !");
        
                        $.ajax({
                            type: "DELETE",
                            url: "{{ route('data.store') }}" + '/' + id,
                            success: function(data) {
                                table.draw();
                            },
                            error: function(data) {
                                console.log('Error:', data);
                            }
                        });
                    });
        
                });
    </script>

 

</body>

{{-- {!! $dataTable->scripts() !!} --}}

</html>
