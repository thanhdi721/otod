<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'OTOD Web Layout UI'); ?></title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    
    <?php echo $__env->yieldContent('styles'); ?>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="<?php echo e(route('home')); ?>">OTOD Web Layout UI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('home')); ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Demos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?php echo e(route('demo.bootstrap')); ?>">Bootstrap</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('demo.jquery')); ?>">jQuery</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('demo.vue')); ?>">Vue.js</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('demo.charts')); ?>">Charts</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('demo.calendar')); ?>">Calendar</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('demo.maps')); ?>">Maps</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('demo.forms')); ?>">Forms</a></li>
                            <li><a class="dropdown-item" href="<?php echo e(route('demo.tables')); ?>">Tables</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-light mt-5 py-4">
        <div class="container text-center">
            <p>&copy; 2024 OTOD Web Layout UI. All rights reserved.</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH D:\Source Web\otod-github\resources\views/layouts/app.blade.php ENDPATH**/ ?>