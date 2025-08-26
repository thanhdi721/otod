

<?php $__env->startSection('content'); ?>
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        <!-- Page Header -->
        <div class="page-header mb-2 mb-lg-4 mt-2 mt-lg-5">
            <h1 class="page-title fw-bold text-dark mb-0">Danh sách xe</h1>
        </div>

        <?php
            // Giả lập dữ liệu xe với trạng thái
            $allCars = [
                [
                    'id' => 1,
                    'name' => 'Kia Rio 2015',
                    'type' => 'Tự lái',
                    'price' => '856.000đ',
                    'license_plate' => '29U1.334.08',
                    'location' => 'Quận 1, TP Hồ Chí Minh',
                    'transmission' => 'Số tự động',
                    'seats' => '4 chỗ',
                    'fuel_consumption' => '5L/100km',
                    'image' => '/assets/images/prepare-2.png',
                    'status' => 'renting', // Đang cho thuê
                ],
                [
                    'id' => 2,
                    'name' => 'Toyota Vios 2020',
                    'type' => 'Tự lái',
                    'price' => '950.000đ',
                    'license_plate' => '30A1.567.89',
                    'location' => 'Quận 3, TP Hồ Chí Minh',
                    'transmission' => 'Số tự động',
                    'seats' => '5 chỗ',
                    'fuel_consumption' => '6L/100km',
                    'image' => '/assets/images/prepare-2.png',
                    'status' => 'pending', // Chờ duyệt xe
                ],
                [
                    'id' => 3,
                    'name' => 'Honda City 2018',
                    'type' => 'Tự lái',
                    'price' => '780.000đ',
                    'license_plate' => '51F1.234.56',
                    'location' => 'Quận 7, TP Hồ Chí Minh',
                    'transmission' => 'Số tự động',
                    'seats' => '5 chỗ',
                    'fuel_consumption' => '5.5L/100km',
                    'image' => '/assets/images/prepare-2.png',
                    'status' => 'renting', // Đang cho thuê
                ],
            ];

            // Lấy trạng thái filter từ URL parameter hoặc mặc định là 'renting'
            $currentStatus = request('status', 'renting');

            // Lọc xe theo trạng thái
            $cars = array_filter($allCars, function ($car) use ($currentStatus) {
                return $car['status'] === $currentStatus;
            });
        ?>

        <!-- Tag Status Type -->
        <div class="tag-status-type mb-3">
            <div class="d-flex gap-3">
                <a href="<?php echo e(route('car-list', ['status' => 'renting'])); ?>"
                    class="rounded-4 py-1 px-3 text-decoration-none <?php echo e($currentStatus === 'renting' ? 'active-status' : 'inactive-status'); ?>">
                    Đang cho thuê
                </a>
                <a href="<?php echo e(route('car-list', ['status' => 'pending'])); ?>"
                    class="rounded-4 py-1 px-3 text-decoration-none <?php echo e($currentStatus === 'pending' ? 'active-status' : 'inactive-status'); ?>">
                    Chờ duyệt xe
                </a>
            </div>
        </div>

        <?php if(empty($cars)): ?>
            <!-- Empty State -->
            <div class="d-flex flex-column align-items-center justify-content-center p-5 rounded-4"
                style="background:#F4F4F4; min-height: 200px">
                <div>
                    <img src="<?php echo e(asset('/assets/images/car-list.png')); ?>" alt="car">
                </div>
                <span class="mt-2 mb-3 text-muted">
                    <?php if($currentStatus === 'renting'): ?>
                        Không có xe đang cho thuê
                    <?php elseif($currentStatus === 'pending'): ?>
                        Không có xe chờ duyệt
                    <?php endif; ?>
                </span>
                <button class="btn-add-new-car rounded-3 px-4 py-2 fw-medium">
                    <img src="<?php echo e(asset('/assets/images/plus-ic.png')); ?>" alt=""> Thêm xe mới
                </button>
            </div>
        <?php else: ?>
            <!-- List Cars -->
            <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="car-list">
                    <div class="car-item mt-4 d-flex flex-column gap-3 border p-3 rounded-4">
                        <div class="car-content d-flex justify-content-between mb-2 gap-2">
                            <div class="car-info d-flex gap-3">
                                <img src="<?php echo e(asset($car['image'])); ?>" alt="car" class="object-fit-cover"
                                    style=" height:76px; border-radius:8px">
                                <div class="d-flex flex-column justify-content-center">
                                    <div class="fw-bold mb-1 fs-5 fs-md-4 fs-lg-3"><?php echo e($car['name']); ?></div>
                                    <div style="color:#737272"><?php echo e($car['type']); ?></div>
                                    <div class="fw-medium"><?php echo e($car['price']); ?></div>
                                </div>
                            </div>
                            <div>
                                <span class="text-muted fs-6 fs-md-5 fs-lg-4 p-2"
                                    style="background: #F4F4F4"><?php echo e($car['license_plate']); ?></span>
                            </div>
                        </div>
                        <hr style="margin: 0.5rem 0 !important">
                        <div class="d-flex flex-column gap-2">
                            <div class="d-flex gap-2 align-items-center">
                                <img src="<?php echo e(asset('/assets/images/location-ic-list-car.png')); ?>" alt="">
                                <span><?php echo e($car['location']); ?></span>
                            </div>
                            <div class="d-flex gap-3">
                                <div class="d-flex gap-1 align-items-center">
                                    <img src="<?php echo e(asset('/assets/images/number-auto-ic.png')); ?>" alt="">
                                    <span><?php echo e($car['transmission']); ?></span>
                                </div>
                                <div class="d-flex gap-1 align-items-center">
                                    <img src="<?php echo e(asset('/assets/images/seat-ic.png')); ?>" alt="">
                                    <span><?php echo e($car['seats']); ?></span>
                                </div>
                                <div class="d-flex gap-1 align-items-center">
                                    <img src="<?php echo e(asset('/assets/images/gasoline-ic.png')); ?>" alt="">
                                    <span><?php echo e($car['fuel_consumption']); ?></span>
                                </div>
                            </div>
                        </div>
                        <?php if($car['status'] === 'renting'): ?>
                            <hr style="margin: 0.5rem 0 !important">
                            <div class="d-flex justify-content-end">
                                <button class="btn-update-info-car fw-medium">Cập nhật lịch xe</button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
