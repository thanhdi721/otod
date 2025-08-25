

<?php $__env->startSection('title', 'Xác thực thông tin - OTOD'); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .verification-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        max-width: 500px;
        margin: 2rem auto;
    }

    .verification-title {
        font-size: 1.5rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 1.5rem;
        text-align: center;
        position: relative;
    }

    .verification-title::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 3px;
        background: #ffc107;
        border-radius: 2px;
    }

    .document-section {
        margin-bottom: 2rem;
    }

    .document-section h3 {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 1rem;
    }

    .document-option {
        display: flex;
        align-items: center;
        padding: 1rem;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        margin-bottom: 0.75rem;
        cursor: pointer;
        transition: all 0.3s ease;
        background: white;
    }

    .document-option:hover {
        border-color: #007bff;
    }

    .document-option.selected {
        border-color: #ffc107;
        background-color: #fff3cd;
    }

    .radio-custom {
        width: 20px;
        height: 20px;
        border: 2px solid #dee2e6;
        border-radius: 50%;
        margin-right: 1rem;
        position: relative;
        flex-shrink: 0;
    }

    .document-option.selected .radio-custom {
        border-color: #ffc107;
        background-color: #ffc107;
    }

    .document-option.selected .radio-custom::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 8px;
        height: 8px;
        background: white;
        border-radius: 50%;
    }

    .document-text {
        font-size: 1rem;
        color: #333;
        margin: 0;
    }

    .verify-button {
        width: 100%;
        background: #2B4896;
        color: white;
        border: none;
        padding: 1rem;
        border-radius: 8px;
        font-size: 1.1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .verify-button:hover {
        background: #1e3a7a;
    }

    .verify-button:disabled {
        background: #6c757d;
        cursor: not-allowed;
    }

    .page-background {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        min-height: 100vh;
        padding: 2rem 0;
    }

    @media (max-width: 768px) {
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
            
            <div class="document-section">
                <h3>Chọn giấy tờ</h3>
                
                <div class="document-option selected" data-value="gplx">
                    <div class="radio-custom"></div>
                    <p class="document-text">GPLX*</p>
                </div>
                
                <div class="document-option" data-value="cccd">
                    <div class="radio-custom"></div>
                    <p class="document-text">CCCD</p>
                </div>
                
                <div class="document-option" data-value="vneid">
                    <div class="radio-custom"></div>
                    <p class="document-text">Tài khoản định danh điện tử VNeID</p>
                </div>
                
                <button class="verify-button" id="verifyBtn">Xác thực ngay</button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const documentOptions = document.querySelectorAll('.document-option');
    const verifyBtn = document.getElementById('verifyBtn');
    let selectedDocument = 'gplx'; // Default selection

    // Handle document option selection
    documentOptions.forEach(option => {
        option.addEventListener('click', function() {
            // Remove selected class from all options
            documentOptions.forEach(opt => opt.classList.remove('selected'));
            
            // Add selected class to clicked option
            this.classList.add('selected');
            
            // Update selected document value
            selectedDocument = this.dataset.value;
        });
    });

    // Handle verify button click
    verifyBtn.addEventListener('click', function() {
        if (selectedDocument === 'gplx') {
            // Redirect to GPLX verification page
            window.location.href = '<?php echo e(route("verification.gplx")); ?>';
        } else if (selectedDocument === 'cccd') {
            // Redirect to CCCD verification page
            window.location.href = '<?php echo e(route("verification.cccd")); ?>';
        } else if (selectedDocument === 'vneid') {
            // Redirect to VNeID verification page
            window.location.href = '<?php echo e(route("verification.vneid")); ?>';
        } else {
            // Handle other document types
            console.log('Selected document:', selectedDocument);
            alert('Chức năng xác thực ' + selectedDocument + ' sẽ được triển khai trong phiên bản tiếp theo!');
        }
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/verification.blade.php ENDPATH**/ ?>