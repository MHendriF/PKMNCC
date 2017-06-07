@extends('layouts.blank')

@section('title')
    PKM NCC | Set On/Off
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
                            <form method="post" action="{{ url('device/'.$lampu->id) }}" id="demo-form2" class="form-horizontal form-label-left">
                                {!! csrf_field() !!}
                                <div class="form-group">
                                    <label class="control-label col-md-5">Lampu {{$lampu->id}} : 
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                      <div class="sensor">
                                        <label>Off</label>
                                        <label>
                                            <input type='hidden' value='0' name='status_device'>
                                            @if($lampu->status_device == 1)
                                            <input type="checkbox" class="js-switch" name="status_device" value="1" onClick="submit();" checked /> On
                                            @else
                                            <input type="checkbox" class="js-switch" name="status_device" value="1" onClick="submit();" /> On
                                            @endif
                                        </label>
                                      </div>
                                    </div>
                                </div>
                            </form>
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
    

    @endpush
@endsection