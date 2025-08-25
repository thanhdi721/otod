

<?php $__env->startSection('title', 'Thông báo'); ?>

<?php $__env->startSection('content'); ?>
    <div style="background-color: #F4F4F4;">
        <div class="container py-4">
        <div class="bg-white rounded-3 p-3 p-md-4 shadow-sm">
            <style>
                .nav-pills .nav-link { border-radius: 20px; }
                .nav-pills .nav-link.active { background: #2B4896; color: #fff; }
                .nav-pills .nav-link:not(.active) { background: #fff; border: 1px solid #D0D5DD; color: #000; }

                .chat-sidebar .item { cursor: pointer; padding: 12px 16px; border-bottom: 1px solid #eee; border-radius: 8px; }
                .chat-sidebar .item.active { background: #FFF6E5; }
                .chat-sidebar .name { font-weight: 600; }
                .chat-sidebar .preview { font-size: 13px; color: #667085; }
                .dot-red { width: 8px; height: 8px; background: #E11D48; border-radius: 50%; display: inline-block; }

                .chat-card { border: 1px solid #EAECF0; border-radius: 12px; }
                .message-bubble { max-width: 70%; border-radius: 12px; padding: .5rem .75rem; font-size: 14px; }
                .message-bubble.me { background: #2B4896; color: #fff; margin-left: auto; }
                .message-bubble.other { background: #F2F4F7; color: #111827; }
                .msg-time { font-size: 12px; color: #98A2B3; white-space: nowrap; }
                .input-wrap { border: 1px solid #EAECF0; border-radius: 24px; padding: 6px 12px; }
                .plus-btn { width: 36px; height: 36px; border-radius: 50%; border: 1px solid #EAECF0; background: #fff; }
            </style>
            <!-- Tabs -->
            <ul class="nav nav-pills gap-2 mb-3">
                <li class="nav-item">
                    <button class="nav-link active px-3" data-bs-toggle="pill" data-bs-target="#tab-noti" type="button">
                        Thông báo
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link px-3" data-bs-toggle="pill" data-bs-target="#tab-chat" type="button"> 
                        Chat
                    </button>
                </li>
            </ul>

            <div class="tab-content">
                <!-- Notifications Tab -->
                <div class="tab-pane fade show active" id="tab-noti">
                    <div class="mb-3 text-muted fw-semibold">Hôm nay</div>

                    <!-- Item: Đặt xe thành công -->
                    <div class="border-top"></div>
                    <div class="py-3 d-flex align-items-start justify-content-between gap-3">
                        <div>
                            <div class="fw-semibold">Đặt xe thành công</div>
                            <div class="text-muted small">
                                Xe của bạn sẵn sàng! Kiểm tra email để biết hướng dẫn đặt xe và nhận xe. Chúc bạn đi đường an toàn!
                            </div>
                        </div>
                        <div class="text-nowrap small d-flex align-items-center gap-2">
                            <span class="text-muted fw-semibold">2:41 PM</span>
                            <span class="ms-1 d-inline-block rounded-circle" style="width:8px;height:8px;background:#E11D48"></span>
                        </div>
                    </div>

                    <!-- Item: Hóa đơn chuyển đi -->
                    <div class="border-top"></div>
                    <div class="py-3 d-flex align-items-start justify-content-between gap-3">
                        <div>
                            <div class="fw-semibold">Hóa đơn chuyển đi</div>
                            <div class="text-muted small">Vui lòng kiểm tra hoá đơn của bạn</div>
                        </div>
                        <div class="text-nowrap small d-flex align-items-center gap-2">
                            <span class="text-muted fw-semibold">2:40 PM</span>
                            <span class="ms-1 d-inline-block rounded-circle" style="width:8px;height:8px;background:#E11D48"></span>
                        </div>
                    </div>

                    <!-- Item: Thời gian đón / trả xe -->
                    <div class="border-top"></div>
                    <div class="py-3 d-flex align-items-start justify-content-between gap-3">
                        <div>
                            <div class="fw-semibold">Thời gian đón/ trả xe</div>
                            <div class="text-muted small">Đã xác nhận thời gian đón!</div>
                        </div>
                        <div class="text-nowrap small d-flex align-items-center gap-2">
                            <span class="text-muted fw-semibold">9:00 AM</span>
                            <span class="ms-1 d-inline-block rounded-circle" style="width:8px;height:8px;background:#E11D48"></span>
                        </div>
                    </div>

                    <div class="border-top my-2"></div>
                    <div class="mb-3 text-muted fw-semibold">Trước đó</div>

                    <!-- Item: Cảnh báo trả trễ -->
                    <div class="py-3 d-flex align-items-start justify-content-between gap-3">
                        <div>
                            <div class="fw-semibold">Cảnh báo trả trễ</div>
                            <div class="text-muted small">Vui lòng trả xe sớm để tránh phát sinh chi phí</div>
                        </div>
                        <div class="text-nowrap small d-flex align-items-center gap-2">
                            <span class="text-muted fw-semibold">2:41 PM</span>
                        </div>
                    </div>
                </div>

                <!-- Chat Tab UI -->
                <div class="tab-pane fade" id="tab-chat">
                    <div class="row g-3">
                        <!-- Sidebar -->
                        <div class="col-12 col-md-4 d-none d-md-block">
                            <div class="chat-sidebar">
                                <div class="mb-2 text-muted fw-semibold">Hôm nay</div>
                                <div class="item d-flex align-items-center justify-content-between active">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://i.pravatar.cc/40?img=12" class="rounded-circle" width="36" height="36" alt="" />
                                        <div>
                                            <div class="name">Long Vũ</div>
                                            <div class="preview">hi a</div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fw-semibold" style="font-size:13px; color:#1D2939;">2:40 PM</span>
                                        <span class="dot-red"></span>
                                    </div>
                                </div>
                                <div class="item d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <img src="https://i.pravatar.cc/40?img=15" class="rounded-circle" width="36" height="36" alt="" />
                                        <div>
                                            <div class="name">Sang</div>
                                            <div class="preview">cám ơn bạn</div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="fw-semibold" style="font-size:13px; color:#1D2939;">2:42 PM</span>
                                        <span class="dot-red"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Chat Panel -->
                        <div class="col-12 col-md-8">
                            <div class="p-3 chat-card">
                                <div class="d-flex align-items-center gap-2 mb-2">
                                    <img id="chatAvatar" src="https://i.pravatar.cc/40?img=12" class="rounded-circle" width="36" height="36" alt="" />
                                    <div id="chatName" class="fw-semibold">Long Vũ</div>
                                </div>
                                <div class="text-center text-muted mb-2">Hôm nay</div>

                                <div id="chatMessages">
                                    <div class="message-bubble me mb-2">
                                        Anh ơi em gần tới rồi, khoảng 5 phút nữa tới chỗ hẹn nha.
                                        <div class="text-end msg-time">3:11pm</div>
                                    </div>

                                    <div class="d-flex align-items-start gap-2 mb-2">
                                        <img src="https://i.pravatar.cc/28?img=12" class="rounded-circle" width="24" height="24" alt="" />
                                        <div class="message-bubble other">Ok em, anh cũng đang ở gần đó rồi. Xe đậu ngay trước quán cà phê Highlands<div class="text-end msg-time">3:12pm</div></div>
                                    </div>

                                    <div class="d-flex align-items-start gap-2 mb-2">
                                        <img src="https://i.pravatar.cc/28?img=12" class="rounded-circle" width="24" height="24" alt="" />
                                        <div class="message-bubble other">em thấy là nhận ra liền<div class="text-end msg-time">3:12pm</div></div>
                                    </div>

                                    <div class="message-bubble me mb-3">em tới liền nha anh<div class="text-end msg-time">3:11pm</div></div>
                                </div>

                                <div class="d-flex align-items-center gap-2">
                                    <button class="plus-btn" type="button">+</button>
                                    <div class="flex-grow-1 input-wrap d-flex align-items-center gap-2">
                                        <input type="text" class="form-control border-0 shadow-0 p-0" placeholder="Message" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    // Sidebar click to switch conversation
    document.addEventListener('click', function(e) {
        const item = e.target.closest('.chat-sidebar .item');
        if (!item) return;
        document.querySelectorAll('.chat-sidebar .item').forEach(i => i.classList.remove('active'));
        item.classList.add('active');

        // Determine conversation
        const isSang = item.innerText.trim().startsWith('Sang');
        const chatName = document.getElementById('chatName');
        const chatAvatar = document.getElementById('chatAvatar');
        const chatMessages = document.getElementById('chatMessages');

        if (isSang) {
            chatName.textContent = 'Sang';
            chatAvatar.src = 'https://i.pravatar.cc/40?img=15';
            chatMessages.innerHTML = `
                <div class="message-bubble me mb-2">
                    Cám ơn bạn đã hỗ trợ, mình đã nhận xe rồi!
                    <div class="text-end msg-time">4:01pm</div>
                </div>
                <div class="d-flex align-items-start gap-2 mb-2">
                    <img src="https://i.pravatar.cc/28?img=15" class="rounded-circle" width="24" height="24" alt="" />
                    <div class="message-bubble other">Tuyệt vời, chúc bạn có chuyến đi vui vẻ nhé!<div class="text-end msg-time">4:02pm</div></div>
                </div>
                <div class="message-bubble me mb-3">Ok cảm ơn nhiều!<div class="text-end msg-time">4:03pm</div></div>
            `;
        } else {
            chatName.textContent = 'Long Vũ';
            chatAvatar.src = 'https://i.pravatar.cc/40?img=12';
            chatMessages.innerHTML = `
                <div class="message-bubble me mb-2">
                    Anh ơi em gần tới rồi, khoảng 5 phút nữa tới chỗ hẹn nha.
                    <div class="text-end msg-time">3:11pm</div>
                </div>
                <div class="d-flex align-items-start gap-2 mb-2">
                    <img src="https://i.pravatar.cc/28?img=12" class="rounded-circle" width="24" height="24" alt="" />
                    <div class="message-bubble other">Ok em, anh cũng đang ở gần đó rồi. Xe đậu ngay trước quán cà phê Highlands<div class="text-end msg-time">3:12pm</div></div>
                </div>
                <div class="d-flex align-items-start gap-2 mb-2">
                    <img src="https://i.pravatar.cc/28?img=12" class="rounded-circle" width="24" height="24" alt="" />
                    <div class="message-bubble other">em thấy là nhận ra liền<div class="text-end msg-time">3:12pm</div></div>
                </div>
                <div class="message-bubble me mb-3">em tới liền nha anh<div class="text-end msg-time">3:11pm</div></div>
            `;
        }
    });
</script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/notifications.blade.php ENDPATH**/ ?>