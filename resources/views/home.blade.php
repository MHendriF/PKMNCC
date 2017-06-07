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

                            <p>Data Pengguna</p>
                            <p>Nama : {{ Auth::user()->name }}</p>
                            <p>Email : {{ Auth::user()->email }}</p>
                            <p>No Hp : {{ Auth::user()->no_hp }}</p>
                            <p>Alamat : {{ Auth::user()->alamat }}</p>
                            <p>Kota : {{ Auth::user()->kota_domisili }}</p>
                            <p>Negara : {{ Auth::user()->negara_domisili }}</p>
                            
                                
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
