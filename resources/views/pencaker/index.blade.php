@extends('include.main')

@section('main')
<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        @include('include.layouts.header')
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        @include('include.layouts.sidebar')
        <!--/APP-SIDEBAR-->

        <!--app-content open-->
        <div class="main-content app-content mt-0">
            <div class="side-app">


                <!-- CONTAINER -->
                <div class="main-container container-fluid">



                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <h1 class="page-title">Data Pekerja</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Peserta Pengesahan
                                </li>
                            </ol>
                        </div>

                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- Row -->
                    <div class="row row-sm">
                        <div class="col-lg-12">


                            @if (Session::has('succes'))

                            <div class="alert alert-info alert-link" role="" id="succes">
                                <button type="button" class="btn-close">×</button>
                                <strong>{{ Session::get('succes') }}A</strong>
                            </div>

                            @endif


                            <div class="card">
                                <div class="card-header">
                                    <a class="btn btn-primary btn-sm" href="javascript:void(0)" id="createNewProduct"><i
                                            class="fe fe-plus me-2"></i> Create New Data</a>
                                </div>

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="data-table table table-bordered text-nowrap border-bottom " id="">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p border-bottom-0 text-sm">No</th>
                                                    <th class="wd-15p border-bottom-0 text-sm">Nama Lengkap</th>
                                                    <th class="wd-15p border-bottom-0 text-sm">Alamat Domisili</th>
                                                    <th class="wd-15p border-bottom-0 text-sm">Jenis Kelamin</th>
                                                    <th class="wd-15p border-bottom-0 text-sm">Pendidikan Terakhir
                                                    </th>
                                                    <th class="wd-15p border-bottom-0 text-sm">Jurusan</th>
                                                    <th class="wd-15p border-bottom-0 text-sm">Tanggal Pengesahan
                                                    </th>
                                                    <th class="wd-15p border-bottom-0 text-sm text-center">Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>

                                        <table id="table" class="w-full text-sm text-left text-gray-500">
                                            <thead class="text-xs text-gray-700 uppercase bg-gray-100">
                                                <tr>
                                                    <th scope="col" class="py-3 px-6 rounded-l-lg">
                                                        ID
                                                    </th>
                                                    <th scope="col" class="py-3 px-6 ">
                                                        Nama Lengkap
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Jenis Kelamin
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Alamat Domisili
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Tanggal Pengesahan
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Pendidikan Terakhir
                                                    </th>
                                                    <th scope="col" class="py-3 px-6">
                                                        Jurusan
                                                    </th>
                                                    <th scope="col" class="py-3 rounded-r-lg text-center">
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                        
                                                @foreach ($data as $key => $value)
                                                <tr class="bg-white hover:bg-gray-300 hover:text-black">
                                                    <th class="py-4 text-center px-2 font-medium text-gray-900 rounded-l-xl">
                                                        {{ $value->id }}
                                                    </th>
                                                    <td scope="py-4 px-6" class="py-4 w-fit px-6">
                                                        {{ $value->nama_lengkap }}
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        {{ $value->jenis_kelamin }}
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        {{ $value->alamat_domisili }}
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        {{ \Carbon\Carbon::parse($value->tanggal_pengesahan)->format('d F Y') }}
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        {{ $value->pendidikan_terakhir }}
                                                    </td>
                                                    <td class="py-4 px-6">
                                                        {{ $value->jurusan }}
                                                    </td>
                                                    <td class="py-4 px-6 rounded-r-xl">
                                        
                                                        <div class="inline-flex rounded-md shadow-sm">
                                                            <form action="{{ url('data/' . $value->id) }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button href="#" aria-current="page"
                                                                    class="py-2 px-4 text-xs font-medium flex text-temakuhover bg-white hover:bg-red-500 rounded-l-lg border border-gray-200">
                                                                    <svg class="mr-2 h-5 w-5 text-xs" fill="currentColor" viewBox="0 0 20 20"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd"
                                                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                                            clip-rule="evenodd">
                                                                        </path>
                                                                    </svg>
                                                                    Delete
                                                                </button>
                                                            </form>
                                        
                                                            <a href="{{ url('data/' . $value->id . '/edit') }}" type="button"
                                                                class="py-2 flex px-4 text-xs font-medium text-temakuhover bg-white rounded-r-md border border-gray-200 hover:bg-amber-400 hover:text-temakuhover">
                                                               
                                                                Edit
                                                            </a>
                                                        </div>
                                        
                                                    </td>
                                        
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                </div>
                <!-- CONTAINER CLOSED -->

            </div>
        </div>
        <!--app-content closed-->
    </div>


    <!-- FOOTER -->
    @include('include.layouts.footer')
    <!-- FOOTER CLOSED -->
</div>

<!-- BACK-TO-TOP -->

<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection