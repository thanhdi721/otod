

<?php $__env->startSection('content'); ?>
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        <!-- Page Header -->
        <div class="page-header mb-4 mt-4">
            <h1 class="page-title fw-bold text-dark fs-3 fs-md-2 fs-lg-1 mb-0">Tra cứu phạt nguội</h1>
        </div>

        <!-- Search Section -->
        <div class="search-section mb-4">
            <div class="row g-3">
                <div class="col-md-8">
                    <div class="position-relative">
                        <input type="text" class="form-control form-control-lg" placeholder="Nhập biển số hoặc chọn xe"
                            id="licensePlateInput" style="border-radius: 12px; padding-right: 50px;">
                        <button class="btn position-absolute end-0 top-0 h-100 px-3" type="button" id="dropdownButton"
                            style="border: none; background: transparent;">
                            <i class="bi bi-chevron-down text-muted"></i>
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-primary btn-lg w-100"
                        style="background-color: #2B4896; border-color: #2B4896; border-radius: 12px;">
                        Tra cứu
                    </button>
                </div>
            </div>
        </div>

        <?php
            // Giả lập dữ liệu xe với trạng thái
            $allCars = [
                [
                    'id' => 1,
                    'name' => 'Kia Rio 2015',
                    'type' => 'Có 2 lỗi chưa xử phạt',
                    'license_plate' => '29U1.334.08',
                    'image' => '/assets/images/prepare-2.png',
                ],
                [
                    'id' => 2,
                    'name' => 'Toyota Vios 2020',
                    'type' => 'Có 2 lỗi chưa xử phạt',
                    'license_plate' => '30A1.567.89',
                    'image' => '/assets/images/prepare-2.png',
                ],
                [
                    'id' => 3,
                    'name' => 'Honda City 2018',
                    'type' => 'Có 2 lỗi chưa xử phạt',
                    'license_plate' => '51F1.234.56',
                    'image' => '/assets/images/prepare-2.png',
                ],
            ];

            $cars = $allCars;
        ?>
        <!-- Result Card -->
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
                                <div style="color:#737272">
                                    Có <span class="text-danger fw-bold">2 lỗi</span> chưa xử phạt
                                </div>
                            </div>
                        </div>
                        <div>
                            <span class="text-muted fs-6 fs-md-5 fs-lg-4 p-2"
                                style="background: #F4F4F4"><?php echo e($car['license_plate']); ?></span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button class="btn-update-info-car fw-medium">Xem chi tiết</button>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <!-- Empty State (Hidden by default) -->
        <div class="empty-state text-center py-5" style="display: none;">
            <div class="empty-icon mb-3">
                <i class="bi bi-search fs-1 text-muted"></i>
            </div>
            <h5 class="text-muted mb-2">Chưa có kết quả tra cứu</h5>
            <p class="text-muted">Vui lòng nhập biển số xe để tra cứu phạt nguội</p>
        </div>
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
        const dropdownButton = document.getElementById('dropdownButton');
        const licensePlateInput = document.getElementById('licensePlateInput');

        // Sample license plates for dropdown
        const samplePlates = [
            '29U1.334.08',
            '30A1.567.89',
            '51F1.234.56',
            '29H1.789.12'
        ];

        // Create dropdown menu
        let dropdownMenu = null;

        dropdownButton.addEventListener('click', function() {
            if (dropdownMenu) {
                dropdownMenu.remove();
                dropdownMenu = null;
                return;
            }

            dropdownMenu = document.createElement('div');
            dropdownMenu.className = 'position-absolute w-100 bg-white border rounded-3 shadow-sm';
            dropdownMenu.style.top = '100%';
            dropdownMenu.style.left = '0';
            dropdownMenu.style.zIndex = '1000';
            dropdownMenu.style.maxHeight = '200px';
            dropdownMenu.style.overflowY = 'auto';

            samplePlates.forEach(plate => {
                const item = document.createElement('div');
                item.className = 'px-3 py-2 cursor-pointer hover-bg-light';
                item.textContent = plate;
                item.style.cursor = 'pointer';
                item.addEventListener('click', function() {
                    licensePlateInput.value = plate;
                    dropdownMenu.remove();
                    dropdownMenu = null;
                });
                dropdownMenu.appendChild(item);
            });

            licensePlateInput.parentElement.appendChild(dropdownMenu);
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdownButton.contains(e.target) && !licensePlateInput.contains(e.target)) {
                if (dropdownMenu) {
                    dropdownMenu.remove();
                    dropdownMenu = null;
                }
            }
        });
    });
</script>

<?php echo $__env->make('layouts.layout-with-sidebar-owner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/look-up-fines.blade.php ENDPATH**/ ?>