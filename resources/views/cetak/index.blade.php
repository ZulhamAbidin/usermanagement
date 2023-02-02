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
                            <h1 class="page-title">Cetak Custom</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Data</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cetak / Export</li>
                                </ol>
                            </div>

                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">File Export</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="file-datatable"
                                                class="table table-bordered text-nowrap key-buttons border-bottom">
                                                <tbody>
                                                     {!! $dataTable->table() !!} 
                                                </tbody> 
                                            </table>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
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
