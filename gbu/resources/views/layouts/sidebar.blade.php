    <div class="sidebar bg-orange-500">
        <div class="logo-details">
            <a onclick="leavingAnimation();" href="{{ url('') }}" class="flex">
                <!-- <i class='text-white bx bxl-c-plus-plus icon my-auto'></i> -->
                <div class="logo_name my-auto">Tangkal Bencana</div>
            </a>
            <i class='text-white bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
<!--             <li id="menu-hazard">
                <a onclick="leavingAnimation();" href="#">
                    <i class='text-paleblue-light bx bx-grid-alt'></i>
                    <span class="links_name">Potensi Bencana</span>
                </a>
                <span class="tooltip">Potensi Bencana</span>
            </li>
            <li id="menu-report">
                <a onclick="leavingAnimation();" href="#">
                    <i class='text-paleblue-light bx bxs-report'></i>
                    <span class="links_name">Laporan Bencana</span>
                </a>
                <span class="tooltip">Laporan Bencana</span>
            </li> -->
            <li id="menu-hydrometeorology">
                <a onclick="leavingAnimation();" href="{{ url('hydrometeorology') }}">
                    <i class='text-white bx bx-water'></i>
                    <span class="links_name text-white">Hidrometeorologi</span>
                </a>
                <span class="tooltip">Hidrometeorologi</span>
            </li>
            <li id="menu-weather">
                <a onclick="leavingAnimation();" href="{{ url('weather') }}">
                    <i class='text-white bx bx-cloud-rain'></i>
                    <span class="links_name text-white">Prediksi Cuaca</span>
                </a>
                <span class="tooltip">Prediksi Cuaca</span>
            </li>
            <li id="menu-volcano">
                <a onclick="leavingAnimation();" href="{{ url('volcano') }}">
                    <i class='text-white bx bxs-flame'></i>
                    <span class="links_name text-white">Gunung Api</span>
                </a>
                <span class="tooltip">Gunung Api</span>
            </li>
            <li id="menu-earthquake">
                <a onclick="leavingAnimation();" href="{{ url('earthquake') }}">
                    <i class='text-white bx bx-globe'></i>
                    <span class="links_name text-white">Gempa Bumi</span>
                </a>
                <span class="tooltip">Gempa Bumi</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <!--<img src="profile.jpg" alt="profileImg">-->
                    <div class="name_job">
                        <div class="name">{{ Auth::User()->name }}</div>
                        <div class="job">{{ Auth::User()->role }}</div>
                    </div>
                </div>
                <a href="{{ url('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class='text-white bx bx-log-out' id="log_out"></i></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>                
                
            </li>
        </ul>
    </div>