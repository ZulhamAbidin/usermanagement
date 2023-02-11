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

            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">User List</h1>

                                {{-- @if (session()->has('success'))
                                <div class="alert alert-primary alert-dismissible show flex items-center mb-2" role="alert">
                                    <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
                                    {{ session('success') }}
                                    <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                                        <i data-lucide="x" class="w-4 h-4"></i>
                                    </button>
                                </div>
                                @endif --}}

                                @include('sweetalert::alert')

                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Apps</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">User List</li>
                                </ol>
                            </div>
                        </div>

                        
                        <!-- PAGE-HEADER END -->

                        <!-- ROW OPEN -->
                        <div class="row row-cards">
                            <div class="col-lg-12 col-xl-12">

                              
                                    <div class="card">
                                        <div class="card-body pb-2">
                                            <form action action="{{ url('/document/show') }}" method="GET" class="input-group pb-4">
                                                <input type="text" value="{{ request('search') }}" name="search" class="form-control"
                                                    placeholder="Searching.....">
                                                <button type="submit" class="input-group-text btn btn-primary">Search</button>
                                            </form>
                                        </div>
                                    </div>

                                <div class="card pt-lg-5">
                                    <div class="card-header">
                                        <a href="/register" class="btn btn-primary btn-sm" ><i class="fe fe-plus me-2"></i>
                                            Create New Account</a>
                                    </div>
                                    <div class="e-table px-5 pb-5">
                                        <div class="table-responsive table-lg">
                                            <table class="table border-top table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">#</th>
                                                        <th class="text-center">Nama</th>
                                                        <th class="text-center">Email</th>
                                                        {{-- <th class="text-center">Role</th> --}}
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach ($users as $user)

                                                        <tr>
                                                            <td class="text-nowrap align-middle">{{ $loop->iteration }}</td>
                                                            <td class="text-nowrap align-middle">{{ $user->name }}</td>
                                                            <td class="text-center align-middle">{{ $user->email }}</td>
                                                            {{-- <td class="text-center align-middle">{{ $user->is_admin }}</td> --}}
                                                            <td class="text-center ">
                                                                <form action="/user/{{ $user->id }}" method="POST">
                                                                    @method('delete')
                                                                    @csrf
                                                                    <button onclick="return confirm('Are you sure ?')" class="btn btn-danger" href="javascript:;" data-tw-toggle="modal"
                                                                        data-tw-target="#delete-confirmation-modal"> 
                                                                        <i class="fe fe-trash-2"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <ul class=" float-end">
                                        {{ $users->links() }}
                                    </ul>
                                </div>
                            </div>

                            
                            <!-- COL-END -->
                        </div>
                        <!-- ROW CLOSED -->
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
