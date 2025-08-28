

<?php $__env->startSection('title', 'Quà tặng - OTOD'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        
        <div class="page-header d-flex align-items-center mb-4">
            <button class="btn-back" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </button>
            <h5 class="fw-semibold mb-0 ms-3">Quay về</h5>
        </div>

        
        <div class="main-header d-flex justify-content-between align-items-center mb-4">
            <h5 class="fw-bold mb-0">Quà tặng</h5>
            <div class="points-section">
                <div class="points-display">
                    <i class="bi bi-star-fill"></i>
                    <span class="points-number">364 điểm</span>
                </div>
                <div class="points-history">Lịch sử điểm thưởng</div>
            </div>
        </div>

        
        <div class="tab-navigation mb-4">
            <button class="tab-btn active" data-tab="valid">Còn hiệu lực</button>
            <button class="tab-btn" data-tab="used">Đã sử dụng</button>
        </div>

        
        <div class="tab-content" id="valid-tab">
            
            <div class="gift-item mb-3">
                <div class="gift-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" class="gift-image">
                    <div class="gift-details">
                        <div class="gift-title">[Katinat] Thẻ quà tặng Matcha Latte 50.000đ</div>
                        <div class="gift-date-status">
                            <span class="gift-date">HSD: 12/2/2026</span>
                            <span class="gift-status-active">Đã dùng</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="gift-item mb-3">
                <div class="gift-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher.png')); ?>" alt="Katinat Matcha Latte" class="gift-image">
                    <div class="gift-details">
                        <div class="gift-title">[Katinat] Thẻ quà tặng Matcha Latte 50.000đ</div>
                        <div class="gift-date-status">
                            <span class="gift-date">HSD: 12/2/2026</span>
                            <span class="gift-status-available">Hết hạn</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="gift-item mb-3">
                <div class="gift-item-content">
                    <img src="<?php echo e(asset('/assets/images/discount.png')); ?>" alt="Katinat Matcha Latte" class="gift-image">
                    <div class="gift-details">
                        <div class="gift-title">[Katinat] Thẻ quà tặng Matcha Latte 50.000đ</div>
                        <div class="gift-date-status">
                            <span class="gift-date">HSD: 12/2/2026</span>
                            <span class="gift-status-available">Hết hạn</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="gift-item mb-3">
                <div class="gift-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" class="gift-image">
                    <div class="gift-details">
                        <div class="gift-title">[Katinat] Thẻ quà tặng Matcha Latte 50.000đ</div>
                        <div class="gift-date-status">
                            <span class="gift-date">HSD: 12/2/2026</span>
                            <span class="gift-status-available">Hết hạn</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="gift-item mb-3">
                <div class="gift-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher.png')); ?>" alt="Katinat Matcha Latte" class="gift-image">
                    <div class="gift-details">
                        <div class="gift-title">[Katinat] Thẻ quà tặng Matcha Latte 50.000đ</div>
                        <div class="gift-date-status">
                            <span class="gift-date">HSD: 12/2/2026</span>
                            <span class="gift-status-available">Hết hạn</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="tab-content d-none" id="used-tab">
            
            <div class="gift-item mb-3">
                <div class="gift-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" class="gift-image">
                    <div class="gift-details">
                        <div class="gift-title">[Katinat] Thẻ quà tặng Matcha Latte 50.000đ</div>
                        <div class="gift-date-status">
                            <span class="gift-date">HSD: 12/2/2026</span>
                            <span class="gift-status-used">Đã sử dụng</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="gift-item mb-3">
                <div class="gift-item-content">
                    <img src="<?php echo e(asset('/assets/images/discount.png')); ?>" alt="Katinat Matcha Latte" class="gift-image">
                    <div class="gift-details">
                        <div class="gift-title">[Katinat] Thẻ quà tặng Coffee 30.000đ</div>
                        <div class="gift-date-status">
                            <span class="gift-date">HSD: 05/1/2026</span>
                            <span class="gift-status-used">Đã sử dụng</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="gift-item mb-3">
                <div class="gift-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher.png')); ?>" alt="Katinat Matcha Latte" class="gift-image">
                    <div class="gift-details">
                        <div class="gift-title">[Katinat] Thẻ quà tặng Tea 25.000đ</div>
                        <div class="gift-date-status">
                            <span class="gift-date">HSD: 20/11/2025</span>
                            <span class="gift-status-used">Đã sử dụng</span>
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

    /* Page header styles */
    .page-header {
        padding: 0;
    }

    .btn-back {
        width: 40px;
        height: 40px;
        background: white;
        border: 1px solid #EAEAEA;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-back:hover {
        background: #f8f9fa;
        border-color: #2B4896;
    }

    .btn-back i {
        font-size: 18px;
        color: #333;
    }

    /* Main header styles */
    .main-header {
        align-items: flex-start;
    }

    .points-section {
        text-align: right;
    }

    .points-display {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 8px;
        margin-bottom: 4px;
    }

    .points-display i {
        color: #FFD700;
        font-size: 16px;
    }

    .points-number {
        color: #0A0A0A;
        font-size: 16px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 600;
    }

    .points-history {
        color: #2B4896;
        font-size: 12px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 500;
        background: #FFF3CD;
        padding: 4px 8px;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .points-history:hover {
        background: #FFE69C;
    }

    /* Tab navigation styles */
    .tab-navigation {
        display: flex;
        gap: 16px;
        margin-bottom: 24px;
        align-items: center;
    }

    .tab-btn {
        padding: 8px 16px;
        background: transparent;
        border: none;
        border-radius: 20px;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 500;
        color: #737272;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tab-btn.active {
        background: #2B4896;
        color: white;
        font-weight: 600;
    }

    .tab-btn:not(.active):hover {
        background: rgba(43, 72, 150, 0.1);
        color: #2B4896;
    }

    /* Tab content styles */
    .tab-content {
        animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Gift item styles */
    .gift-item {
        background: white;
        border-radius: 12px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .gift-item-content {
        padding: 16px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .gift-image {
        width: 90px;
        height: 90px;
        border-radius: 8px;
        object-fit: cover;
        flex-shrink: 0;
    }

    .gift-details {
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

    .gift-date-status {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }

    .gift-date {
        color: #737272;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 400;
        line-height: 20px;
    }

    .gift-status-active {
        color: #2B4896;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 600;
        line-height: 20px;
    }

    .gift-status-available {
        color: #737272;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 500;
        line-height: 20px;
    }

    .gift-status-used {
        color: #999;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 500;
        line-height: 20px;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        .gift-item-content {
            padding: 12px;
            gap: 12px;
        }

        .gift-image {
            width: 70px;
            height: 70px;
        }

        .gift-title {
            font-size: 15px;
        }

        .gift-date,
        .gift-status-active,
        .gift-status-available,
        .gift-status-used {
            font-size: 13px;
        }

        .tab-btn {
            padding: 6px 12px;
            font-size: 13px;
        }

        .points-number {
            font-size: 15px;
        }

        .points-history {
            font-size: 11px;
            padding: 3px 6px;
        }

        .main-header {
            flex-direction: column;
            gap: 12px;
            align-items: flex-start;
        }

        .points-section {
            text-align: left;
            align-self: flex-end;
        }
    }

    @media (max-width: 576px) {
        .gift-item-content {
            padding: 10px;
            gap: 10px;
        }

        .gift-image {
            width: 60px;
            height: 60px;
        }

        .gift-title {
            font-size: 14px;
            line-height: 20px;
        }

        .gift-date,
        .gift-status-active,
        .gift-status-available,
        .gift-status-used {
            font-size: 12px;
        }

        .tab-btn {
            padding: 6px 10px;
            font-size: 12px;
        }

        .points-number {
            font-size: 14px;
        }

        .points-history {
            font-size: 10px;
            padding: 2px 5px;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    // Tab switching functionality
    document.addEventListener('DOMContentLoaded', function() {
        const tabButtons = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                const targetTab = this.getAttribute('data-tab');

                // Remove active class from all buttons
                tabButtons.forEach(btn => btn.classList.remove('active'));
                
                // Add active class to clicked button
                this.classList.add('active');

                // Hide all tab contents
                tabContents.forEach(content => {
                    content.classList.add('d-none');
                });

                // Show target tab content
                const targetContent = document.getElementById(targetTab + '-tab');
                if (targetContent) {
                    targetContent.classList.remove('d-none');
                }
            });
        });

        // Points history click handler
        const pointsHistory = document.querySelector('.points-history');
        if (pointsHistory) {
            pointsHistory.addEventListener('click', function() {
                // Navigate to points history page
                showMessage('Chức năng lịch sử điểm thưởng sẽ sớm ra mắt!', 'info');
            });
        }
    });

    // Function to show message
    function showMessage(message, type = 'success') {
        const toast = document.createElement('div');
        const bgColor = type === 'success' ? '#28a745' : type === 'info' ? '#17a2b8' : '#dc3545';
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${bgColor};
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
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout-with-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/gifts.blade.php ENDPATH**/ ?>