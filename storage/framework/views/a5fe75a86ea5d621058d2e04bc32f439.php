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
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('profile')); ?>">
            <i class="bi bi-person text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Thông tin cá nhân</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('car-rental-history')); ?>">
            <i class="bi bi-clock-history text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Lịch sử thuê xe</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('favorites')); ?>">
            <i class="bi bi-heart text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Yêu thích</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('discounts-and-gifts')); ?>">
            <i class="bi bi-ticket-perforated text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Mã giảm giá & quà tặng</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('refer')); ?>">
            <i class="bi bi-gift text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Cho thuê & tăng thu nhập</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('gifts')); ?>">
            <i class="bi bi-box-seam text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Quà của tôi</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('verification')); ?>">
            <i class="bi bi-shield-check text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Xác thực thông tin</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="#">
            <i class="bi bi-chat-dots text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Góp ý</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('language.selection')); ?>">
            <i class="bi bi-translate text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Ngôn ngữ</span>
            <i class="bi bi-chevron-right text-muted"></i>
        </a>
        <a class="list-group-item list-group-item-action d-flex align-items-center py-3" href="<?php echo e(route('introduction')); ?>">
            <i class="bi bi-person-plus text-primary me-3 fs-5"></i>
            <span class="flex-grow-1">Mã giới thiệu</span>
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


<?php /**PATH D:\Source Web\otod-github\otod\resources\views/layouts/drawer-home.blade.php ENDPATH**/ ?>