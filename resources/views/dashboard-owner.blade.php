@extends('layouts.layout-with-sidebar-owner')

@section('content')
    <!-- Notification -->
    @if (request()->get('notification') == 'car_ready')
        <div class="notification-box" id="notificationBox">
            <div class="notification-content">
                <div class="notification-title fw-bold">Thông báo</div>
                <div class="notification-message">Xe của bạn đã sẵn sàng cho thuê</div>
            </div>
        </div>
    @endif
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        <!-- Page Header -->
        <div class="mb-2">
            <span class="fs-3 fs-md-2 fs-lg-1 fw-bold text-dark mb-0">Ví chủ xe</span>
        </div>
        <!-- Wallet Summary Card -->
        <div class=" wallet-summary-card border-0">
            <div class="">
                <div class="card-title d-flex  justify-content-between shadow-sm px-3 py-3" style="height:90px;">
                    <div class="">
                        <img src="{{ asset('/assets/images/money-ic.png') }}" alt="">
                        <div class="fw-bold fs-6 fs-md-5 fs-lg-4 mt-2">
                            <span class="">Tổng số dư</span>
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </div>
                    <div class="card-text mt-auto fw-bold fs-3 fs-md-2 fs-lg-1" style="color:#16A350">1.250.000đ</div>
                </div>
                <div class="d-flex w-100 gap-3 justify-content-between mt-4 mb-3">
                    <div class="d-flex justify-content-start gap-2 p-3 align-items-center w-100 rounded"
                        style="background:#2B4896; color: white; height:72px">
                        <img src="{{ asset('/assets/images/wallet-w.png') }}" alt="">
                        <div class="d-flex flex-column gap-1">
                            <span class="fw-medium">Tiền đầu kì</span>
                            <span class="fw-medium">10.000.000</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start gap-2 p-3 align-items-center w-100 rounded"
                        style="background:#FEBA11; color: black; height:72px">
                        <img src="{{ asset('/assets/images/wallet-b.png') }}" alt="">
                        <div class="d-flex flex-column gap-1">
                            <span class="fw-medium">Tiền cuối kì</span>
                            <span class="fw-medium">5.000.000</span>
                        </div>
                    </div>
                </div>
                <a href="{{ route('tax-info') }}" class="mt-4 text-decoration-none" style="color:#2B4896">
                    Thông tin khai thuế chủ xe
                </a>
            </div>
        </div>
        <!-- Order Overview -->
        <div class="mt-4">
            <div>
                <h5 class="fw-bold text-dark mb-3">Tổng quan đơn hàng</h5>
            </div>
            <div class="row g-3">
                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/car-online.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Đang hoạt động</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">23</span>
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/wait-confirm.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Cần xác nhận</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">15</span>
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/completed-ic.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Đã hoàn thành</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">37</span>
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/cancel-ic.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Đã hủy</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">1</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Overview -->
        <div class="mt-4 mb-5">
            <div>
                <h6 class="fw-bold text-dark mb-3">Dịch vụ</h6>
            </div>
            <div class="row g-3">
                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/car-parking-ic.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Tự lái</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">8</span>
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/have-drive.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Có lái</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">29</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
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

        @media (max-width: 768px) {
            .notification-box {
                top: 80px;
                right: 15px;
            }
        }
    </style>
@endsection
