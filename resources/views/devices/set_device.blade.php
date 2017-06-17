@extends('layouts.blank')

@section('title')
    PKM NCC | Set Device
@endsection

@push('stylesheets')
     <!-- iCheck -->
    <link href="{{ asset("assets/iCheck/skins/flat/green.css")}}" rel="stylesheet">
     <!-- iCheck -->
    <link href="{{ asset("assets/switchery/dist/switchery.min.css")}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{ asset("assets/select2/dist/css/select2.min.css") }}" rel="stylesheet">
    <!-- Animate -->
    <link href="{{ asset("assets/animate.css/animate.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- PNotify -->
    <link href="{{ asset("assets/pnotify/dist/pnotify.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/pnotify/dist/pnotify.buttons.css") }}" rel="stylesheet">
    <link href="{{ asset("assets/pnotify/dist/pnotify.nonblock.css") }}" rel="stylesheet">
    <!-- Sweetalert2 -->
    <link href="{{ asset("assets/sweetalert2/dist/sweetalert2.min.css") }}" rel="stylesheet">

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
                  <h3>Set Devices</h3>
                </div>
                <div class="title_right">
                  <div class="pull-right">
                    <section class="content-header">
                      <ol class="breadcrumb">
                      <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
                      <li class="active">Set Devices</li>
                    </ol>  
                    </section>
                  </div>
                </div>
            </section>

        </div class="clearfix">

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Set Devices</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />

                        
                        @foreach($data as $index => $lampu)
                            <div class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-5">Lampu {{$index +1}} : 
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <div class="sensor">
                                        <label>Off</label>
                                        <label>
                                            @if($lampu->status_device == "1-")
                                            <input type="checkbox" class="js-switch" id="checkbox{{$index +1}}" checked /> On
                                            @else
                                            <input type="checkbox" class="js-switch" id="checkbox{{$index +1}}" unchecked /> On
                                            @endif
                                        </label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                        @foreach($data2 as $index => $lampu)
                            <div class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-5">Lampu {{$index +2}} : 
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <div class="sensor">
                                        <label>Off</label>
                                        <label>
                                            @if($lampu->status_device == "1-")
                                            <input type="checkbox" class="js-switch" id="checkbox{{$index +2}}" checked /> On
                                            @else
                                            <input type="checkbox" class="js-switch" id="checkbox{{$index +2}}" unchecked /> On
                                            @endif
                                        </label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                         @foreach($data3 as $index => $lampu)
                            <div class="form-horizontal form-label-left">
                                <div class="form-group">
                                    <label class="control-label col-md-5">Lampu {{$index +3}} : 
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <div class="sensor">
                                        <label>Off</label>
                                        <label>
                                            @if($lampu->status_device == "1-")
                                            <input type="checkbox" class="js-switch" id="checkbox{{$index +3}}" checked /> On
                                            @else
                                            <input type="checkbox" class="js-switch" id="checkbox{{$index +3}}" unchecked /> On
                                            @endif
                                        </label>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

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

    <!-- iCheck -->
    <script src="{{ asset("assets/iCheck/icheck.min.js") }}"></script>
    <!-- Switchery -->
    <script src="{{ asset("assets/switchery/dist/switchery.min.js") }}"></script>
    <!-- Select2 -->
    <script src="{{ asset("assets/select2/dist/js/select2.full.min.js") }}"></script>
    <!-- Sweetalert2 -->
    <script src="{{ asset("assets/sweetalert2/dist/sweetalert2.min.js") }}"></script>
    <!-- PNotify -->
    <script src="{{ asset("assets/pnotify/dist/pnotify.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.animate.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.buttons.js") }}"></script>
    <script src="{{ asset("assets/pnotify/dist/pnotify.nonblock.js") }}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min2.js") }}"></script>
    <!-- Include Scripts -->
    @include('javascript.pnotify')
    
     <script type="text/javascript">
        $(document).ready(function() {

            $('#checkbox1').click(function() {
                if (!$(this).is(':checked')) {
                    setTimeout(function() {
                        //e.preventDefault();
                        var url = "http://localhost:8000/api/lampu_a/0-";
                        $(location).attr('href', url);
                    }, 500);
                    
                
                }
                else
                    setTimeout(function() {
                        //e.preventDefault();
                       var url = "http://localhost:8000/api/lampu_a/1-";
                        $(location).attr('href', url);
                    }, 500);
            });

            $('#checkbox2').click(function() {
                if (!$(this).is(':checked')) {
                    //return confirm("Are you sure?");
                    setTimeout(function() {
                        var url = "http://localhost:8000/api/lampu_b/0-";
                        $(location).attr('href', url);
                    }, 500);
                }
                else
                    setTimeout(function() {
                        var url = "http://localhost:8000/api/lampu_b/1-";
                        $(location).attr('href', url);
                    }, 500);
            });

            $('#checkbox3').click(function() {
                if (!$(this).is(':checked')) {
                    //return confirm("Are you sure?");
                    setTimeout(function() {
                        var url = "http://localhost:8000/api/lampu_c/0-";
                        $(location).attr('href', url);
                    }, 500);
                }
                else
                    setTimeout(function() {
                        var url = "http://localhost:8000/api/lampu_c/1-";
                        $(location).attr('href', url);
                    }, 500);
            });
        });
    </script>

    @endpush
@endsection