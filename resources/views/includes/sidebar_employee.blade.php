            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ url('home') }}">
                            <i class="fa fa-home"></i>Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('#') }}">
                            <i class="fa fa-bar-chart"></i>Data Sensor
                        </a>
                    </li>
                    {{-- <li>
                        <a href="{{ url('on_off') }}">
                            <i class="fa fa-power-off"></i>Set On/Off
                        </a>
                    </li> --}}
                    <li>
                        <a href="{{ url('set_device') }}">
                            <i class="fa fa-power-off"></i>Set Device
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('device') }}">
                            <i class="fa fa-microchip" aria-hidden="true"></i>Device
                        </a>
                    </li>
                </ul>
            </div>