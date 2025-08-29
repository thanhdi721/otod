<div class="px-3">
    <div class="input-group mb-3 shadow-sm">
        <span class="input-group-text bg-white border-end-0 rounded-start-4"><i class="bi bi-search"></i></span>
        <input type="text" class="form-control bg-white border-start-0 rounded-end-4" placeholder="Search">
    </div>

    <ul class="list-group list-group-flush mb-3">
        <li class="list-group-item border-0"><a class="text-decoration-none text-dark" href="<?php echo e(route('home')); ?>">Trang chủ</a></li>
        <li class="list-group-item border-0"><a class="text-decoration-none text-dark" href="<?php echo e(route('home')); ?>">Tin tức</a></li>
        <li class="list-group-item border-0"><a class="text-decoration-none text-dark" href="<?php echo e(route('verification')); ?>">Trở thành chủ xe</a></li>
        <li class="list-group-item border-0"><a class="text-decoration-none text-dark" href="<?php echo e(route('car-zip')); ?>">Carzip</a></li>
        <li class="list-group-item border-0"><a class="text-decoration-none text-dark" href="<?php echo e(route('home')); ?>">Liên hệ</a></li>
    </ul>

    <div class="list-group list-group-flush border rounded-4 shadow-sm overflow-hidden">
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('dashboard-owner')); ?>">
            <i class="bi bi-house-door text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Dashboard</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('car-list')); ?>">
            <i class="bi bi-car-front text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Danh sách xe</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('orders')); ?>">
            <i class="bi bi-receipt text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Đơn hàng</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('look-up-fines')); ?>">
            <i class="bi bi-file-earmark-ruled text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Tra cứu phạt nguội</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('vetc')); ?>">
            <i class="bi bi-credit-card text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">VETC</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
    </div>

    <div class="mt-3 mx-3">
        <a class="d-flex align-items-center text-danger text-decoration-none py-2" href="#">
            <i class="bi bi-box-arrow-right me-3 fs-5"></i>
            <span>Đăng xuất</span>
        </a>
    </div>
</div>


<?php /**PATH D:\Source Web\otod-github\otod\resources\views/layouts/drawer-default.blade.php ENDPATH**/ ?>