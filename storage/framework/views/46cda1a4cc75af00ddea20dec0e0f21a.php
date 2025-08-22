

<?php $__env->startSection('title', 'Home - Laravel Demo Application'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Section -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">🚀 Laravel Demo Application</h1>
                <p class="lead mb-4">A comprehensive showcase of modern web technologies including Bootstrap 5, jQuery, Vue.js, Chart.js, and interactive maps.</p>
                <div class="d-flex gap-3">
                    <a href="#demos" class="btn btn-light btn-lg">Explore Demos</a>
                    <a href="#features" class="btn btn-outline-light btn-lg">View Features</a>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fas fa-rocket fa-6x text-light opacity-75"></i>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div id="features" class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="display-6 fw-bold">✨ Key Features</h2>
                <p class="lead text-muted">Built with modern web technologies</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="text-center">
                    <div class="bg-primary bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-palette fa-2x"></i>
                    </div>
                    <h5>Bootstrap 5</h5>
                    <p class="text-muted">Modern responsive framework</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="bg-success bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fab fa-js fa-2x"></i>
                    </div>
                    <h5>jQuery & Vue.js</h5>
                    <p class="text-muted">Interactive JavaScript libraries</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="bg-warning bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-chart-bar fa-2x"></i>
                    </div>
                    <h5>Chart.js</h5>
                    <p class="text-muted">Beautiful data visualizations</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <div class="bg-info bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-map-marked-alt fa-2x"></i>
                    </div>
                    <h5>Interactive Maps</h5>
                    <p class="text-muted">Leaflet.js powered maps</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Demos Section -->
<div id="demos" class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="display-6 fw-bold">🎯 Demo Pages</h2>
                <p class="lead text-muted">Explore our interactive demonstrations</p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-primary bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-palette fa-lg"></i>
                        </div>
                        <h5 class="card-title">Bootstrap Components</h5>
                        <p class="card-text text-muted">Explore Bootstrap 5 components including buttons, cards, forms, alerts, and responsive layouts.</p>
                        <a href="<?php echo e(route('demo.bootstrap')); ?>" class="btn btn-primary">View Demo</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-success bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fab fa-js fa-lg"></i>
                        </div>
                        <h5 class="card-title">jQuery Interactions</h5>
                        <p class="card-text text-muted">See jQuery in action with animations, AJAX calls, DOM manipulation, and event handling.</p>
                        <a href="<?php echo e(route('demo.jquery')); ?>" class="btn btn-success">View Demo</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-info bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fab fa-vuejs fa-lg"></i>
                        </div>
                        <h5 class="card-title">Vue.js Components</h5>
                        <p class="card-text text-muted">Experience reactive Vue.js components with data binding, computed properties, and events.</p>
                        <a href="<?php echo e(route('demo.vue')); ?>" class="btn btn-info">View Demo</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-warning bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-chart-bar fa-lg"></i>
                        </div>
                        <h5 class="card-title">Chart.js Visualizations</h5>
                        <p class="card-text text-muted">Beautiful charts and graphs powered by Chart.js including line, bar, pie, and radar charts.</p>
                        <a href="<?php echo e(route('demo.charts')); ?>" class="btn btn-warning">View Demo</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-danger bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-map-marked-alt fa-lg"></i>
                        </div>
                        <h5 class="card-title">Interactive Maps</h5>
                        <p class="card-text text-muted">Interactive maps with markers, controls, and real-time updates using Leaflet.js.</p>
                        <a href="<?php echo e(route('demo.maps')); ?>" class="btn btn-danger">View Demo</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body text-center p-4">
                        <div class="bg-secondary bg-gradient text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fas fa-calendar-alt fa-lg"></i>
                        </div>
                        <h5 class="card-title">Calendar</h5>
                        <p class="card-text text-muted">Full-featured calendar component with event management and date handling.</p>
                        <a href="<?php echo e(route('demo.calendar')); ?>" class="btn btn-secondary">View Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- API Section -->
<div class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12">
                <h2 class="display-6 fw-bold">🔌 API Endpoints</h2>
                <p class="lead text-muted">RESTful APIs for dynamic data</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5><i class="fas fa-chart-line text-primary me-2"></i>Chart Data API</h5>
                                <p class="text-muted">Get dynamic data for charts and visualizations</p>
                                <a href="/api/chart-data" class="btn btn-outline-primary btn-sm">Test API</a>
                            </div>
                            <div class="col-md-6">
                                <h5><i class="fas fa-table text-success me-2"></i>Table Data API</h5>
                                <p class="text-muted">Retrieve structured data for tables and lists</p>
                                <a href="/api/table-data" class="btn btn-outline-success btn-sm">Test API</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer CTA -->
<div class="py-5 bg-dark text-white">
    <div class="container text-center">
        <h3 class="mb-3">Ready to explore?</h3>
        <p class="lead mb-4">Start with any demo page to see these technologies in action</p>
        <a href="#demos" class="btn btn-primary btn-lg">Get Started</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\resources\views/home.blade.php ENDPATH**/ ?>