@extends('layouts.app')

@section('title', 'Search - Laravel Demo Application')

@section('content')
    <!-- Search Form Section -->
    <!-- Desktop Layout -->
    <div class="container py-4 d-none d-lg-block" style="max-width:100%">
        <div class="bg-white p-2">
            <div class="d-flex align-items-center gap-4">
                <!-- Left Section: Input Fields -->
                <div class="d-flex border rounded p-3 flex-grow-1 gap-4">
                    <!-- Location Input -->
                    <div class="d-flex align-items-center flex-grow-1 gap-2">
                        <img src="{{ asset('assets/images/location-01.png') }}" alt="Line" class="img-fluid"
                            style="width:24px; height:24px">
                        <div class="flex-grow-1">
                            <div class="small text-muted mb-1">Địa điểm</div>
                            <div class="fw-bold text-dark">TP.Hồ Chí Minh, Việt Nam</div>
                        </div>
                    </div>

                    <!-- Rental Time Input -->
                    <div class="d-flex align-items-center flex-grow-1 px-2 gap-2" style="border-left:dashed 1px #E7E5E4">
                        <img src="{{ asset('assets/images/calendar-03.png') }}" alt="Line" class="img-fluid"
                            style="width:24px; height:24px">
                        <div class="flex-grow-1">
                            <div class="small text-muted mb-1">Thời gian thuê</div>
                            <div class="fw-bold text-dark">21:00 T7/12/04 - 20:00 CN/13/04</div>
                        </div>
                    </div>
                </div>

                <!-- Right Section: Buttons -->
                <div class="d-flex gap-3">
                    <!-- Primary Button: Find Car -->
                    <button class="btn btn-warning fw-bold px-4 py-3 rounded" style="min-width: 120px;height:78px">
                        Tìm xe
                    </button>

                    <!-- Secondary Button: Advanced Search -->
                    <a href="{{ route('search-higher') }}"
                        class="btn btn-outline-primary fw-bold px-4 py-3 rounded text-decoration-none d-flex align-items-center justify-content-center"
                        style="min-width: 160px;border:solid 1px #2B4896;height:78px">
                        Tìm kiếm nâng cao
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Layout -->
    <div class="container py-3 d-block d-lg-none">
        <div class="bg-white">
            <div class="border rounded p-3 mb-3 mt-3">
                <!-- Location Input -->
                <div class="d-flex align-items-center gap-3 mb-3">
                    <img src="{{ asset('assets/images/location-01.png') }}" alt="Location" class="img-fluid">
                    <div class="flex-grow-1">
                        <div class="small text-muted mb-1">Địa điểm</div>
                        <div class="fw-bold text-dark">TP.Hồ Chí Minh, Việt Nam</div>
                    </div>
                </div>

                <!-- Divider -->
                <div class="dashed-line my-3"></div>

                <!-- Rental Time Input -->
                <div class="d-flex align-items-center gap-3 mb-4">
                    <img src="{{ asset('assets/images/calendar-03.png') }}" alt="Calendar" class="img-fluid">
                    <div class="flex-grow-1">
                        <div class="small text-muted mb-1">Thời gian thuê</div>
                        <div class="fw-bold text-dark">21:00 T7/12/04 - 20:00 CN/13/04</div>
                    </div>
                </div>
            </div>

            <!-- Buttons Stacked -->
            <div class="d-flex flex-column gap-3">
                <!-- Primary Button: Find Car -->
                <button class="btn btn-warning fw-bold py-3 rounded w-100" style="height:68px">
                    Tìm xe
                </button>

                <!-- Secondary Button: Advanced Search -->
                <a href="{{ route('search-higher') }}"
                    class="btn btn-outline-primary fw-bold py-3 rounded w-100 text-decoration-none d-flex align-items-center justify-content-center"
                    style="border:solid 1px #2B4896;height:68px">
                    Tìm kiếm nâng cao
                </a>
            </div>
        </div>
    </div>

    <!-- Tag Car Search -->
    <div class="container py-4 d-flex justify-content-center">
        <div class="d-flex align-items-center gap-2 overflow-x-auto"
            style="scrollbar-width: none; -ms-overflow-style: none; width: 82%;">
            <!-- Refresh Button -->
            <button class="btn btn-light rounded-circle d-flex align-items-center justify-content-center"
                style="width: 40px; height: 40px; min-width: 40px;">
                <img src="{{ asset('/assets/images/resets.png') }}" alt="">
            </button>

            <!-- 5 Star Filter (Selected) -->
            <button class="btn text-white fw-medium px-3 py-2 rounded-4 d-flex align-items-center gap-2"
                style="background-color: #233876; min-width: fit-content;">
                <i class="bi bi-star-fill"></i>
                <span>5 sao</span>
            </button>

            <!-- Delivery Filter -->
            <button class="btn btn-light fw-medium px-3 py-2 rounded-4 d-flex align-items-center gap-2"
                style="min-width: fit-content;">
                <img src="{{ asset('/assets/images/car-nomarl.png') }}" alt="">
                <span class="text-muted">Giao xe tận nơi</span>
            </button>

            <!-- Discount Filter -->
            <button class="btn btn-light fw-medium px-3 py-2 rounded-4 d-flex align-items-center gap-2"
                style="min-width: fit-content;">
                <img src="{{ asset('/assets/images/discount.png') }}" alt="">
                <span class="text-muted">Giảm giá</span>
            </button>

            <!-- OTOD Recommended Filter -->
            <button class="btn btn-light fw-medium px-3 py-2 rounded-4 d-flex align-items-center gap-2"
                style="min-width: fit-content;">
                <img src="{{ asset('/assets/images/car-rcmd.png') }}" alt="">
                <span class="text-muted">Xe OTOD đề xuất</span>
            </button>

            <!-- Luxury Car Filter -->
            <button class="btn btn-light fw-medium px-3 py-2 rounded-4 d-flex align-items-center gap-2"
                style="min-width: fit-content;">
                <img src="{{ asset('/assets/images/car-vip.png') }}" alt="">
                <span class="text-muted">Xe cao cấp</span>
            </button>

            <!-- Mid-range Car Filter -->
            <button class="btn btn-light fw-medium px-3 py-2 rounded-4 d-flex align-items-center gap-2"
                style="min-width: fit-content;">
                <img src="{{ asset('/assets/images/car-high.png') }}" alt="">
                <span class="text-muted">Xe trung cấp</span>
            </button>

            <!-- SUV Filter -->
            <button class="btn btn-light fw-medium px-3 py-2 rounded-4 d-flex align-items-center gap-2"
                style="min-width: fit-content;">
                <i class="bi bi-truck text-muted"></i>
                <span class="text-muted">SUV</span>
            </button>
        </div>
    </div>

    <!-- Banner Section -->
    <div class="container mb-4 d-none d-lg-block">
        <div class="card card-border rounded-4 overflow-hidden position-relative" style="height: 347px;">
            <!-- Background image -->
            <img src="{{ asset('assets/images/finance.png') }}" class="position-absolute w-100 h-100 object-fit-cover"
                alt="Car interior at night">

            <!-- Blue overlay on the left -->
            <div class="position-absolute start-0 top-0 h-100 d-flex flex-column justify-content-start p-4"
                style="width: 45%; background: linear-gradient(to left, rgba(43, 72, 150, 0) 0%, rgba(43, 72, 150, 1) 100%);">

                <!-- Logo OTOD -->
                <div class="mb-4">
                    <img src="{{ asset('/assets/images/logo-white.png') }}" alt="Logo" class="img-fluid"
                        style="max-height: 40px;">
                </div>

                <!-- Main title -->
                <h2 class="text-white fw-bold mb-4" style="font-size: 2.2rem; line-height: 1.2;">
                    Tăng thu nhập với chiếc<br>xe của bạn
                </h2>

                <!-- CTA Button -->
                <a href="#" class="text-warning fw-bold text-decoration-none d-inline-flex align-items-center gap-2"
                    style="font-size: 1.1rem;">
                    Đăng ký ngay
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Banner Section -->
    <div class="container d-block d-lg-none mb-4">
        <div class="card card-border w-100 rounded-4 mt-4 overflow-hidden position-relative" style="height: 180px;">
            <!-- Background image -->
            <img src="{{ asset('assets/images/finance.png') }}" class="position-absolute w-100 h-100 object-fit-cover"
                alt="Car interior at night">

            <!-- Blue overlay on the left -->
            <div class="position-absolute start-0 top-0 h-100 d-flex flex-column justify-content-start p-4"
                style="width: 80%; background: linear-gradient(to left, rgba(43, 72, 150, 0) 0%, rgba(43, 72, 150, 1) 100%);">

                <!-- Logo OTOD -->
                <div class="mb-4">
                    <img src="{{ asset('/assets/images/logo-white.png') }}" alt="Logo" class="img-fluid"
                        style="max-height: 40px;">
                </div>

                <!-- Main title -->
                <h2 class="text-white fw-bold mb-4" style="font-size: 0.75rem; line-height: 1.2;">
                    Tăng thu nhập với chiếc<br>xe của bạn
                </h2>

                <!-- CTA Button -->
                <a href="#" class="text-warning fw-bold text-decoration-none d-inline-flex align-items-center gap-2"
                    style="font-size: 0.75rem;">
                    Đăng ký ngay
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Products Search -->
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <span class="fw-bold mb-0 fs-3 fs-md-2 fs-lg-1">Hơn 50 xe có sẵn</span>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
            <div>
                @include('components.product-recomend', [
                    'name' => 'Kia Rio 2015',
                    'rating' => '4.0',
                    'location' => 'Quận 1, TP Hồ Chí Minh',
                    'image' => asset('assets/images/product-rcm.png'),
                    'old_price' => '976.000đ',
                    'price' => '856.000đ',
                ])
            </div>
            <div>
                @include('components.product-recomend', [
                    'name' => 'Kia Rio 2015',
                    'rating' => '4.0',
                    'location' => 'Quận 1, TP Hồ Chí Minh',
                    'image' => asset('assets/images/product-rcm.png'),
                    'old_price' => '976.000đ',
                    'price' => '856.000đ',
                ])
            </div>
            <div>
                @include('components.product-recomend', [
                    'name' => 'Kia Rio 2015',
                    'rating' => '4.0',
                    'location' => 'Quận 1, TP Hồ Chí Minh',
                    'image' => asset('assets/images/product-rcm.png'),
                    'old_price' => '976.000đ',
                    'price' => '856.000đ',
                ])
            </div>
            <div>
                @include('components.product-recomend', [
                    'name' => 'Kia Rio 2015',
                    'rating' => '4.0',
                    'location' => 'Quận 1, TP Hồ Chí Minh',
                    'image' => asset('assets/images/product-rcm.png'),
                    'old_price' => '976.000đ',
                    'price' => '856.000đ',
                ])
            </div>
            <div>
                @include('components.product-recomend', [
                    'name' => 'Kia Rio 2015',
                    'rating' => '4.0',
                    'location' => 'Quận 1, TP Hồ Chí Minh',
                    'image' => asset('assets/images/product-rcm.png'),
                    'old_price' => '976.000đ',
                    'price' => '856.000đ',
                ])
            </div>
            <div>
                @include('components.product-recomend', [
                    'name' => 'Kia Rio 2015',
                    'rating' => '4.0',
                    'location' => 'Quận 1, TP Hồ Chí Minh',
                    'image' => asset('assets/images/product-rcm.png'),
                    'old_price' => '976.000đ',
                    'price' => '856.000đ',
                ])
            </div>
            <div>
                @include('components.product-recomend', [
                    'name' => 'Kia Rio 2015',
                    'rating' => '4.0',
                    'location' => 'Quận 1, TP Hồ Chí Minh',
                    'image' => asset('assets/images/product-rcm.png'),
                    'old_price' => '976.000đ',
                    'price' => '856.000đ',
                ])
            </div>
            <div>
                @include('components.product-recomend', [
                    'name' => 'Kia Rio 2015',
                    'rating' => '4.0',
                    'location' => 'Quận 1, TP Hồ Chí Minh',
                    'image' => asset('assets/images/product-rcm.png'),
                    'old_price' => '976.000đ',
                    'price' => '856.000đ',
                ])
            </div>
            <div>
                @include('components.product-recomend', [
                    'name' => 'Kia Rio 2015',
                    'rating' => '4.0',
                    'location' => 'Quận 1, TP Hồ Chí Minh',
                    'image' => asset('assets/images/product-rcm.png'),
                    'old_price' => '976.000đ',
                    'price' => '856.000đ',
                ])
            </div>
        </div>
    </div>
@endsection

<style>
    .dashed-line {
        height: 1px;
        background: repeating-linear-gradient(to right,
                #ddd 0,
                #ddd 6px,
                transparent 6px,
                transparent 12px);
    }
</style>
