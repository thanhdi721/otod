@extends('layouts.app')

@section('title', 'Chat với OTOD AI')

@section('content')
    <div style="background:#F4F4F4;">
        <div class="container py-4 position-relative"  style="max-width:760px;">
            <div class="mb-3 d-flex align-items-center gap-2">
                <a href="javascript:history.back()" class="text-decoration-none text-dark d-inline-flex align-items-center">
                    <i class="bi bi-arrow-left me-2"></i> Quay về
                </a>
            </div>

            <h5 class="fw-bold mb-5">Chat với OTOD</h5>

            <div class="position-absolute d-none d-md-block" style="top:56px; right:24px;">
                
                   <img src="{{ asset('/assets/images/AIchat.png') }}" alt="OTOD" style="width:48px;height:48px;">
               
            </div>

            <div class="bg-white rounded-4 p-3 p-md-4 shadow-sm mx-auto">
                <style>
                    .ai-chat .message-bubble { max-width: 80%; border-radius: 16px; padding: .7rem .9rem; font-size: 14px; }
                    .ai-chat .msg-me { background:#2B4896; color:#fff; margin-left:auto; box-shadow:0 1px 0 rgba(0,0,0,.04) inset; }
                    .ai-chat .msg-bot { background:#F2F4F7; color:#111827; }
                    .ai-chat .msg-time { font-size:12px; color:#98A2B3; white-space:nowrap; }
                    .ai-chat .suggestion { background:#FEF0C7; color:#1F2937; border:1px solid #FEC84B; border-radius:12px; padding:.7rem .9rem; cursor:pointer; box-shadow:0 1px 2px rgba(16,24,40,.04); display:block; width:fit-content; max-width:80%; }
                    .ai-chat .input-wrap { border:1px solid #EAECF0; border-radius:24px; padding:6px 12px; }
                    .ai-chat .bot-avatar { width:28px; height:28px; border-radius:50%; overflow:hidden; display:inline-flex; align-items:center; justify-content:center; }
                    .ai-chat .check-badge { font-size:12px; margin-left:6px; opacity:.9; }
                </style>

                <div class="ai-chat">
                    <div class="text-center text-muted mb-3">Hôm nay</div>

                    <div id="chatArea">
                        <div class="d-flex flex-column align-items-end mb-2">
                            <div class="message-bubble msg-me">
                                Đăng ký thành viên OTOD
                                <div class="text-end msg-time">3:11pm <i class="bi bi-check2-all check-badge"></i></div>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-2 mb-2">
                            <div class="bot-avatar"><img src="{{ asset('/assets/images/AIchat.png') }}" alt="OTOD" style="width:28px;height:28px;"/></div>
                            <div class="message-bubble msg-bot">
                                Để có thể đặt xe, bạn cần đăng ký tài khoản và đăng nhập vào hệ thống OTOD. Bạn có thể dùng số điện thoại cá nhân hoặc qua Facebook, Google... Lưu ý cần xác thực số điện thoại trước khi đặt xe.
                                <div class="text-end msg-time">3:12pm</div>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-2 mb-2">
                            <div class="bot-avatar"><img src="{{ asset('/assets/images/AIchat.png') }}" alt="OTOD" style="width:28px;height:28px;"/></div>
                            <div>
                                <div class="suggestion mb-2" data-text="OTOD có yêu cầu gì về tiêu chuẩn xe không?">
                                    OTOD có yêu cầu gì về tiêu chuẩn xe không?
                                    <i class="bi bi-arrow-right-short fs-5 text-warning"></i>
                                </div>
                                <div class="suggestion" data-text="Tôi có thể thay đổi thông tin xe đã đăng ký không?">
                                    Tôi có thể thay đổi thông tin xe đã đăng ký không?
                                    <i class="bi bi-arrow-right-short fs-5 text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center gap-2 mt-3">
                        <button class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center" style="width:40px;height:40px; background-color: #f4f4f4; color: black; border-radius: 50%;" type="button">+</button>
                        <div class="flex-grow-1 input-wrap d-flex align-items-center gap-2">
                            <input id="aiInput" type="text" class="form-control border-0 shadow-0 p-0" placeholder="Message" />
                            <button id="aiSend" class="btn btn-primary" style="background:#2B4896; border-color:#2B4896;">Gửi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    // Simple mock bot reply for demo
    function appendMe(text) {
        const area = document.getElementById('chatArea');
        const wrap = document.createElement('div');
        wrap.className = 'message-bubble msg-me mb-2';
        wrap.innerHTML = `${text}<div class="text-end msg-time">${new Date().toLocaleTimeString([], {hour:'2-digit', minute:'2-digit'})}</div>`;
        area.appendChild(wrap);
        area.scrollTop = area.scrollHeight;
    }
    function appendBot(text) {
        const area = document.getElementById('chatArea');
        const row = document.createElement('div');
        row.className = 'd-flex align-items-start gap-2 mb-2';
        row.innerHTML = `<div class="bot-avatar"><i class="bi bi-robot"></i></div>
            <div class="message-bubble msg-bot">${text}<div class="text-end msg-time">${new Date().toLocaleTimeString([], {hour:'2-digit', minute:'2-digit'})}</div></div>`;
        area.appendChild(row);
        area.scrollTop = area.scrollHeight;
    }
    function mockAnswer(q) {
        if (q.toLowerCase().includes('tiêu chuẩn')) {
            return 'Xe cần đăng kiểm, bảo hiểm còn hiệu lực, vệ sinh sạch sẽ, và đáp ứng tiêu chuẩn an toàn cơ bản.';
        }
        if (q.toLowerCase().includes('thay đổi thông tin')) {
            return 'Bạn có thể cập nhật thông tin xe trong trang Quản lý xe. Một số trường cần xét duyệt lại.';
        }
        if (q.toLowerCase().includes('đăng ký')) {
            return 'Chọn Đăng ký/Đăng nhập, nhập số điện thoại và xác thực OTP để bắt đầu.';
        }
        return 'Mình chưa hiểu câu hỏi. Bạn có thể diễn đạt cụ thể hơn không?';
    }
    document.querySelectorAll('.suggestion').forEach(el => el.addEventListener('click', () => {
        const text = el.getAttribute('data-text');
        appendMe(text);
        setTimeout(() => appendBot(mockAnswer(text)), 500);
    }));
    document.getElementById('aiSend').addEventListener('click', () => {
        const input = document.getElementById('aiInput');
        const text = input.value.trim();
        if (!text) return;
        input.value = '';
        appendMe(text);
        setTimeout(() => appendBot(mockAnswer(text)), 500);
    });
    document.getElementById('aiInput').addEventListener('keydown', (e) => {
        if (e.key === 'Enter') document.getElementById('aiSend').click();
    });
</script>
@endsection


