@extends('layouts.layout-not-header-footer')

@section('content')
    <div class="container-fluid px-0">
        <div class="row g-0" style="height: 810px;">
            <!-- Hero Section -->
            <div class="col-12 col-lg-6 position-relative hero-section">
                <img src="{{ asset('/assets/images/login-img.jpg') }}" alt="banner" class="object-fit-cover hero-image">
                <div class="position-absolute top-50 start-50 translate-middle text-center text-white hero-logo">
                    <img src="{{ asset('/assets/images/logo-white2.png') }}" alt="OTOD" class="mb-4">
                </div>
                <div class="position-absolute bottom-0 start-0 p-4 p-lg-5 text-white hero-text" style="max-width: 540px;">
                    <div class="d-flex hero-text-element justify-content-start gap-1 mb-2">
                        <img src="{{ asset('/assets/images/pr-ic1.png') }}" alt="OTOD" class="pr-ic">
                        <img src="{{ asset('/assets/images/pr-ic2.png') }}" alt="OTOD" class="pr-ic">
                        <img src="{{ asset('/assets/images/pr-ic3.png') }}" alt="OTOD" class="pr-ic">
                    </div>
                    <div class="fs-3 fw-bold mb-2">Tự lái - Tự do</div>
                    <div class="small text-white-50">Tự tay cầm lái chiếc xe bạn yêu thích cho hành trình thêm hứng khởi.
                    </div>
                </div>
            </div>
            <!-- Right Form -->
            <div class="col-12 col-lg-6 d-flex align-items-center justify-content-center">
                <div class="w-100 form-container">
                    <h3 class="fw-bold mb-2">Đăng ký</h3>
                    <p class="text-muted small mb-4">Gia nhập OTOD để quản lý các chuyến đi của bạn và mở khóa các ưu đãi
                        dành cho khách hàng thân thiết</p>

                    <form id="registerForm" novalidate>
                        <div class="mb-3 form-floating">
                            <input type="tel" class="form-control rounded-3" id="phone" placeholder="Số điện thoại">
                            <label for="phone">Số điện thoại</label>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control rounded-3" id="fullName" placeholder="Họ và tên">
                            <label for="fullName">Họ và tên</label>
                        </div>

                        <div class="mb-3 position-relative form-floating">
                            <input type="password" class="form-control rounded-3" id="password" placeholder="Mật khẩu">
                            <label for="password">Mật khẩu</label>
                            <button class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-muted pe-3"
                                type="button" id="togglePwd" tabindex="-1"><img
                                    src="{{ asset('/assets/images/view.png') }}" alt=""></button>
                        </div>

                        <div class="mb-3 position-relative form-floating">
                            <input type="password" class="form-control rounded-3" id="confirmPassword"
                                placeholder="Xác nhận mật khẩu">
                            <label for="confirmPassword">Xác nhận mật khẩu</label>
                            <button class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-muted pe-3"
                                type="button" id="togglePwd2" tabindex="-1"><img
                                    src="{{ asset('/assets/images/view.png') }}" alt=""></button>
                        </div>

                        <div class="mb-3 form-floating">
                            <input type="text" class="form-control rounded-3" id="refCode"
                                placeholder="Mã giới thiệu (nếu có)">
                            <label for="refCode">Mã giới thiệu (nếu có)</label>
                        </div>

                        <div class="d-flex align-items-center gap-2 mb-3">
                            <input class="form-check-input" type="checkbox" value="1" id="agree">
                            <label class="form-check-label" for="agree">
                                Tôi đã đọc và đồng ý với <a href="{{ route('clause') }}"
                                    class="text-decoration-underline fw-semibold" style="color:#2B4896">Chính
                                    sách & quy định</a> của OTOD
                            </label>
                        </div>

                        <button id="submitBtn" type="button" class="btn w-100 py-3 fw-semibold"
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

        input[type="checkbox"]:checked:before {
            background-color: #2B4896;
            border-color: #2B4896;
            color: #fff;
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
            const pwd2 = document.getElementById('confirmPassword');
            const t1 = document.getElementById('togglePwd');
            const t2 = document.getElementById('togglePwd2');
            const agree = document.getElementById('agree');
            const submit = document.getElementById('submitBtn');

            function toggle(btn, input) {
                btn.addEventListener('click', function() {
                    const isPwd = input.type === 'password';
                    input.type = isPwd ? 'text' : 'password';
                    btn.querySelector('img').src = isPwd ? '{{ asset('/assets/images/view.png') }}' :
                        '{{ asset('/assets/images/view-off.png') }}';
                });
            }
            toggle(t1, pwd);
            toggle(t2, pwd2);

            agree.addEventListener('change', function() {
                submit.disabled = !agree.checked;
                submit.style.background = agree.checked ? '#2B4896' : '#fff';
                submit.style.color = agree.checked ? '#fff' : '#737272';
            });

            submit.addEventListener('click', function() {
                // demo: sau khi hợp lệ chuyển về trang chủ
                window.location.href = '{{ route('home') }}';
            });
        })();
    </script>
@endsection
