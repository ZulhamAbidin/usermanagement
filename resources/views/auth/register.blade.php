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
                            <h1 class="page-title">Management Users</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Users</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Create New Users</div>

                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <div class="card-body">

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label"> Nama :</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="name" class="form-control" placeholder="Username"
                                                        name="name" :value="old('name')" required autofocus />
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label"> Email :</label>
                                                <div class="col-md-9">
                                                    <input type="email" id="email" class="form-control" placeholder="Email" name="email" :value="old('email')" required />
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label"> Password :</label>
                                                <div class="col-md-9">
                                                    <input type="password" id="password" class="form-control" placeholder="Password"name="password" :value="old('password')" required autofocus />
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label"> Password Confirmation :</label>
                                                <div class="col-md-9">
                                                    <input type="password" id="password_confirmation" class="form-control" placeholder="password confirmation" name="password_confirmation" :value="old('password_confirmation')" required autofocus />
                                                </div>
                                            </div>

                                            <div class="row mb-4">
                                                <label class="col-md-3 form-label"> Role :</label>
                                                <div class="col-md-9">
                                                    <select name="is_admin" id="is_admin" class="form-control" required>
                                                        <option value="0">Admin</option>
                                                        <option value="1">Administrator</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary float-end">Upload</button>
                                                </div>
                                            </div>
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
