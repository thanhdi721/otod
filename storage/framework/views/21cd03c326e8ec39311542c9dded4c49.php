

<?php $__env->startSection('content'); ?>
    <!-- Success Notification - Fixed Position -->
    <div id="successNotification" class="position-fixed top-0 end-0 m-3" style="z-index: 9999; display: none;">
        <div class="alert alert-success mb-0"
            style="background-color: #F0FDF5; border: 1px solid #16A350; color: #0A0A0A; border-radius: 8px; padding: 12px 16px; min-width: 300px; box-shadow: 0 4px 12px rgba(0,0,0,0.15);">
            <div class="fw-bold">Thông báo</div>
            <div>Thay đổi mật khẩu thành công. Bạn hãy đăng nhập lại</div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div class="row g-0" style="height: 810px;">
            <!-- Left Hero -->
            <div class="col-12 col-lg-6 position-relative hero-section">
                <img src="<?php echo e(asset('/assets/images/login-img.jpg')); ?>" alt="banner" class="object-fit-cover hero-image">
                <div class="position-absolute top-50 start-50 translate-middle text-center text-white hero-logo">
                    <img src="<?php echo e(asset('/assets/images/logo-white2.png')); ?>" alt="OTOD" class="mb-4">
                </div>
                <div class="position-absolute bottom-0 start-0 p-4 p-lg-5 text-white hero-text" style="max-width: 540px;">
                    <div class="d-flex hero-text-element justify-content-start gap-1 mb-2">
                        <img src="<?php echo e(asset('/assets/images/pr-ic1.png')); ?>" alt="OTOD" class="pr-ic">
                        <img src="<?php echo e(asset('/assets/images/pr-ic2.png')); ?>" alt="OTOD" class="pr-ic">
                        <img src="<?php echo e(asset('/assets/images/pr-ic3.png')); ?>" alt="OTOD" class="pr-ic">
                    </div>
                    <div class="fs-3 fw-bold mb-2">Tự lái - Tự do</div>
                    <div class="small text-white-50">Tự tay cầm lái chiếc xe bạn yêu thích cho hành trình thêm hứng khởi.
                    </div>
                </div>
            </div>
            <!-- Right Form -->
            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                <div class="w-100 form-container">
                    <h3 class="fw-bold mb-4">Đăng nhập</h3>

                    <form id="loginForm" novalidate>
                        <div class="mb-3 form-floating">
                            <input type="tel" class="form-control rounded-3" id="phone" placeholder="Số điện thoại">
                            <label for="phone">Số điện thoại</label>
                        </div>

                        <div class="mb-3 position-relative form-floating">
                            <input type="password" class="form-control rounded-3" id="password" placeholder="Mật khẩu">
                            <label for="password">Mật khẩu</label>
                            <button class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-muted pe-3"
                                type="button" id="togglePwd" tabindex="-1"><img
                                    src="<?php echo e(asset('/assets/images/view.png')); ?>" alt=""></button>
                            <div id="passwordError" class="form-text text-danger mt-1 d-none">Mật khẩu không đúng</div>
                        </div>

                        <div class="text-end mb-4">
                            <a href="<?php echo e(route('forgot-password')); ?>" class="text-decoration-none fw-semibold"
                                style="color:#2B4896">Quên mật khẩu?</a>
                        </div>

                        <button type="button" class="btn w-100 py-3 fw-semibold mb-4"
                            style="border-radius:10px; background:#2B4896; color:#fff;">Tiếp tục</button>

                        <div class="text-center">
                            <span class="text-muted">Bạn chưa là thành viên? </span>
                            <a href="<?php echo e(route('register')); ?>" class="text-decoration-none fw-semibold"
                                style="color:#2B4896">Đăng ký ngay</a>
                        </div>
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

        .form-control.is-invalid {
            border-color: #dc3545;
            background-color: #fff5f5;
        }

        .form-control.is-invalid:focus {
            border-color: #dc3545;
            box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
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
                height: 250px;
            }

            .hero-logo {
                text-align: start !important;
                top: 40% !important;
                left: 28% !important;
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
            const pwd = document.getElementById('password');
            const toggleBtn = document.getElementById('togglePwd');
            const submitBtn = document.querySelector('button[type="button"]');
            const errorDiv = document.getElementById('passwordError');
            const successNotification = document.getElementById('successNotification');

            // Check for password change success notification
            if (sessionStorage.getItem('passwordChangedSuccess')) {
                successNotification.style.display = 'block';
                sessionStorage.removeItem('passwordChangedSuccess');
            }

            // Toggle password visibility
            toggleBtn.addEventListener('click', function() {
                const isPwd = pwd.type === 'password';
                pwd.type = isPwd ? 'text' : 'password';
                toggleBtn.querySelector('img').src = isPwd ?
                    '<?php echo e(asset('/assets/images/view-off.png')); ?>' :
                    '<?php echo e(asset('/assets/images/view.png')); ?>';
            });

            // Submit validation
            submitBtn.addEventListener('click', function() {
                // Demo validation: nếu mật khẩu không phải "123456" thì báo lỗi
                if (pwd.value !== '123456') {
                    pwd.classList.add('is-invalid');
                    errorDiv.classList.remove('d-none');
                } else {
                    pwd.classList.remove('is-invalid');
                    errorDiv.classList.add('d-none');
                    // Chuyển về trang chủ nếu đúng
                    window.location.href = '<?php echo e(route('home')); ?>';
                }
            });
        })();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-not-header-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/Auth/login.blade.php ENDPATH**/ ?>