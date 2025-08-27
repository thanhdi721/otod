

<?php $__env->startSection('content'); ?>
    <div class="container w-100 mt-4" style="margin-left: auto; max-width: 800px">
        <div class="page-header mb-4">
            <span class="fs-4 fs-md-3 fs-lg-2 fw-bold text-dark mb-0">Thông báo</span>
        </div>

        <!-- Navigation Tabs -->
        <div class="d-flex gap-2 mb-4">
            <button class="btn btn-primary px-4 py-2 rounded-pill active" data-tab-btn="notifications"
                onclick="switchTab('notifications', event)">Thông báo</button>
            <button class="btn btn-outline-secondary px-4 py-2 rounded-pill" data-tab-btn="chat"
                onclick="switchTab('chat', event)">Chat</button>
        </div>

        <!-- Notifications Content -->
        <div class="notifications-container">
            <!-- Notification Card -->
            <div class="notification-card mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <!-- Date and Time Header -->
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="text-muted small">Hôm nay</div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="text-muted small">2:41 PM</span>
                                <div class="notification-dot bg-danger rounded-circle" style="width: 8px; height: 8px;">
                                </div>
                            </div>
                        </div>

                        <!-- Notification Title -->
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="fw-bold mb-0">Xe đã sẵn sàng</h6>
                        </div>

                        <!-- Separator -->
                        <hr class="my-3" style="border-color: #e9ecef;">

                        <!-- Notification Message -->
                        <div class="notification-message">
                            <p class="mb-0 text-dark">
                                Xe HUYANDAI ACCENT 2025 của bạn sẵn sàng! Kiểm tra email để biết hướng dẫn nhận xe. Chúc bạn
                                đi đường an toàn!
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Notification Cards -->
            <div class="notification-card mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="text-muted small">Hôm qua</div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="text-muted small">10:30 AM</span>
                                <div class="notification-dot bg-danger rounded-circle" style="width: 8px; height: 8px;">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="fw-bold mb-0">Đơn hàng đã xác nhận</h6>
                        </div>
                        <hr class="my-3" style="border-color: #e9ecef;">
                        <div class="notification-message">
                            <p class="mb-0 text-dark">
                                Đơn hàng thuê xe của bạn đã được xác nhận. Vui lòng chuẩn bị giấy tờ cần thiết khi nhận xe.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="notification-card mb-3">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="text-muted small">2 ngày trước</div>
                            <div class="d-flex align-items-center gap-2">
                                <span class="text-muted small">3:15 PM</span>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h6 class="fw-bold mb-0">Thanh toán thành công</h6>
                        </div>
                        <hr class="my-3" style="border-color: #e9ecef;">
                        <div class="notification-message">
                            <p class="mb-0 text-dark">
                                Thanh toán cho đơn hàng thuê xe đã được xử lý thành công. Cảm ơn bạn đã sử dụng dịch vụ của
                                chúng tôi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Chat Content (Hidden by default) -->
        <div class="chat-container d-none">
            <div class="text-center text-muted py-5">
                <i class="bi bi-chat-dots fs-1 mb-3"></i>
                <p>Chưa có tin nhắn nào</p>
            </div>
        </div>
    </div>

    <script>
        function switchTab(tab, event) {
            const btnNotifications = document.querySelector('[data-tab-btn="notifications"]');
            const btnChat = document.querySelector('[data-tab-btn="chat"]');

            // Remove active class from all tabs
            [btnNotifications, btnChat].forEach(btn => {
                btn.classList.remove('btn-primary', 'active');
                btn.classList.add('btn-outline-secondary');
            });

            // Add active class to clicked tab
            event.target.classList.remove('btn-outline-secondary');
            event.target.classList.add('btn-primary', 'active');

            // Show/hide content based on tab
            document.querySelector('.notifications-container').classList.toggle('d-none', tab !== 'notifications');
            document.querySelector('.chat-container').classList.toggle('d-none', tab !== 'chat');
        }
    </script>

    <style>
        .notification-card .card {
            border-radius: 12px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .notification-card .card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1) !important;
        }

        .btn-primary {
            background-color: #2B4896 !important;
            border-color: #2B4896 !important;
        }

        .btn-primary:hover {
            background-color: #1e3a7a !important;
            border-color: #1e3a7a !important;
        }

        .notification-dot {
            flex-shrink: 0;
        }

        .notification-message p {
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .container {
                padding: 0 16px;
            }

            .notification-card .card-body {
                padding: 16px;
            }

            .btn {
                padding: 8px 16px;
                font-size: 14px;
            }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/notification.blade.php ENDPATH**/ ?>