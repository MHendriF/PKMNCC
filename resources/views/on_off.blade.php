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
                  <h3>Set On/Off</h3>
                </div>
                <div class="title_right">
                  <div class="pull-right">
                    <section class="content-header">
                      <ol class="breadcrumb">
                      <li><a href="{{ url('home') }}"><i class="fa fa-home"></i>Home</a></li>
                      <li class="active">Set On/Off</li>
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
                      <h2>Set On/Off</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        {{-- <form method="get" action="http://adeilhamfajri.id/api/store/z/100000/100000" id="demo-form2" class="form-horizontal form-label-left"> --}}
                            {{-- {!! csrf_field() !!} --}}

                            {{-- @foreach($data as $index => $lampu)
                            <div class="form-group">
                                <label class="control-label col-md-5">Lampu {{$lampu->id}} : 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="sensor">
                                    <label>Off</label>
                                    <label>
                                        <input type='hidden' value='0' name='lampu'>
                                        <input type="checkbox" class="js-switch" name="lampu" value="1" onClick="location.href='http://google.com';" checked /> On
                                    </label>
                                  </div>
                                </div>
                            </div>
                            @endforeach --}}
                        {{-- </form> --}}
                            
                            <div class="form-group">
                                <label class="control-label col-md-5">Lampu 1 : 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="sensor">
                                    <label>Off</label>
                                    <label>
                                      <input type="checkbox" class="js-switch" id="checkbox1" name="lampu2"  /> On
                                    </label>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-5">Lampu 2 : 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="sensor">
                                    <label>Off</label>
                                    <label>
                                      <input type="checkbox" class="js-switch" name="lampu2"  id="checkbox2" checked /> On
                                    </label>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-5">Lampu 3 : 
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div class="sensor">
                                    <label>Off</label>
                                    <label>
                                      <input type="checkbox" class="js-switch" name="lampu" unchecked /> On
                                    </label>
                                  </div>
                                </div>
                            </div>


            
                        <!-- Modal -->
                          <div class="modal fade" id="showModal" role="dialog">
                            <div class="modal-dialog">
                            
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Modal Header</h4>
                                </div>
                                <div class="modal-body">
                                  <p>Some text in the modal.</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
    

    <script>
        $(document).ready(function() {

            $(document).on('click', '#submit', function (id) {

                event.preventDefault();
                // var formData = {
                //     'lampu'   : $('input[name=lampu]').val()
                // };

                // $.ajax({  
                //     type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
                //     url         : 'on_off', // the url where we want to POST
                //     data        : formData, // our data object
                //     dataType    : 'json', // what type of data do we expect back from the server
                //     encode      : true,
                //     success: function(response){
                //         alert(response);
                //         location.reload(); 
                //       }

                // });

            swal(
              'Good job!',
              'You clicked the button!',
              'success'
            ).done(function(data) {

                // log data to the console so we can see
                console.log(data); 

                    // here we will handle errors and validation messages
            });



          });
        })
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#checkbox1').click(function() {
                if (!$(this).is(':checked')) {
                    setTimeout(function() {
                      window.location='http://www.yahoo.com';
                    }, 500);
                
                }
                else
                    setTimeout(function() {
                      window.location='http://www.google.com';
                    }, 500);
            });

            $('#checkbox2').click(function() {
                if (!$(this).is(':checked')) {
                    //return confirm("Are you sure?");
                    setTimeout(function() {
                      window.location='http://www.yahoo.com';
                    }, 500);
                    
                    //alert('unchecked');
                }
                else
                    setTimeout(function() {
                      window.location='http://www.google.com';
                    }, 500);
            });
        });
    </script>

    @endpush
@endsection