@extends('layouts.app')

@section('content')
    <div class="container w-100 mt-4" style="max-width: 800px">
        <!-- Header Page -->
        <div class="d-flex justify-content-start align-items-center mb-4">
            <h1 class="fw-bold fs-lg-6 fs-md-5 fs-4 mb-0">Trạm xe</h1>
        </div>
        <!-- Header Banner -->
        <div class="position-relative">
            <div class="banner-container">
                <img class="w-100" src="{{ asset('/assets/images/banner-detail.png') }}" alt="Station Banner"
                    style=" object-fit: cover;">
            </div>

            <!-- Profile Picture Overlay - Separate Container -->
            <div class="profile-picture-overlay">
                <img src="{{ asset('/assets/images/avatar-2.png') }}" alt="Profile" style="border: 4px solid white;">
            </div>
        </div>

        <!-- Provider Information Section -->
        <div class="container mt-4">
            <div class="provider-info">
                <div class="provider-info-header d-flex justify-content-between mb-2">
                    <div class="d-flex flex-column gap-2">
                        <!-- Left side: Name and verification -->
                        <div class="d-flex align-items-center gap-2">
                            <h2 class="fw-bold mb-0">OTOD GOFAR</h2>
                            <i class="bi bi-patch-check-fill text-success fs-4"></i>
                        </div>
                        <!-- Status and trip count -->
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <span class="text-muted">Trạm xe đã xác thực</span>
                            <span class="badge bg-warning text-black px-3 py-2 rounded-pill">39 chuyến xe</span>
                        </div>
                    </div>
                    <!-- Right side: Performance metrics -->
                    <div class="d-flex align-items-center gap-4 mb-3">
                        <div class="text-center">
                            <div class="fw-bold fs-6">5 phút</div>
                            <div class="text-muted small">Thời gian phản hồi</div>
                        </div>
                        <div class="vr"></div>
                        <div class="text-center">
                            <div class="fw-bold fs-6">5 phút</div>
                            <div class="text-muted small">Tỉ lệ đồng ý</div>
                        </div>
                        <div class="vr"></div>
                        <div class="text-center">
                            <div class="fw-bold fs-6">5 phút</div>
                            <div class="text-muted small">Tỉ lệ phản hồi</div>
                        </div>
                    </div>


                </div>


                <!-- Description Banner -->
                <div class="bg-success bg-opacity-10 text-success text-center p-4 rounded-3 mb-4">
                    <p class="mb-0">
                        Trạm xe OTOD GOFAR là đơn vị khai thác cho thuê với sự giám sát trực tiếp của OTOD nhằm mang lại
                        trải nghiệm đồng bộ và tốt nhất cho khách hàng.
                    </p>
                </div>

                <!-- Placeholder Text -->
                <div class="text-muted text-center mb-5">
                    <p>
                        As there are many languages in the World, you can choose from a variety of base texts so you cover
                        not only normal letters but also accents, special characters and other alphabets. texts so you cover
                        not only normal letters but also accents, special characters and other alphabets.
                    </p>
                </div>

                <!-- 4 Car Images Row -->
                <div class="d-flex justify-content-between gap-3 mb-4">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="flex-fill">
                            <img src="{{ asset('/assets/images/car-station.png') }}" alt="Kia Rio"
                                class="img-banner-station w-100 rounded-3" style="height: 184px; object-fit: cover;">
                        </div>
                    @endfor
                </div>

                <!-- Contact Button -->
                <div class="text-center mb-5 d-flex justify-content-center">
                    <button
                        class="btn-contact-station rounded-3 d-flex justify-content-center align-items-center gap-2 py-3 fw-bold">Liên
                        hệ ký gửi</button>
                </div>
            </div>

            <!-- Car Listings Section -->
            <div class="car-listings mb-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-bold fs-lg-7 fs-md-6 fs-5 mb-0">Xe tự lái</h3>
                    <a href="#" class="text-decoration-none text-primary">Xem tất cả (12)</a>
                </div>

                <div class="d-flex flex-column gap-4">
                    @for ($i = 0; $i < 2; $i++)
                        <div class="card border-0 shadow-sm p-3 rounded-3">
                            <div class="d-flex">

                                <!-- Car Image -->
                                <div class="position-relative" style=" flex-shrink: 0;">
                                    <img src="{{ asset('/assets/images/car-station.png') }}" alt="Kia Rio"
                                        style="object-fit: cover; height:102px; width: 102px; border-radius: 12px">
                                    <div class="position-absolute top-0 end-0 m-2">
                                        <img src="{{ asset('/assets/images/heart-ic.png') }}" alt="">
                                    </div>
                                </div>
                                <!-- Car Details -->
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="card-title fw-bold mb-2">Kia Rio 2015</h5>
                                        <div class="d-flex align-items-center gap-2 mb-2">
                                            <i class="bi bi-geo-alt text-muted"></i>
                                            <span class="text-muted">Quận 1, TP Hồ Chí Minh</span>
                                        </div>
                                        <div class="d-flex align-items-center gap-2 mb-3">
                                            <div class="d-flex align-items-center gap-1">
                                                <i class="bi bi-star-fill text-warning"></i>
                                                <span class="fw-bold">4</span>
                                                <span class="text-muted">•</span>
                                                <span class="text-muted small">500 đánh giá</span>
                                            </div>
                                        </div>

                                        <!-- Car Specifications -->
                                        <div class="row car-spe g-2 mb-3">
                                            <div class="col-md-6 col-6">
                                                <img src="{{ asset('/assets/images/icon-transmission.png') }}"
                                                    alt="" style="width: 20px;">
                                                <span class="small">Số tự động</span>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <img src="{{ asset('/assets/images/icon-seat.png') }}" alt=""
                                                    style="width: 20px;">
                                                <span class="small">4 chỗ</span>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <img src="{{ asset('/assets/images/icon-fuel.png') }}" alt=""
                                                    style="width: 20px;">
                                                <span class="small">Xăng</span>
                                            </div>
                                            <div class="col-md-6 col-6">
                                                <img src="{{ asset('/assets/images/icon-consumption.png') }}" alt=""
                                                    style="width: 20px;">
                                                <span class="small">5L/100km</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Pricing and Button -->
                            <div class="d-flex align-items-end justify-content-between">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-1">
                                        <span
                                            class="text-decoration-line-through text-muted fs-6 fs-md-5 fs-lg-4">976.000₫</span>
                                        <span class="fw-bold fs-6 fs-md-5 fs-lg-4">856.000₫/ngày</span>
                                    </div>
                                    <div class="text-muted small">Giá chưa bao gồm VAT</div>
                                </div>
                                <button class="btn btn-primary px-4 py-2 rounded-3"
                                    style="background-color: #2B4896; border-color: #2B4896;">Thuê xe</button>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Customer Reviews Section -->
            <div class="customer-reviews mb-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex flex-column gap-2">
                        <h3 class="fw-bold fs-lg-7 fs-md-6 fs-5 mb-0">Đánh giá của khách thuê</h3>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <span class="text-muted">4 - 500 đánh giá</span>
                        </div>
                    </div>
                    <a href="#" class="text-decoration-none text-primary">Xem tất cả (12)</a>
                </div>

                <div class="row g-3 card-reviews overflow-x-auto"
                    style="scrollbar-width: none; -ms-overflow-style: none;">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="card-reviews-grid col-md-3">
                            <div class=" card-reviews-items card border-0 shadow-sm h-100">
                                <div class="card-body text-center px-2 py-3">
                                    <img src="{{ asset('/assets/images/avatar.png') }}" alt="Avatar"
                                        class="rounded-circle mb-3" style="width: 60px; height: 60px;">
                                    <div class="d-flex justify-content-center gap-1 mb-2">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                    <h6 class="fw-bold small mb-1">Nguyễn Thủy Ngọc Hồng</h6>
                                    <div class="text-muted small">26/07/2021</div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Owner Reviews Section -->
            <div class="owner-reviews mb-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex flex-column gap-2">
                        <h3 class="fw-bold fs-lg-7 fs-md-6 fs-5 mb-0">Đánh giá của chủ xe</h3>
                        <div class="d-flex align-items-center gap-2">
                            <div class="d-flex align-items-center gap-1">
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <span class="text-muted">4 - 500 đánh giá</span>
                        </div>
                    </div>
                    <a href="#" class="text-decoration-none text-primary">Xem tất cả (12)</a>
                </div>

                <div class="row g-3 card-reviews overflow-x-auto"
                    style="scrollbar-width: none; -ms-overflow-style: none;">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="card-reviews-grid col-md-3">
                            <div class=" card-reviews-items  card border-0 shadow-sm h-100">
                                <div class="card-body text-center px-2 py-3">
                                    <img src="{{ asset('/assets/images/avatar.png') }}" alt="Avatar"
                                        class="rounded-circle mb-3" style="width: 60px; height: 60px;">
                                    <div class="d-flex justify-content-center gap-1 mb-2">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <i class="bi bi-star-fill text-warning"></i>
                                    </div>
                                    <h6 class="fw-bold small mb-1">Nguyễn Thủy Ngọc Hồng</h6>
                                    <div class="text-muted small">26/07/2021</div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .banner-container {
        position: relative;
        overflow: hidden;
        border-radius: 12px;
        margin-bottom: 40px;
    }

    .banner-container img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 12px;
    }

    .profile-picture-overlay {
        position: absolute;
        bottom: -40px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 9999 !important;
        pointer-events: none;
        width: 80px;
        height: 80px;
    }

    .profile-picture-overlay img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        border: 4px solid white;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        background-color: white;
        object-fit: cover;
    }

    .provider-info {
        margin-top: 60px;
    }

    .provider-info-header {
        display: flex;
        gap: 5px;
    }

    .card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }



    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
    }

    .btn-contact-station {
        background-color: #2B4896;
        border-color: #2B4896;
        color: white;
        width: 290px;
    }

    .btn-contact-station:hover {
        background-color: #1e3a7a;
        border-color: #1e3a7a;
    }

    .text-primary {
        color: #2B4896 !important;
    }

    .car-spe {
        width: 40%;
    }

    @media (max-width: 768px) {
        .banner-container img {
            height: 200px;
        }

        .card-reviews {
            display: flex !important;
            overflow-x: auto !important;
            scrollbar-width: none !important;
            -ms-overflow-style: none !important;
            flex-wrap: nowrap !important;
            gap: 5px !important;
        }

        .card-reviews-grid {
            flex-shrink: 1 !important;
        }

        .card-reviews-items {
            width: 225px !important;
        }

        .provider-info-header {
            flex-direction: column;
        }

        .btn-contact-station {
            width: 100%;
        }

        .img-banner-station {
            height: 79px !important;
        }

        .car-spe {
            width: 100%;
        }

        .profile-picture-overlay img {
            width: 60px !important;
            height: 60px !important;
        }

        .provider-info {
            margin-top: 40px;
        }
    }
</style>
