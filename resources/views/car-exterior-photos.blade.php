@extends('layouts.app')

@section('title', 'Chụp hình ngoài xe - OTOD')

@section('content')
    <div class="container">
        <!-- Back Button and Title Section -->
        <div class="mt-5 mb-4">
            <div class="d-flex align-items-center mb-3">
                <a href="{{ route('car-prepare') }}" class="btn btn-back me-3">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <span class="back-text">Quay về</span>
            </div>

            <div class="title-section">
                <div class="d-flex align-items-center mb-2">
                    <h1 class="main-title fw-bold text-dark mb-0 me-2">Chụp hình ngoài xe</h1>
                    <div class="info-icon">
                        <i class="bi bi-info-circle"></i>
                    </div>
                </div>
                <p class="subtitle text-muted mb-0">Chụp ít nhất 4 bức ảnh để tiếp tục, tối đa 15 ảnh</p>
            </div>
        </div>

        <!-- Photo Grid -->
        <div class="photo-grid mb-5">
            <div class="row g-3">
                <!-- Photo Card 1: Front View -->
                <div class="col-6 col-md-3 " id="preview-1">
                    <div class="photo-contai">
                        <div class="photo-card" onclick="uploadPhoto(1)">
                            <input type="file" id="photo-1" accept="image/*" style="display: none;"
                                onchange="handlePhotoUpload(1, this)">
                            <div class="car-outline front-view">
                                <img src="{{ asset('/assets/images/car-ex-1.png') }}" alt="">
                            </div>
                            <div class="upload-section">
                                <i class="bi bi-camera"></i>
                                <span>Tải ảnh</span>
                            </div>
                        </div>
                    </div>
                    <div class="photo-label mt-2">1. Cản trước cách 3 bước</div>
                </div>

                <!-- Photo Card 2: Front Angled View -->
                <div class="col-6 col-md-3" id="preview-2">
                    <div class="photo-contai">
                        <div class="photo-card" onclick="uploadPhoto(2)">
                            <input type="file" id="photo-2" accept="image/*" style="display: none;"
                                onchange="handlePhotoUpload(2, this)">
                            <div class="car-outline front-angled">
                                <img src="{{ asset('/assets/images/car-ex-2.png') }}" alt="">
                            </div>
                            <div class="upload-section">
                                <i class="bi bi-camera"></i>
                                <span>Tải ảnh</span>
                            </div>

                        </div>
                    </div>
                    <div class="photo-label mt-2">2. Cản trước cách 3 bước</div>
                </div>

                <!-- Photo Card 3: Front-Left Quarter -->
                <div class="col-6 col-md-3" id="preview-3">
                    <div class="photo-contai">
                        <div class="photo-card" onclick="uploadPhoto(3)">
                            <input type="file" id="photo-3" accept="image/*" style="display: none;"
                                onchange="handlePhotoUpload(3, this)">
                            <div class="car-outline front-view">
                                <img src="{{ asset('/assets/images/car-ex-3.png') }}" alt="">
                            </div>
                            <div class="upload-section">
                                <i class="bi bi-camera"></i>
                                <span>Tải ảnh</span>
                            </div>

                        </div>
                    </div>
                    <div class="photo-label mt-2">3. Góc trước bên tài cách 3 bước</div>
                </div>

                <!-- Photo Card 4: Front-Right Quarter -->
                <div class="col-6 col-md-3" id="preview-4">
                    <div class="photo-contai">
                        <div class="photo-card" onclick="uploadPhoto(4)">
                            <input type="file" id="photo-4" accept="image/*" style="display: none;"
                                onchange="handlePhotoUpload(4, this)">
                            <div class="car-outline front-right">
                                <img src="{{ asset('/assets/images/car-ex-4.png') }}" alt="">
                            </div>
                            <div class="upload-section">
                                <i class="bi bi-camera"></i>
                                <span>Tải ảnh</span>
                            </div>

                        </div>
                    </div>
                    <div class="photo-label mt-2">4. Góc trước bên phụ cách 3 bước</div>
                </div>

                <!-- Photo Card 5: Rear-Left Quarter -->
                <div class="col-6 col-md-3" id="preview-5">
                    <div class="photo-contai">
                        <div class="photo-card" onclick="uploadPhoto(5)">
                            <input type="file" id="photo-5" accept="image/*" style="display: none;"
                                onchange="handlePhotoUpload(5, this)">
                            <div class="car-outline rear-left">
                                <img src="{{ asset('/assets/images/car-ex-5.png') }}" alt="">
                            </div>
                            <div class="upload-section">
                                <i class="bi bi-camera"></i>
                                <span>Tải ảnh</span>
                            </div>

                        </div>
                    </div>
                    <div class="photo-label mt-2">5. Góc sau bên tài cách 1 bước</div>
                </div>

                <!-- Photo Card 6: Rear-Right Quarter -->
                <div class="col-6 col-md-3" id="preview-6">
                    <div class="photo-contai">
                        <div class="photo-card" onclick="uploadPhoto(6)">
                            <input type="file" id="photo-6" accept="image/*" style="display: none;"
                                onchange="handlePhotoUpload(6, this)">
                            <div class="car-outline rear-right">
                                <img src="{{ asset('/assets/images/car-ex-6.png') }}" alt="">
                            </div>
                            <div class="upload-section">
                                <span>Tải ảnh</span>
                            </div>
                        </div>
                    </div>
                    <div class="photo-label mt-2">6. Góc sau bên phụ cách 1 bước</div>
                </div>

                <!-- Photo Card 7: Rear View -->
                <div class="col-6 col-md-3" id="preview-7">
                    <div class="photo-contai">
                        <div class="photo-card" onclick="uploadPhoto(7)">
                            <input type="file" id="photo-7" accept="image/*" style="display: none;"
                                onchange="handlePhotoUpload(7, this)">
                            <div class="car-outline rear-view">
                                <img src="{{ asset('/assets/images/car-ex-7.png') }}" alt="">
                            </div>
                            <div class="upload-section">
                                <i class="bi bi-camera"></i>
                                <span>Tải ảnh</span>
                            </div>

                        </div>
                    </div>
                    <div class="photo-label mt-2">7. Cản sau cách 3 bước</div>
                </div>
            </div>
        </div>

        <!-- Continue Button -->
        <div class="text-center text-lg-start">
            <a href="{{ route('car-confirm-prepare') }}" class="btn btn-continue btn-lg px-5 py-3">
                Tiếp tục
            </a>
        </div>
    </div>

    <style>
        .btn-back {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s ease;
        }

        .btn-back:hover {
            background: #e9ecef;
            color: #495057;
        }

        .back-text {
            font-size: 1rem;
            color: #6c757d;
            font-weight: 500;
        }

        .main-title {
            font-size: 2rem;
            color: #212529;
        }

        .info-icon {
            width: 24px;
            height: 24px;
            background: #e9ecef;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6c757d;
            font-size: 0.9rem;
        }

        .subtitle {
            font-size: 1rem;
            color: #6c757d;
        }

        .photo-card {
            background: #F4F4F4;
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            height: 160px;
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        .photo-card:hover {
            border-color: #233876;
            box-shadow: 0 4px 16px rgba(35, 56, 118, 0.1);
        }

        .car-outline {
            width: 80px;
            height: 60px;
            margin: 0 auto 1rem;
            background: #e3f2fd;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1976d2;
            font-size: 2rem;
        }

        .upload-section {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
        }

        .upload-section i {
            font-size: 1.5rem;
            color: #6c757d;
        }

        .upload-section span {
            font-size: 0.9rem;
            color: #6c757d;
            font-weight: 500;
        }

        .photo-label {
            font-size: 0.8rem;
            color: #495057;
            font-weight: 500;
            line-height: 1.3;
            margin-top: auto;
        }



        .btn-continue {
            background: #233876;
            border: none;
            color: white;
            font-weight: 600;
            border-radius: 12px;
            transition: all 0.3s ease;
            min-width: 200px;
        }

        .btn-continue:hover {
            background: #1a2a5e;
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 16px rgba(35, 56, 118, 0.3);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-title {
                font-size: 1.75rem;
            }

            .photo-card {
                display: flex;
                flex-direction: column;
                justify-content: center
            }

            .car-outline {
                width: 60px;
                height: 45px;
                font-size: 1.5rem;
            }

            .upload-section i {
                font-size: 1.25rem;
            }

            .upload-section span {
                font-size: 0.8rem;
            }

            .photo-label {
                font-size: 0.7rem;
            }

            .photo-grid {
                margin-bottom: 16px !important;
            }

            .btn-continue {
                width: 100%;
                padding: 0.75rem 2rem !important;
            }
        }

        @media (max-width: 480px) {
            .main-title {
                font-size: 1.5rem;
            }

            .subtitle {
                font-size: 0.9rem;
            }

            .photo-card {
                padding: 0.75rem;
            }

            .car-outline {
                width: 50px;
                height: 40px;
                font-size: 1.25rem;
            }

            .upload-section i {
                font-size: 1rem;
            }

            .upload-section span {
                font-size: 0.75rem;
            }

            .photo-label {
                font-size: 0.65rem;
            }
        }
    </style>

    <script>
        // Function to trigger file upload
        function uploadPhoto(photoNumber) {
            document.getElementById(`photo-${photoNumber}`).click();
        }

        // Function to handle photo upload
        function handlePhotoUpload(photoNumber, input) {
            const file = input.files[0];
            if (file) {
                // Validate file type
                if (!file.type.startsWith('image/')) {
                    alert('Vui lòng chọn file ảnh!');
                    return;
                }

                // Validate file size (max 5MB)
                if (file.size > 5 * 1024 * 1024) {
                    alert('File ảnh quá lớn! Vui lòng chọn file nhỏ hơn 5MB.');
                    return;
                }

                // Create preview
                const reader = new FileReader();
                reader.onload = function(e) {
                    const photoCard = input.closest('.photo-contai');

                    // Clear existing content and show uploaded image
                    photoCard.innerHTML =
                        `<img src="${e.target.result}" alt="Uploaded photo" style="width: 100%; height: 160px; object-fit: cover; border-radius: 8px;">`;

                    // Update photo count
                    updatePhotoCount();
                };

                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
