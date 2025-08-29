@extends('layouts.app')

@section('title', 'Chi tiết mã giảm giá - OTOD')

@section('content')
    <div class="container w-100">
        {{-- Header với nút quay về --}}
        <div class="page-header d-flex align-items-center mb-4">
            <button class="btn-back" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </button>
            <h5 class="fw-semibold mb-0 ms-3">Quay về</h5>
        </div>

        {{-- Banner Image --}}
        <div class="banner-container mb-3">
            <img src="{{ asset('/assets/images/banner-codes.png') }}" alt="Katinat Banner" class="banner-image">
        </div>

        <div class="container" style="max-width:680px;">
            <div class="p-3 p-md-4">
                <!-- Tiêu đề -->
                <div class="mb-3">
                    <div class="gift-title">[Katinat] Thẻ quà tặng Matcha Latte 50.000đ</div>
                </div>

                <!-- Hàng thông tin: Điểm & Hạn dùng -->
                <div class="row mb-3">
                    <div class="col-6 border-end">
                        <div class="muted text-black fw-normal">Điểm</div>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{ asset('/assets/images/ic-poin.png') }}" alt="coin" class="coin-image">
                            <span class="muted"><b class="text-black fw-normal">45</b> điểm</span>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="muted text-black fw-normal">Hạn dùng</div>
                        <div class="muted"><b class="text-black fw-normal">30/06/2024</b></div>
                    </div>
                </div>

                <!-- Nút đổi quà -->
                <div id="actionArea">
                    <button type="button" class="btn btn-exchange w-100" onclick="openSuccessModal()">Đổi quà</button>
                </div>

                <!-- Modal: Đổi quà thành công -->
                <div class="modal fade" id="exchangeSuccessModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content border-0 rounded-4 p-2 p-sm-3">
                            <div class="modal-body text-center">
                                <div class="success-icon mb-3 mx-auto d-flex align-items-center justify-content-center">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <h5 class="fw-semibold mb-2">Đổi quà thành công</h5>
                                <p class="text-muted mb-3 fs-6">
                                    Quà sẽ được gửi vào mục "Quà của tôi". Vui lòng sử dụng quà trước <b>30/06/2024</b>
                                </p>
                                <div class="mb-4 fs-6">
                                    <span class="text-muted">Số điểm còn lại:</span>
                                    <img src="{{ asset('/assets/images/ic-poin.png') }}" alt="coin" class="coin-image align-text-bottom ms-1 me-1" style="width:16px;height:16px;" />
                                    <b>319</b> <span class="text-muted">điểm</span>
                                </div>
                                <button id="btnAgreeExchange" type="button" class="btn btn-exchange w-100" data-bs-dismiss="modal">Đồng ý</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div
                style="
                    align-self: stretch;
                    padding-top: 16px;
                    flex-direction: column;
                    justify-content: flex-start;
                    align-items: flex-start;
                    display: inline-flex;
                "
            >
                <div
                    style="
                        align-self: stretch;
                        padding-left: 20px;
                        padding-right: 20px;
                        padding-top: 8px;
                        padding-bottom: 8px;
                        justify-content: center;
                        align-items: center;
                        gap: 8px;
                        display: inline-flex;
                    "
                >
                    <div style="flex: 1 1 0">
                        <span
                            style="
                                color: var(--Text-Secordary, #737272);
                                font-size: 14px;
                                font-family: Be Vietnam Pro;
                                font-weight: 400;
                                line-height: 20px;
                                word-wrap: break-word;
                            "
                        >
                            🎁 Hướng Dẫn Đổi Quà Trên Ứng Dụng OTOD<br />
                        </span>
                        <span
                            style="
                                color: var(--Text-Secordary, #737272);
                                font-size: 14px;
                                font-family: Be Vietnam Pro;
                                font-weight: 400;
                                line-height: 20px;
                                word-wrap: break-word;
                            "
                        >
                            1. Mở ứng dụng OTOD, chọn mục "Mã giảm giá và quà tặng" tại trang cá nhân.<br />
                            2. Duyệt qua các phần thưởng có sẵn và chọn món quà bạn muốn đổi.<br />
                            3. Nhấn "Đổi quà", sau đó xác nhận sử dụng điểm OTOD Rewards.<br />
                            4. Quà tặng sẽ được gửi vào mục "Quà của tôi". Bạn có thể sử dụng ngay hoặc lưu lại dùng sau.<br />
                        </span>
                        <span
                            style="
                                color: var(--Text-Secordary, #737272);
                                font-size: 14px;
                                font-family: Be Vietnam Pro;
                                font-weight: 400;
                                line-height: 20px;
                                word-wrap: break-word;
                            "
                        >
                            ⏰ Lưu ý: Mỗi phần thưởng có thời hạn sử dụng khác nhau. Vui lòng kiểm tra kỹ trước khi đổi.<br />
                            Chúc bạn đổi quà vui vẻ và nhận được nhiều ưu đãi hấp dẫn từ OTOD! 🌟
                        </span>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection

@section('styles')
<style>


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

    /* Banner Styles */
    .banner-container {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
       
    }

    .banner-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .banner-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
        padding: 20px;
    }

    .banner-title {
        color: white;
        font-size: 18px;
        font-weight: 600;
        
        margin: 0;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }

    /* Gift Card Info Styles */
    .gift-card-info {
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
    }

    .info-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .info-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
    }

    .info-label {
        color: #737272;
        font-size: 14px;
        font-weight: 500;
       
    }

    .info-value {
        display: flex;
        align-items: center;
        gap: 6px;
        color: #0A0A0A;
        font-size: 16px;
        font-weight: 600;
    }

    /* Exchange Button Styles */
    .exchange-button-container {
        text-align: center;
    }

    .btn-exchange {
        background: #2B4896;
        color: white;
        border: none;
        border-radius: 12px;
        padding: 16px 48px;
        font-size: 16px;
        font-weight: 600;
        
        cursor: pointer;
        transition: all 0.3s ease;
        min-width: 200px;
    }

    .btn-exchange:hover {
        background: #1e2a6b;
        transform: translateY(-2px);
        box-shadow: 0 4px 16px rgba(43, 72, 150, 0.3);
    }

    /* Instruction Card Styles */
    .instruction-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 20px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        display: flex;
        gap: 16px;
    }

    .instruction-icon {
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .instruction-content {
        flex: 1;
    }

    .instruction-title {
        color: #0A0A0A;
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 12px;
        
    }

    .instruction-list {
        margin: 0;
        padding-left: 16px;
        color: #737272;
        font-size: 14px;
        line-height: 1.6;
        
    }

    .instruction-list li {
        margin-bottom: 8px;
    }

    /* Terms Card Styles */
    .terms-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        margin-bottom: 24px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        display: flex;
        gap: 16px;
    }

    .terms-icon {
        flex-shrink: 0;
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .terms-content {
        flex: 1;
    }

    .terms-title {
        color: #0A0A0A;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 8px;
        
        line-height: 1.4;
    }

    .terms-desc {
        color: #737272;
        font-size: 14px;
        font-weight: 400;
        margin: 0;
        
        line-height: 1.4;
    }

    /* New styles for Bootstrap card layout */
    .gift-card {
        border: none;
        box-shadow: 0 6px 24px rgba(0,0,0,.06);
        border-radius: 14px;
    }
    .gift-title { font-weight: 800; font-size: 1.1rem; }
    .muted { color:#6c757d; }
    .v-divider { width:1px; background:#e9ecef; height:28px; margin:0 1rem; }
    .btn-exchange { background:#284896; color:#fff; font-weight:700; border-radius:12px; padding:.9rem 1rem; }
    .btn-exchange:hover { filter:brightness(.97); }

    /* Success modal styles */
    .success-icon {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background: #E8F5E9;
        color: #16A34A;
        font-size: 24px;
    }
    .redeem-code-container {
        border: 1px solid #E7E5E4;
        border-radius: 12px;
        overflow: hidden;
    }
    .redeem-code-content {
        padding: 16px;
    }
    /* Redeem code card */
    .redeem-card {
        background: #FFF3D6; /* full yellow background */
        border-radius-top-left: 12px;
        border-radius-top-right: 12px;
        padding: 16px;
    }
    .redeem-header { color:#6B5E3C; font-size:14px; text-align:center; }
    .redeem-code { color:#F5A623; font-weight:700; text-align:center; font-size:18px; letter-spacing: .5px; }
    .redeem-copy { cursor:pointer; color:#F5A623; margin-left:6px; }
    .barcode-box { height: 96px; margin: 12px auto 0; background: repeating-linear-gradient(90deg,#000 0 2px,transparent 2px 5px); border-radius:4px; }
    .redeem-note { color:#737272; font-size:13px; text-align:center; margin-top:12px; }

    /* Mobile responsive */
    @media (max-width: 768px) {
       

        .banner-title {
            font-size: 16px;
        }

        .gift-card-info {
            padding: 16px;
        }

        .info-row {
            gap: 20px;
        }

        .instruction-card,
        .terms-card {
            padding: 16px;
            gap: 12px;
        }

        .instruction-title {
            font-size: 15px;
        }

        .instruction-list {
            font-size: 13px;
        }

        .btn-exchange {
            padding: 14px 40px;
            font-size: 15px;
            min-width: 180px;
        }
    }

    @media (max-width: 576px) {
       

        .banner-title {
            font-size: 14px;
        }

        .gift-card-info {
            padding: 14px;
        }

        .info-item {
            gap: 6px;
        }

        .info-label {
            font-size: 13px;
        }

        .info-value {
            font-size: 14px;
        }

        .instruction-card,
        .terms-card {
            padding: 14px;
            gap: 10px;
        }

        .instruction-title {
            font-size: 14px;
        }

        .instruction-list {
            font-size: 12px;
        }

        .terms-title {
            font-size: 13px;
        }

        .terms-desc {
            font-size: 13px;
        }

        .btn-exchange {
            padding: 12px 36px;
            font-size: 14px;
            min-width: 160px;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    function openSuccessModal() {
        const modalEl = document.getElementById('exchangeSuccessModal');
        if (!modalEl) return;
        const modal = new bootstrap.Modal(modalEl);
        modal.show();
    }

    // Inject redeem code card after confirming on modal
    function showRedeemCode() {
        const actionArea = document.getElementById('actionArea');
        if (!actionArea) return;
        const code = '1234656556';
        actionArea.innerHTML = `
           <div class="redeem-code-container">
            <div class="redeem-card">
                <div class="redeem-header">Mã đổi quà</div> 
                <div class="redeem-code">${code}<i class="bi bi-clipboard redeem-copy" title="Sao chép" onclick="copyRedeemCode('${code}')"></i></div>
            </div>
            <div class="redeem-code-content">
                
                <div class="barcode-box"></div>
                <div class="redeem-note">Đưa mã cho thu ngân để được hưởng ưu đãi</div>
            </div>
           </div>
        `;
    }

    function copyRedeemCode(code) {
        navigator.clipboard?.writeText(code);
    }

    // Bind agree button to replace UI when modal closes
    document.addEventListener('DOMContentLoaded', function() {
        const agreeBtn = document.getElementById('btnAgreeExchange');
        if (agreeBtn) {
            agreeBtn.addEventListener('click', function() {
                showRedeemCode();
            });
        }
    });
    // Exchange gift function
    function exchangeGift() {
        // Show confirmation dialog
        if (confirm('Bạn có muốn đổi quà này với 45 điểm không?')) {
            // Show loading state
            const btn = document.querySelector('.btn-exchange');
            const originalText = btn.textContent;
            btn.textContent = 'Đang xử lý...';
            btn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                // Also show success modal
                openSuccessModal();
                
                // Reset button
                btn.textContent = originalText;
                btn.disabled = false;
                
                // Simulate navigation after a delay
                setTimeout(() => {
                    // window.location.href = '/gifts';
                    console.log('Redirecting to gifts page...');
                }, 1500);
            }, 2000);
        }
    }

    // Show message function
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

            animation: slideInRight 0.3s ease;
        `;
        toast.textContent = message;
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.animation = 'slideOutRight 0.3s ease';
            setTimeout(() => {
                toast.remove();
            }, 300);
        }, 3000);
    }

    // Add animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        
        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
</script>
@endsection
