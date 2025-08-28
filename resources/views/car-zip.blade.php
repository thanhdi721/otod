@extends('layouts.app')

@section('title', 'Carzip - Gần kiểm soát, an toàn')

@section('content')
    <div class="container mt-4">
        <!-- Hero Section -->
        <div class="hero-section ">
            <div class="hero-background position-relative ">
                <img src="{{ asset('/assets/images/carzip-banner.png') }}" alt="Car Interior"
                    class="rounded-3 w-100 object-fit-cover" style="height: 347px;">
            </div>
            <div class="container position-relative">
                <div class="hero-content  text-white">
                    <h1 class="hero-title fw-bold mb-3">Carzip</h1>
                    <p class="hero-subtitle fs-5">Gần kiểm soát, an toàn</p>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="features-section py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="feature-item card shadow-sm p-3 mb-4">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center me-3">
                                <img src="{{ asset('/assets/images/ic-carzip1.png') }}" alt="GPS">
                            </div>
                            <div class="feature-content">
                                <h5 class="fw-bold mb-2">GPS Thời gian thực</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-item featur-item-2 card shadow-sm p-3 mb-4">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center me-3">
                                <img src="{{ asset('/assets/images/ic-carzip8.png') }}" alt="Dashboard">
                            </div>
                            <div class="feature-content">
                                <h5 class="fw-bold mb-2">Dashboard điều khiển tập trung</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-item card shadow-sm p-3 mb-4">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center me-3">
                                <img src="{{ asset('/assets/images/ic-carzip2.png') }}" alt="Remote">
                            </div>
                            <div class="feature-content">
                                <h5 class="fw-bold mb-2">Điều khiển tắt/mở xe từ xa</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-item featur-item-2 card shadow-sm p-3 mb-4">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center me-3">
                                <img src="{{ asset('/assets/images/ic-carzip3.png') }}" alt="Warning">
                            </div>
                            <div class="feature-content">
                                <h5 class="fw-bold mb-2">Cảnh báo mở Capo</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-item  card shadow-sm p-3 mb-4">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center me-3">
                                <img src="{{ asset('/assets/images/ic-carzip7.png') }}" alt="Phone">
                            </div>
                            <div class="feature-content">
                                <h5 class="fw-bold mb-2">Điều khiển xe qua app</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-item featur-item-2 card shadow-sm p-3 mb-4">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center me-3">
                                <img src="{{ asset('/assets/images/ic-carzip4.png') }}" alt="Speedometer">
                            </div>
                            <div class="feature-content">
                                <h5 class="fw-bold mb-2">Tốc độ chủ động</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-item card shadow-sm p-3 mb-4">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center me-3">
                                <img src="{{ asset('/assets/images/ic-carzip6.png') }}" alt="Network">
                            </div>
                            <div class="feature-content">
                                <h5 class="fw-bold mb-2">Kết nối API</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature-item  featur-item-2 card shadow-sm p-3 mb-4">
                            <div class="feature-icon d-inline-flex align-items-center justify-content-center me-3">
                                <img src="{{ asset('/assets/images/ic-carzip5.png') }}" alt="Battery">
                            </div>
                            <div class="feature-content">
                                <h5 class="fw-bold mb-2">Pin dự phòng 10000mAH</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Promotional Banner -->
        <div class="promo-banner rounded-3">
            <div class="container ">
                <div class="row align-items-center position-relative">
                    <div class="col-lg-6 col-12" style="padding-top: 20px; padding-bottom: 20px; padding-left: 60px;">
                        <div class="promo-content">
                            <div class="d-flex flex-column mb-3">
                                <img class="mb-2" src="{{ asset('/assets/images/logo-white.png') }}" alt="OTOD"
                                    style="height: 16px; width: 59px;">
                                <h3 class="fw-bold mb-0 text-white">Ưu đãi độc quyền</h3>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="fw-bold text-light text-decoration-line-through">9.000.000đ</span>
                                <div class="price-badge bg-warning d-flex align-items-center px-3 py-2 rounded mb-3">
                                    <span class="fw-bold text-dark">3.900.000đ</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column mb-4 gap-2">
                                <p class="mb-0  text-white">Miễn phí lắp đặt và thuê bao 12 tháng đầu tiên</p>
                                <p class="mb-0  text-white" style="font-size: 12px; letter-spacing: -0.5px;">*Phí thuê bao
                                    từ tháng
                                    13:
                                    100.000đ/tháng</p>
                            </div>
                            <button class="btn btn-outline-warning px-1 py-2 rounded">Đăng ký ngay <i
                                    class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="promo-image position-absolute">
                            <div class="promo-image-content position-relative">
                                <img src="{{ asset('/assets/images/posster-carzip1.png') }}" alt="Promotional Person"
                                    class="img-fluid img-person rounded position-absolute">
                                <img src="{{ asset('/assets/images/ellipse-2.png') }}" alt="Promotional Person"
                                    class="img-fluid img-ellipse-2 rounded position-absolute">
                                <img src="{{ asset('/assets/images/ellipse-3.png') }}" alt="Promotional Person"
                                    class="img-fluid img-ellipse-3 d-block d-lg-none rounded position-absolute">
                                <img src="{{ asset('/assets/images/ellipse-1.png') }}" alt="Promotional Person"
                                    class="img-fluid img-ellipse-1 d-none d-lg-block rounded position-absolute">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Customer Reviews -->
        <div class="reviews-section py-5">
            <div class="container">
                <h2 class="text-center fw-bold mb-5">Khách hàng nói gì về Carzip</h2>
                <div class="row reviews-section-content overflow-x-auto">
                    <div class="col-lg-4 mb-4">
                        <div class="review-card p-4">
                            <div class="d-flex align-items-baseline justify-content-between mb-3 w-100">
                                <div class="d-flex align-items-baseline justify-content-start gap-2 w-100">
                                    <div class="d-flex align-items-center my-auto justify-content-center">
                                        <img src="{{ asset('/assets/images/avatar-2.png') }}" alt="Nguyễn Văn Tuấn"
                                            class="rounded-circle" style="width: 40px; height: 40px;">
                                    </div>
                                    <div class="d-flex flex-column align-items-start w-100">
                                        <div
                                            class="d-flex review-card-content align-items-baseline justify-content-between w-100">
                                            <span class="review-card-title fw-bold mb-2 fs-7 fs-md-6 fs-lg-5">Nguyễn Văn
                                                Tuấn</span>

                                            <div class="d-flex align-items-end ms-3" style="margin-left:0 !important">
                                                <span class="text-muted">Hôm nay</span>
                                            </div>
                                        </div>
                                        <div class="stars">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted">Mình vừa thuê xe tự lái ở đây cuối tuần rồi, phải nói là cực kỳ hài lòng.
                                Xe mới, sạch sẽ, máy móc chạy êm ru. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="review-card p-4">
                            <div class="d-flex align-items-baseline justify-content-between mb-3 w-100">
                                <div class="d-flex align-items-baseline justify-content-start gap-2 w-100">
                                    <div class="d-flex align-items-center my-auto justify-content-center">
                                        <img src="{{ asset('/assets/images/avatar-2.png') }}" alt="Trần Thị Mai"
                                            class="rounded-circle" style="width: 40px; height: 40px;">
                                    </div>
                                    <div class="d-flex flex-column align-items-start w-100">
                                        <div
                                            class="d-flex review-card-content align-items-baseline justify-content-between w-100">
                                            <span class="review-card-title fw-bold mb-2 fs-7 fs-md-6 fs-lg-5">Trần Thị
                                                Mai</span>

                                            <div class="d-flex align-items-end ms-3" style="margin-left:0 !important">
                                                <span class="text-muted">Hôm nay</span>
                                            </div>
                                        </div>
                                        <div class="stars">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted">Mình vừa thuê xe tự lái ở đây cuối tuần rồi, phải nói là cực kỳ hài lòng.
                                Xe mới, sạch sẽ, máy móc chạy êm ru.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="review-card p-4">
                            <div class="d-flex flex-column align-items-start gap-2 mb-3">
                                <div class="d-flex align-items-baseline justify-content-start gap-2 w-100">
                                    <div class="d-flex align-items-center my-auto justify-content-center">
                                        <img src="{{ asset('/assets/images/avatar-2.png') }}" alt="Lê Văn Hùng"
                                            class="rounded-circle" style="width: 40px; height: 40px;">
                                    </div>
                                    <div class=" d-flex flex-column align-items-start w-100">
                                        <div
                                            class="d-flex review-card-content align-items-baseline justify-content-between w-100">
                                            <span class="review-card-title fw-bold mb-2 fs-7 fs-md-6 fs-lg-5">Lê Văn
                                                Hùng</span>

                                            <div class="d-flex align-items-end ms-3" style="margin-left:0 !important">
                                                <span class="text-muted">Hôm nay</span>
                                            </div>
                                        </div>
                                        <div class="stars">
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                            <i class="bi bi-star-fill text-warning"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-muted">Mình vừa thuê xe tự lái ở đây cuối tuần rồi, phải nói là cực kỳ hài lòng.
                                Xe mới, sạch sẽ, máy móc chạy êm ru.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partners Section -->
        <div class="partners-section py-5 bg-light">
            <div class="container">
                <h2 class="text-center fw-bold mb-5">Sự lựa chọn của các đối tác uy tín</h2>
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-3 col-md-6 text-center mb-4">
                        <img src="{{ asset('/assets/images/logo-cz1.png') }}" alt="Partner 1" class="partner-logo">
                    </div>
                    <div class="col-lg-3 col-md-6 text-center mb-4">
                        <img src="{{ asset('/assets/images/logo-cz2.png') }}" alt="Partner 2" class="partner-logo">
                    </div>
                    <div class="col-lg-3 col-md-6 text-center mb-4">
                        <img src="{{ asset('/assets/images/logo-cz3.png') }}" alt="Partner 3" class="partner-logo">
                    </div>
                    <div class="col-lg-3 col-md-6 text-center mb-4">
                        <img src="{{ asset('/assets/images/logo-cz4.png') }}" alt="Partner 4" class="partner-logo">
                    </div>
                </div>
            </div>
        </div>

        <!-- Questions Section -->
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

    <style>
        .hero-content {
            position: absolute;
            bottom: 50px;
            left: 50px;
        }

        .hero-title {
            font-size: 4rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .hero-subtitle {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .feature-item {
            display: flex;
            border: 1px solid #e0e0e0;
            flex-direction: column;
            gap: 15px;
            align-items: flex-start;
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            flex-shrink: 0;
        }

        .bg-purple {
            background-color: #6f42c1 !important;
        }

        .bg-orange {
            background-color: #fd7e14 !important;
        }

        .promo-banner {
            background: linear-gradient(135deg, #2B4896 0%, #1e3a7a 100%);
        }

        .promo-image {
            top: 100%;
            right: 0;
            width: 50%;
            height: 100%;
            object-fit: cover;
        }

        .promo-content {
            padding: 2rem 0;
        }

        .price-badge {
            font-size: 1.2rem;
        }

        .review-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }

        .review-card:hover {
            transform: translateY(-5px);
        }

        .partner-logo {
            max-width: 150px;
            height: auto;
            filter: grayscale(100%);
            transition: filter 0.3s ease;
        }

        .partner-logo:hover {
            filter: grayscale(0%);
        }

        .featur-item-2 {
            margin-top: 40px;
        }

        .img-person {
            height: 347px;
            z-index: 50;
            bottom: 0;
            left: 20%;
        }

        .img-ellipse-1 {
            z-index: 2;
            bottom: 0;
            right: 0;
        }

        .img-ellipse-2 {
            z-index: 3;
            left: 20%;
            bottom: 0;
        }

        .px-lg-200 {
            padding: 0px 200px;
        }


        @media (max-width: 768px) {
            .px-lg-200 {
                padding: 0px 0px;
            }

            .featur-item-2 {
                margin-top: 0px !important;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .hero-section {
                height: 50vh;
            }

            .feature-item {
                margin-bottom: 2rem;
            }

            .promo-content {
                margin-bottom: 2rem;
                height: 360px !important;
            }

            .promo-image {
                bottom: 0;
                width: 60%;
                right: 0;
            }

            .img-person {
                height: 150px !important;
                right: 20% !important;
            }

            .img-ellipse-3 {
                right: 11px;
                bottom: 0;
                height: 200px;
            }

            .img-ellipse-2 {
                left: 20%;
                height: 80px;
                width: 50%;
            }

            .reviews-section-content {
                width: 100% !important;
                position: relative;
                overflow-x: auto !important;
                overflow-y: hidden !important;
                display: flex !important;
                gap: 12px !important;
                flex-wrap: nowrap !important;
                -webkit-overflow-scrolling: touch;
                scroll-snap-type: x mandatory;
                scrollbar-width: none;
                -ms-overflow-style: none;
                touch-action: pan-x;
                padding-bottom: 4px;
            }

            .reviews-section-content::-webkit-scrollbar {
                display: none;
            }

            .reviews-section-content>.col-lg-4,
            .reviews-section-content>[class^="col-"],
            .reviews-section-content>[class*=" col-"] {
                flex: 0 0 auto !important;
                width: auto !important;
                max-width: none !important;
                min-width: 260px;
                scroll-snap-align: start;
                padding-right: 8px;
                padding-left: 8px;
            }

            .review-card {
                width: 260px !important;
                padding: 12px !important;
            }

            .review-card-content {
                flex-direction: column !important;
            }

            .review-card-title {
                margin-bottom: 0 !important;
            }
        }
    </style>
@endsection
