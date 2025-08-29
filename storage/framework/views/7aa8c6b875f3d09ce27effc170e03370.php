

<?php $__env->startSection('title', 'Lịch sử điểm thưởng'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center mb-3">
                    <button class="btn-back me-2" onclick="history.back()">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <h4 class="fw-bold mb-0">Quay về</h4>
                </div>

                <h3 class="fw-bold mb-4">Lịch sử điểm thưởng</h3>

                <div class="list-group points-list">
                    <?php
                        $items = [
                            ['id' => '#1235436', 'text' => 'Hoàn thành chuyến', 'time' => '10:05, 11/11/2024', 'delta' => '+160'],
                            ['id' => '#1235436', 'text' => 'Đổi quà tặng', 'time' => '10:05, 11/11/2024', 'delta' => '-1200'],
                            ['id' => '#1235436', 'text' => 'Đổi quà tặng', 'time' => '10:05, 11/11/2024', 'delta' => '-132'],
                            ['id' => '#1235436', 'text' => 'Hoàn thành chuyến', 'time' => '10:05, 11/11/2024', 'delta' => '+560'],
                        ];
                    ?>

                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="list-group-item p-3 d-flex align-items-center justify-content-between">
                            <div>
                                <div class="fw-semibold"><?php echo e($item['id']); ?> <?php echo e($item['text']); ?></div>
                                <div class="text-muted small"><?php echo e($item['time']); ?></div>
                            </div>
                            <div class="d-flex align-items-center gap-2">
                                <div class="fw-bold <?php echo e(str_starts_with($item['delta'], '+') ? 'text-success' : 'text-danger'); ?>">
                                    <?php echo e($item['delta']); ?>

                                </div>
                                <img src="<?php echo e(asset('/assets/images/ic-poin.png')); ?>" alt="coin" width="16" height="16">
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .btn-back {
        width: 36px;
        height: 36px;
        background: #fff;
        border: 1px solid #EAEAEA;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    .points-list .list-group-item { border: none; border-bottom: 1px solid #F1F1F1; }
    .points-list .list-group-item:last-child { border-bottom: none; }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-with-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/points-history.blade.php ENDPATH**/ ?>