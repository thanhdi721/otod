

<?php $__env->startSection('title', 'Lịch sử thuê xe - OTOD'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Notification -->
    <?php if(request()->get('notification') == 'car_received'): ?>
        <div class="notification-box" id="notificationBox">
            <div class="notification-content">
                <div class="notification-title fw-bold">Thông báo</div>
                <div class="notification-message">Bạn đã nhận xe thành công</div>
            </div>
        </div>
    <?php endif; ?>
    <?php if(request()->get('notification') == 'car_return'): ?>
        <div class="notification-box" id="notificationBox">
            <div class="notification-content">
                <div class="notification-title fw-bold">Thông báo</div>
                <div class="notification-message">Bạn đã trả xe thành công</div>
            </div>
        </div>
    <?php endif; ?>

    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        <div class="">
            <!-- Page Header -->
            <div class="page-header mb-4 mt-2 mt-lg-5">
                <h1 class="page-title fw-bold text-dark mb-0">Lịch sử thuê xe</h1>
            </div>

            <!-- Tab Navigation -->
            <div class="tab-navigation mb-4">
                <div class="nav nav-tabs border-0" id="rentalHistoryTabs" role="tablist">
                    <button class="nav-link active fw-bold px-3 py-1 me-3 rounded-4 w-100" style="max-width:110px"
                        id="upcoming-tab" data-bs-toggle="tab" data-bs-target="#upcoming" type="button" role="tab">
                        Sắp đi
                    </button>
                    <button class="nav-link fw-bold px-3 py-1 rounded-4 w-100" style="max-width:110px" id="completed-tab"
                        data-bs-toggle="tab" data-bs-target="#completed" type="button" role="tab">
                        Đã đi
                    </button>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="tab-content" id="rentalHistoryTabContent">
                <!-- Upcoming Trips Tab -->
                <div class="tab-pane fade show active" id="upcoming" role="tabpanel">
                    <div class="rental-cards">
                        <!-- Rental Card 1 -->
                        <div class="rental-card mb-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <!-- Header with time and status -->
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div class="rental-time">
                                            <span class="fw-bold fs-7 fs-md-6 fs-lg-5 " style="color:#737272">8h00, 12/4 -
                                                17h00,
                                                14/4</span>
                                        </div>
                                        <div class="status-badges d-flex flex-column">
                                            <span class="badge bg-success mb-1">Đã thanh toán</span>
                                            <span class="badge bg-warning">Chủ xe 5 sao</span>
                                        </div>
                                    </div>

                                    <!-- Car Details -->
                                    <div class="d-flex align-items-start">
                                        <!-- Car Image -->
                                        <div class="car-image me-4">
                                            <img src="<?php echo e(asset('/assets/images/history-car.png')); ?>" alt="Mercedes-Benz"
                                                class="rounded-3" style="width: 120px; height: 80px; object-fit: cover;">
                                        </div>

                                        <!-- Car Information -->
                                        <div class="car-info flex-grow-1">
                                            <h5 class="fw-bold text-dark mb-2">Mercedes-Benz..</h5>
                                            <div class="car-details">
                                                <div class="detail-item mb-1">
                                                    <span class="text-muted">Biển số:</span>
                                                    <span class="fw-medium ms-2">29U1.334.08</span>
                                                </div>
                                                <div class="detail-item mb-1">
                                                    <img src="<?php echo e(asset('/assets/images/position.png')); ?>" alt="location"
                                                        class="me-2" style="width: 16px; height: 16px;">
                                                    <span class="text-muted">Quận 5</span>
                                                </div>
                                                <div class="detail-item">
                                                    <img src="<?php echo e(asset('/assets/images/user-history.png')); ?>" alt="user"
                                                        class="me-2" style="width: 25px; height: 25px;">
                                                    <span class="text-muted">Chủ xe: Nguyễn Thục Quyên</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Action Button -->
                                        <div class="action-button d-none d-lg-block">
                                            <a href="<?php echo e(route('car-prepare')); ?>" style="text-decoration: none"
                                                class="btn-primary-for-otod rounded fw-bold px-4 py-2">
                                                Nhận xe
                                            </a>
                                        </div>
                                    </div>
                                    <div class="action-button d-block d-lg-none mt-3">
                                        <a href="<?php echo e(route('car-prepare')); ?>"
                                            class="btn-primary-for-otod rounded fw-bold px-4 py-2 w-100"
                                            style="height:44px;text-decoration: none">
                                            Nhận xe
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Rental Card 2 -->
                        <div class="rental-card mb-4">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <!-- Header with time and status -->
                                    <div class="d-flex justify-content-between align-items-start mb-3">
                                        <div class="rental-time">
                                            <span class="fw-bold fs-7 fs-md-6 fs-lg-5 " style="color:#737272">8h00, 12/4 -
                                                17h00,
                                                14/4</span>
                                        </div>
                                        <div class="status-badges d-flex flex-column">
                                            <span class="badge bg-success mb-1">Đã thanh toán</span>
                                            <span class="badge bg-warning">Chủ xe 5 sao</span>
                                        </div>
                                    </div>

                                    <!-- Car Details -->
                                    <div class="d-flex align-items-start">
                                        <!-- Car Image -->
                                        <div class="car-image me-4">
                                            <img src="<?php echo e(asset('/assets/images/history-car.png')); ?>" alt="Mercedes-Benz"
                                                class="rounded-3" style="width: 120px; height: 80px; object-fit: cover;">
                                        </div>

                                        <!-- Car Information -->
                                        <div class="car-info flex-grow-1">
                                            <h5 class="fw-bold text-dark mb-2">Mercedes-Benz..</h5>
                                            <div class="car-details">
                                                <div class="detail-item mb-1">
                                                    <span class="text-muted">Biển số:</span>
                                                    <span class="fw-medium ms-2">29U1.334.08</span>
                                                </div>
                                                <div class="detail-item mb-1">
                                                    <img src="<?php echo e(asset('/assets/images/position.png')); ?>" alt="location"
                                                        class="me-2" style="width: 16px; height: 16px;">
                                                    <span class="text-muted">Quận 5</span>
                                                </div>
                                                <div class="detail-item">
                                                    <img src="<?php echo e(asset('/assets/images/user-history.png')); ?>"
                                                        alt="user" class="me-2" style="width: 25px; height: 25px;">
                                                    <span class="text-muted">Chủ xe: Nguyễn Thục Quyên</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Action Button -->
                                        <div class="action-button d-none d-lg-block">
                                            <a href="<?php echo e(route('car-prepare')); ?>" style="text-decoration: none"
                                                class="btn-primary-for-otod rounded fw-bold px-4 py-2">
                                                Nhận xe
                                            </a>
                                        </div>
                                    </div>
                                    <div class="action-button d-block d-lg-none mt-3">
                                        <a href="<?php echo e(route('car-prepare')); ?>"
                                            class="btn-primary-for-otod rounded fw-bold px-4 py-2 w-100"
                                            style="height:44px;text-decoration: none">
                                            Nhận xe
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Completed Trips Tab -->
                <div class="tab-pane fade" id="completed" role="tabpanel">
                    <div class="rental-card mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <!-- Header with time and status -->
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="rental-time">
                                        <span class="fw-bold fs-7 fs-md-6 fs-lg-5 " style="color:#737272">8h00, 12/4 -
                                            17h00,
                                            14/4</span>
                                    </div>
                                    <div class="status-badges d-flex flex-column">
                                        <span class="badge bg-warning">Đang trong chuyến</span>
                                        <span class="badge text-dark fw-bold fs-4 fs-md-3 fs-lg-2 mt-2">600.000đ</span>
                                    </div>
                                </div>

                                <!-- Car Details -->
                                <div class="d-flex align-items-start">
                                    <!-- Car Image -->
                                    <div class="car-image me-4">
                                        <img src="<?php echo e(asset('/assets/images/prepare-2.png')); ?>" alt="Mercedes-Benz"
                                            class="rounded-3" style="width: 120px; height: 80px; object-fit: cover;">
                                    </div>

                                    <!-- Car Information -->
                                    <div class="car-info flex-grow-1">
                                        <h5 class="fw-bold text-dark mb-2">Mercedes-Benz..</h5>
                                        <div class="car-details">
                                            <div class="detail-item mb-1">
                                                <span class="text-muted">Biển số:</span>
                                                <span class="fw-medium ms-2">29U1.334.08</span>
                                            </div>
                                            <div class="detail-item mb-1">
                                                <img src="<?php echo e(asset('/assets/images/position.png')); ?>" alt="location"
                                                    class="me-2" style="width: 16px; height: 16px;">
                                                <span class="text-muted">Quận 5</span>
                                            </div>
                                            <div class="detail-item">
                                                <img src="<?php echo e(asset('/assets/images/user-history.png')); ?>" alt="user"
                                                    class="me-2" style="width: 25px; height: 25px;">
                                                <span class="text-muted">Chủ xe: Nguyễn Thục Quyên</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Button -->
                                    <div class="action-button d-none d-lg-block">
                                        <a href="<?php echo e(route('car-return')); ?>" style="text-decoration: none"
                                            class="btn-primary-for-otod rounded fw-bold px-4 py-2">
                                            Trả xe
                                        </a>
                                    </div>
                                </div>
                                <div class="action-button d-block d-lg-none mt-3">
                                    <a href="<?php echo e(route('car-return')); ?>"
                                        class="btn-primary-for-otod rounded fw-bold px-4 py-2 w-100"
                                        style="height:44px;text-decoration: none;">
                                        Trả xe
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="rental-card mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <!-- Header with time and status -->
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="rental-time">
                                        <span class="fw-bold fs-7 fs-md-6 fs-lg-5 " style="color:#737272">8h00, 12/4 -
                                            17h00,
                                            14/4</span>
                                    </div>
                                    <div class="status-badges d-flex flex-column">
                                        <span class="badge bg-light text-dark mb-1">Đã kết thúc</span>
                                        <span class="badge bg-warning">Chủ xe 5 sao</span>
                                    </div>
                                </div>

                                <!-- Car Details -->
                                <div class="d-flex align-items-start">
                                    <!-- Car Image -->
                                    <div class="car-image me-4">
                                        <img src="<?php echo e(asset('/assets/images/history-car.png')); ?>" alt="Mercedes-Benz"
                                            class="rounded-3" style="width: 120px; height: 80px; object-fit: cover;">
                                    </div>

                                    <!-- Car Information -->
                                    <div class="car-info flex-grow-1">
                                        <h5 class="fw-bold text-dark mb-2">Mercedes-Benz..</h5>
                                        <div class="car-details">
                                            <div class="detail-item mb-1">
                                                <span class="text-muted">Biển số:</span>
                                                <span class="fw-medium ms-2">29U1.334.08</span>
                                            </div>
                                            <div class="detail-item mb-1">
                                                <img src="<?php echo e(asset('/assets/images/position.png')); ?>" alt="location"
                                                    class="me-2" style="width: 16px; height: 16px;">
                                                <span class="text-muted">Quận 5</span>
                                            </div>
                                            <div class="detail-item">
                                                <img src="<?php echo e(asset('/assets/images/user-history.png')); ?>" alt="user"
                                                    class="me-2" style="width: 25px; height: 25px;">
                                                <span class="text-muted">Chủ xe: Nguyễn Thục Quyên</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Button -->
                                    <div class="action-button d-none d-lg-block">
                                        <a href="<?php echo e(route('completed')); ?>" style="text-decoration: none"
                                            class="btn-primary-for-otod rounded fw-bold px-4 py-2">
                                            Thuê lại
                                        </a>
                                    </div>
                                </div>
                                <div class="action-button d-block d-lg-none mt-3">
                                    <a href="<?php echo e(route('completed')); ?>"
                                        class="btn-primary-for-otod rounded fw-bold px-4 py-2 w-100"
                                        style="height:44px;text-decoration: none">
                                        Thuê lại
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="rental-card mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <!-- Header with time and status -->
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="rental-time">
                                        <span class="fw-bold fs-7 fs-md-6 fs-lg-5 " style="color:#737272">8h00, 12/4 -
                                            17h00,
                                            14/4</span>
                                    </div>
                                    <div class="status-badges d-flex flex-column">
                                        <span class="badge bg-danger text-white mb-1">Chủ xe đã từ chối</span>
                                        <span class="badge text-dark fw-bold fs-4 fs-md-3 fs-lg-2 mt-2">1.000.000đ</span>
                                    </div>
                                </div>

                                <!-- Car Details -->
                                <div class="d-flex align-items-start">
                                    <!-- Car Image -->
                                    <div class="car-image me-4">
                                        <img src="<?php echo e(asset('/assets/images/return-1.png')); ?>" alt="Mercedes-Benz"
                                            class="rounded-3" style="width: 120px; height: 80px; object-fit: cover;">
                                    </div>

                                    <!-- Car Information -->
                                    <div class="car-info flex-grow-1">
                                        <h5 class="fw-bold text-dark mb-2">Mercedes-Benz..</h5>
                                        <div class="car-details">
                                            <div class="detail-item mb-1">
                                                <span class="text-muted">Biển số:</span>
                                                <span class="fw-medium ms-2">29U1.334.08</span>
                                            </div>
                                            <div class="detail-item mb-1">
                                                <img src="<?php echo e(asset('/assets/images/position.png')); ?>" alt="location"
                                                    class="me-2" style="width: 16px; height: 16px;">
                                                <span class="text-muted">Quận 5</span>
                                            </div>
                                            <div class="detail-item">
                                                <img src="<?php echo e(asset('/assets/images/user-history.png')); ?>" alt="user"
                                                    class="me-2" style="width: 25px; height: 25px;">
                                                <span class="text-muted">Chủ xe: Nguyễn Thục Quyên</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Button -->
                                    <div class="action-button d-none d-lg-block">
                                        <a href="<?php echo e(route('rejected')); ?>" style="text-decoration: none"
                                            class="btn-primary-for-otod rounded fw-bold px-4 py-2">
                                            Thuê lại
                                        </a>
                                    </div>
                                </div>
                                <div class="action-button d-block d-lg-none mt-3">
                                    <a href="<?php echo e(route('rejected')); ?>"
                                        class="btn-primary-for-otod rounded fw-bold px-4 py-2 w-100"
                                        style="height:44px;text-decoration: none">
                                        Thuê lại
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="rental-card mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-4">
                                <!-- Header with time and status -->
                                <div class="d-flex justify-content-between align-items-start mb-3">
                                    <div class="rental-time">
                                        <span class="fw-bold fs-7 fs-md-6 fs-lg-5 " style="color:#737272">8h00, 12/4 -
                                            17h00,
                                            14/4</span>
                                    </div>
                                    <div class="status-badges d-flex flex-column">
                                        <span class="badge bg-warning">Chờ đánh giá</span>
                                        <span class="badge text-dark fw-bold fs-4 fs-md-3 fs-lg-2 mt-2">2.040.000đ</span>
                                    </div>
                                </div>

                                <!-- Car Details -->
                                <div class="d-flex align-items-start">
                                    <!-- Car Image -->
                                    <div class="car-image me-4">
                                        <img src="<?php echo e(asset('/assets/images/history-car.png')); ?>" alt="Mercedes-Benz"
                                            class="rounded-3" style="width: 120px; height: 80px; object-fit: cover;">
                                    </div>

                                    <!-- Car Information -->
                                    <div class="car-info flex-grow-1">
                                        <h5 class="fw-bold text-dark mb-2">Mercedes-Benz..</h5>
                                        <div class="car-details">
                                            <div class="detail-item mb-1">
                                                <span class="text-muted">Biển số:</span>
                                                <span class="fw-medium ms-2">29U1.334.08</span>
                                            </div>
                                            <div class="detail-item mb-1">
                                                <img src="<?php echo e(asset('/assets/images/position.png')); ?>" alt="location"
                                                    class="me-2" style="width: 16px; height: 16px;">
                                                <span class="text-muted">Quận 5</span>
                                            </div>
                                            <div class="detail-item">
                                                <img src="<?php echo e(asset('/assets/images/user-history.png')); ?>" alt="user"
                                                    class="me-2" style="width: 25px; height: 25px;">
                                                <span class="text-muted">Chủ xe: Nguyễn Thục Quyên</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Action Button -->
                                    <div class="action-button d-none d-lg-flex gap-2">
                                        <a href="#" style="text-decoration: none;"
                                            class="bg-warning rounded fw-bold px-4 py-2">
                                            Đánh giá
                                        </a>
                                        <a href="<?php echo e(route('pending-review')); ?>" style="text-decoration: none"
                                            class="btn-primary-for-otod rounded fw-bold px-4 py-2">
                                            Thuê lại
                                        </a>
                                    </div>
                                </div>
                                <div class="action-button d-flex justify-content-between gap-3 d-lg-none mt-3">
                                    <a href="#" style="text-decoration: none;"
                                        class="bg-warning-for-otod rounded fw-bold px-4 py-2 ">
                                        Đánh giá
                                    </a>
                                    <a href="<?php echo e(route('pending-review')); ?>"
                                        class="btn-primary-for-otod rounded fw-bold px-4 py-2 "
                                        style="height:44px;text-decoration: none">
                                        Thuê lại
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        .btn-primary-for-otod {
            background: #233876;
            border: none;
            color: white;
            transition: all 0.2s ease;
        }

        .btn-primary-for-otod:hover {
            background: #1a2a5e;
            color: white;
            transform: translateY(-1px);
        }

        .main-content {
            margin-left: 280px;
            min-height: calc(100vh - 80px - 200px);
            background-color: #f8f9fa;
            transition: margin-left 0.3s ease;
        }

        .content-wrapper {
            padding: 2rem;
        }

        .page-title {
            font-size: 2rem;
            color: #333;
        }

        /* Notification Styles */
        .notification-box {
            position: fixed;
            top: 100px;
            right: 20px;
            background: #f8fff8;
            border: 1px solid #28a745;
            border-radius: 8px;
            padding: 1rem;
            animation: slideInRight 0.5s ease-out;
            z-index: 1000;
            max-width: 300px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .notification-content {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .notification-title {
            font-size: 1rem;
            color: #155724;
        }

        .notification-message {
            font-size: 0.9rem;
            color: #155724;
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Tab Styles */
        .nav-tabs {
            border-bottom: 2px solid #e9ecef;
        }

        .nav-tabs .nav-link {
            border: none;
            color: #6c757d;
            background-color: transparent;
            transition: all 0.3s ease;
        }

        .nav-tabs .nav-link:hover {
            border: none;
            color: #233876;
            background-color: #f8f9fa;
        }

        .nav-tabs .nav-link.active {
            border: none;
            color: white;
            background-color: #233876;
        }

        /* Rental Card Styles */
        .rental-card .card {
            border-radius: 12px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            background: white;
        }

        .rental-card .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1) !important;
        }

        .rental-time {
            font-size: 1.1rem;
            color: #333;
        }

        .status-badges .badge {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: none;
        }

        .status-badges .bg-success {
            background-color: #28a745 !important;
        }

        .status-badges .bg-warning {
            background-color: #ffc107 !important;
            color: #212529 !important;
        }

        .car-details .detail-item {
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        .car-details .detail-item span {
            color: #6c757d;
        }

        .car-details .detail-item .fw-medium {
            color: #333;
        }

        .action-button {
            align-self: flex-end;
        }

        .action-button .btn-primary-for-otod {
            border-radius: 8px;
            min-width: 100px;
            padding: 0.5rem 1.5rem;
            font-size: 0.9rem;
        }

        .car-info h5 {
            font-size: 1.1rem;
            margin-bottom: 0.75rem;
        }

        .car-image img {
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .notification-box {
                top: 80px;
                right: 15px;
                max-width: 280px;
                padding: 0.75rem;
            }

            .main-content {
                margin-left: 0;
            }

            .content-wrapper {
                padding: 1rem;
            }

            .page-title {
                font-size: 1.5rem;
            }

            /* Tab responsive - giữ nguyên horizontal như ảnh */
            .tab-navigation .nav-tabs {
                flex-direction: row;
                gap: 0;
            }

            .tab-navigation .nav-tabs .nav-link {
                max-width: 110px !important;
                margin-right: 0.75rem !important;
            }

            /* Rental card responsive - giữ layout ngang như ảnh */
            .rental-card .card-body {
                padding: 1rem !important;
            }

            /* Giữ nguyên layout ngang cho car details */
            .rental-card .d-flex {
                align-items: flex-end !important;
                gap: 0;
            }

            .car-image {
                margin-bottom: 0;
                margin-right: 1rem !important;
                align-self: flex-start;
            }

            .car-image img {
                width: 100px !important;
                height: 70px !important;
            }

            .car-info {
                width: auto;
                flex-grow: 1;
            }

            .car-info h5 {
                font-size: 1rem;
                text-align: left;
            }

            .car-details {
                text-align: left;
            }

            .detail-item {
                justify-content: flex-start;
            }

            .action-button {
                margin-top: 0;
                width: auto;
                align-self: flex-end !important;
            }

            .action-button .btn-primary-for-otod {
                width: 100% !important;
                padding: 0.5rem 1.5rem;
                display: flex !important;
                justify-content: center;
                align-content: center
            }

            .bg-warning-for-otod {
                background: #FEBA11;
                width: 100% !important;
                display: flex !important;
                justify-content: center;
                align-content: center
            }

            /* Status badges responsive - giữ nguyên vị trí bên phải và layout dọc */
            .status-badges {
                align-self: flex-start;
                margin-top: 0;
                /* Bắt buộc badges xếp chồng lên nhau (vertical) */
                display: flex !important;
                flex-direction: column !important;
            }

            .status-badges .badge:first-child {
                margin-bottom: 0.25rem !important;
            }

            .status-badges .badge {
                font-size: 0.7rem;
                padding: 0.25rem 0.5rem;
            }

            /* Rental time responsive - giữ nguyên vị trí bên trái */
            .rental-time {
                text-align: left;
                width: auto;
                margin-bottom: 0;
            }

            .rental-time span {
                font-size: 0.9rem !important;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding-left: 0.5rem;
                padding-right: 0.5rem;
            }

            .page-header {
                margin-bottom: 1.5rem;
            }

            .page-title {
                font-size: 1.25rem;
            }

            .tab-navigation {
                margin-bottom: 1.5rem;
            }

            .rental-card {
                margin-bottom: 1rem;
            }

            .rental-card .card-body {
                padding: 0.75rem !important;
            }
        }
    </style>

    <script>
        // Auto hide notification after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const notificationBox = document.getElementById('notificationBox');
            if (notificationBox) {
                setTimeout(function() {
                    notificationBox.style.animation = 'slideOutRight 0.5s ease-out';
                    setTimeout(function() {
                        notificationBox.style.display = 'none';
                    }, 500);
                }, 5000);
            }
        });
    </script>

    <style>
        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }

            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-with-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/car-rental-history.blade.php ENDPATH**/ ?>