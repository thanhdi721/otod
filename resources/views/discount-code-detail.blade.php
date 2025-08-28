@extends('layouts.layout-with-sidebar')

@section('title', 'Chi tiết mã giảm giá - OTOD')

@section('content')
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        {{-- Header với nút quay về --}}
        <div class="page-header d-flex align-items-center mb-4">
            <button class="btn-back" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </button>
            <h5 class="fw-semibold mb-0 ms-3">Quay về</h5>
        </div>

        {{-- Banner Image --}}
        <div class="banner-container mb-4">
            <img src="{{ asset('/assets/images/voucher-refer.png') }}" alt="Katinat Banner" class="banner-image">
            <div class="banner-overlay">
                <div class="banner-content">
                    <h3 class="banner-title">[Katinat] Thẻ quà tặng Matcha Latte 50.000đ</h3>
                </div>
            </div>
        </div>

        {{-- Gift Card Info --}}
        <div class="gift-card-info mb-4">
            <div class="info-row">
                <div class="info-item">
                    <span class="info-label">Điểm</span>
                    <div class="info-value">
                        <i class="bi bi-star-fill text-warning"></i>
                        <span>45 điểm</span>
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-label">Hạn dùng</span>
                    <div class="info-value">30/06/2024</div>
                </div>
            </div>
        </div>

        {{-- Exchange Button --}}
        <div class="exchange-button-container mb-4">
            <button class="btn-exchange" onclick="exchangeGift()">
                Đổi quà
            </button>
        </div>

        {{-- Hướng Dẫn Đổi Quà --}}
        <div class="instruction-card">
            <div class="instruction-icon">
                <i class="bi bi-exclamation-triangle-fill text-warning"></i>
            </div>
            <div class="instruction-content">
                <h6 class="instruction-title">Hướng Dẫn Đổi Quà Trên Ứng Dụng OTOD</h6>
                <ol class="instruction-list">
                    <li>Mở ứng dụng OTOD, chọn mục "Mã giảm giá và quà tặng" tại trang chủ nhân.</li>
                    <li>Duyệt qua các phần thưởng có sẵn và chọn món quà bạn muốn đổi.</li>
                    <li>Nhấn "Đổi quà", sau đó xác nhận để đổi điểm OTOD Rewards.</li>
                    <li>Quà tặng sẽ được gửi qua mục "Sản cũa tôi". Sản cũa sẽ được lưu đây để bạn có thể sử dụng ngay hoặc lưu để dùng sau.</li>
                    <li>Lưu ý: Mỗi phần thưởng chỉ tính hợp lệ đổi một lần duy nhất.</li>
                </ol>
            </div>
        </div>

        {{-- Terms Card --}}
        <div class="terms-card">
            <div class="terms-icon">
                <i class="bi bi-info-circle-fill text-danger"></i>
            </div>
            <div class="terms-content">
                <h6 class="terms-title">Lưu ý: Mỗi phần thưởng chỉ tính hợp lệ đổi một lần duy nhất. Vui lòng kiểm tra kỹ trước khi đổi.</h6>
                <p class="terms-desc">Chúc bạn đổi quà vui vẻ và được nhiều ưu đãi hấp dẫn từ OTOD! :)</p>
            </div>
        </div>
    </div>
@endsection

@section('styles')
<style>
    /* Font import */
    @import url('https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700&display=swap');

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
        height: 200px;
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
        font-family: 'Be Vietnam Pro', sans-serif;
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
        font-family: 'Be Vietnam Pro', sans-serif;
    }

    .info-value {
        display: flex;
        align-items: center;
        gap: 6px;
        color: #0A0A0A;
        font-size: 16px;
        font-weight: 600;
        font-family: 'Be Vietnam Pro', sans-serif;
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
        font-family: 'Be Vietnam Pro', sans-serif;
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
        font-family: 'Be Vietnam Pro', sans-serif;
    }

    .instruction-list {
        margin: 0;
        padding-left: 16px;
        color: #737272;
        font-size: 14px;
        line-height: 1.6;
        font-family: 'Be Vietnam Pro', sans-serif;
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
        font-family: 'Be Vietnam Pro', sans-serif;
        line-height: 1.4;
    }

    .terms-desc {
        color: #737272;
        font-size: 14px;
        font-weight: 400;
        margin: 0;
        font-family: 'Be Vietnam Pro', sans-serif;
        line-height: 1.4;
    }

    /* Mobile responsive */
    @media (max-width: 768px) {
        .banner-container {
            height: 160px;
        }

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
        .banner-container {
            height: 140px;
        }

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
                showMessage('Đổi quà thành công! Quà đã được thêm vào "Sản của tôi"', 'success');
                
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
            font-family: 'Be Vietnam Pro', sans-serif;
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
