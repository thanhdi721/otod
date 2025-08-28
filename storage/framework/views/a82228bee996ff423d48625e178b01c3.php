<?php $__env->startSection('title', 'Mã giảm giá và quà tặng - OTOD'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        <h5 class="fw-bold mb-4">Mã giảm giá và quà tặng</h5>

        
        <div class="discount-section mb-5">
            <div class="section-header d-flex justify-content-between align-items-center mb-3">
                <h6 class="section-title mb-0">Mã giảm giá</h6>
                <a href="<?php echo e(route('discount-codes')); ?>" class="view-all-link">Xem tất cả <i class="bi bi-chevron-right"></i></a>
            </div>

            <div class="discount-slider-wrapper">
                <div class="discount-slider">
                    
                    <div class="discount-card">
                        <div class="discount-card-content">
                           <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" width="90px" height="90px">
                            <div class="discount-info">
                                <div class="discount-title">Giảm giá : 120k</div>
                                <div class="discount-desc">Áp dụng cho các khách thuê xe lần đầu</div>
                                <div class="discount-date-action">
                                    <span class="discount-date">HSD: 12/2/2026</span>
                                    <span class="discount-use-now">Dùng ngay</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="discount-card">
                        <div class="discount-card-content">
                           <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" width="90px" height="90px">
                            <div class="discount-info">
                                <div class="discount-title">Giảm giá : 120k</div>
                                <div class="discount-desc">Áp dụng cho các khách thuê xe lần đầu</div>
                                <div class="discount-date-action">
                                    <span class="discount-date">HSD: 12/2/2026</span>
                                    <span class="discount-use-now">Dùng ngay</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="discount-card">
                        <div class="discount-card-content">
                           <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" width="90px" height="90px">
                            <div class="discount-info">
                                <div class="discount-title">Giảm giá : 150k</div>
                                <div class="discount-desc">Áp dụng cho các khách thuê xe từ 3 ngày</div>
                                <div class="discount-date-action">
                                    <span class="discount-date">HSD: 15/3/2026</span>
                                    <span class="discount-use-now">Dùng ngay</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="discount-slider-overlay"></div>
            </div>
        </div>

        
        <div class="gifts-section">
            <div class="section-header d-flex justify-content-between align-items-center mb-3">
                <h6 class="section-title mb-0">Quà tặng</h6>
                <a href="<?php echo e(route('gifts')); ?>" class="view-all-link">Xem tất cả <i class="bi bi-chevron-right"></i></a>
            </div>

            <div class="gifts-cards">
                
                <div class="gift-card mb-3">
                    <div class="gift-card-content">
                        <div class="gift-image">
                            <img src="<?php echo e(asset('/assets/images/voucher.png')); ?>" alt="Katinat Matcha Latte" class="gift-img">
                        </div>
                        <div class="gift-info">
                            <div class="gift-title">[Katinat] Thẻ quà tặng Matcha Latte 50.000đ</div>
                            <div class="gift-date-points">
                                <span class="gift-date">HSD: 12/2/2026</span>
                                <div class="gift-points">
                                    <i class="bi bi-star-fill"></i>
                                    <span>45 điểm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="gift-card mb-3">
                    <div class="gift-card-content">
                        <div class="gift-image">
                            <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" class="gift-img">
                        </div>
                        <div class="gift-info">
                            <div class="gift-title">[Katinat] Thẻ quà tặng Matcha Latte 50.000đ</div>
                            <div class="gift-date-points">
                                <span class="gift-date">HSD: 12/2/2026</span>
                                <div class="gift-points">
                                    <i class="bi bi-star-fill"></i>
                                    <span>45 điểm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="gift-card mb-3">
                    <div class="gift-card-content">
                        <div class="gift-image">
                            <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" class="gift-img">
                        </div>
                        <div class="gift-info">
                            <div class="gift-title">[Katinat] Thẻ quà tặng Matcha Latte 50.000đ</div>
                            <div class="gift-date-points">
                                <span class="gift-date">HSD: 12/2/2026</span>
                                <div class="gift-points">
                                    <i class="bi bi-star-fill"></i>
                                    <span>45 điểm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    /* Font import */
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;600&display=swap');

    /* Section styles */
    .section-title {
        color: #0A0A0A;
        font-size: 18px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 600;
        line-height: 24px;
    }

    .view-all-link {
        color: #2B4896;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 400;
        text-decoration: none;
        line-height: 20px;
    }

    .view-all-link:hover {
        color: #1e2a6b;
        text-decoration: underline;
    }

    .view-all-link i {
        font-size: 12px;
        margin-left: 4px;
    }

    /* Discount slider styles */
    .discount-slider-wrapper {
        position: relative;
        overflow: hidden;
        width: 100%;
    }

    .discount-slider {
        display: flex;
        gap: 16px;
        overflow-x: auto;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE and Edge */
        padding-bottom: 10px;
        margin-bottom: -10px;
        width: calc(100% + 150px); /* Để item thứ 2 hiển thị 50% */
    }

    .discount-slider::-webkit-scrollbar {
        display: none; /* Chrome, Safari, Opera */
    }

    .discount-slider-overlay {
        position: absolute;
        top: 0;
        right: 0;
        width: 120px; /* Tăng độ rộng overlay */
        height: 100%;
        background: linear-gradient(to left, rgba(248, 249, 250, 1) 0%, rgba(248, 249, 250, 0.8) 30%, rgba(248, 249, 250, 0) 100%);
        pointer-events: none;
        z-index: 2;
    }

    /* Discount card styles */
    .discount-card {
        background: white;
       
        overflow: hidden;
        width: calc(50% - 8px); /* Item 1 chiếm 50%, item 2 sẽ hiển thị 50% */
        min-width: 280px;
        flex-shrink: 0;
    }

    .discount-card:first-child {
        width: calc(50% - 8px); /* Item đầu full trong viewport */
    }

    .discount-card:nth-child(2) {
        width: calc(50% - 8px); /* Item thứ 2 sẽ hiển thị 50% */
    }

    .discount-card-content {
     
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .discount-icon {
        width: 60px;
        height: 60px;
        background: #FFD700;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .discount-icon i {
        font-size: 24px;
        color: #2B4896;
    }

    .discount-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .discount-title {
        color: #0A0A0A;
        font-size: 16px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 600;
        line-height: 24px;
    }

    .discount-desc {
        color: #737272;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 400;
        line-height: 20px;
    }

    .discount-date-action {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .discount-date {
        color: #737272;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 400;
        line-height: 20px;
    }

    .discount-use-now {
        color: #2B4896;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 600;
        line-height: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .discount-use-now:hover {
        color: #1e2a6b;
        text-decoration: underline;
    }

    /* Gift card styles */
    .gift-card {
        background: white;
       
        overflow: hidden;
    }

    .gift-card-content {
      
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .gift-image {
        width: 80px;
        height: 80px;
        flex-shrink: 0;
        border-radius: 8px;
        overflow: hidden;
    }

    .gift-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .gift-info {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .gift-title {
        color: #0A0A0A;
        font-size: 16px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 600;
        line-height: 24px;
    }

    .gift-date-points {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .gift-date {
        color: #737272;
        font-size: 12px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 400;
        line-height: 18px;
    }

    .gift-points {
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .gift-points i {
        color: #FFD700;
        font-size: 14px;
    }

    .gift-points span {
        color: #0A0A0A;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 600;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        .discount-card {
            width: calc(60% - 6px); /* Trên mobile item đầu chiếm 60% */
            min-width: 250px;
        }

        .discount-card:first-child {
            width: calc(60% - 6px);
        }

        .discount-card:nth-child(2) {
            width: calc(60% - 6px);
        }

        .discount-slider {
            gap: 12px;
            width: calc(100% + 100px); /* Giảm width trên mobile */
        }

        .discount-slider-overlay {
            width: 80px; /* Overlay nhỏ hơn trên mobile */
            background: linear-gradient(to left, rgba(248, 249, 250, 1) 0%, rgba(248, 249, 250, 0.7) 40%, rgba(248, 249, 250, 0) 100%);
        }

        .discount-card-content,
        .gift-card-content {
            gap: 12px;
        }

        .discount-icon {
            width: 50px;
            height: 50px;
        }

        .discount-icon i {
            font-size: 20px;
        }

        .gift-image {
            width: 70px;
            height: 70px;
        }

        .discount-title {
            font-size: 15px;
        }

        .discount-desc,
        .discount-date {
            font-size: 13px;
        }

        .discount-use-now {
            font-size: 13px;
        }

        .gift-title {
            font-size: 13px;
        }

        .gift-date {
            font-size: 11px;
        }
    }

    @media (max-width: 576px) {
        .discount-card {
            width: calc(70% - 5px); /* Trên màn hình nhỏ item đầu chiếm 70% */
            min-width: 220px;
        }

        .discount-card:first-child {
            width: calc(70% - 5px);
        }

        .discount-card:nth-child(2) {
            width: calc(70% - 5px);
        }

        .discount-slider {
            gap: 10px;
            width: calc(100% + 80px); /* Giảm width hơn nữa */
        }

        .discount-slider-overlay {
            width: 60px; /* Overlay nhỏ hơn nữa */
            background: linear-gradient(to left, rgba(248, 249, 250, 1) 0%, rgba(248, 249, 250, 0.6) 50%, rgba(248, 249, 250, 0) 100%);
        }

        .discount-card-content,
        .gift-card-content {
           
            gap: 10px;
        }

        .discount-icon {
            width: 45px;
            height: 45px;
        }

        .discount-icon i {
            font-size: 18px;
        }

        .gift-image {
            width: 60px;
            height: 60px;
        }

        .section-title {
            font-size: 16px;
        }

        .view-all-link {
            font-size: 13px;
        }

        .discount-title {
            font-size: 14px;
        }

        .discount-desc,
        .discount-date {
            font-size: 12px;
        }

        .discount-use-now {
            font-size: 12px;
        }

        .gift-title {
            font-size: 12px;
            line-height: 18px;
        }

        .gift-date {
            font-size: 10px;
        }

        .gift-points span {
            font-size: 13px;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    // Function to use discount
    function useDiscount(discountId) {
        // Show success message
        showMessage('Mã giảm giá đã được áp dụng!', 'success');
        
        // Optional: Redirect to booking page or update UI
        console.log('Using discount ID:', discountId);
    }

    // Function to show message
    function showMessage(message, type = 'success') {
        const toast = document.createElement('div');
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${type === 'success' ? '#28a745' : '#dc3545'};
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            z-index: 9999;
            font-size: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            font-family: 'Be Vietnam Pro', sans-serif;
        `;
        toast.textContent = message;
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.remove();
        }, 3000);
    }

    // Add click event to discount use now text
    document.addEventListener('DOMContentLoaded', function() {
        const discountUseNow = document.querySelectorAll('.discount-use-now');
        discountUseNow.forEach((element, index) => {
            element.addEventListener('click', function() {
                useDiscount(index + 1);
            });
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-with-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/discounts-and-gifts.blade.php ENDPATH**/ ?>