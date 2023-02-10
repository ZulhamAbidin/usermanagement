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
                            <h1 class="page-title">E-Document</h1>
                            
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Document</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Upload</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">

                                    <div class="card-header">
                                        <div class="card-title">Upload New Document</div>
                                    </div>

                                    <form action="{{ url('document/') }}" method="post" enctype="multipart/form-data">

                                        @csrf
                                        
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Nama Document :</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="nama" class="form-control"
                                                        placeholder="Nama Document" required>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label">Deskripsi Document :</label>
                                                <div class="col-md-9">
                                                    <input type="text" name="description" class="form-control"
                                                        placeholder="Deskripsi Document" required>
                                                </div>
                                            </div>

                                            <!--Row-->
                                            <div class="row">
                                                <label class="col-md-3 form-label mb-4">Unggah Document</label>
                                                <div class="col-md-9">
                                                    <input id="" type="file" name="file" required>
                                                </div>
                                            </div>
                                            <!--End Row-->
                                        </div>
                                        <div class="card-footer">
                                            <!--Row-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary float-end">Upload</button>
                                                </div>
                                            </div>
                                            <!--End Row-->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /ROW-1 CLOSED -->
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
