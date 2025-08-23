

<?php $__env->startSection('title', 'Home - Laravel Demo Application'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <div class="d-none d-lg-block bg-white py-5 position-relative" style="min-height: 480px;">
        <div class="container position-relative">
            <!-- Tiêu đề nằm trên xe -->
            <h1 class="fw-bold mb-3 position-absolute"
                style="top: 60px; left: 60px; z-index: 2; font-size:3rem; line-height:1.1; color:#233876;">
                Tự lái tự do<br>
                Không lo về giá
            </h1>
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <img src="<?php echo e(asset('assets/images/16993071-blue-mid-size-urban-family-sedan-white-uniform-background-3d-rendering 1.png')); ?>"
                        alt="Car" class="img-fluid" style="max-width: 100%; width:100%; height:auto;">
                </div>
            </div>
            <!-- Search Form -->
            <div class="d-flex position-absolute start-50 translate-middle-x" style="bottom:-32px; min-width: 100%">
                <div class="bg-white shadow rounded-4 d-flex align-items-center flex-grow-1 gap-3" style="width:100%;">
                    <div class="d-flex align-items-center flex-grow-1 gap-2 px-4 py-3">
                        <img src="<?php echo e(asset('assets/images/location-01.png')); ?>" alt="Line" class="img-fluid"
                            style="width:24px; height:24px">
                        <div>
                            <div class="small text-muted">Địa điểm</div>
                            <div class="fw-bold">TP.Hồ Chí Minh, Việt Nam</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-grow-1 gap-2 px-4 py-3">
                        <img src="<?php echo e(asset('assets/images/calendar-03.png')); ?>" alt="Line" class="img-fluid"
                            style="width:24px; height:24px">
                        <div class="my-2 w-100">
                            <div class="small text-muted">Thời gian thuê</div>
                            <div class="fw-bold">21:00 T7/20/4 - 20:00 CN/3/04</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-grow-1 px-4 gap-2 py-3">
                        <img src="<?php echo e(asset('assets/images/car-about.png')); ?>" alt="Line" class="img-fluid"
                            style="width:24px; height:12px">
                        <div>
                            <div class="small text-muted">Dịch vụ</div>
                            <div class="fw-bold">Tự lái</div>
                        </div>
                    </div>
                </div>
                <div class="ms-3">
                    <button class="btn btn-warning fs-6 shadow rounded-4 d-flex align-items-center justify-content-center"
                        style="width:120px; height:110px;" type="button">Tìm xe</button>
                </div>
            </div>
        </div>
    </div>
    <div style="height:48px"></div> <!-- Spacer for form overlap -->

    <!-- Mobile Hero Section -->
    <div class="d-block d-lg-none bg-white py-4">
        <div class="container">
            <h1 class="fw-bold mb-3" style="font-size:2.2rem; line-height:1.1; color:#233876;">
                Tự lái tự do<br>
                Không lo về giá
            </h1>
            <div class="text-center mb-3">
                <img src="<?php echo e(asset('assets/images/16993071-blue-mid-size-urban-family-sedan-white-uniform-background-3d-rendering 1.png')); ?>"
                    alt="Car" class="img-fluid" style="max-width: 90%; height:auto;">
            </div>
            <div class="bg-white shadow rounded-4 p-3 mb-4">
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img src="<?php echo e(asset('assets/images/location-01.png')); ?>" alt="Line" class="img-fluid"
                        style="width:24px; height:24px">
                    <div>
                        <div class="small text-muted">Địa điểm</div>
                        <div class="fw-bold">TP.Hồ Chí Minh, Việt Nam</div>
                    </div>
                </div>
                <div class="dashed-line my-3"></div>
                <div class="d-flex align-items-center gap-2 mb-3">
                    <img src="<?php echo e(asset('assets/images/calendar-03.png')); ?>" alt="Line" class="img-fluid"
                        style="width:24px; height:24px">
                    <div class="my-2 w-100">
                        <div class="small text-muted">Thời gian thuê</div>
                        <div class="fw-bold">21:00 T7/20/4 - 20:00 CN/3/04</div>
                    </div>
                </div>
                <div class="dashed-line my-3"></div>
                <div class="d-flex align-items-center gap-2 object-fit-cover">
                    <img src="<?php echo e(asset('assets/images/car-about.png')); ?>" alt="Line" class="img-fluid"
                        style="width:22px; height:9px">
                    <div>
                        <div class="small text-muted">Dịch vụ</div>
                        <div class="fw-bold">Tự lái</div>
                    </div>
                </div>
            </div>
            <button class="btn btn-warning w-100 fw-bold rounded-4 py-3 fs-5" type="button">Tìm xe</button>
        </div>
    </div>

    <!-- Features Section Desktop -->
    <div id="features" class="py-5 d-none d-lg-block">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0 fs-2">Điểm đến nổi bật</h2>
                <a href="#" class="text-primary small fw-bold">Xem tất cả</a>
            </div>
            <div class="d-flex flex-row gap-3 overflow-x-hidden position-relative"
                style="scrollbar-width: none; -ms-overflow-style: none;">
                <!-- Card 1 -->
                <div style="scroll-snap-align: start;">
                    <div class="card border-0 shadow-sm position-relative overflow-hidden h-100">
                        <img src="<?php echo e(asset('assets/images/hcm.png')); ?>" class="card-img-top object-fit-cover"
                            style="width:318px; height:380px;" alt="TP.Hồ Chí Minh">
                        <div class="card-img-overlay d-flex flex-column justify-content-start p-3"
                            style="background: linear-gradient(180deg,rgba(0,0,0,0.1) 40%,rgba(0,0,0,0.7) 100%);">
                            <h5 class="text-white fw-bold mb-1">TP.Hồ Chí Minh</h5>
                            <div class="text-white-50 small">500+ Xe</div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div style="scroll-snap-align: start;">
                    <div class="card border-0 shadow-sm position-relative overflow-hidden h-100">
                        <img src="<?php echo e(asset('assets/images/hanoi.png')); ?>" class="card-img-top object-fit-cover"
                            style="width:318px; height:380px;" alt="Hà Nội">
                        <div class="card-img-overlay d-flex flex-column justify-content-start p-3"
                            style="background: linear-gradient(180deg,rgba(0,0,0,0.1) 40%,rgba(0,0,0,0.7) 100%);">
                            <h5 class="text-white fw-bold mb-1">Hà Nội</h5>
                            <div class="text-white-50 small">500+ Xe</div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div style="scroll-snap-align: start;">
                    <div class="card border-0 shadow-sm position-relative overflow-hidden h-100">
                        <img src="<?php echo e(asset('assets/images/danang.png')); ?>" class="card-img-top object-fit-cover"
                            style="width:318px; height:380px;" alt="Đà Nẵng">
                        <div class="card-img-overlay d-flex flex-column justify-content-start p-3"
                            style="background: linear-gradient(180deg,rgba(0,0,0,0.1) 40%,rgba(0,0,0,0.7) 100%);">
                            <h5 class="text-white fw-bold mb-1">Đà Nẵng</h5>
                            <div class="text-white-50 small">500+ Xe</div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div style="scroll-snap-align: start;">
                    <div class="card border-0 shadow-sm position-relative overflow-hidden h-100">
                        <img src="<?php echo e(asset('assets/images/nhatrang.png')); ?>" class="card-img-top object-fit-cover"
                            style="width:318px; height:380px;" alt="Nha Trang">
                        <div class="card-img-overlay d-flex flex-column justify-content-start p-3"
                            style="background: linear-gradient(180deg,rgba(0,0,0,0.1) 40%,rgba(0,0,0,0.7) 100%);">
                            <h5 class="text-white fw-bold mb-1">Nha Trang</h5>
                            <div class="text-white-50 small">500+ Xe</div>
                        </div>
                    </div>
                </div>
                <div class="features-blur-left d-none d-md-block"></div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-3 gap-2">
                <button
                    class="btn btn-light rounded-circle shadow-sm px-0 justify-content-center align-items-center d-flex"
                    style="width:40px; height:40px;">
                    <span style="font-size:1.5rem; color:#bbb;">&#60;</span>
                </button>
                <span style="font-size:1.2rem; color:#bbb;">●</span>
                <span style="font-size:1.2rem; color:#000;">●</span>
                <span style="font-size:1.2rem; color:#bbb;">●</span>
                <span style="font-size:1.2rem; color:#bbb;">●</span>
                <span style="font-size:1.2rem; color:#bbb;">●</span>
                <button
                    class="btn btn-light rounded-circle shadow-sm px-0 justify-content-center align-items-center d-flex"
                    style="width:40px; height:40px;">
                    <span style="font-size:1.5rem; color:#222;">&#62;</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Features Section Mobile -->
    <div id="features-mobile" class="py-5 d-block d-lg-none">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2 class="fw-bold mb-0" style="font-size:1.4rem;">Điểm đến nổi bật</h2>
                <a href="#" class="text-primary small fw-bold">Xem tất cả</a>
            </div>
            <div class="d-flex flex-row gap-3 overflow-auto position-relative"
                style="scrollbar-width: none; -ms-overflow-style: none;">
                <!-- Card 1 -->
                <div style="width:160px; height:220px; scroll-snap-align: start;">
                    <div class="card border-0 shadow-sm position-relative overflow-hidden h-100">
                        <img src="<?php echo e(asset('assets/images/hcm.png')); ?>" class="card-img-top object-fit-cover"
                            style="width:160px; height:220px;" alt="TP.Hồ Chí Minh">
                        <div class="card-img-overlay d-flex flex-column justify-content-start p-2"
                            style="background: linear-gradient(180deg,rgba(0,0,0,0.1) 40%,rgba(0,0,0,0.7) 100%);">
                            <h6 class="text-white fw-bold mb-1" style="font-size:1rem;">TP.Hồ Chí Minh</h6>
                            <div class="text-white-50 small">500+ Xe</div>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div style="width:160px; height:220px; scroll-snap-align: start;">
                    <div class="card border-0 shadow-sm position-relative overflow-hidden h-100">
                        <img src="<?php echo e(asset('assets/images/hanoi.png')); ?>" class="card-img-top object-fit-cover"
                            style="width:160px; height:220px;" alt="Hà Nội">
                        <div class="card-img-overlay d-flex flex-column justify-content-start p-2"
                            style="background: linear-gradient(180deg,rgba(0,0,0,0.1) 40%,rgba(0,0,0,0.7) 100%);">
                            <h6 class="text-white fw-bold mb-1" style="font-size:1rem;">Hà Nội</h6>
                            <div class="text-white-50 small">500+ Xe</div>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div style="width:160px; height:220px; scroll-snap-align: start;">
                    <div class="card border-0 shadow-sm position-relative overflow-hidden h-100">
                        <img src="<?php echo e(asset('assets/images/danang.png')); ?>" class="card-img-top object-fit-cover"
                            style="width:160px; height:220px;" alt="Đà Nẵng">
                        <div class="card-img-overlay d-flex flex-column justify-content-start p-2"
                            style="background: linear-gradient(180deg,rgba(0,0,0,0.1) 40%,rgba(0,0,0,0.7) 100%);">
                            <h6 class="text-white fw-bold mb-1" style="font-size:1rem;">Đà Nẵng</h6>
                            <div class="text-white-50 small">500+ Xe</div>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div style="width:160px; height:220px; scroll-snap-align: start;">
                    <div class="card border-0 shadow-sm position-relative overflow-hidden h-100">
                        <img src="<?php echo e(asset('assets/images/nhatrang.png')); ?>" class="card-img-top object-fit-cover"
                            style="width:160px; height:220px;" alt="Nha Trang">
                        <div class="card-img-overlay d-flex flex-column justify-content-start p-2"
                            style="background: linear-gradient(180deg,rgba(0,0,0,0.1) 40%,rgba(0,0,0,0.7) 100%);">
                            <h6 class="text-white fw-bold mb-1" style="font-size:1rem;">Nha Trang</h6>
                            <div class="text-white-50 small">500+ Xe</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center mt-3 gap-2">
                <button
                    class="btn btn-light rounded-circle shadow-sm px-0 justify-content-center align-items-center d-flex"
                    style="width:32px; height:32px;">
                    <span style="font-size:1.2rem; color:#bbb;">&#60;</span>
                </button>
                <span style="font-size:1rem; color:#bbb;">●</span>
                <span style="font-size:1rem; color:#000;">●</span>
                <span style="font-size:1rem; color:#bbb;">●</span>
                <button
                    class="btn btn-light rounded-circle shadow-sm px-0 justify-content-center align-items-center d-flex"
                    style="width:32px; height:32px;">
                    <span style="font-size:1.2rem; color:#222;">&#62;</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Recommended products Section -->
    <div id="recommended" class="py-3 d-none d-lg-block">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0 fs-3 fs-md-2 fs-lg-1">Xe OTOD đề xuất</h2>
                <a href="#" class="text-primary small fw-bold">Xem tất cả</a>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                <div class="">
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="">
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="">
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile recommended products Section -->
    <div id="recommended" class="py-3 d-flex d-lg-none">
        <div class="container px-2 px-md-4 px-lg-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0 fs-3 fs-md-2 fs-lg-1">Xe OTOD đề xuất</h2>
                <a href="#" class="text-primary small fw-bold">Xem tất cả</a>
            </div>

            <!-- Scroll horizontal -->
            <div class="d-flex flex-nowrap overflow-auto"
                style="gap: 1rem;scrollbar-width: none; -ms-overflow-style: none;">
                <div class="flex-shrink-0" style="min-width: 280px; max-width: 306px;">
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="flex-shrink-0" style="min-width: 280px; max-width: 306px;">
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="flex-shrink-0" style="min-width: 280px; max-width: 306px;">
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Delivery products Section -->
    <div id="delivery" class="py-3 d-none d-lg-block">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0 fs-3 fs-md-2 fs-lg-1">Giao xe tận nơi</h2>
                <a href="#" class="text-primary small fw-bold">Xem tất cả</a>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                <div>
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div>
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div>
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile delivery products Section -->
    <div id="delivery" class="py-3 d-block d-lg-none">
        <div class="container px-2 px-md-4 px-lg-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold mb-0 fs-3 fs-md-2 fs-lg-1">Giao xe tận nơi</h2>
                <a href="#" class="text-primary small fw-bold">Xem tất cả</a>
            </div>

            <!-- Scroll horizontal -->
            <div class="d-flex flex-nowrap overflow-auto"
                style="gap: 1rem;scrollbar-width: none; -ms-overflow-style: none;">
                <div class="flex-shrink-0" style="min-width: 280px; max-width: 306px;">
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="flex-shrink-0" style="min-width: 280px; max-width: 306px;">
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <div class="flex-shrink-0" style="min-width: 280px; max-width: 306px;">
                    <?php echo $__env->make('components.product-recomend', [
                        'name' => 'Kia Rio 2015',
                        'rating' => '4.0',
                        'location' => 'Quận 1, TP Hồ Chí Minh',
                        'image' => asset('assets/images/product-rcm.png'),
                        'old_price' => '976.000đ',
                        'price' => '856.000đ',
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>



    <!-- About Section -->
    <div id="about" class="py-3">
        <div class="container">
            <!-- Tiêu đề -->
            <h2 class="fw-bold fs-3 fs-md-2 fs-lg-1 text-dark mb-4">OTOD có gì</h2>

            <div class="row g-4">
                <!-- Item 1 -->
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <!-- Icon -->
                        <div class="bg-light rounded p-4 me-0 me-md-3 mb-3 mb-md-0 d-flex align-items-center justify-content-center"
                            style="flex: 0 0 50%; height: 376px;">
                            <img src="<?php echo e(asset('assets/images/car-about.png')); ?>" alt="">
                        </div>
                        <!-- Text -->
                        <div class="px-3" style="flex: 1;">
                            <div class="fw-bold fs-3 fs-md-2 fs-lg-1">Lorem Ipsum</div>
                            <p class="text-muted mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>


                <!-- Item 2 -->
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <!-- Text -->
                        <div class="px-3 order-2 order-md-1" style="flex: 1;">
                            <div class="fw-bold fs-3 fs-md-2 fs-lg-1">Lorem Ipsum</div>
                            <p class="text-muted mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>

                        <!-- Icon -->
                        <div class="bg-light rounded p-4 order-1 order-md-2 mb-3 mb-md-0 d-flex align-items-center justify-content-center"
                            style="flex: 0 0 50%; height: 376px;">
                            <img src="<?php echo e(asset('assets/images/car-about.png')); ?>" alt="">
                        </div>
                    </div>
                </div>



                <!-- Item 3 -->
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <!-- Icon -->
                        <div class="bg-light rounded p-4 me-0 me-md-3 mb-3 mb-md-0 d-flex align-items-center justify-content-center"
                            style="flex: 0 0 50%; height: 376px;">
                            <img src="<?php echo e(asset('assets/images/car-about.png')); ?>" alt="">
                        </div>
                        <!-- Text -->
                        <div class="px-3" style="flex: 1;">
                            <div class="fw-bold fs-3 fs-md-2 fs-lg-1">Lorem Ipsum</div>
                            <p class="text-muted mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>
                    </div>
                </div>


                <!-- Item 4 -->
                <div class="col-12">
                    <div class="d-flex flex-column flex-md-row align-items-center">
                        <!-- Text -->
                        <div class="px-3 order-2 order-md-1" style="flex: 1;">
                            <div class="fw-bold fs-3 fs-md-2 fs-lg-1">Lorem Ipsum</div>
                            <p class="text-muted mb-0">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>

                        <!-- Icon -->
                        <div class="bg-light rounded p-4 order-1 order-md-2 mb-3 mb-md-0 d-flex align-items-center justify-content-center"
                            style="flex: 0 0 50%; height: 376px;">
                            <img src="<?php echo e(asset('assets/images/car-about.png')); ?>" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Discover Section -->
    <div id="discover" class=" my-5 d-none d-lg-block">
        <div class="container ">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold fs-3 fs-md-2 fs-lg-1  mb-0">Khám phá cùng OTOD</h2>
                <a href="#" class="text-decoration-none fw-semibold text-primary">Xem tất cả</a>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3" style="margin-bottom:72px">
                <!-- Card item -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <img src="<?php echo e(asset('assets/images/discover.jpg')); ?>" class="card-img-top object-fit-cover"
                                alt="..." style="width:100%; height:359px; object-fit:cover;">

                            <div class="card-overlay"></div>

                            <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                <span class="d-inline-block px-2 py-1 bg-light text-dark small rounded mb-2">
                                    Phú Yên
                                </span>
                                <h5 class="fw-bold mb-0">
                                    Trải nghiệm du lịch tự túc bằng Carnival 2025
                                </h5>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Card item -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <img src="<?php echo e(asset('assets/images/discover.jpg')); ?>" class="card-img-top object-fit-cover"
                                alt="..." style="width:100%; height:359px; object-fit:cover;">

                            <div class="card-overlay"></div>

                            <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                <span class="d-inline-block px-2 py-1 bg-light text-dark small rounded mb-2">
                                    Phú Yên
                                </span>
                                <h5 class="fw-bold mb-0">
                                    Trải nghiệm du lịch tự túc bằng Carnival 2025
                                </h5>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Card item -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <img src="<?php echo e(asset('assets/images/discover.jpg')); ?>" class="card-img-top object-fit-cover"
                                alt="..." style="width:100%; height:359px; object-fit:cover;">

                            <div class="card-overlay"></div>

                            <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                <span class="d-inline-block px-2 py-1 bg-light text-dark small rounded mb-2">
                                    Phú Yên
                                </span>
                                <h5 class="fw-bold mb-0">
                                    Trải nghiệm du lịch tự túc bằng Carnival 2025
                                </h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="card card-border w-100 rounded-4 overflow-hidden position-relative" style="height: 347px;">
                <!-- Background image -->
                <img src="<?php echo e(asset('assets/images/finance.png')); ?>"
                    class="position-absolute w-100 h-100 object-fit-cover" alt="Car interior at night">

                <!-- Blue overlay on the left -->
                <div class="position-absolute start-0 top-0 h-100 d-flex flex-column justify-content-start p-4"
                    style="width: 45%; background: linear-gradient(to left, rgba(43, 72, 150, 0) 0%, rgba(43, 72, 150, 1) 100%);">

                    <!-- Logo OTOD -->
                    <div class="mb-4">
                        <img src="<?php echo e(asset('/assets/images/logo-white.png')); ?>" alt="Logo" class="img-fluid"
                            style="max-height: 40px;">
                    </div>

                    <!-- Main title -->
                    <h2 class="text-white fw-bold mb-4" style="font-size: 2.2rem; line-height: 1.2;">
                        Tăng thu nhập với chiếc<br>xe của bạn
                    </h2>

                    <!-- CTA Button -->
                    <a href="#"
                        class="text-warning fw-bold text-decoration-none d-inline-flex align-items-center gap-2"
                        style="font-size: 1.1rem;">
                        Đăng ký ngay
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile discover Section -->
    <div id="discover" class="d-block d-lg-none my-5">
        <div class="container ">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold fs-3 fs-md-2 fs-lg-1 mb-0">Khám phá cùng OTOD</h2>
                <a href="#" class="text-decoration-none fw-semibold text-primary">Xem tất cả</a>
            </div>

            <div class="d-flex flex-row gap-3 overflow-x-auto"
                style="scroll-snap-type: x mandatory;scrollbar-width: none; -ms-overflow-style: none;">
                <!-- Card item -->
                <div class="flex-shrink-0" style="width:212px;">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <img src="<?php echo e(asset('assets/images/discover.jpg')); ?>" class="card-img-top object-fit-cover"
                                alt="..." style="width:100%; height:359px; object-fit:cover;">

                            <div class="card-overlay"></div>

                            <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                <span class="d-inline-block px-2 py-1 bg-light text-dark small rounded mb-2">
                                    Phú Yên
                                </span>
                                <h5 class="fw-bold mb-0">
                                    Trải nghiệm du lịch tự túc bằng Carnival 2025
                                </h5>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="features-blur-left d-none d-md-block"></div>

                <!-- Card item -->
                <div class="flex-shrink-0" style="width:212px;">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <img src="<?php echo e(asset('assets/images/discover.jpg')); ?>" class="card-img-top object-fit-cover"
                                alt="..." style="width:100%; height:359px; object-fit:cover;">

                            <div class="card-overlay"></div>

                            <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                <span class="d-inline-block px-2 py-1 bg-light text-dark small rounded mb-2">
                                    Phú Yên
                                </span>
                                <h5 class="fw-bold mb-0">
                                    Trải nghiệm du lịch tự túc bằng Carnival 2025
                                </h5>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Card item -->
                <div class="flex-shrink-0" style="width:212px;">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <img src="<?php echo e(asset('assets/images/discover.jpg')); ?>" class="card-img-top object-fit-cover"
                                alt="..." style="width:100%; height:359px; object-fit:cover;">

                            <div class="card-overlay"></div>

                            <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                <span class="d-inline-block px-2 py-1 bg-light text-dark small rounded mb-2">
                                    Phú Yên
                                </span>
                                <h5 class="fw-bold mb-0">
                                    Trải nghiệm du lịch tự túc bằng Carnival 2025
                                </h5>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="card card-border w-100 rounded-4 mt-4 overflow-hidden position-relative" style="height: 180px;">
                <!-- Background image -->
                <img src="<?php echo e(asset('assets/images/finance.png')); ?>"
                    class="position-absolute w-100 h-100 object-fit-cover" alt="Car interior at night">

                <!-- Blue overlay on the left -->
                <div class="position-absolute start-0 top-0 h-100 d-flex flex-column justify-content-start p-4"
                    style="width: 80%; background: linear-gradient(to left, rgba(43, 72, 150, 0) 0%, rgba(43, 72, 150, 1) 100%);">

                    <!-- Logo OTOD -->
                    <div class="mb-4">
                        <img src="<?php echo e(asset('/assets/images/logo-white.png')); ?>" alt="Logo" class="img-fluid"
                            style="max-height: 40px;">
                    </div>

                    <!-- Main title -->
                    <h2 class="text-white fw-bold mb-4" style="font-size: 0.75rem; line-height: 1.2;">
                        Tăng thu nhập với chiếc<br>xe của bạn
                    </h2>

                    <!-- CTA Button -->
                    <a href="#"
                        class="text-warning fw-bold text-decoration-none d-inline-flex align-items-center gap-2"
                        style="font-size: 0.75rem;">
                        Đăng ký ngay
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Feedback Section -->
    <div id="feedback" class=" my-5 d-none d-lg-block">
        <div class="container ">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold fs-3 fs-md-2 fs-lg-1  mb-0">Khách hàng nói gì về OTOD</h2>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3" style="margin-bottom:72px">
                <!-- Card item -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <div class="bg-light" style="width:100%; height:359px; object-fit:cover;">
                                <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                    <div class="d-flex justify-content-start h-100">
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute bottom-0 end-0 w-100 p-3 text-white">
                                <div class="">
                                    <span class="d-inline-block py-1 text-dark fw-bold rounded mb-2 fs-5">
                                        Username
                                    </span> <br>
                                    <span class="text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Card item -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <div class="bg-light" style="width:100%; height:359px; object-fit:cover;">
                                <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                    <div class="d-flex justify-content-start h-100">
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute bottom-0 end-0 w-100 p-3 text-white">
                                <div class="">
                                    <span class="d-inline-block py-1 text-dark fw-bold rounded mb-2 fs-5">
                                        Username
                                    </span> <br>
                                    <span class="text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Card item -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <div class="bg-light" style="width:100%; height:359px; object-fit:cover;">
                                <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                    <div class="d-flex justify-content-start h-100">
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute bottom-0 end-0 w-100 p-3 text-white">
                                <div class="">
                                    <span class="d-inline-block py-1 text-dark fw-bold rounded mb-2 fs-5">
                                        Username
                                    </span> <br>
                                    <span class="text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua
                                    </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="card card-border w-100 rounded-4 bg-warning" style="height: 534px;">
                <!-- Desktop Layout: 2 cột -->
                <div class="d-none d-lg-flex align-items-stretch" style="height: 100%;">
                    <div class="d-flex align-items-center justify-content-center p-4"
                        style="flex: 1; background-color: #FFD700;">
                        <img src="<?php echo e(asset('assets/images/phone.png')); ?>" alt="" class="img-fluid"
                            style="max-width: 80%; height: auto;">

                        <div class="bg-white px-4 py-5 d-flex flex-column justify-content-center rounded-4"
                            style="width: 353px;">
                            <span class="fw-bold text-dark mb-4 fs-1" style="width: 250px;">Trải nghiệm cùng OTOD</span>
                            <p class="text-muted mb-5 fs-6">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <div class="d-flex gap-3">
                                <a href="#"><img src="<?php echo e(asset('/assets/images/appstore.png')); ?>" alt="App Store"
                                        style="height:40px;"></a>
                                <a href="#"><img src="<?php echo e(asset('/assets/images/googleplay.png')); ?>"
                                        alt="Google Play" style="height:40px;"></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- Mobile feedback Section -->
    <div id="feedback" class="d-block d-lg-none my-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold fs-3 fs-md-2 fs-lg-1 mb-0">Khách hàng nói gì về OTOD</h2>
            </div>

            <div class="d-flex flex-row gap-3 overflow-x-auto mb-4"
                style="scroll-snap-type: x mandatory;scrollbar-width: none; -ms-overflow-style: none;">
                <!-- Card item -->
                <div class="flex-shrink-0" style="width:212px;">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <div class="bg-light" style="width:100%; height:359px; object-fit:cover;">
                                <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                    <div class="d-flex justify-content-start h-100">
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute bottom-0 end-0 w-100 p-3 text-white">
                                <div class="">
                                    <span class="d-inline-block py-1 text-dark fw-bold rounded mb-2 fs-5">
                                        Username
                                    </span> <br>
                                    <span class="text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card item -->
                <div class="flex-shrink-0" style="width:212px;">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <div class="bg-light" style="width:100%; height:359px; object-fit:cover;">
                                <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                    <div class="d-flex justify-content-start h-100">
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute bottom-0 end-0 w-100 p-3 text-white">
                                <div class="">
                                    <span class="d-inline-block py-1 text-dark fw-bold rounded mb-2 fs-5">
                                        Username
                                    </span> <br>
                                    <span class="text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card item -->
                <div class="flex-shrink-0" style="width:212px;">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <div class="bg-light" style="width:100%; height:359px; object-fit:cover;">
                                <div class="position-absolute top-0 start-0 w-100 p-3 text-white">
                                    <div class="d-flex justify-content-start h-100">
                                        <div class="d-flex gap-2">
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                            <i class="bi bi-star-fill fs-5 fs-md-4 fs-lg-3 text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute bottom-0 end-0 w-100 p-3 text-white">
                                <div class="">
                                    <span class="d-inline-block py-1 text-dark fw-bold rounded mb-2 fs-5">
                                        Username
                                    </span> <br>
                                    <span class="text-dark">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile Layout: 1 cột -->
            <div class=" flex-column align-items-center justify-content-center p-2 rounded-4"
                style=" background-color: #FFD700;">
                <!-- Smartphone mockup -->
                <div class="text-center mb-4">
                    <img src="<?php echo e(asset('assets/images/phone.png')); ?>" alt="" class="img-fluid"
                        style="max-width: 100%; height: auto;">
                </div>

                <!-- Content -->
                <div class="bg-white p-3 d-flex flex-column justify-content-center rounded-4 "
                    style="width: 100%; max-width: 400px;">
                    <h2 class="fw-bold text-dark mb-3 fs-3">Trải nghiệm cùng OTOD</h2>
                    <p class="text-muted mb-4" style="font-size: 12px;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                    <div class="d-flex gap-3 justify-content-center">
                        <a href="#"><img src="<?php echo e(asset('/assets/images/appstore.png')); ?>" alt="App Store"
                                style="height:35px;"></a>
                        <a href="#"><img src="<?php echo e(asset('/assets/images/googleplay.png')); ?>" alt="Google Play"
                                style="height:35px;"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div id="faq" class="my-5">
        <div class="container">
            <!-- Title -->
            <h2 class="fw-bold fs-3 fs-md-2 fs-lg-1 text-dark mb-2 text-start text-lg-center">Câu hỏi thường gặp</h2>

            <!-- FAQ Items -->
            <div class="bg-white rounded-4 px-lg-200">
                <!-- FAQ Item 1 -->
                <div class="border-bottom border-light">
                    <div class="d-flex justify-content-between align-items-center p-1">
                        <p class="mb-0 text-dark fw-medium">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                        <div class="ms-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                style="width: 24px; height: 24px;">
                                <span class="text-muted fw-bold" style="font-size: 14px;">+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- FAQ Item 2 -->
                <div class="border-bottom border-light">
                    <div class="d-flex justify-content-between align-items-center p-1">
                        <p class="mb-0 text-dark fw-medium">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                        <div class="ms-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                style="width: 24px; height: 24px;">
                                <span class="text-muted fw-bold" style="font-size: 14px;">+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- FAQ Item 3 -->
                <div class="border-bottom border-light">
                    <div class="d-flex justify-content-between align-items-center p-1">
                        <p class="mb-0 text-dark fw-medium">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                        <div class="ms-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                style="width: 24px; height: 24px;">
                                <span class="text-muted fw-bold" style="font-size: 14px;">+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- FAQ Item 4 -->
                <div class="border-bottom border-light">
                    <div class="d-flex justify-content-between align-items-center p-1">
                        <p class="mb-0 text-dark fw-medium">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                        <div class="ms-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                style="width: 24px; height: 24px;">
                                <span class="text-muted fw-bold" style="font-size: 14px;">+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- FAQ Item 5 -->
                <div class="border-bottom border-light">
                    <div class="d-flex justify-content-between align-items-center p-1">
                        <p class="mb-0 text-dark fw-medium">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                        <div class="ms-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                style="width: 24px; height: 24px;">
                                <span class="text-muted fw-bold" style="font-size: 14px;">+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- FAQ Item 6 -->
                <div class="border-bottom border-light">
                    <div class="d-flex justify-content-between align-items-center p-1">
                        <p class="mb-0 text-dark fw-medium">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                        <div class="ms-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                style="width: 24px; height: 24px;">
                                <span class="text-muted fw-bold" style="font-size: 14px;">+</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- FAQ Item 7 -->
                <div class="border-bottom border-light">
                    <div class="d-flex justify-content-between align-items-center p-1">
                        <p class="mb-0 text-dark fw-medium">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                        </p>
                        <div class="ms-3">
                            <div class="bg-light rounded d-flex align-items-center justify-content-center"
                                style="width: 24px; height: 24px;">
                                <span class="text-muted fw-bold" style="font-size: 14px;">+</span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<style>
    .features-blur-left {
        position: absolute;
        top: 0;
        right: 0;
        width: 20px;
        height: 100%;
        pointer-events: none;
        background: linear-gradient(to left, rgba(255, 255, 255, 0.9) 0.5%, rgba(255, 255, 255, 0));
        z-index: 2;
    }


    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 40%;
        pointer-events: none;
        /* không ảnh hưởng click */
    }

    .card-overlay::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.6) 20%, rgba(255, 255, 255, 0));
    }

    .dashed-line {
        height: 1px;
        background: repeating-linear-gradient(to right,
                #ddd 0,
                #ddd 6px,
                transparent 6px,
                transparent 12px);
    }

    .px-lg-200 {
        padding: 0px 200px;
    }

    @media (max-width: 991.98px) {
        .px-lg-200 {
            padding: 0px 0px;
        }
    }
</style>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/home.blade.php ENDPATH**/ ?>