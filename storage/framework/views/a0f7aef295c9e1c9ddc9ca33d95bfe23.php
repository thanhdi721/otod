

<?php $__env->startSection('title', 'Xác thực GPLX - OTOD'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .verification-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 2rem;
       
        margin: 2rem auto;
    }

    .verification-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 1.5rem;
        text-align: start;
        position: relative;
    }
   

    .progress-bar {
        width: 100%;
        height: 5px;
        background: #e9ecef;
        border-radius: 2px;
        margin: 1rem 0 2rem 0;
        overflow: hidden;
    }

    .progress-fill {
        height: 100%;
        background: #ffc107;
        border-radius: 2px;
        width: 20%;
        transition: width 0.3s ease;
    }


    .gplx-section-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .form-row {
        display: flex;
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .image-upload-area {
        flex: 1;
        min-height: 300px;
        border: 2px dashed #dee2e6;
        border-radius: 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        background: #f8f9fa;
    }

    .image-upload-area:hover {
        border-color: #007bff;
        background: #f0f8ff;
    }

    .image-upload-area.has-image {
        border: 2px solid #28a745;
        background: white;
    }

    .upload-icon {
        font-size: 3rem;
        color: #6c757d;
        margin-bottom: 1rem;
    }

    .upload-text {
        color: #6c757d;
        font-size: 1rem;
        text-align: center;
    }

    .uploaded-image {
        max-width: 100%;
        max-height: 280px;
        border-radius: 4px;
    }

    .form-fields {
        flex: 1;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #333;
    }

    .form-input {
        width: 100%;
        padding: 0.75rem;
        border: 2px solid #e9ecef;
        border-radius: 6px;
        font-size: 1rem;
        transition: border-color 0.3s ease;
    }

    .form-input:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
    }

    .update-button {
        background: #6c757d;
        color: white;
        border: none;
        padding: 0.75rem 2rem;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: 600;
        cursor: not-allowed;
        transition: background-color 0.3s ease;
        opacity: 0.6;
    }

    .update-button.active {
        background: #2B4896;
        cursor: pointer;
        opacity: 1;
    }

    .update-button.active:hover {
        background: #1e3a7a;
    }

    .instructions-section {
        margin-top: 2rem;
        padding-top: 2rem;
        border-top: 1px solid #e9ecef;
    }

    .instructions-header {
        align-self: stretch;
        color: #737272;
        font-size: 16px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 600;
        line-height: 24px;
        word-wrap: break-word;
        margin-bottom: 1rem;
    }

    .instructions-content {
        align-self: stretch;
        justify-content: flex-start;
        align-items: center;
        gap: 10px;
        display: inline-flex;
        width: 100%;
    }

    .instruction-text {
        color: #737272;
        font-size: 14px;
        font-family: 'Be Vietnam Pro', sans-serif;
        font-weight: 400;
        line-height: 20px;
        word-wrap: break-word;
        width: 100%;
    }

    .main-header {
        font-weight: 600;
        margin-bottom: 1rem;
        color: #333;
    }

    .section {
        margin-bottom: 1.5rem;
    }

    .section-title {
        font-weight: 600;
        margin-bottom: 0.5rem;
        color: #333;
    }

    .bullet-list {
        list-style: none;
        padding-left: 0;
        margin: 0;
    }

    .bullet-list li {
        position: relative;
        padding-left: 1.2rem;
        margin-bottom: 0.5rem;
        color: #737272;
    }

    .bullet-list li::before {
        content: '•';
        position: absolute;
        left: 0;
        top: 0;
        color: #737272;
        font-size: 14px;
    }

    .back-button {
        background: #6c757d;
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 6px;
        font-size: 0.9rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-bottom: 1rem;
    }

    .back-button:hover {
        background: #5a6268;
    }

    .page-background {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        min-height: 100vh;
        padding: 2rem 0;
    }

    @media (max-width: 768px) {
        .form-row {
            flex-direction: column;
            gap: 1rem;
        }
        
        .verification-card {
            margin: 1rem;
            padding: 1rem;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="page-background">
    <div class="container">
        <div class="verification-card">
           
            <h1 class="verification-title">Xác thực thông tin</h1>
            
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
            
            <h3 class="gplx-section-title">Thông tin GPLX</h3>
            
            <div class="form-row">
                <div class="image-upload-area" id="imageUploadArea">
                    <div class="upload-icon">
                        <i class="bi bi-camera"></i>
                    </div>
                    <div class="upload-text">Chụp ảnh</div>
                    <input type="file" id="imageInput" accept="image/*" style="display: none;">
                </div>
                
                <div class="form-fields">
                    <div class="form-group">
                        <label class="form-label">Số giấy phép lái xe</label>
                        <input type="text" class="form-input" id="licenseNumber" placeholder="0000-0000-0000">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Họ và tên</label>
                        <input type="text" class="form-input" id="fullName" placeholder="Họ và tên">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Ngày sinh</label>
                        <input type="text" class="form-input" id="birthDate" placeholder="dd/mm/yyyy">
                    </div>
                    
                    <button class="update-button" id="updateBtn" disabled>Cập nhật</button>
                </div>
            </div>

           
        </div>
         <!-- Instructions Section -->
            <div class="instructions-section">
                <div class="instructions-header">Hướng dẫn</div>
                <div class="instructions-content">
                    <div class="instruction-text">
                        <div class="main-header">📸 Hướng dẫn cách chụp hình Giấy phép lái xe trên OTOD</div>
                        
                        <div class="section">
                            <div class="section-title">1. Chụp mặt trước của GPLX</div>
                            <ul class="bullet-list">
                                <li>Đặt GPLX trên bề mặt phẳng (bàn, giấy trắng...) để dễ căn chỉnh.</li>
                                <li>Đảm bảo ánh sáng đầy đủ, tránh bóng đổ hoặc ánh sáng bị chói.</li>
                                <li>Chụp rõ toàn bộ mặt trước: Thấy rõ họ tên, số GPLX, ngày cấp, hạng bằng, ảnh chân dung và mã QR (nếu có).</li>
                                <li>Không bị mờ, lóa, nghiêng lệch.</li>
                                <li>Không dùng ảnh scan hoặc chỉnh sửa.</li>
                            </ul>
                        </div>
                        
                        <div class="section">
                            <div class="section-title">2. Kiểm tra trước khi gửi ảnh</div>
                            <ul class="bullet-list">
                                <li>Xem lại ảnh chụp đã rõ nét chưa.</li>
                                <li>Đảm bảo không bị che khuất, mất góc hoặc quá nhỏ.</li>
                                <li>Nếu cần, chụp lại đến khi đạt yêu cầu.</li>
                            </ul>
                        </div>
                        
                        <div class="section">
                            <div class="section-title">✅ Một số mẹo để chụp đẹp hơn</div>
                            <ul class="bullet-list">
                                <li>Dùng điện thoại có camera tốt, lau sạch ống kính trước khi chụp.</li>
                                <li>Bật chế độ auto-focus và chờ máy lấy nét rồi mới bấm chụp.</li>
                                <li>Nếu chụp vào buổi tối, nên chụp dưới ánh sáng trắng thay vì ánh sáng vàng để hình ảnh rõ ràng hơn.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const imageUploadArea = document.getElementById('imageUploadArea');
    const imageInput = document.getElementById('imageInput');
    const updateBtn = document.getElementById('updateBtn');

    // Handle image upload
    imageUploadArea.addEventListener('click', function() {
        imageInput.click();
    });

    imageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imageUploadArea.innerHTML = `<img src="${e.target.result}" class="uploaded-image" alt="Uploaded GPLX">`;
                imageUploadArea.classList.add('has-image');
                checkFormCompletion();
            };
            reader.readAsDataURL(file);
        }
    });

    // Function to check if all form fields are filled
    function checkFormCompletion() {
        const licenseNumber = document.getElementById('licenseNumber').value.trim();
        const fullName = document.getElementById('fullName').value.trim();
        const birthDate = document.getElementById('birthDate').value.trim();
        
        if (licenseNumber && fullName && birthDate) {
            updateBtn.classList.add('active');
            updateBtn.disabled = false;
        } else {
            updateBtn.classList.remove('active');
            updateBtn.disabled = true;
        }
    }

    // Add event listeners to form inputs
    document.getElementById('licenseNumber').addEventListener('input', checkFormCompletion);
    document.getElementById('fullName').addEventListener('input', checkFormCompletion);
    document.getElementById('birthDate').addEventListener('input', checkFormCompletion);

    // Handle update button
    updateBtn.addEventListener('click', function() {
        const licenseNumber = document.getElementById('licenseNumber').value;
        const fullName = document.getElementById('fullName').value;
        const birthDate = document.getElementById('birthDate').value;
        
        if (licenseNumber && fullName && birthDate) {
            this.textContent = 'Đang cập nhật...';
            this.disabled = true;
            
            setTimeout(() => {
                alert('Thông tin đã được cập nhật thành công!');
                this.textContent = 'Cập nhật';
                this.disabled = false;
            }, 2000);
        } else {
            alert('Vui lòng điền đầy đủ thông tin!');
        }
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/verification-gplx.blade.php ENDPATH**/ ?>