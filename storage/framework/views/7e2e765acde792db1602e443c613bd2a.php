

<?php $__env->startSection('title', 'Xác thực CCCD - OTOD'); ?>

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
        height: 4px;
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

    .cccd-section-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .form-group {
        margin-bottom: 2rem;
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

    .image-upload-row {
        display: flex;
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .image-upload-column {
        flex: 1;
    }

    .image-upload-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #333;
    }

    .image-upload-area {
        min-height: 250px;
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
        max-height: 230px;
        border-radius: 4px;
    }

    .button-group {
        display: flex;
        gap: 1rem;
        justify-content: flex-end;
        margin-top: 2rem;
    }

    .skip-button {
        background: white;
        color: #2B4896;
        border: 2px solid #2B4896;
        padding: 0.75rem 2rem;
        border-radius: 6px;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .skip-button:hover {
        background: #f8f9fa;
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
        .image-upload-row {
            flex-direction: column;
            gap: 1rem;
        }
        
        .verification-card {
            margin: 1rem;
            padding: 1rem;
        }

        .button-group {
            flex-direction: column;
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
            
            <h3 class="cccd-section-title">Thông tin CCCD</h3>
            
            <div class="form-group">
                <label class="form-label">Số CCCD</label>
                <input type="text" class="form-input" id="cccdNumber" placeholder="0000-0000-0000">
            </div>
            
            <div class="image-upload-row">
                <div class="image-upload-column">
                    <label class="image-upload-label">Mặt trước</label>
                    <div class="image-upload-area" id="frontImageArea">
                        <div class="upload-icon">
                            <i class="bi bi-camera"></i>
                        </div>
                        <div class="upload-text">Chụp ảnh</div>
                        <input type="file" id="frontImageInput" accept="image/*" style="display: none;">
                    </div>
                </div>
                
                <div class="image-upload-column">
                    <label class="image-upload-label">Mặt sau</label>
                    <div class="image-upload-area" id="backImageArea">
                        <div class="upload-icon">
                            <i class="bi bi-camera"></i>
                        </div>
                        <div class="upload-text">Chụp ảnh</div>
                        <input type="file" id="backImageInput" accept="image/*" style="display: none;">
                    </div>
                </div>
            </div>
            
            <div class="button-group">
                <button class="skip-button" id="skipBtn">Bỏ qua</button>
                <button class="update-button" id="updateBtn" disabled>Cập nhật</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const frontImageArea = document.getElementById('frontImageArea');
    const backImageArea = document.getElementById('backImageArea');
    const frontImageInput = document.getElementById('frontImageInput');
    const backImageInput = document.getElementById('backImageInput');
    const updateBtn = document.getElementById('updateBtn');
    const skipBtn = document.getElementById('skipBtn');
    const cccdNumber = document.getElementById('cccdNumber');

    // Handle front image upload
    frontImageArea.addEventListener('click', function() {
        frontImageInput.click();
    });

    frontImageInput.addEventListener('change', function(e) {
        handleImageUpload(e, frontImageArea);
    });

    // Handle back image upload
    backImageArea.addEventListener('click', function() {
        backImageInput.click();
    });

    backImageInput.addEventListener('change', function(e) {
        handleImageUpload(e, backImageArea);
    });

    function handleImageUpload(e, area) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                area.innerHTML = `<img src="${e.target.result}" class="uploaded-image" alt="Uploaded CCCD">`;
                area.classList.add('has-image');
                checkFormCompletion();
            };
            reader.readAsDataURL(file);
        }
    }

    // Function to check if form is complete
    function checkFormCompletion() {
        const hasCccdNumber = cccdNumber.value.trim().length > 0;
        const hasFrontImage = frontImageArea.classList.contains('has-image');
        const hasBackImage = backImageArea.classList.contains('has-image');
        
        if (hasCccdNumber && hasFrontImage && hasBackImage) {
            updateBtn.classList.add('active');
            updateBtn.disabled = false;
        } else {
            updateBtn.classList.remove('active');
            updateBtn.disabled = true;
        }
    }

    // Add event listeners
    cccdNumber.addEventListener('input', checkFormCompletion);

    // Handle update button
    updateBtn.addEventListener('click', function() {
        this.textContent = 'Đang cập nhật...';
        this.disabled = true;
        
        setTimeout(() => {
            alert('Thông tin đã được cập nhật thành công!');
            this.textContent = 'Cập nhật';
            this.disabled = false;
        }, 2000);
    });

    // Handle skip button
    skipBtn.addEventListener('click', function() {
        if (confirm('Bạn có chắc chắn muốn bỏ qua bước này?')) {
            alert('Đã bỏ qua bước xác thực CCCD');
        }
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/verification-cccd.blade.php ENDPATH**/ ?>