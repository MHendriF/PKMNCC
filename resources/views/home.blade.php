@extends('layouts.blank')

@section('title')
    Omah Sakti | Home
@endsection

@push('stylesheets')
        <!-- Animate -->
      <link href="{{ asset("assets/animate.css/animate.min.css")}}" rel="stylesheet" type="text/css"/>
      <!-- PNotify -->
      <link href="{{ asset("assets/pnotify/dist/pnotify.css") }}" rel="stylesheet">
      <link href="{{ asset("assets/pnotify/dist/pnotify.buttons.css") }}" rel="stylesheet">
      <link href="{{ asset("assets/pnotify/dist/pnotify.nonblock.css") }}" rel="stylesheet">
      <!-- Sweetalert -->
      <link href="{{ asset("css/sweetalert2/sweetalert2.min.css") }}" rel="stylesheet">
      <!-- Custom Theme Style -->
      <link href="{{ asset("build/css/action-icon.css") }}" rel="stylesheet"> 
      <link href="{{ asset("build/css/custom.min2.css") }}" rel="stylesheet">  
@endpush

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
      
            <section class="page-title">
                <div class="title_left">
                  <h3>Home Dasboard</h3>
                </div>
                <div class="title_right">
                  <div class="pull-right">
                    <section class="content-header">
                      <ol class="breadcrumb">
                      <li class="active"><a href="{{ url('general') }}"><i class="fa fa-home"></i>Home</a></li>
                    </ol>  
                    </section>
                  </div>
                </div>
          </section>

            <div class="x_content">
                <div class="row">
                    
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                          <div class="x_title">
                            <h2>Welcome</h2>
                            <ul class="nav navbar-right panel_toolbox">
                              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                              <li><a href="{{ url('general') }}"><i class="fa fa-repeat"></i></a></li>
                              <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                            </ul>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
                              <div class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-6 col-xs-12">----- Data Pengguna -----</label>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-5">Nama : </label>
                                    <label class="control-label">{{ Auth::user()->name }}</label>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-5">Email : </label>
                                    <label class="control-label">{{ Auth::user()->email }}</label>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-5">No HP : </label>
                                    <label class="control-label">{{ Auth::user()->no_hp }}</label>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-5">Alamat : </label>
                                    <label class="control-label">{{ Auth::user()->alamat }}</label>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-5">Kota : </label>
                                    <label class="control-label">{{ Auth::user()->kota_domisili }}</label>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label col-md-5">Negara : </label>
                                    <label class="control-label">{{ Auth::user()->negara_domisili }}</label>
                                </div>
                            </div>
                            
                          </div>
                        </div>
                      </div>

                </div>
            </div>

        </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
    @include('includes.footer')
    <!-- /footer content -->

    @push('scripts')

        <!-- PNotify -->
        <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.animate.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
        <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
        <!-- Sweetalert -->
        <script src="{{ asset("js/sweetalert2/sweetalert2.min.js") }}"></script>
        <!-- Custom Theme Scripts -->
        <script src="{{ asset("build/js/custom.min2.js") }}"></script>

        <!-- Include Scripts -->
        @include('javascript.pnotify')
        @include('javascript.sweetalert')

    @endpush

@endsection
