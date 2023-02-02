<!DOCTYPE html>
<html>
<head>
    <title>Laravel Yajra Datatables Export to Excel Button Example - ItSolutionStuff.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="/vendor/datatables/buttons.server-side.js"></script>
</head>
<body>
    <div class="container">
        <h1>Laravel Yajra Datatables Export to Excel Button Example - ItSolutionStuff.com</h1>
        {!! $dataTable->table() !!}
    </div>


    <div class="container">
        <div class="bungkus">
        
            <div class="main fixed mt-3">
        
                <div class="toggle md:mt-2 hidden lg:flex">
                    <ion-icon name="menu-outline" class="hidden lg:flex"> </ion-icon>
                </div>
        
                <div class="bg-white lg:mt-3 inset-0 z-10 -mt-10 lg:pb-0 lg:pt-0 px-4">
        
                    <div class="pt-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
                        <div class="mb-1 w-full">
                            <div class="mb-1">
                                <h1 class="text-xl sm:text-2xl font-semibold text-gray-900 uppercase"> cetak data pekerja</h1>
                                @if (Session::has('success'))
                                <div class="bg-cyan-600 text-slate-50 rounded-xl p-4 mb-8 mt-4" role="alert">
                                    <strong>{{ Session::get('success') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
        
        
        
                    <div class="grid grid-cols-6 gap-6 mt-10">
        
                        <div class="col-span-6 lg:col-span-3">
                            <label for="hari" class="text-sm font-medium text-gray-900 block mb-2">Tanggal Pengesahan</label>
                            <input type="date" name="tglawal" id="tglawal"
                                class="shadow-sm bg-gray-50 border focus:border-temaku  focus:ring-temaku border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5"
                                placeholder="year.mounth.days" required>
                        </div>
        
                        <div class="col-span-6 lg:col-span-3">
                            <label for="hari" class="text-sm font-medium text-gray-900 block mb-2">Tanggal Pengesahan</label>
                            <input type="date" name="tglakhir" id="tglakhir"
                                class="shadow-sm bg-gray-50 border focus:border-temaku  focus:ring-temaku border-gray-300 text-gray-900 sm:text-sm rounded-lg  block w-full p-2.5"
                                placeholder="year.mounth.days" required>
                        </div>
        
                        <a href="" onclick="this.href='/cetak/cetak-data-pertanggal/'+ document.getElementById('tglawal').value +
                          '/' + document.getElementById('tglakhir').value "
                            class="col-span-6 block text-center hover:text-white py-2 shadow-sm bg-temaku border border-gray-300 text-slate-50 sm:text-sm rounded-lg"
                            target="_blank">Cetak data
                            pertanggal
                        </a>
        
                    </div>
        
        
                </div>
            </div>
        </div>
    </div>
</body>

{!! $dataTable->scripts() !!}

</html>