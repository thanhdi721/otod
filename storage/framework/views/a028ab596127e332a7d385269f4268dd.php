

<?php $__env->startSection('content'); ?>
    <div class="container-fluid px-0">
        <div class="row g-0" style="height: 810px;">
            <!-- Left Hero -->
            <div class="col-12 col-lg-6 position-relative hero-section">
                <img src="<?php echo e(asset('/assets/images/otp-img.png')); ?>" alt="banner" class="object-fit-cover hero-image">
                <div class="position-absolute top-0 start-0 w-100 h-100"
                    style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));"></div>
                <div class="position-absolute top-50 start-50 translate-middle text-center text-white hero-logo">
                    <img src="<?php echo e(asset('/assets/images/logo-white2.png')); ?>" alt="OTOD" class="mb-4">
                </div>

            </div>
            <!-- Right Form -->
            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                <div class="w-100 form-container">
                    <h3 class="fw-bold mb-2">Tạo mật khẩu mới</h3>
                    <p class="text-muted small mb-4">Tạo mật khẩu mới. Đảm bảo mật khẩu này khác với mật khẩu trước đó để
                        bảo mật tài khoản</p>

                    <form id="createPasswordForm" novalidate>
                        <div class="mb-3 position-relative form-floating">
                            <input type="password" class="form-control rounded-3" id="password"
                                placeholder="Nhập mật khẩu">
                            <label for="password">Mật khẩu</label>
                            <button class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-muted pe-3"
                                type="button" id="togglePwd" tabindex="-1">
                                <img src="<?php echo e(asset('/assets/images/view.png')); ?>" alt="">
                            </button>
                        </div>

                        <div class="mb-4 position-relative form-floating">
                            <input type="password" class="form-control rounded-3" id="confirmPassword"
                                placeholder="Xác nhận mật khẩu">
                            <label for="confirmPassword">Xác nhận mật khẩu</label>
                            <button class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-muted pe-3"
                                type="button" id="togglePwd2" tabindex="-1">
                                <img src="<?php echo e(asset('/assets/images/view.png')); ?>" alt="">
                            </button>
                        </div>

                        <button type="button" id="submitBtn" class="btn w-100 py-3 fw-semibold"
                            style="border-radius:10px; background:#F4F4F4; color:#737272;" disabled>Tiếp tục</button>
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
                height: 397px;
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
            const pwd = document.getElementById('password');
            const pwd2 = document.getElementById('confirmPassword');
            const t1 = document.getElementById('togglePwd');
            const t2 = document.getElementById('togglePwd2');
            const submit = document.getElementById('submitBtn');

            function toggle(btn, input) {
                btn.addEventListener('click', function() {
                    const isPwd = input.type === 'password';
                    input.type = isPwd ? 'text' : 'password';
                    btn.querySelector('img').src = isPwd ? '<?php echo e(asset('/assets/images/view-off.png')); ?>' :
                        '<?php echo e(asset('/assets/images/view.png')); ?>';
                });
            }
            toggle(t1, pwd);
            toggle(t2, pwd2);

            function checkPasswords() {
                const password = pwd.value;
                const confirmPassword = pwd2.value;
                const isValid = password.length >= 6 && password === confirmPassword;

                submit.disabled = !isValid;
                submit.style.background = isValid ? '#2B4896' : '#F4F4F4';
                submit.style.color = isValid ? '#fff' : '#737272';
            }

            pwd.addEventListener('input', checkPasswords);
            pwd2.addEventListener('input', checkPasswords);

            submit.addEventListener('click', function() {
                const password = pwd.value;
                const confirmPassword = pwd2.value;

                if (password.length >= 6 && password === confirmPassword) {
                    // Set flag để hiển thị thông báo thành công
                    sessionStorage.setItem('passwordChangedSuccess', 'true');
                    // Chuyển về trang đăng nhập
                    window.location.href = '<?php echo e(route('login')); ?>';
                }
            });
        })();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-not-header-footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/Auth/create-new-password.blade.php ENDPATH**/ ?>