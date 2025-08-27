

<?php $__env->startSection('content'); ?>
    <div class="container w-100 mt-4" style="max-width: 800px">
        <!-- Header Page -->
        <div class="d-flex justify-content-start align-items-center mb-4">
            <h1 class="fw-bold fs-lg-6 fs-md-5 fs-4 mb-0">Đơn hàng</h1>
        </div>

        <!-- Navigation Tabs -->
        <div class="d-flex gap-2 mb-4">
            <button style="background-color: #2B4896; border:0; color: #fff;" class="  px-4 py-2 rounded-pill active"
                data-tab-btn="active" onclick="switchTab('active', event)">Đang hoạt
                động</button>
            <button style="border:0" class=" px-4 py-2 rounded-pill" data-tab-btn="history"
                onclick="switchTab('history', event)">Lịch sử</button>
        </div>

        <!-- Orders List: Active -->
        <div class="orders-container orders-active">
            <!-- Order Card 1: Pending Confirmation -->
            <div class="order-card mb-3">
                <div class="card border-0 shadow-sm p-3">
                    <!-- Header with time -->
                    <div
                        class="order-header rounded-4 bg-primary text-white d-flex justify-content-center align-items-center px-3 py-2">
                        <div class="d-flex align-items-center justify-content-center gap-2">
                            <img src="<?php echo e(asset('/assets/images/stop-clock-ic.png')); ?>" alt="Avatar"
                                class="rounded-circle">
                            <span>10:20</span>
                        </div>
                    </div>

                    <div class="card-body p-3">
                        <!-- Renter Info -->
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <img src="<?php echo e(asset('/assets/images/avatar.png')); ?>" alt="Avatar" class="rounded-circle"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <div class="info-orders d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <h6 class="fw-bold mb-0">Nguyễn Bích Trâm</h6>
                                    <span class="badge bg-warning text-dark px-2 py-1 rounded small">Chờ xác
                                        nhận</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 text-muted small">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Quận 1, TP Hồ Chí Minh</span>
                                </div>
                            </div>
                        </div>

                        <!-- Car Details -->
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img src="<?php echo e(asset('/assets/images/car-station.png')); ?>" alt="Kia Rio" class="rounded"
                                style="width: 46px; height: 46px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <div class="d-flex gap-3">
                                    <h6 class="fw-bold mb-1">Kia Rio 2015</h6>
                                    <div class="text-muted small mb-1">29U1.334.08</div>
                                </div>
                                <div class="d-flex align-items-center gap-1 text-muted small">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span>4</span>
                                    <span>•</span>
                                    <span>500 đánh giá</span>
                                </div>
                                <div class="text-start">
                                    <div class="fw-bold ">856.000₫</div>
                                </div>
                            </div>
                        </div>

                        <!-- Rental Period -->
                        <div class="mb-3">
                            <div class="text-muted small mb-1">Thời hạn thuê</div>
                            <div class="fw-semibold">21:00 04/04/2025 - 21:00 06/04/2025</div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="d-flex gap-2">
                            <button class="btn btn-outline-danger flex-fill">Từ chối</button>
                            <button class="btn btn-primary flex-fill">Xác nhận</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Card 2: Confirmed -->
            <div class="order-card mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-3">
                        <!-- Renter Info -->
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <img src="<?php echo e(asset('/assets/images/avatar.png')); ?>" alt="Avatar" class="rounded-circle"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <div class="info-orders d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <h6 class="fw-bold mb-0">Trần Tuấn</h6>
                                    <span class="badge bg-success text-white px-2 py-1 rounded small">Đã xác
                                        nhận</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 text-muted small">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Quận 1, TP Hồ Chí Minh</span>
                                </div>
                            </div>
                        </div>

                        <!-- Car Details -->
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img src="<?php echo e(asset('/assets/images/merc-car.png')); ?>" alt="Mercedes" class="rounded"
                                style="width: 46px; height: 46px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <div class="d-flex gap-3">
                                    <h6 class="fw-bold mb-1">MERCEDES-BENZ C...</h6>
                                    <div class="text-muted small mb-1">29U1.334.08</div>
                                </div>
                                <div class="text-start">
                                    <div class="fw-bold ">856.000₫</div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <button class="btn btn-sm rounded-circle">
                                    <img src="<?php echo e(asset('/assets/images/phone-ic2.png')); ?>" alt="Avatar">
                                </button>
                                <button class="btn btn-sm rounded-circle">
                                    <img src="<?php echo e(asset('/assets/images/mail-ic.png')); ?>" alt="Avatar">
                                </button>
                            </div>
                        </div>

                        <!-- Rental Period -->
                        <div class="mb-3">
                            <div class="text-muted small mb-1">Thời hạn thuê</div>
                            <div class="fw-semibold">21:00 04/04/2025 - 21:00 06/04/2025</div>
                        </div>

                        <!-- Action Button -->
                        <div class="d-flex justify-content-end">
                            <button class="border-0 rounded text-white px-4 py-2 mt-3"
                                style="background-color: #2B4896;">Giao
                                xe</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Card 3: Rejected -->
            <div class="order-card mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-3">
                        <!-- Renter Info -->
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <img src="<?php echo e(asset('/assets/images/avatar.png')); ?>" alt="Avatar" class="rounded-circle"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <div class="info-orders d-flex align-items-center justify-content-between gap-2 mb-1">
                                    <h6 class="fw-bold mb-0">Nguyễn Bích Trâm</h6>
                                    <span class="badge bg-danger text-white px-2 py-1 rounded small">Đã từ
                                        chối</span>
                                </div>
                                <div class="d-flex align-items-center gap-2 text-muted small">
                                    <i class="bi bi-geo-alt"></i>
                                    <span>Quận 1, TP Hồ Chí Minh</span>
                                </div>
                            </div>
                        </div>

                        <!-- Car Details -->
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img src="<?php echo e(asset('/assets/images/merc-car.png')); ?>" alt="Mitsubishi" class="rounded"
                                style="width: 46px; height: 46px; object-fit: cover;">
                            <div class="flex-grow-1">
                                <div class="flex-grid-car d-flex gap-3">
                                    <h6 class="fw-bold mb-1">MITSUBISHI XPANDER</h6>
                                    <div class="text-muted small mb-1">29U1.334.08</div>
                                </div>
                                <div class="text-start">
                                    <div class="fw-bold">813.000₫</div>
                                </div>
                            </div>

                        </div>

                        <!-- Rental Period -->
                        <div class="mb-3">
                            <div class="text-muted small mb-1">Thời hạn thuê</div>
                            <div class="fw-semibold">21:00 04/04/2025 - 21:00 06/04/2025</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Orders List: History -->
        <div class="orders-container orders-history d-none">
            <!-- History Card 0 -->
            <div class="order-card mb-3">
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body p-0">
                        <div class="p-3">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div>
                                    8h00, 12/4 - 17h00, 14/4
                                </div>
                                <span class="badge bg-success text-white px-2 py-1 rounded small">Đã xác nhận</span>
                            </div>
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <img src="<?php echo e(asset('/assets/images/avatar.png')); ?>" alt="Avatar" class="rounded-circle"
                                    style="width: 50px; height: 50px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <div class="info-orders d-flex align-items-center justify-content-between gap-2 mb-1">
                                        <h6 class="fw-bold mb-0">Nguyễn Bích Trâm</h6>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 text-muted small">
                                        <i class="bi bi-geo-alt"></i>
                                        <span>Quận 1, TP Hồ Chí Minh</span>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex align-items-center gap-2 justify-content-end">
                                <button class="btn btn-sm rounded-circle">
                                    <img src="<?php echo e(asset('/assets/images/phone-ic2.png')); ?>" alt="Avatar">
                                </button>
                                <button class="btn btn-sm rounded-circle">
                                    <img src="<?php echo e(asset('/assets/images/mail-ic.png')); ?>" alt="Avatar">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- History Card 1 -->
            <div class="order-card mb-3">
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body p-0">
                        <div class="p-3">
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <img src="<?php echo e(asset('/assets/images/avatar.png')); ?>" alt="Avatar"
                                    class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <div class="info-orders d-flex align-items-center justify-content-between gap-2 mb-1">
                                        <h6 class="fw-bold mb-0">Nguyễn Bích Trâm</h6>
                                        <span class="badge bg-success text-white px-2 py-1 rounded small">Đã xác
                                            nhận</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 text-muted small">
                                        <i class="bi bi-geo-alt"></i>
                                        <span>Quận 1, TP Hồ Chí Minh</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <img src="<?php echo e(asset('/assets/images/merc-car.png')); ?>" alt="Kia Rio" class="rounded"
                                    style="width: 46px; height: 46px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <div class="d-flex gap-3">
                                        <h6 class="fw-bold mb-1">Kia Rio 2015</h6>
                                        <div class="text-muted small mb-1">29U1.334.08</div>
                                    </div>
                                    <div class="text-start">
                                        <div class="fw-bold ">856.000₫</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm rounded-circle">
                                        <img src="<?php echo e(asset('/assets/images/phone-ic2.png')); ?>" alt="Avatar">
                                    </button>
                                    <button class="btn btn-sm rounded-circle">
                                        <img src="<?php echo e(asset('/assets/images/mail-ic.png')); ?>" alt="Avatar">
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="text-muted small mb-2">Thời hạn thuê</div>
                                <div class="fw-semibold">21:00 02/04/2025 - 21:00 04/04/2025</div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="border-0 rounded text-white px-4 py-2 mt-3"
                                    style="background-color: #2B4896;">Giao xe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- History Card 2 -->
            <div class="order-card mb-3">
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body p-0">
                        <div class="p-3">
                            <div class="d-flex align-items-start gap-3 mb-3">
                                <img src="<?php echo e(asset('/assets/images/avatar.png')); ?>" alt="Avatar"
                                    class="rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <div class="info-orders d-flex align-items-center justify-content-between gap-2 mb-1">
                                        <h6 class="fw-bold mb-0">Nguyễn Bích Trâm</h6>
                                        <span class="badge bg-success text-white px-2 py-1 rounded small">Đã xác
                                            nhận</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 text-muted small">
                                        <i class="bi bi-geo-alt"></i>
                                        <span>Quận 1, TP Hồ Chí Minh</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <img src="<?php echo e(asset('/assets/images/merc-car.png')); ?>" alt="Kia Rio" class="rounded"
                                    style="width: 46px; height: 46px; object-fit: cover;">
                                <div class="flex-grow-1">
                                    <div class="d-flex gap-2">
                                        <h6 class="fw-bold mb-1">Kia Rio 2015</h6>
                                        <div class="text-muted small mb-1">29U1.334.08</div>
                                    </div>
                                    <div class="text-start">
                                        <div class="fw-bold ">856.000₫</div>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center gap-2">
                                    <button class="btn btn-sm rounded-circle">
                                        <img src="<?php echo e(asset('/assets/images/phone-ic2.png')); ?>" alt="Avatar">
                                    </button>
                                    <button class="btn btn-sm rounded-circle">
                                        <img src="<?php echo e(asset('/assets/images/mail-ic.png')); ?>" alt="Avatar">
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="text-muted small mb-1">Thời hạn thuê</div>
                                <div class="fw-semibold">21:00 02/04/2025 - 21:00 04/04/2025</div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="border-0 rounded text-white px-4 py-2 mt-3"
                                    style="background-color: #2B4896;">Giao xe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function applyTabStyle(button, {
            active
        }) {
            if (active) {
                button.style.backgroundColor = '#2B4896';
                button.style.color = '#ffffff';
                button.style.border = '0';
            } else {
                button.style.backgroundColor = 'transparent';
                button.style.color = '#212529';
                button.style.border = '0';
            }
        }

        function switchTab(tab, event) {
            const btnActive = document.querySelector('[data-tab-btn="active"]');
            const btnHistory = document.querySelector('[data-tab-btn="history"]');

            // Apply inline styles instead of Bootstrap classes
            applyTabStyle(btnActive, {
                active: tab === 'active'
            });
            applyTabStyle(btnHistory, {
                active: tab === 'history'
            });

            document.querySelector('.orders-active').classList.toggle('d-none', tab !== 'active');
            document.querySelector('.orders-history').classList.toggle('d-none', tab !== 'history');
        }

        document.addEventListener('DOMContentLoaded', function() {
            try {
                var confirmFlag = sessionStorage.getItem('orderConfirmSuccess');
                var rejectFlag = sessionStorage.getItem('orderRejectSuccess');
                if (confirmFlag === '1' || rejectFlag === '1') {
                    switchTab('history');
                    var toast = document.createElement('div');
                    toast.className = 'position-fixed';
                    toast.style.top = '16px';
                    toast.style.right = '16px';
                    toast.style.zIndex = '1080';
                    var message = confirmFlag === '1' ? 'Xác nhận đơn hàng thành công' : 'Đã từ chối đơn hàng';
                    toast.innerHTML =
                        '<div class="border border-success rounded-3 p-3" style="min-width:280px;background-color:#F0FDF5; box-shadow:0 4px 12px rgba(0,0,0,.08)">\
                                                                                                                                                                            <div class="fw-semibold mb-1" style="color:#198754">Thông báo</div>\
                                                                                                                                                                            <div class="text-muted">' +
                        message +
                        '</div>\
                                                                                                                                                                        </div>';
                    document.body.appendChild(toast);
                    setTimeout(function() {
                        toast.remove();
                    }, 4000);
                    sessionStorage.removeItem('orderConfirmSuccess');
                    sessionStorage.removeItem('orderRejectSuccess');
                } else {
                    // Ensure correct initial inline styling on first load
                    switchTab('active');
                }
            } catch (e) {}
        });
    </script>

    <style>
        .info-orders {
            width: 50%;
        }

        .order-card .card {
            border-radius: 12px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .order-card .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
        }

        .order-header {
            background: linear-gradient(135deg, #2B4896, #1e3a7a) !important;
        }

        .btn-primary {
            background-color: #2B4896;
            border-color: #2B4896;
        }

        .btn-primary:hover {
            background-color: #1e3a7a;
            border-color: #1e3a7a;
        }

        .btn-outline-danger {
            color: #dc3545;
            border-color: #dc3545;
        }

        .btn-outline-danger:hover {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .badge.bg-warning {
            background-color: #ffc107 !important;
            color: #000 !important;
        }

        .badge.bg-success {
            background-color: #198754 !important;
        }

        .badge.bg-danger {
            background-color: #dc3545 !important;
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 16px;
            }

            .info-orders {
                width: 100%;
            }

            .order-card .card-body {
                padding: 16px;
            }

            .btn {
                padding: 5px !important;
                font-size: 14px;
            }

            .flex-grid-car {
                flex-direction: column;
                gap: 5px !important;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-with-sidebar-owner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/orders.blade.php ENDPATH**/ ?>