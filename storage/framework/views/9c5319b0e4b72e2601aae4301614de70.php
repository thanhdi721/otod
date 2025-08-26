

<?php $__env->startSection('title', 'Mã giới thiệu - OTOD'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
            <h5 class="fw-bold mb-3">Mã giới thiệu</h5>

            
            <div class="border rounded-3 p-3 mb-4" style="background-color: #fff;">
                <p class="mb-3 fw-semibold text-center">Gửi mã giới thiệu cho bạn bè</p>

                <!-- Progress custom với knob -->
                <div class="progress-refer mb-3" style="--value:20;">
                    <div class="progress-bar-refer"></div>
                </div>

                <!-- Box mã giới thiệu -->
                <div class="d-flex align-items-center justify-content-center bg-warning bg-opacity-10 p-3 rounded-3 mb-3">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <small>Mã giới thiệu của bạn</small>
                        <div class="d-flex gap-2">
                            <span class="fw-bold text-warning fs-3 me-2">DINH6T5R</span>
                            <button class="btn btn-link p-0 text-decoration-none"
                                onclick="navigator.clipboard.writeText('DINH6T5R')">
                                <img src="<?php echo e(asset('/assets/images/clipboard.png')); ?>" alt="">
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Nút CTA -->
                <button class="btn w-100 text-white fw-semibold" style="background-color:#25368B;">
                    Chia sẻ ngay
                </button>
            </div>


            
            <div class="mb-4">
                <div class="fw-bold">Quà dành cho bạn</div>
                <small class="text-muted d-block mb-2">Nhận ngay ưu đãi khi bạn bè đăng ký tài khoản thành công</small>
                <div class="d-flex align-items-center rounded-3 p-3">
                    <div>
                        <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Gift Box" style="">
                    </div>
                    <div class="shadow-sm p-2 p-lg-4  d-flex justify-content-content align-content-center"
                        style="height: 91px;">
                        <div class="fw-semibold fs-6 fs-md-5 fs-lg-4" style="width:80%">Giảm giá 120k cho tất cả xe thuê từ
                            OTOD</div>
                    </div>
                </div>
            </div>

            
            <div>
                <div class="fw-bold">Quà dành cho bạn bè</div>
                <small class="text-muted d-block mb-2">Nhận ngay ưu đãi khi bạn bè đăng ký tài khoản thành công</small>
                <div class="d-flex align-items-center rounded-3 p-3">
                    <div>
                        <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Gift Box" style="">
                    </div>
                    <div class="shadow-sm p-2 p-lg-4  d-flex justify-content-content align-content-center"
                        style="height: 91px;">
                        <div class="fw-semibold fs-6 fs-md-5 fs-lg-4" style="width:80%">Giảm giá 120k cho tất cả xe thuê từ
                            OTOD</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<style>
    .progress-refer {
        --value: 40;
        /* % tiến trình (0–100) */
        width: 100%;
        height: 4px;
        background: #eee;
        border-radius: 999px;
        position: relative;
        /* giữ vị trí cho knob */
    }

    .progress-bar-refer {
        width: calc(var(--value) * 1%);
        height: 100%;
        background: linear-gradient(to right, #2BB1FF, #FFE47A);
        border-radius: inherit;
        position: relative;
        transition: width .3s ease;
    }

    .progress-bar-refer::after {
        content: "";
        position: absolute;
        right: 0;
        /* bám sát cuối thanh */
        top: 50%;
        transform: translate(50%, -50%);
        /* đẩy ra ngoài */
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #25368B;
        /* viền trắng */
        box-shadow: 0 2px 6px rgba(0, 0, 0, .2);
    }
</style>

<?php echo $__env->make('layouts.layout-with-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/refer.blade.php ENDPATH**/ ?>