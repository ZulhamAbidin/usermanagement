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
                                        <strong>{{ Session::get('message') }}A</strong>
                                    </div>

                                @endif
                                

                                <div class="card">
                                    <div class="card-header">
                                        <a class="btn btn-primary btn-sm" href="javascript:void(0)" id="createNewProduct"><i
                                                class="fe fe-plus me-2"></i> Create New Data</a>
                                    </div>

                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="data-table table table-bordered text-nowrap border-bottom "
                                                id="">
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

        <div class="modal fade" id="ajaxModel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="modelHeading"></h4>
                    </div>
                    <div class="modal-body">
                        <form id="productForm" name="productForm" class="form-horizontal">
                            <input type="hidden" name="id" id="id">

                            <div class="form-group">
                                <label for="nama_lengkap" class="col-sm-12 control-label">Nama Lengkap</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                        placeholder="Nama Lengkap" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="alamat_domisili" class="col-sm-12 control-label">Alamat Domisili</label>
                                <div class="col-sm-12">
                                    <select class="form-select" id="alamat_domisili" name="alamat_domisili"
                                        aria-label="Alamat Domisili" required>
                                        <option value=""></option>
                                        <option value="Kota Makassar">Kota Makassar</option>
                                        <option value="Kota Palopo">Kota Palopo</option>
                                        <option value="Kota Parepare">Kota Parepare </option>
                                        <option value="Kabupaten Bantaeng">Kabupaten Bantaeng</option>
                                        <option value="Kabupaten Barru">Kabupaten Barru</option>
                                        <option value="Kabupaten Bone">Kabupaten Bone </option>
                                        <option value="Kabupaten Bulukumba">Kabupaten Bulukumba</option>
                                        <option value="Kabupaten Enrekang">Kabupaten Enrekang </option>
                                        <option value="Kabupaten Gowa">Kabupaten Gowa </option>
                                        <option value="Kabupaten Jeneponto">Kabupaten Jeneponto </option>
                                        <option value="Kabupaten Kepulauan Selayar">Kabupaten Kepulauan Selayar</option>
                                        <option value="Kabupaten Luwu">Kabupaten Luwu</option>
                                        <option value="Kabupaten Luwu Timur">Kabupaten Luwu Timur </option>
                                        <option value="Kabupaten Luwu Utara">Kabupaten Luwu Utara</option>
                                        <option value="Kabupaten Maros">Kabupaten Maros </option>
                                        <option value="Kabupaten Pangkajene dan Kepulauan">Kabupaten Pangkajene dan
                                            Kepulauan</option>
                                        <option value="Kabupaten Pinrang">Kabupaten Pinrang </option>
                                        <option value="Kabupaten Sidenreng Rappang">Kabupaten Pinrang Rappang</option>
                                        <option value="Kabupaten Sinjai">Kabupaten Sinjai</option>
                                        <option value="Kabupaten Soppeng">Kabupaten Soppeng </option>
                                        <option value="Kabupaten Takalar">Kabupaten Takalar </option>
                                        <option value="Kabupaten Tana Toraja">Kabupaten Tana Toraja</option>
                                        <option value="Kabupaten Toraja Utara">Kabupaten Toraja Utara </option>
                                        <option value="Kabupaten Wajo">Kabupaten Wajo </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jenis_kelamin" class="col-sm-12 control-label">Jenis Kelamin</label>
                                <div class="col-sm-12">
                                    <select class="form-select" id="jenis_kelamin" name="jenis_kelamin"
                                        aria-label="jenis_kelamin" required>
                                        <option value=""></option>
                                        <option value="PRIA">PRIA</option>
                                        <option value="WANITA">WANITA</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pendidikan_terakhir" class="col-sm-12 control-label">Pendidikan
                                    Terakhir</label>
                                <div class="col-sm-12">
                                    <select class="form-select" id="pendidikan_terakhir" name="pendidikan_terakhir"
                                        aria-label="Pendidikan Terakhir" required>
                                        <option value=""></option>
                                        <option value="SD / MI">SD</option>
                                        <option value="SMP / MTS">SMP</option>
                                        <option value="SMA / SMK">SMA</option>
                                        <option value="Diploma 3">Dimploma 3</option>
                                        <option value="Diploma">Diploma 4</option>
                                        <option value="Strata 1">Strata 1</option>
                                        <option value="Strata 2">Strata 2</option>
                                        <option value="Strata 3">Strata 3</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="jurusan" class="col-sm-12 control-label">Jurusan</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="jurusan" name="jurusan"
                                        placeholder="Enter jurusan" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tanggal_pengesahan" class="col-sm-12 control-label">Tanggal Pengesahan</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" id="tanggal_pengesahan"
                                        name="tanggal_pengesahan" placeholder="Tanggal Pengesahan" required>
                                </div>
                            </div>

                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary" id="saveBtn"
                                    value="create">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        @include('include.layouts.footer')
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->

    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
@endsection


