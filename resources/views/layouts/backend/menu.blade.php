<aside class="main-sidebar sidebar-white-primary elevation-4 table-responsive">
    <nav class="mt-2 table-responsive">
        <div id="wrapper">
            <ul class="navbar-nav bg-white sidebar sidebar-dark accordion table-responsive" id="accordionSidebar">
                <hr class="sidebar-divider">

                <a class="sidebar-brand d-flex align-items-center justify-content-center">
                    <div class="sidebar-brand-icon"></div>
                    <div class="sidebar-brand-icon">
                        <img src="asset/frontend/images/egatlogo.png" alt="logo" class="img-fluid"
                            style="width: 200px; height: auto;">
                    </div>
                </a>

                <hr class="sidebar-divider my-3 bg-dark">

                <!-- Nav Items -->
                <li class="nav-item">
                    <a class="nav-link sidebar-link text-dark" href="{{ route('home') }}">
                        <i class="fas fa-fw fa-home text-dark"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link text-dark" href="{{ route('group') }}">
                        <i class="fas fa-fw fa-table text-dark"></i>
                        <span>Group</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link text-dark" href="{{ route('inventory') }}">
                        <i class="fas fa-fw fa-box text-dark"></i>
                        <span>Inventory</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link text-dark" href="{{ route('alarm') }}">
                        <i class="fas fa-fw fa-bell text-dark"></i>
                        <span>Alarm</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link text-dark" href="{{ route('administrator') }}">
                        <i class="fas fa-fw fa-male text-dark"></i>
                        <span>Administrator</span>
                    </a>
                </li>

                <hr class="sidebar-divider my-3 bg-dark">

            </ul>
        </div>
    </nav>
</aside>



