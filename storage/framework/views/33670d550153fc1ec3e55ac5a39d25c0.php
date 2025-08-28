

<?php $__env->startSection('content'); ?>
    <div class="container" style="max-width: 920px">
        <div class="py-3">
            <a href="<?php echo e(url()->previous()); ?>" class="text-decoration-none text-dark d-inline-flex align-items-center gap-2">
                <span class="fs-5">←</span>
                <span>Quay về</span>
            </a>
        </div>

        <h4 class="fw-bold mb-3">Ví chủ xe</h4>

        <!-- Số dư -->
        <div class="card shadow-sm border-0 mb-4 ">
            <div class="card-body p-4 d-flex justify-content-between align-items-center">
                <div class="d-flex flex-column align-items-start  gap-3">
                    <div class="wallet-icon rounded-circle d-flex align-items-center justify-content-center">
                        <img src="<?php echo e(asset('/assets/images/money-ic.png')); ?>" alt="Wallet Icon">
                    </div>
                    <a href="#" class="d-flex align-items-center gap-2 text-decoration-none text-dark">
                        <div class="text-muted">Tổng số dư</div>
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
                <div class="fw-semibold text-success fs-3 ">1.250.000đ</div>
            </div>
        </div>
        <div class="d-flex w-100 gap-3 justify-content-between mt-2 mb-2 d-block d-md-none">
            <div class="d-flex justify-content-start gap-2 p-3 align-items-center w-100 rounded"
                style="background:#2B4896; color: white; height:72px">
                <img src="<?php echo e(asset('/assets/images/wallet-w.png')); ?>" alt="">
                <div class="d-flex flex-column gap-1">
                    <span class="fw-medium">Tiền đầu kì</span>
                    <span class="fw-medium">10.000.000</span>
                </div>
            </div>
            <div class="d-flex justify-content-start gap-2 p-3 align-items-center w-100 rounded"
                style="background:#FEBA11; color: black; height:72px">
                <img src="<?php echo e(asset('/assets/images/wallet-b.png')); ?>" alt="">
                <div class="d-flex flex-column gap-1">
                    <span class="fw-medium">Tiền cuối kì</span>
                    <span class="fw-medium">5.000.000</span>
                </div>
            </div>
        </div>

        <!-- Thống kê -->
        <div class="card border-0 shadow-sm mb-4" style="background: #F4F4F4;">
            <div class="card-header bg-white border-0 fw-semibold">Thống kê</div>
            <div class="card-body p-0">
                <ul class="list-group list-group-flush wallet-stats">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Tổng thay đổi – Chuyến đi hoàn thành</span>
                        <span class="text-muted">0đ</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Giao dịch rút/ nộp tiền</span>
                        <span class="text-dark">120.000đ</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Giao dịch huỷ chuyến</span>
                        <span class="text-dark">120.000đ</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Tổng cộng thay đổi trong kì</span>
                        <span class="text-dark">120.000đ</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Tiền cuối kì</span>
                        <span class="text-dark">120.000đ</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>Thu nhập chủ xe</span>
                        <span class="text-dark">120.000đ</span>
                    </li>
                </ul>
                <div class="p-3">
                    <a href="#" class="text-primary text-decoration-none fw-semibold"
                        style=" color: #2B4896 !important; border-radius: 10px;">Xem sao kê giao
                        dịch</a>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <a href="<?php echo e(route('cash-out')); ?>" class="btn btn-primary w-100 py-3 fw-semibold text-decoration-none"
                style="border-radius: 10px; background: #2B4896; color: #fff;">Yêu cầu rút
                tiền</a>
        </div>
    </div>

    <style>
        .wallet-icon {

            font-size: 18px;
        }

        .wallet-stats .list-group-item {
            background: #F7F7F8;
            border: none;
            font-size: 0.95rem;
        }

        .wallet-stats .list-group-item+.list-group-item {
            margin-top: 2px;
        }

        @media (max-width: 576px) {
            .wallet-stats .list-group-item {
                font-size: 0.95rem;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/detail-wallet.blade.php ENDPATH**/ ?>