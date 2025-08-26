

<?php $__env->startSection('content'); ?>
    <div class="container w-100 mt-4" style="max-width: 605px">
        <!-- Header -->
        <div class="d-flex align-items-center mb-4">
            <a href="<?php echo e(route('add-new-car')); ?>" class="text-decoration-none me-3">
                <i class="bi bi-arrow-left fs-4 text-dark"></i>
            </a>
            <span class="mb-0 fw-bold text-dark fs-5 fs-md-3 fs-lg-2">Thêm xe mới</span>
        </div>

        <!-- Title -->
        <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-3">Kiểm tra thiết lập</div>

        <!-- Image slider placeholder -->
        <div class="mb-3">
            <div class="position-relative border rounded-3 overflow-hidden">
                <img src="<?php echo e(asset('/assets/images/check-settings-img.png')); ?>" class="w-100"
                    style="max-height: 260px; object-fit: cover" alt="car">
                <!-- Share icon (top-right) -->
                <button type="button" class="btn btn-sm position-absolute" style="top:8px; right:8px; border-radius:50%">
                    <img src="<?php echo e(asset('/assets/images/share-ic.png')); ?>" alt="share">
                </button>
                <!-- Pagination dots + counter (bottom) -->
                <div class="position-absolute w-100 d-flex justify-content-center" style="bottom: 12px; left:0;">
                    <div class="d-flex align-items-center gap-2">
                        <span class="dot bg-white" style="width:6px;height:6px;border-radius:50%;opacity:.7"></span>
                        <span class="dot bg-white" style="width:6px;height:6px;border-radius:50%;opacity:.7"></span>
                        <span class="dot bg-white" style="width:6px;height:6px;border-radius:50%;opacity:1"></span>
                        <span class="dot bg-white" style="width:6px;height:6px;border-radius:50%;opacity:.7"></span>
                        <span class="dot bg-white" style="width:6px;height:6px;border-radius:50%;opacity:.7"></span>
                    </div>
                </div>
                <span class="position-absolute bottom-0 end-0 bg-dark bg-opacity-50 text-white px-2 py-1 small">1/4</span>
            </div>
        </div>

        <!-- Car summary -->
        <div class="mb-3">
            <div class="d-flex align-items-center gap-2 mb-2">
                <span class="fw-bold fs-3 fs-md-3 fs-lg-6">HUYNDAI ELANTRA 2022</span>
                <i class="bi bi-patch-check-fill text-success"></i>
            </div>
            <div class="d-flex align-items-center gap-2 mb-2">
                <span class="bg-light py-1 fs-6 fw-semibold" style="color:#858585">29U1.334.08</span>
            </div>
            <div class="text-muted small d-flex align-items-center gap-1">
                <i class="bi bi-geo-alt"></i>
                <span>Quận 1, TP Hồ Chí Minh</span>
            </div>
        </div>

        <!-- Price row -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="fw-bold">Giá thuê</div>
            <div class="fw-bold" style="color:#2B4896">1.820.000đ<span class="text-muted small">/ngày</span></div>
        </div>

        <!-- Pickup location input -->
        <div class="mb-4">
            <label class="form-label fw-medium">Địa điểm giao nhận xe</label>
            <div class="d-flex flex-column gap-1 border rounded-3 p-3">
                <div class="fw-bold">Quận 1, Tp Hồ Chí Minh</div>
                <div class="text-muted small">Vị trí chính xác chủ xe sẽ thông báo sau khi thanh toán</div>
            </div>
        </div>

        <!-- Extra info list -->
        <div class="mb-4">
            <div class="fw-bold mb-2">Thông tin bổ sung</div>
            <ul class="list-group ">
                <li class=" py-2 border-0 d-flex justify-content-between align-items-center">
                    <span class="px-0">Tài sản thế chấp</span>
                    <span class="px-0">120.000đ</span>
                </li>
                <hr style="margin:0">
                <li class=" py-2 border-0 d-flex justify-content-between align-items-center">
                    <span class="px-0">Phí quá giờ</span>
                    <span class="px-0">120.000đ</span>
                </li>
                <hr style="margin:0">
                <li class=" py-2 border-0 d-flex justify-content-between align-items-center">
                    <span class="px-0">Phụ phí vệ sinh</span>
                    <span class="px-0">120.000đ</span>
                </li>
                <hr style="margin:0">
                <li class=" py-2 border-0 d-flex justify-content-between align-items-center">
                    <span class="px-0">Phí vượt giới hạn</span>
                    <span class="px-0">120.000đ</span>
                </li>
            </ul>
        </div>

        <div class="mb-4">
            <div class="fw-bold mb-2">Chính sách huỷ chuyến</div>
            <div class="text-muted small">Nếu huỷ chuyến, hãy tham khảo <a href="#" style="color:#2B4896">Chính sách
                    huỷ</a></div>
        </div>

        <!-- Đặc điểm xe -->
        <div class="mb-4">
            <div class="fw-bold mb-2">Đặc điểm xe</div>
            <div class="row text-center g-3">
                <div class="col-3">
                    <img src="<?php echo e(asset('/assets/images/icon-transmission.png')); ?>" alt="" class="mb-2">
                    <div class="text-muted small">Truyền động</div>
                    <div class="fw-semibold">Số sàn</div>
                </div>
                <div class="col-3">
                    <img src="<?php echo e(asset('/assets/images/icon-seat.png')); ?>" alt="" class="mb-2">
                    <div class="text-muted small">Số ghế</div>
                    <div class="fw-semibold">4 chỗ</div>
                </div>
                <div class="col-3">
                    <img src="<?php echo e(asset('/assets/images/icon-fuel.png')); ?>" alt="" class="mb-2">
                    <div class="text-muted small">Nhiên liệu</div>
                    <div class="fw-semibold">Xăng</div>
                </div>
                <div class="col-3">
                    <img src="<?php echo e(asset('/assets/images/icon-consumption.png')); ?>" alt="" class="mb-2">
                    <div class="text-muted small">Tiêu hao</div>
                    <div class="fw-semibold">5L/100km</div>
                </div>
            </div>
        </div>

        <!-- Giới thiệu xe -->
        <div class="mb-4">
            <div class="fw-bold mb-2">Giới thiệu xe</div>
            <div class="text-muted" style="line-height: 1.6">Hyundai Elantra 2022 trang bị động cơ SmartStream hoàn toàn
                mới
                với 3 tuỳ chọn động cơ gồm 1.6L MPI cho công suất 128 mã lực và mô-men xoắn 155 Nm</div>
        </div>

        <!-- Các tiện nghi -->
        <div class="mb-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="fw-bold">Các tiện nghi trên xe</div>
                <a href="#" class="text-decoration-none" style="color:#2B4896">Xem thêm <i
                        class="bi bi-chevron-right"></i></a>
            </div>
            <div class="row g-3">
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-19.png')); ?>" alt=""> Bản đồ</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-21.png')); ?>" alt=""> Bluetooth</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-24.png')); ?>" alt=""> Camera 360</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-25.png')); ?>" alt=""> Camera cập lề</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-26.png')); ?>" alt=""> Camera lùi</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-22.png')); ?>" alt=""> Cảm biến lốp</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-27.png')); ?>" alt=""> Cảm biến va chạm</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-28.png')); ?>" alt=""> Cảnh báo tốc độ</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-29.png')); ?>" alt=""> Cửa sổ trời</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-34.png')); ?>" alt=""> Định vị GPS</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-30.png')); ?>" alt=""> Khe cắm USB</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-31.png')); ?>" alt=""> Lốp dự phòng</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-20.png')); ?>" alt=""> Túi khí an toàn</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-32.png')); ?>" alt=""> Màn hình DVD</div>
                <div class="col-6 col-lg-4 d-flex align-items-center gap-3"><img
                        src="<?php echo e(asset('/assets/images/ic-23.png')); ?>" alt=""> ETC</div>
                <div class="col-12 d-flex align-items-center gap-2"><img src="<?php echo e(asset('/assets/images/ic-33.png')); ?>"
                        alt=""> Camera hành trình</div>
            </div>
        </div>

        <!-- Action buttons -->
        <div class="d-flex justify-content-end gap-3">
            <button type="button" class="btn-back px-4"
                style="background-color: #fff; color: #2B4896; border-radius: 8px; border: 1px solid #2B4896; padding: 10px 20px;">Quay
                lại</button>
            <button type="button" id="confirmAddCar" class="btn-continue px-4"
                style="background-color: #2B4896; color: #fff; border-radius: 8px; border: none; padding: 10px 20px;">Xác
                nhận</button>
        </div>
    </div>

    <!-- Loading Overlay -->
    <div id="loadingOverlay" class="loading-overlay" style="display: none;">
        <div class="loading-container">
            <div class="loading-spinner">
                <div class="spinner-segment"></div>
                <div class="spinner-segment"></div>
                <div class="spinner-segment"></div>
                <div class="spinner-segment"></div>
                <div class="spinner-segment"></div>
                <div class="spinner-segment"></div>
                <div class="spinner-segment"></div>
                <div class="spinner-segment"></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<style>
    @media (max-width: 768px) {
        .btn-back {
            width: 100%;
        }

        .btn-continue {
            width: 100%;
        }
    }

    /* Loading Overlay Styles */
    .loading-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        backdrop-filter: blur(4px);
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loading-container {
        background: white;
        border-radius: 12px;
        padding: 40px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loading-spinner {
        width: 40px;
        height: 40px;
        position: relative;
        animation: spin 1s linear infinite;
    }

    .spinner-segment {
        position: absolute;
        width: 4px;
        height: 12px;
        background: #6c757d;
        border-radius: 2px;
        left: 50%;
        transform-origin: 2px 20px;
    }

    .spinner-segment:nth-child(1) {
        transform: translate(-50%, -50%) rotate(0deg);
        opacity: 1;
    }

    .spinner-segment:nth-child(2) {
        transform: translate(-50%, -50%) rotate(45deg);
        opacity: 0.8;
    }

    .spinner-segment:nth-child(3) {
        transform: translate(-50%, -50%) rotate(90deg);
        opacity: 0.6;
    }

    .spinner-segment:nth-child(4) {
        transform: translate(-50%, -50%) rotate(135deg);
        opacity: 0.4;
    }

    .spinner-segment:nth-child(5) {
        transform: translate(-50%, -50%) rotate(180deg);
        opacity: 0.2;
    }

    .spinner-segment:nth-child(6) {
        transform: translate(-50%, -50%) rotate(225deg);
        opacity: 0.1;
    }

    .spinner-segment:nth-child(7) {
        transform: translate(-50%, -50%) rotate(270deg);
        opacity: 0.05;
    }

    .spinner-segment:nth-child(8) {
        transform: translate(-50%, -50%) rotate(315deg);
        opacity: 0.02;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var confirmBtn = document.getElementById('confirmAddCar');
        var loadingOverlay = document.getElementById('loadingOverlay');

        if (confirmBtn) {
            confirmBtn.addEventListener('click', function() {
                // Show loading overlay
                if (loadingOverlay) {
                    loadingOverlay.style.display = 'flex';
                }

                // Simulate loading time (2 seconds)
                setTimeout(function() {
                    try {
                        sessionStorage.setItem('carAddedSuccess', '1');
                    } catch (e) {}
                    window.location.href = "<?php echo e(route('car-list')); ?>";
                }, 2000);
            });
        }
    });
</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/check-settings.blade.php ENDPATH**/ ?>