<?php $__env->stopSection(); ?>

<style>
    .tag-status-type a {
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tag-status-type a:hover {
        opacity: 0.8;
        transform: translateY(-1px);
    }

    .active-status {
        background: #2B4896 !important;
        color: white !important;
    }

    .inactive-status {
        background: #F4F4F4 !important;
        color: #333 !important;
    }

    .empty-state {
        text-align: center;
    }

    .empty-state img {
        width: 60px;
        opacity: 0.7;
    }

    .empty-state span {
        margin-top: 12px;
        margin-bottom: 12px;
        color: #6c757d;
    }

    .empty-state button {
        background: #2B4896;
        color: white;
        border: none;
        border-radius: 0.375rem;
        padding: 0.5rem 1rem;
        cursor: pointer;
    }

    .empty-state button:hover {
        opacity: 0.8;
    }

    .btn-add-new-car {
        background: #2B4896;
        color: white;
        border: none;
        border-radius: 0.375rem;
        padding: 0.5rem 1rem;
        cursor: pointer;
    }

    .btn-add-new-car:hover {
        opacity: 0.8;
    }

    .btn-update-info-car {
        background: #2B4896;
        color: white;
        border: none;
        border-radius: 0.375rem;
        padding: 0.5rem 1rem;
        cursor: pointer;
    }

    .btn-update-info-car:hover {
        opacity: 0.8;
    }

    @media (max-width: 768px) {
        .btn-update-info-car {
            width: 100%;
        }

        .line-hr {
            margin: 0.25rem 0 !important;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        try {
            var flag = sessionStorage.getItem('carAddedSuccess');
            if (flag === '1') {
                // Build a simple toast at top-right
                var toast = document.createElement('div');
                toast.className = 'position-fixed';
                toast.style.top = '16px';
                toast.style.right = '16px';
                toast.style.zIndex = '1080';
                toast.innerHTML = '<div class="border border-success rounded-3 p-3" style="min-width:280px;background-color:#F0FDF5; box-shadow:0 4px 12px rgba(0,0,0,.08)">\
                    <div class="fw-semibold mb-1" style="color:#198754">Thông báo</div>\
                    <div class="text-muted">Thêm xe mới thành công. Xe của bạn đang được duyệt</div>\
                </div>';
                document.body.appendChild(toast);
                setTimeout(function() {
                    toast.remove();
                }, 4000);
                sessionStorage.removeItem('carAddedSuccess');
            }
        } catch (e) {}
    });
</script>

<?php echo $__env->make('layouts.layout-with-sidebar-owner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/car-list.blade.php ENDPATH**/ ?>