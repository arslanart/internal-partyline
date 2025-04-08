<aside class="main-sidebar sidebar-dark-primary elevation-4 table-responsive">
    <nav class="mt-2 table-responsive">
        <div id="wrapper">
            <ul class="navbar-nav bg-dark sidebar sidebar-dark accordion table-responsive" id="accordionSidebar">
                <hr class="sidebar-divider">

                <a class="sidebar-brand d-flex align-items-center justify-content-center">
                    <div class="sidebar-brand-icon"></div>
                    <div class="sidebar-brand-icon">
                        <img src="asset/frontend/images/egatlogo.png" alt="logo" class="img-fluid"
                            style="width: 200px; height: auto;">
                    </div>
                </a>

                <hr class="sidebar-divider my-3">

                <!-- Nav Items -->
                <li class="nav-item">
                    <a class="nav-link sidebar-link" href="{{ route('home') }}">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" href="{{ route('group') }}">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Group</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" href="{{ route('inventory') }}">
                        <i class="fas fa-fw fa-box"></i>
                        <span>Inventory</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" href="{{ route('alarm') }}">
                        <i class="fas fa-fw fa-bell"></i>
                        <span>Alarm</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" href="{{ route('administrator') }}">
                        <i class="fas fa-fw fa-male"></i>
                        <span>Administrator</span>
                    </a>
                </li>

                <hr class="sidebar-divider my-3">

            </ul>
        </div>
    </nav>
</aside>



