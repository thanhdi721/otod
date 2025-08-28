@extends('layouts.layout-not-header-footer')

@section('content')
    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="position-fixed top-0 start-0 w-100 h-100 d-none"
        style="z-index: 9999; background: rgba(0, 0, 0, 0.5); backdrop-filter: blur(5px);">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="bg-white rounded-3 p-4 d-flex flex-column align-items-center" style="min-width: 200px;">
                <div class="spinner-border text-primary mb-3" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="text-muted">Đang xử lý...</div>
            </div>
        </div>
    </div>

    <div class="container-fluid px-0">
        <div class="row g-0" style="height: 810px;">
            <!-- Left Hero -->
            <div class="col-12 col-lg-6 position-relative hero-section">
                <img src="{{ asset('/assets/images/otp-img.png') }}" alt="banner" class="object-fit-cover hero-image">
                <div class="position-absolute top-0 start-0 w-100 h-100"
                    style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2));"></div>
                <div class="position-absolute top-50 start-50 translate-middle text-center text-white hero-logo">
                    <img src="{{ asset('/assets/images/logo-white2.png') }}" alt="OTOD" class="mb-4">
                </div>

            </div>
            <!-- Right Form -->
            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                <div class="w-100 form-container">
                    <h3 class="fw-bold mb-2">Nhập mã OTP</h3>
                    <p class="text-muted small mb-2">Mã xác nhận được gửi đến điện thoại</p>
                    <p class="fw-semibold fs-6 fs-md-5 fs-lg-4 mb-4">+84 938120123</p>

                    <form id="otpForm" novalidate>
                        <div class="mb-4">
                            <div class="d-flex gap-2 justify-content-start">
                                <input type="text" class="form-control otp-input text-center" maxlength="1"
                                    data-index="0">
                                <input type="text" class="form-control otp-input text-center" maxlength="1"
                                    data-index="1">
                                <input type="text" class="form-control otp-input text-center" maxlength="1"
                                    data-index="2">
                                <input type="text" class="form-control otp-input text-center" maxlength="1"
                                    data-index="3">
                                <input type="text" class="form-control otp-input text-center" maxlength="1"
                                    data-index="4">
                                <input type="text" class="form-control otp-input text-center" maxlength="1"
                                    data-index="5">
                            </div>
                        </div>

                        <div class="text-start mb-4">
                            <a href="#" id="resendLink" class="text-decoration-none fw-semibold"
                                style="color:#2B4896">
                                Bạn chưa nhận được mã? Gửi lại mã trong <span id="countdown">30s</span>
                            </a>
                        </div>

                        <button type="button" id="submitBtn" class="btn w-100 py-3 fw-semibold"
                            style="border-radius:10px; background:#F4F4F4; color:#737272;" disabled>Tiếp tục</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .otp-input {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background-color: #F4F4F4;
            border: 1px solid #E5E7EB;
            font-size: 18px;
            font-weight: 600;
        }

        .otp-input:focus {
            border-color: #2B4896;
            background-color: #fff;
            box-shadow: 0 0 0 0.2rem rgba(43, 72, 150, 0.25);
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
            const otpInputs = document.querySelectorAll('.otp-input');
            const submitBtn = document.getElementById('submitBtn');
            const resendLink = document.getElementById('resendLink');
            const countdownSpan = document.getElementById('countdown');
            let countdown = 30;
            let timer;

            // Auto focus next input
            otpInputs.forEach((input, index) => {
                input.addEventListener('input', function() {
                    if (this.value.length === 1) {
                        if (index < otpInputs.length - 1) {
                            otpInputs[index + 1].focus();
                        }
                    }
                });

                input.addEventListener('keydown', function(e) {
                    if (e.key === 'Backspace' && this.value === '' && index > 0) {
                        otpInputs[index - 1].focus();
                    }
                });
            });

            // Check if OTP is complete
            function checkOTP() {
                const otp = Array.from(otpInputs).map(input => input.value).join('');
                submitBtn.disabled = otp.length !== 6;
                submitBtn.style.background = otp.length === 6 ? '#2B4896' : '#F4F4F4';
                submitBtn.style.color = otp.length === 6 ? '#fff' : '#737272';
            }

            otpInputs.forEach(input => {
                input.addEventListener('input', checkOTP);
            });

            // Countdown timer
            function startCountdown() {
                resendLink.style.pointerEvents = 'none';
                resendLink.style.color = '#9CA3AF';
                timer = setInterval(() => {
                    countdown--;
                    countdownSpan.textContent = countdown + 's';
                    if (countdown <= 0) {
                        clearInterval(timer);
                        resendLink.style.pointerEvents = 'auto';
                        resendLink.style.color = '#2B4896';
                        countdownSpan.textContent = '';
                        resendLink.innerHTML =
                            'Bạn chưa nhận được mã? <span style="color:#2B4896">Gửi lại mã</span>';
                    }
                }, 1000);
            }

            startCountdown();

            // Resend OTP
            resendLink.addEventListener('click', function(e) {
                if (countdown > 0) return;
                e.preventDefault();
                countdown = 30;
                startCountdown();
                // Clear inputs
                otpInputs.forEach(input => input.value = '');
                checkOTP();
                otpInputs[0].focus();
            });

            // Submit OTP
            submitBtn.addEventListener('click', function() {
                const otp = Array.from(otpInputs).map(input => input.value).join('');
                if (otp.length === 6) {
                    // Show loading overlay
                    const loadingOverlay = document.getElementById('loadingOverlay');
                    loadingOverlay.classList.remove('d-none');

                    // Simulate loading time then redirect
                    setTimeout(() => {
                        window.location.href = '{{ route('login') }}';
                    }, 2000);
                }
            });
        })();
    </script>
@endsection
