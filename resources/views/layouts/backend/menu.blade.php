<aside class="main-sidebar sidebar-dark-primary elevation-4 table-responsive">
    <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('asset/frontend/images/egatlogo.png') }}" alt="logo" class="img-fluid"
                style="width: auto; height: auto;">
        </div>
    </a>
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
                <li class="nav-item active">
                    <a class="nav-link sidebar-link" href="{{ route('home') }}" data-url="{{ route('home') }}">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" href="{{ route('group') }}" data-url="{{ route('group') }}">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Group</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" href="{{ route('inventory') }}"
                        data-url="{{ route('inventory') }}">
                        <i class="fas fa-fw fa-box"></i>
                        <span>Inventory</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" href="{{ route('alarm') }}" data-url="{{ route('alarm') }}">
                        <i class="fas fa-fw fa-bell"></i>
                        <span>Alarm</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link" href="{{ route('admin') }}" data-url="{{ route('admin') }}">
                        <i class="fas fa-fw fa-male"></i>
                        <span>Administrator</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</aside>

<!-- Content Area -->
<div id="content-wrapper">
    <!-- Dynamic content will be loaded here -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // ดักจับการคลิกที่ลิงก์ใน Sidebar
        $('.sidebar-link').on('click', function(e) {
            e.preventDefault(); // ป้องกันการโหลดหน้าใหม่

            const url = $(this).data('url'); // ดึง URL จาก data-url
            const title = $(this).find('span').text(); // ดึงชื่อเมนู

            // เปลี่ยน URL ด้านบนของเบราว์เซอร์โดยไม่โหลดหน้าใหม่
            window.history.pushState({
                path: url
            }, title, url);

            // โหลดเนื้อหาแบบไดนามิก
            $('#content-area').html('<p>Loading...</p>'); // แสดงข้อความ Loading
            $.get(url, function(data) {
                $('#content-area').html(data); // แสดงเนื้อหาที่โหลดมา
            }).fail(function() {
                $('#content-area').html('<p>Error loading content.</p>'); // แสดงข้อความ Error
            });
        });

        // จัดการเมื่อผู้ใช้กดปุ่ม Back/Forward ในเบราว์เซอร์
        window.onpopstate = function(event) {
            if (event.state && event.state.path) {
                const url = event.state.path;

                // โหลดเนื้อหาใหม่เมื่อเปลี่ยน URL
                $('#content-area').html('<p>Loading...</p>');
                $.get(url, function(data) {
                    $('#content-area').html(data);
                }).fail(function() {
                    $('#content-area').html('<p>Error loading content.</p>');
                });
            }
        };
    });
</script>
