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
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">File Manager</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">List E-Document</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- Row -->
                        <div class="row row-sm">
                            <div class="col-md-12 col-lg-12 col-xl-12">
                                <div class="row row-sm">

                                    <div class="row">

                                        <div class="col-sm-12 col-md-12">
                                            <div class="card">
                                                <div class="card-body pb-2">
                                                    <div class="text-dark mb-4 ms-1 fs-20 fw-semibold">List Document</div>
                                                    <form action action="{{ url('/document/show') }}" method="GET"
                                                        class="input-group pb-4">
                                                        <input type="text" value="{{ request('search') }}" name="search"
                                                            class="form-control" placeholder="Searching.....">
                                                        <button type="submit"
                                                            class="input-group-text btn btn-primary">Search</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        @foreach ($document as $key => $value)
                                        <div class="col-xl-3 col-md-6 col-sm-6">
                                            <div class="card pos-relative">
                                                <a href="" class="open-file"></a>
                                        
                                                <div class="card-body px-4 pt-4 pb-2">
                                                    <div class="d-flex">
                                                        <span class="bg-primary-transparent border border-primary brround">
                                                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                                                <path fill="#645acf"
                                                                    d="M9.3 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4H10L12 6H20C21.1 6 22 6.9 22 8V14.6C20.6 13.6 18.9 13 17 13C13.5 13 10.4 15.1 9.1 18.3L8.8 19L9.1 19.7C9.2 19.8 9.2 19.9 9.3 20M23 19C22.1 21.3 19.7 23 17 23S11.9 21.3 11 19C11.9 16.7 14.3 15 17 15S22.1 16.7 23 19M19.5 19C19.5 17.6 18.4 16.5 17 16.5S14.5 17.6 14.5 19 15.6 21.5 17 21.5 19.5 20.4 19.5 19M17 18C16.4 18 16 18.4 16 19S16.4 20 17 20 18 19.6 18 19 17.6 18 17 18" />
                                                            </svg>
                                                        </span>
                                        
                                                        <div class="ms-auto mt-1 file-dropdown">
                                                            <a href="javascript:void(0)" class="text-muted" data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false"><i class="fe fe-more-vertical fs-18"></i></a>
                                                            <div class="dropdown-menu dropdown-menu-start">
                                                                <a href="{{ url('/document/download', $value->file) }}" class="dropdown-item"
                                                                    href="javascript:void(0)"><i class="fe fe-download me-2"></i>
                                                                    Download</a>
                                                                <a href="/document/show/{{ $value->id }}" class="dropdown-item" href="javascript:void(0)"><i
                                                                        class="fe fe-trash me-2"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                                <div class="card-footer border-top-0">
                                                    <div class="d-flex">
                                                        <div>
                                                            <h5 class="text-primary">{{ $value->nama }}</h5>
                                                            <p class="text-muted fs-13 mb-0">
                                                                {{ $value->description }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                            </div>
                                        </div>
                                        @endforeach

                                        <div class="card-footer">
                                            <!--Row-->
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="float-end">{{ $document->links() }}</div>
                                                </div>
                                            </div>
                                            <!--End Row-->
                                        </div>

                                        
                                        @if ($document->count())

                                        @else
                                            <p class="text-center">Tidak Ada Document.</p>
                                        @endif

                                    </div>

                                </div>

                            </div>

                            <!-- End Row -->
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
