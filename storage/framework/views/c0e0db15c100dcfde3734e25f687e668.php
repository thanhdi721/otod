

<?php $__env->startSection('title', 'Mã giảm giá - OTOD'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        
        <div class="page-header d-flex align-items-center mb-4">
            <button class="btn-back" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </button>
            <h5 class="fw-semibold mb-0 ms-3">Quay lại</h5>
        </div>
        <h5 class="fw-bold mb-4">Mã giảm giá</h5>
        
        <div class="tab-navigation mb-4">
            <button class="tab-btn active" data-tab="valid">Còn hiệu lực</button>
            <button class="tab-btn" data-tab="used">Đã sử dụng</button>
        </div>

        
        <div class="tab-content" id="valid-tab">
            
            <div class="discount-item mb-3" onclick="goToDetail(1)">
                <div class="discount-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" width="90px" height="90px">
                    <div class="discount-details">
                        <div class="discount-title">Giảm giá : 120k</div>
                        <div class="discount-desc">Áp dụng cho các khách thuê xe lần đầu</div>
                        <div class="discount-date-action">
                            <span class="discount-date">HSD: 12/2/2026</span>
                            <span class="discount-use-now" onclick="event.stopPropagation(); useDiscount(1)">Dùng ngay</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="discount-item mb-3" onclick="goToDetail(2)">
                <div class="discount-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" width="90px" height="90px">
                    <div class="discount-details">
                        <div class="discount-title">Giảm giá : 120k</div>
                        <div class="discount-desc">Áp dụng cho các khách thuê xe lần đầu</div>
                        <div class="discount-date-action">
                            <span class="discount-date">HSD: 12/2/2026</span>
                            <span class="discount-use-now" onclick="event.stopPropagation(); useDiscount(2)">Dùng ngay</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="discount-item mb-3" onclick="goToDetail(3)">
                <div class="discount-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" width="90px" height="90px">
                    <div class="discount-details">
                        <div class="discount-title">Giảm giá : 150k</div>
                        <div class="discount-desc">Áp dụng cho các khách thuê xe từ 3 ngày</div>
                        <div class="discount-date-action">
                            <span class="discount-date">HSD: 15/3/2026</span>
                            <span class="discount-use-now" onclick="event.stopPropagation(); useDiscount(3)">Dùng ngay</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="discount-item mb-3" onclick="goToDetail(4)">
                <div class="discount-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" width="90px" height="90px">
                    <div class="discount-details">
                        <div class="discount-title">Giảm giá : 200k</div>
                        <div class="discount-desc">Áp dụng cho các khách thuê xe cuối tuần</div>
                        <div class="discount-date-action">
                            <span class="discount-date">HSD: 30/4/2026</span>
                            <span class="discount-use-now" onclick="event.stopPropagation(); useDiscount(4)">Dùng ngay</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="discount-item mb-3" onclick="goToDetail(5)">
                <div class="discount-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" width="90px" height="90px">
                    <div class="discount-details">
                        <div class="discount-title">Giảm giá : 100k</div>
                        <div class="discount-desc">Áp dụng cho đơn hàng từ 500k</div>
                        <div class="discount-date-action">
                            <span class="discount-date">HSD: 20/5/2026</span>
                            <span class="discount-use-now" onclick="event.stopPropagation(); useDiscount(5)">Dùng ngay</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="tab-content d-none" id="used-tab">
            
            <div class="discount-item mb-3">
                <div class="discount-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" width="90px" height="90px">
                    <div class="discount-details">
                        <div class="discount-title">Giảm giá : 120k</div>
                        <div class="discount-desc">Áp dụng cho các khách thuê xe lần đầu</div>
                        <div class="discount-date-action">
                            <span class="discount-date">HSD: 12/2/2026</span>
                            <span class="discount-used">Đã sử dụng</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="discount-item mb-3">
                <div class="discount-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" width="90px" height="90px">
                    <div class="discount-details">
                        <div class="discount-title">Giảm giá : 80k</div>
                        <div class="discount-desc">Áp dụng cho đơn hàng cuối tuần</div>
                        <div class="discount-date-action">
                            <span class="discount-date">HSD: 10/1/2026</span>
                            <span class="discount-used">Đã sử dụng</span>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="discount-item mb-3">
                <div class="discount-item-content">
                    <img src="<?php echo e(asset('/assets/images/voucher-refer.png')); ?>" alt="Katinat Matcha Latte" width="90px" height="90px">
                    <div class="discount-details">
                        <div class="discount-title">Giảm giá : 50k</div>
                        <div class="discount-desc">Áp dụng cho khách hàng thân thiết</div>
                        <div class="discount-date-action">
                            <span class="discount-date">HSD: 05/12/2025</span>
                            <span class="discount-used">Đã sử dụng</span>
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

    /* Discount item styles */
    .discount-item {
        background: white;
        border-radius: 12px;
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .discount-item:hover {
        transform: translateY(-2px);
        box-shadow: 0px 4px 16px 0px rgba(0, 0, 0, 0.15);
    }

    .discount-item-content {
        padding: 16px;
        display: flex;
        align-items: flex-start;
        gap: 16px;
    }

    .discount-icon-wrapper {
        flex-shrink: 0;
    }

    .discount-icon-yellow {
        width: 60px;
        height: 60px;
        background: #FFD700;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .discount-icon-gray {
        width: 60px;
        height: 60px;
        background: #E5E5E5;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .discount-icon-yellow i {
        font-size: 24px;
        color: #2B4896;
    }

    .discount-icon-gray i {
        font-size: 24px;
        color: #999;
    }

    .discount-details {
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

    .discount-used {
        color: #999;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 500;
        line-height: 20px;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        .discount-item-content {
            padding: 12px;
            gap: 12px;
        }

        .discount-icon-yellow,
        .discount-icon-gray {
            width: 50px;
            height: 50px;
        }

        .discount-icon-yellow i,
        .discount-icon-gray i {
            font-size: 20px;
        }

        .discount-title {
            font-size: 15px;
        }

        .discount-desc,
        .discount-date,
        .discount-use-now,
        .discount-used {
            font-size: 13px;
        }

        .tab-btn {
            padding: 10px 16px;
            font-size: 13px;
        }
    }

    @media (max-width: 576px) {
        .discount-item-content {
            padding: 10px;
            gap: 10px;
        }

        .discount-icon-yellow,
        .discount-icon-gray {
            width: 45px;
            height: 45px;
        }

        .discount-icon-yellow i,
        .discount-icon-gray i {
            font-size: 18px;
        }

        .discount-title {
            font-size: 14px;
        }

        .discount-desc,
        .discount-date,
        .discount-use-now,
        .discount-used {
            font-size: 12px;
        }

        .tab-btn {
            padding: 8px 12px;
            font-size: 12px;
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

        // Add click event to discount use now text (valid tab only)
        const discountUseNow = document.querySelectorAll('.discount-use-now');
        discountUseNow.forEach((element, index) => {
            element.addEventListener('click', function() {
                useDiscount(index + 1);
            });
        });
    });

    // Function to navigate to discount detail page
    function goToDetail(discountId) {
        window.location.href = `/discount-code-detail/${discountId}`;
    }

    // Function to use discount
    function useDiscount(discountId) {
        // Show success message
        showMessage('Mã giảm giá đã được áp dụng!', 'success');
        
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
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-with-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/discount-codes.blade.php ENDPATH**/ ?>