<!-- Left Sidebar Component -->
<div class="sidebar-left d-none d-lg-block">
    <!-- Main Menu Card -->
    <div class="sidebar-menu-card">
        <!-- Dashboard -->
        <a href="/dashboard-owner" class="menu-item">
            <div class="menu-item-content">
                <img src="<?php echo e(asset('/assets/images/home-ic.png')); ?>" alt="">
                <span class="menu-text">Dashboard</span>
            </div>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>

        <!-- List Cars -->
        <a href="/car-list" class="menu-item">
            <div class="menu-item-content">
                <img src="<?php echo e(asset('/assets/images/car-list-ic.png')); ?>" alt="">
                <span class="menu-text">Danh sách xe</span>
            </div>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>

        <!-- Order -->
        <a href="/orders" class="menu-item">
            <div class="menu-item-content">
                <img src="<?php echo e(asset('/assets/images/order-ic.png')); ?>" alt="">
                <span class="menu-text">Đơn hàng</span>
            </div>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>

        <!-- Look Up Fines -->
        <a href="/look-up-fines" class="menu-item">
            <div class="menu-item-content">
                <img src="<?php echo e(asset('/assets/images/look-up-fines.png')); ?>" alt="">
                <span class="menu-text">Tra cứu phạt nguội</span>
            </div>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>

        <!-- VETC -->
        <a href="/vetc" class="menu-item">
            <div class="menu-item-content">
                <img src="<?php echo e(asset('/assets/images/vetc-ic.png')); ?>" alt="">
                <span class="menu-text">VETC</span>
            </div>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>

    </div>

    <!-- Logout Button -->
    <div class="logout-button-container">
        <button class="btn btn-danger logout-btn">
            <i class="bi bi-box-arrow-right"></i>
            <span>Đăng xuất</span>
        </button>
    </div>
</div>

<style>
    .sidebar-left {
        position: relative;
        /* Start below header */
        left: 0;
        width: 100%;
        max-width: 288px;
        /* Subtract header and footer height */
        background-color: transparent;
        z-index: 1000;
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .sidebar-menu-card {
        background: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.05);
        flex-grow: 1;
    }

    .menu-item {
        display: flex;
        align-items: center;
        text-decoration: none;
        justify-content: space-between;
        padding: 0.75rem 1rem;
        cursor: pointer;
        transition: all 0.2s ease;
        border-bottom: 1px solid #f0f0f0;
    }

    .menu-item:last-child {
        border-bottom: none;
    }

    .menu-item:hover {
        background-color: #f8f9fa;
    }

    .menu-item.active {
        background-color: #EAEAEA;
    }

    .menu-item-content {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .menu-text {
        font-weight: 500;
        color: #333;
        font-size: 14px;
    }

    .logout-button-container {
        margin-top: auto;
    }

    .logout-btn {
        width: 100%;
        padding: 0.75rem;
        border-radius: 6px;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: start;
        gap: 0.5rem;
        background-color: transparent;
        border: none;
        color: #dc3545;
        transition: all 0.2s ease;
        font-size: 0.85rem;
    }

    .logout-btn:hover {
        border: 1px solid #dc3545;
        color: #dc3545;
        background-color: transparent;
    }

    .logout-btn i {
        font-size: 1.1rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .sidebar-left {
            top: 60px;
            width: 100%;
            height: calc(100vh - 60px - 150px);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        .sidebar-left.open {
            transform: translateX(0);
        }
    }

    /* Custom language icon */
    .bi-translate::before {
        content: "文A";
        font-style: normal;
        font-weight: bold;
        font-size: 0.9rem;
    }
</style>

<script>
    // Menu item click handlers
    document.addEventListener('DOMContentLoaded', function() {
        const menuItems = document.querySelectorAll('.menu-item');

        menuItems.forEach(item => {
            item.addEventListener('click', function() {
                // Remove active class from all items
                menuItems.forEach(i => i.classList.remove('active'));
                // Add active class to clicked item
                this.classList.add('active');

                // Handle navigation based on menu item
                const text = this.querySelector('.menu-text').textContent;
                handleMenuNavigation(text);
            });
        });

        // Set active state based on current page URL
        setActiveMenuBasedOnCurrentPage();

        // Logout button handler
        const logoutBtn = document.querySelector('.logout-btn');
        logoutBtn.addEventListener('click', function() {
            if (confirm('Bạn có chắc chắn muốn đăng xuất?')) {
                // Handle logout logic here
                console.log('Logout clicked');
                // window.location.href = '/logout';
            }
        });
    });

    function handleMenuNavigation(menuText) {
        switch (menuText) {
            case 'Thông tin cá nhân':
                console.log('Navigate to Personal Information');
                break;
            case 'Lịch sử thuê xe':
                console.log('Navigate to Car Rental History');
                break;
            case 'Yêu thích':
                console.log('Navigate to Favorites');
                break;
            case 'Mã giảm giá & quà tặng':
                console.log('Navigate to Discount Codes & Gifts');
                break;
            case 'Cho thuê & tăng thu nhập':
                console.log('Navigate to Rent & Increase Income');
                break;
            case 'Quà của tôi':
                console.log('Navigate to My Gifts');
                break;
            case 'Xác thực thông tin':
                console.log('Navigate to Information Verification');
                break;
            case 'Góp ý':
                console.log('Navigate to Feedback');
                break;
            case 'Ngôn ngữ':
                console.log('Navigate to Language Settings');
                break;
            case 'Mã giới thiệu':
                console.log('Navigate to Referral Code');
                break;
            default:
                console.log('Unknown menu item:', menuText);
        }
    }

    // Function to set active menu based on current page
    function setActiveMenuBasedOnCurrentPage() {
        const currentPath = window.location.pathname;
        const menuItems = document.querySelectorAll('.menu-item');

        menuItems.forEach(item => {
            const href = item.getAttribute('href');
            if (href && href !== '#' && currentPath.includes(href)) {
                // Remove active class from all items
                menuItems.forEach(i => i.classList.remove('active'));
                // Add active class to current item
                item.classList.add('active');
            }
        });
    }

    // Function to toggle sidebar on mobile
    function toggleSidebar() {
        const sidebar = document.querySelector('.sidebar-left');
        sidebar.classList.toggle('open');
    }

    // Close sidebar when clicking outside on mobile
    document.addEventListener('click', function(event) {
        const sidebar = document.querySelector('.sidebar-left');
        const toggleButton = event.target.closest('[onclick="toggleSidebar()"]');

        if (window.innerWidth <= 768 &&
            !sidebar.contains(event.target) &&
            !toggleButton) {
            sidebar.classList.remove('open');
        }
    });
</script>
<?php /**PATH D:\Source Web\otod-github\otod\resources\views/layouts/sidebar-left-owner.blade.php ENDPATH**/ ?>