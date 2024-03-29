<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset("assets/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("assets/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset("assets/nprogress/nprogress.css") }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset("assets/animate.css/animate.min.css") }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset("build/css/custom.min.css") }}" rel="stylesheet">    

</head>


<body class="login">
    <div>

      <div class="login_wrapper">
        
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="{{ url('/register') }}" data-parsley-validate>
                {!! csrf_field() !!}
                
                <h1>Create Account</h1>
                
                <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    
                    @if ($errors->has('name'))
                        <span class="help-block">
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    
                    @if ($errors->has('email'))
                        <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                
               <div class="form-group has-feedback{{ $errors->has('no_hp') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" data-parsley-type="number" name="no_hp" value="{{ old('no_hp') }}" placeholder="Phone" required/>
                    <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
                    
                    @if ($errors->has('no_hp'))
                        <span class="help-block">
                          <strong>{{ $errors->first('no_hp') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('alamat') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}" placeholder="Address" required/>
                    <span class="glyphicon glyphicon-home form-control-feedback"></span>
                    
                    @if ($errors->has('alamat'))
                        <span class="help-block">
                          <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('kota_domisili') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="kota_domisili" value="{{ old('kota_domisili') }}" placeholder="City" required/>
                    <span class="glyphicon glyphicon-road form-control-feedback"></span>
                    
                    @if ($errors->has('kota_domisili'))
                        <span class="help-block">
                          <strong>{{ $errors->first('kota_domisili') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('negara_domisili') ? ' has-error' : '' }}">
                    <input type="text" class="form-control" name="negara_domisili" value="{{ old('negara_domisili') }}" placeholder="Country" required/>
                    <span class="glyphicon glyphicon-flag form-control-feedback"></span>
                    
                    @if ($errors->has('negara_domisili'))
                        <span class="help-block">
                          <strong>{{ $errors->first('negara_domisili') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" data-parsley-minlength="5" class="form-control" name="password" placeholder="Password" required/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    
                    @if ($errors->has('password'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                
                <div class="form-group has-feedback{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <input type="password" data-parsley-equalto="#password" name="password_confirmation" class="form-control" placeholder="Confirm password" required/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                          <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div>
                    <button class="btn btn-default submit" >Register</button>
                </div>
                
                <div class="clearfix"></div>
                
                <div class="separator">
                    <p class="change_link">Already a member ?
                        <a href="{{ url('login') }}" class="to_register"> Log in </a>
                    </p>
                    
                    <div class="clearfix"></div>
                    <br />
                    
                    <div>
                        <h1><i class="fa fa-paw"></i> Toko Bahagia</h1>
                        <p>©2017 All Rights Reserved. Toko Bahagia is a Bootstrap 3 template. Privacy and Terms</p>
                    </div>
                </div>
            </form>
          </section>
        </div>

      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset("assets/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset("assets/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <!-- FastClick -->
    <script src="{{ asset("assets/fastclick/lib/fastclick.js") }}"></script>
    <!-- NProgress -->
    <script src="{{ asset("assets/nprogress/nprogress.js") }}"></script>
    <!-- Parsley -->
    <script src="{{ asset("assets/parsleyjs/dist/parsley.min.js")}}"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{ asset("build/js/custom.min2.js") }}"></script>

  </body>
</html>