

<?php $__env->startSection('content'); ?>
    <div class="container w-100 mt-4" style="max-width: 800px">
        <!-- Back and Title -->
        <div class="d-flex align-items-center gap-3 mb-3">
            <a href="<?php echo e(route('orders')); ?>" class="text-decoration-none text-muted d-inline-flex align-items-center">
                <i class="bi bi-arrow-left"></i>
                <span class="ms-2">Quay về</span>
            </a>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-3">
            <h1 class="fw-bold fs-lg-6 fs-md-5 fs-4 mb-0">Chi tiết đơn hàng</h1>
        </div>

        <!-- Renter Header Card -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body p-3">
                <div class="d-flex align-items-start justify-content-between">
                    <div class="d-flex align-items-start gap-3 w-100">
                        <img src="<?php echo e(asset('/assets/images/avatar.png')); ?>" alt="Avatar" class="rounded-circle"
                            style="width: 56px; height: 56px; object-fit: cover;">
                        <div class="w-100">
                            <div class="d-flex align-items-center gap-2 mb-1 w-100">
                                <h5 class="fw-bold fs-4 fs-md-3 fs-sm-2 mb-0">Nguyễn Bích Trâm</h5>
                                <img src="<?php echo e(asset('/assets/images/completed-ic.png')); ?>" alt="" class="rounded">
                            </div>
                            <div class="card-info-renter d-flex justify-content-between align-items-center gap-2 w-100">
                                <div>
                                    <div class="d-flex align-items-center gap-2 text-muted small">
                                        <i class="bi bi-geo-alt"></i>
                                        <span>Quận 1, TP Hồ Chí Minh</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-1 small mt-1">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <span class="fw-semibold">4</span>
                                        <span class="text-muted">• 500 đánh giá</span>
                                    </div>
                                </div>
                                <div class="btn-view-wrap d-flex align-items-center" style="margin-left:auto">
                                    <button class="btn btn-primary px-4 btn-view-license"
                                        style="white-space: nowrap; width:299px">Xem
                                        GPLX</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Buyer Info Section -->
        <div class="mb-4">
            <h6 class="fw-bold mb-2">Thông tin người thuê xe</h6>
            <div class="text-muted small mb-2">*Các thông tin do OTOD thu thập từ nhiều nguồn, chủ xe dùng để tham khảo.
            </div>
            <div class="list-group rounded-3 overflow-hidden">
                <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span>Sim trùng khớp VNEID</span>
                    <span class="text-success fw-semibold">Có</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span>Tham gia BHXH</span>
                    <span class="text-success fw-semibold">Có</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span>Địa chỉ thường trú</span>
                    <span class="text-muted fw-semibold">Quận 1, TP Hồ Chí Minh</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span>Chủ Doanh Nghiệp</span>
                    <span class="text-success fw-semibold">Có</span>
                </div>
                <div class="list-group-item d-flex justify-content-between align-items-center py-3">
                    <span>Điểm tín dụng</span>
                    <span class="fw-semibold">50/100</span>
                </div>
            </div>
        </div>

        <!-- Time Section -->
        <div class="mb-4">
            <h6 class="fw-bold mb-2">Thời gian thuê xe</h6>
            <div class="card border-0 shadow-sm">
                <div class="card-body p-3">
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <img src="<?php echo e(asset('/assets/images/clock-02.png')); ?>" alt="" class="rounded">
                        <div>
                            <div class="text-muted small">Thời gian thuê xe</div>
                            <div class="fw-semibold">21:00 T4, 09/04 - 20:00 T5, 12/04</div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <img src="<?php echo e(asset('/assets/images/location-03.png')); ?>" alt="" class="rounded">
                        <div>
                            <div class="text-muted small">Địa chỉ</div>
                            <div class="fw-semibold">72 Lê Thánh Tôn, Bến Nghé, Quận 1, Hồ Chí Minh</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Table -->
        <div class="mb-4">
            <h6 class="fw-bold mb-2">Bảng tính giá thuê xe</h6>
            <div class="rounded-3 overflow-hidden" style="background:#F5F6F8">
                <div class="px-3 py-2 small text-muted">Bảng giá tham khảo</div>
                <div class="px-3 py-2 d-flex justify-content-between align-items-center border-top">
                    <span>Đơn giá thuê</span>
                    <span class="text-muted">1.250.000đ/ngày</span>
                </div>
                <div class="px-3 py-2 d-flex justify-content-between align-items-center border-top">
                    <span>Số ngày thuê</span>
                    <span class="text-muted">1 ngày</span>
                </div>
                <div class="px-3 py-2 d-flex justify-content-between align-items-center border-top">
                    <span class="fw-semibold">Doanh thu chủ thuê</span>
                    <span class="fw-semibold">1.250.000đ/ngày</span>
                </div>
                <div class="px-3 py-2 d-flex justify-content-between align-items-center border-top">
                    <span>Hoa hồng giới thiệu</span>
                    <span class="text-danger">-187.500đ</span>
                </div>
                <div class="px-3 py-2 d-flex justify-content-between align-items-center border-top">
                    <span>Khuyến mãi doanh số</span>
                    <span class="text-danger">-74.375đ</span>
                </div>
                <div class="px-3 py-2 d-flex justify-content-between align-items-center border-top">
                    <span>Thu nhập chủ xe</span>
                    <span class="fw-semibold">988.125đ</span>
                </div>
                <div class="px-3 py-2 d-flex justify-content-between align-items-center border-top">
                    <span>Khách thanh toán trực tiếp</span>
                    <span class="fw-semibold">886.122đ</span>
                </div>
                <div class="px-3 py-2 d-flex justify-content-between align-items-center border-top">
                    <span>Tổng cộng chủ xe nhận</span>
                    <span class="fw-bold">102.003đ</span>
                </div>
            </div>
        </div>

        <!-- Footer Actions -->
        <div class="d-flex flex-column gap-3 mt-4">
            <button class="btn btn-save-money d-flex align-items-center justify-content-center gap-2 flex-fill"
                style="background-color: #2B4896; border-color: #2B4896; color: #fff;">
                <img src="<?php echo e(asset('/assets/images/save-money-ic.png')); ?>" alt="" class="rounded">
                <span class="fw-semibold">Thế chấp</span>
            </button>
            <div class="d-flex gap-2 flex-fill justify-content-end">
                <button id="btnRejectOrder" class="btn btn-outline-danger px-4 w-100">Từ chối</button>
                <button id="btnConfirmOrder" class="btn btn-primary px-4 w-100">Xác nhận</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var btnConfirm = document.getElementById('btnConfirmOrder');
            var btnReject = document.getElementById('btnRejectOrder');
            if (btnConfirm) {
                btnConfirm.addEventListener('click', function(e) {
                    try {
                        sessionStorage.setItem('orderConfirmSuccess', '1');
                    } catch (err) {}
                    window.location.href = "<?php echo e(route('orders')); ?>";
                });
            }
            if (btnReject) {
                btnReject.addEventListener('click', function(e) {
                    try {
                        sessionStorage.setItem('orderRejectSuccess', '1');
                    } catch (err) {}
                    window.location.href = "<?php echo e(route('orders')); ?>";
                });
            }
        });
    </script>

    <style>
        .card {
            border-radius: 12px;
        }

        .btn-primary {
            background-color: #2B4896;
            border-color: #2B4896;
        }

        .btn-primary:hover {
            background-color: #1e3a7a;
            border-color: #1e3a7a;
        }

        .list-group-item {
            border-color: #edf0f2;
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 16px;
            }

            .card-info-renter {
                flex-direction: column;
                align-items: flex-start !important;
                gap: 8px;
            }

            .btn-view-wrap {
                width: 100%;
                margin-left: 0 !important;
            }

            .btn-view-license {
                width: 100% !important;
                padding: 12px 16px;
                border-radius: 8px;
                font-weight: 700;
            }

            .btn-save-money {
                justify-content: flex-start !important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-with-sidebar-owner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/order-detail.blade.php ENDPATH**/ ?>