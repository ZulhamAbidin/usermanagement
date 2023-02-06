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
                        <h1 class="page-title">Dashboard</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->
        
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">

                            <div class="row">

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">Total Users Admin</h6>
                                                    <h2 class="mb-0 number-font"> 1</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">Total Peserta Pengesahan</h6>
                                                    <h2 class="mb-0 number-font"> 1 </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">Telah Bekerja</h6>
                                                    <h2 class="mb-0 number-font"> 1 </h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="d-flex">
                                                <div class="mt-2">
                                                    <h6 class="">Belum Bekerja</h6>
                                                    <h2 class="mb-0 number-font">1</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- CONTAINER END -->
            </div>
        </div>
        <!--app-content close-->
        <!--app-content closed-->
    </div>



    <!-- FOOTER -->
    @include('include.layouts.footer')
    <!-- FOOTER CLOSED -->
</div>

<!-- BACK-TO-TOP -->

<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection