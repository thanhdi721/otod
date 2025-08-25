@extends('layouts.app')

@section('title', 'Xác thực VNeID - OTOD')

@section('styles')
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

    .vneid-section-title {
        font-size: 1.2rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .image-upload-row {
        display: flex;
        gap: 2rem;
        margin-bottom: 2rem;
        justify-content: center;
    }

    .image-upload-column {
        flex: 1;
       
    }

    .image-upload-label {
        display: block;
        margin-bottom: 0.5rem;
        font-weight: 600;
        color: #333;
        text-align: center;
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
        font-size: 2rem;
        color: #6c757d;
        margin-bottom: 0.5rem;
        font-weight: bold;
    }

    .upload-text {
        color: #6c757d;
        font-size: 0.9rem;
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
        padding: 2rem 0;
    }

    @media (max-width: 768px) {
        .image-upload-row {
           
            gap: 1rem;
            align-items: center;
        }
        
        .verification-card {
            margin: 1rem;
            padding: 1rem;
        }

        .button-group {
            flex-direction: column;
        }
        
    .image-upload-area {
        min-height: unset;
       
    }
    }
</style>
@endsection

@section('content')
<div class="page-background">
    <div class="container">
        <div class="verification-card">
            
            
            <h1 class="verification-title">Xác thực thông tin</h1>
            
            <div class="progress-bar">
                <div class="progress-fill"></div>
            </div>
            
            <h3 class="vneid-section-title">Thông tin VNeID</h3>
            
            <div class="image-upload-row">
                <div class="image-upload-column">
                    <label class="image-upload-label">Ảnh VNeID 1</label>
                    <div class="image-upload-area" id="vneidImage1Area">
                        <div class="upload-icon">+</div>
                        <div class="upload-text">Chụp ảnh</div>
                        <input type="file" id="vneidImage1Input" accept="image/*" style="display: none;">
                    </div>
                </div>
                
                <div class="image-upload-column">
                    <label class="image-upload-label">Ảnh VNeID 2</label>
                    <div class="image-upload-area" id="vneidImage2Area">
                        <div class="upload-icon">+</div>
                        <div class="upload-text">Chụp ảnh</div>
                        <input type="file" id="vneidImage2Input" accept="image/*" style="display: none;">
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
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const vneidImage1Area = document.getElementById('vneidImage1Area');
    const vneidImage2Area = document.getElementById('vneidImage2Area');
    const vneidImage1Input = document.getElementById('vneidImage1Input');
    const vneidImage2Input = document.getElementById('vneidImage2Input');
    const updateBtn = document.getElementById('updateBtn');
    const skipBtn = document.getElementById('skipBtn');

    // Handle VNeID image 1 upload
    vneidImage1Area.addEventListener('click', function() {
        vneidImage1Input.click();
    });

    vneidImage1Input.addEventListener('change', function(e) {
        handleImageUpload(e, vneidImage1Area);
    });

    // Handle VNeID image 2 upload
    vneidImage2Area.addEventListener('click', function() {
        vneidImage2Input.click();
    });

    vneidImage2Input.addEventListener('change', function(e) {
        handleImageUpload(e, vneidImage2Area);
    });

    function handleImageUpload(e, area) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                area.innerHTML = `<img src="${e.target.result}" class="uploaded-image" alt="Uploaded VNeID">`;
                area.classList.add('has-image');
                checkFormCompletion();
            };
            reader.readAsDataURL(file);
        }
    }

    // Function to check if form is complete
    function checkFormCompletion() {
        const hasImage1 = vneidImage1Area.classList.contains('has-image');
        const hasImage2 = vneidImage2Area.classList.contains('has-image');
        
        if (hasImage1 && hasImage2) {
            updateBtn.classList.add('active');
            updateBtn.disabled = false;
        } else {
            updateBtn.classList.remove('active');
            updateBtn.disabled = true;
        }
    }

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
            alert('Đã bỏ qua bước xác thực VNeID');
        }
    });
});
</script>
@endsection
