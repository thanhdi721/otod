

<?php $__env->startSection('content'); ?>
    <div class="container-fluid px-0">
        <div class="row g-0" style="height: 810px;">
            <!-- Left Hero -->
            <div class="col-12 col-lg-6 position-relative hero-section">
                <img src="<?php echo e(asset('/assets/images/otp-img.png')); ?>" alt="banner" class="object-fit-cover hero-image">
                <div class="hero-overlay position-absolute top-0 start-0 w-100 h-100"
                    style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));"></div>
                <div class="position-absolute top-50 start-50 translate-middle text-center text-white hero-logo">
                    <img src="<?php echo e(asset('/assets/images/logo-white2.png')); ?>" alt="OTOD" class="mb-4">
                </div>

            </div>
            <!-- Right Form -->
            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                <div class="w-100 form-container">
                    <h3 class="fw-bold mb-2">Quên mật khẩu</h3>
                    <p class="fw-semibold mb-2">Xác thực số điện thoại của bạn</p>
                    <p class="text-muted small mb-4">Mã xác thực gồm 4 hoặc 6 chữ số sẽ được gửi đến số điện thoại của bạn
                        thông qua tin nhắn SMS hoặc cuộc gọi</p>

                    <form id="forgotPasswordForm" novalidate>
                        <div class="mb-4 position-relative">
                            <div class="form-floating">
                                <input type="tel" class="form-control rounded-3 fs-6 fs-md-5 fs-lg-4" id="phone"
                                    placeholder="Số điện thoại" value="0987123205" style="color: #2B4896;">
                                <label for="phone">Số điện thoại</label>
                            </div>
                            <button type="button"
                                class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-muted pe-3"
                                id="clearPhone" style="display: none;">
                                <img src="<?php echo e(asset('/assets/images/cancel-5.png')); ?>" alt="close">
                            </button>
                        </div>

                        <button type="button" id="submitBtn" class="btn w-100 py-3 fw-semibold"
                            style="border-radius:10px; background:#2B4896; color:#fff;">Tiếp tục</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .form-floating>.form-control {
            padding-top: 1.25rem;
            padding-bottom: .5rem;
        }

        .form-floating>label {
            color: #8A8A8A;
        }

        .object-fit-cover {
            object-fit: cover;
        }

        #clearPhone {
            z-index: 10;
        }

        .form-container {
            max-width: 440px;
            padding: 32px 24px;
        }

        .hero-image {
            height: 911px;
            width: 100%;
        }

        /* Mobile Responsive */
        @media (max-width: 991.98px) {
            .row {
                height: auto !important;
                min-height: 100vh;
            }

            .form-container {
                max-width: 100%;
                padding: 24px 16px;
            }

            .hero-image {
                height: 100px;
            }
        }

        @media (max-width: 575.98px) {
            .form-container {
                padding: 20px 12px;
            }

            h3.fw-bold {
                font-size: 1.5rem;
            }

            .form-floating>.form-control {
                font-size: 16px;
                /* Prevent zoom on iOS */
            }

            .hero-image {
                height: 433px;
            }

            .hero-logo {
                text-align: start !important;
                top: 50% !important;
                left: 50% !important;
            }

            .hero-logo img {
                height: 48px !important;
            }

            .hero-text {
                margin-bottom: 20px !important;
            }

            .hero-text-element {
                justify-content: center !important;
                position: absolute;
                left: 40%;
                bottom: 0%;
            }
        }
    </style>

    <script>
        (function() {
            const phoneInput = document.getElementById('phone');
            const clearBtn = document.getElementById('clearPhone');
            const submitBtn = document.getElementById('submitBtn');

            // Show/hide clear button
            phoneInput.addEventListener('input', function() {
                clearBtn.style.display = this.value ? 'block' : 'none';
            });

            // Clear phone number
            clearBtn.addEventListener('click', function() {
                phoneInput.value = '';
                clearBtn.style.display = 'none';
                phoneInput.focus();
            });

            // Submit form
            submitBtn.addEventListener('click', function() {
                if (phoneInput.value.trim()) {
                    // Demo: chuyển về trang OTP quên mật khẩu
                    window.location.href = '<?php echo e(route('verify-otp-forgot-password')); ?>';
                }
            });

            // Show clear button on load if phone has value
            if (phoneInput.value) {
                clearBtn.style.display = 'block';
            }
        })();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-not-header-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/Auth/forgot-password.blade.php ENDPATH**/ ?>