

<?php $__env->startSection('title', 'Xác nhận trả xe - OTOD'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <!-- Main Title -->
                <div class="mb-5 mt-2 mt-lg-5">
                    <div class="main-title fw-bold fs-3 fs-md-2 fs-lg-1 text-dark mb-4 text-start text-lg-center">Chuẩn bị
                        trả xe</div>

                    <!-- Car Icon -->
                    <div class="car-icon-container mb-4">
                        <div class="car-icon">
                            <img src="<?php echo e(asset('/assets/images/car-prepare-ic.png')); ?>" alt="">
                        </div>
                    </div>

                    <!-- Subtitle -->
                    <div class="subtitle text-dark mb-5 fs-5 fs-md-4 fs-lg-3 text-center">Các bước chuẩn bị</div>
                </div>

                <!-- Preparation Steps -->
                <div class="preparation-steps mb-5">
                    <!-- Step 1: Take photos of car exterior -->
                    <a href="<?php echo e(route('car-exterior-photos')); ?>" style="text-decoration: none">
                        <div class="step-item mb-3">
                            <div class="step-content">
                                <div class="step-left">
                                    <div class="step-icon">
                                        <img src="<?php echo e(asset('/assets/images/checkmark-ic.png')); ?>" alt="">
                                    </div>
                                    <span class="step-text">Chụp hình ngoài xe</span>
                                </div>
                                <div class="step-arrow">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Step 2: Take photo of fuel level -->
                    <a href="#" style="text-decoration: none">
                        <div class="step-item mb-3">
                            <div class="step-content">
                                <div class="step-left">
                                    <div class="step-icon">
                                        <img src="<?php echo e(asset('/assets/images/checkmark-ic.png')); ?>" alt="">
                                    </div>
                                    <span class="step-text">Chụp hình mức xăng xe</span>
                                </div>
                                <div class="step-arrow">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Step 3: Take photo of car trunk -->
                    <a href="#" style="text-decoration: none">
                        <div class="step-item mb-3">
                            <div class="step-content">
                                <div class="step-left">
                                    <div class="step-icon">
                                        <img src="<?php echo e(asset('/assets/images/checkmark-ic.png')); ?>" alt="">
                                    </div>
                                    <span class="step-text">Chụp hình cốp xe</span>
                                </div>
                                <div class="step-arrow">
                                    <i class="bi bi-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Action Button -->
                <div class="text-center">
                    <a href="<?php echo e(route('car-rental-history')); ?>?notification=car_return"
                        class="btn btn-confirm btn-lg px-5 py-3 w-100" style="max-width: 448px;">
                        Xác nhận trả xe
                    </a>
                </div>
            </div>
        </div>
    </div>

    <style>
        .main-title {
            font-size: 2.5rem;
            color: #495057;
        }

        .subtitle {
            font-size: 1.5rem;
            color: #495057;
            font-weight: 500;
        }

        .car-icon-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .car-icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .car-icon i {
            font-size: 4rem;
            color: white;
        }

        .preparation-steps {
            max-width: 448px;
            margin: 0 auto;
        }

        .step-item {
            background: #f8f9fa;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .step-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
        }

        .step-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.5rem;
        }

        .step-left {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .step-icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .step-text {
            font-size: 1.1rem;
            font-weight: 500;
            color: #495057;
        }

        .step-arrow {
            color: #6c757d;
            font-size: 1.2rem;
        }

        .btn-confirm {
            background: #2B4896;
            color: white;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.3s ease;
        }

        .btn-confirm:hover {
            opacity: 0.8;
            transform: translateY(-1px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-title {
                font-size: 2rem;
            }

            .subtitle {
                font-size: 1.25rem;
            }

            .car-icon {
                width: 100px;
                height: 100px;
            }

            .car-icon i {
                font-size: 3rem;
            }

            .step-content {
                padding: 1.25rem;
            }

            .step-text {
                font-size: 1rem;
            }

            .btn-confirm {
                padding: 0.75rem 2rem !important;
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .main-title {
                font-size: 1.75rem;
            }

            .subtitle {
                font-size: 1.1rem;
            }

            .car-icon {
                width: 80px;
                height: 80px;
            }

            .car-icon i {
                font-size: 2.5rem;
            }

            .step-content {
                padding: 1rem;
            }

            .step-left {
                gap: 0.75rem;
            }

            .step-icon {
                width: 35px;
                height: 35px;
            }

            .step-icon i {
                font-size: 1rem;
            }

            .step-text {
                font-size: 0.9rem;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/car-confirm-return.blade.php ENDPATH**/ ?>