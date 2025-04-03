<div id="content-wrapper">
    <div>
        <div class="content-wrapper">
            <h1>Group</h1>
            <p>This is the Group page.</p>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.sidebar-link').on('click', function(e) {
            e.preventDefault(); // ป้องกันการโหลดหน้าใหม่

            const url = $(this).data('url'); // ดึง URL จาก data-url
            const title = $(this).find('span').text(); // ดึงชื่อเมนู

            // เปลี่ยน URL ด้านบนโดยไม่โหลดหน้าใหม่
            window.history.pushState({
                path: url
            }, title, url);

            // โหลดเนื้อหาแบบไดนามิก
            $('#content-area').html('<p>Loading...</p>');
            $.get(url, function(data) {
                // ตัดเฉพาะเนื้อหาของเพจ ไม่โหลดซ้ำ navbar
                const content = $(data).find('#content-area').html();
                $('#content-area').html(content);
            }).fail(function() {
                $('#content-area').html('<p>Error loading content.</p>');
            });
        });

        // จัดการเมื่อผู้ใช้กดปุ่ม Back/Forward ในเบราว์เซอร์
        window.onpopstate = function(event) {
            if (event.state && event.state.path) {
                const url = event.state.path;

                $('#content-area').html('<p>Loading...</p>');
                $.get(url, function(data) {
                    const content = $(data).find('#content-area').html();
                    $('#content-area').html(content);
                }).fail(function() {
                    $('#content-area').html('<p>Error loading content.</p>');
                });
            }
        };
    });
</script>
