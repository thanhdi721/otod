<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Laravel Demo Application'); ?></title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .main-content {
            margin-left: 280px;
            min-height: calc(100vh - 80px - 200px);
            /* Subtract header and footer height */
            background-color: #f8f9fa;
            transition: margin-left 0.3s ease;
        }

        .content-wrapper {
            padding: 2rem;
        }

        /* Mobile responsive */
        @media (max-width: 768px) {
            .main-content {
                margin-left: 0;
                min-height: calc(100vh - 60px - 150px);
            }

            .main-content.sidebar-open {
                margin-left: 0;
            }
        }

        /* Mobile menu toggle button */
        .mobile-menu-toggle {
            position: fixed;
            top: 1rem;
            left: 1rem;
            z-index: 1001;
            background: white;
            border: none;
            border-radius: 8px;
            padding: 0.5rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            display: none;
        }

        @media (max-width: 768px) {
            .mobile-menu-toggle {
                display: block;
            }
        }
    </style>

    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body>
    <!-- Navigation -->
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <!-- Main Content Area -->
    <div class="container d-flex align-items-baseline justify-content-between px-0 px-lg-5 mt-2 "
        style="max-width: 100%;">
        <!-- Left Sidebar -->
        <?php echo $__env->make('layouts.sidebar-left-owner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Footer -->
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom Scripts -->
    <script>
        // Function to toggle sidebar on mobile
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar-left');
            const mainContent = document.getElementById('mainContent');

            sidebar.classList.toggle('open');
            mainContent.classList.toggle('sidebar-open');
        }

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.querySelector('.sidebar-left');
            const toggleButton = event.target.closest('.mobile-menu-toggle');

            if (window.innerWidth <= 768 &&
                !sidebar.contains(event.target) &&
                !toggleButton) {
                sidebar.classList.remove('open');
                document.getElementById('mainContent').classList.remove('sidebar-open');
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                const sidebar = document.querySelector('.sidebar-left');
                const mainContent = document.getElementById('mainContent');

                sidebar.classList.remove('open');
                mainContent.classList.remove('sidebar-open');
            }
        });
    </script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>

</html>
<?php /**PATH D:\Source Web\otod-github\otod\resources\views/layouts/layout-with-sidebar-owner.blade.php ENDPATH**/ ?>