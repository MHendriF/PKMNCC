{{-- <div class="col-md-3 left_col menu_fixed"> --}}
<div class="col-md-3 left_col">  
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{ url('/') }}" class="site_title"><i class="fa fa-cloud"></i> <span>Omah Sakti</span></a>
        </div>
        
        <div class="clearfix"></div>
        
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('/img/user.png')}}" alt="...." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{ Auth::user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->
        
        <br />
        
        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            @include('includes.sidebar_employee')
           
        </div>
        <!-- /sidebar menu -->
        
        <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a class="tooltip-top" title="" data-tooltip="Setting">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a dclass="tooltip-top" title="" data-tooltip="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a class="tooltip-top" title="" data-tooltip="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a dclass="tooltip-top" title="" data-tooltip="Logout" href="{{ url('/logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>

    </div>
</div>

