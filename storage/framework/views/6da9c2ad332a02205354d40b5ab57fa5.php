<?php $__env->startSection('content'); ?>
    <div class="container w-100 mt-4" style="max-width: 800px">
        <!-- Header -->
        <div class="d-flex align-items-center mb-4">
            <a href="<?php echo e(route('car-list')); ?>" class="text-decoration-none me-3">
                <i class="bi bi-arrow-left fs-4 text-dark"></i>
            </a>
            <span class="mb-0 fw-bold text-dark fs-5 fs-md-3 fs-lg-2">Thêm xe mới</span>
        </div>

        <!-- Tab Navigation -->
        <div class="mb-4">
            <ul class="nav nav-tabs border-0" id="addCarTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active border-0 fw-bold text-dark" id="info-tab" data-bs-toggle="tab"
                        data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="true">
                        Thông tin xe
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link border-0 text-muted" id="images-tab" data-bs-toggle="tab"
                        data-bs-target="#images" type="button" role="tab" aria-controls="images" aria-selected="false">
                        Hình ảnh & giấy tờ
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link border-0 text-muted" id="surcharges-tab" data-bs-toggle="tab"
                        data-bs-target="#surcharges" type="button" role="tab" aria-controls="surcharges"
                        aria-selected="false">
                        Phụ phí
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link border-0 text-muted" id="price-tab" data-bs-toggle="tab" data-bs-target="#price"
                        type="button" role="tab" aria-controls="price" aria-selected="false">
                        Giá & lịch xe trống
                    </button>
                </li>
            </ul>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="addCarTabContent">
            <!-- Tab 1: Thông tin xe -->
            <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                <form>
                    <!-- Thông tin xe Section -->
                    <div class="mb-4">
                        <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-3">Thông tin xe</div>

                        <div class="row g-3">
                            <!-- Biển số xe -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="license_plate" value="51L-34565"
                                        required>
                                    <label for="license_plate">Biển số xe <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <!-- Hãng xe -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="brand" required>
                                        <option value="Huyndai" selected>Huyndai</option>
                                        <option value="Toyota">Toyota</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Kia">Kia</option>
                                        <option value="Mazda">Mazda</option>
                                    </select>
                                    <label for="brand">Hãng xe <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <!-- Mẫu xe -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="model" required>
                                        <option value="Accent 2024" selected>Accent 2024</option>
                                        <option value="Vios">Vios</option>
                                        <option value="City">City</option>
                                        <option value="Rio">Rio</option>
                                    </select>
                                    <label for="model">Mẫu xe <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <!-- Thời gian -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="dateInput" placeholder="Accent 2024">
                                    <label for="dateInput">Năm sản xuất <span class="text-danger">*</span></label>

                                    <!-- Calendar Button -->
                                    <button type="button" class="btn position-absolute border" id="timeButton"
                                        style="right: 0; top: 0; height: 58px; border-top-left-radius: 0; border-bottom-left-radius: 0; border-left: none !important; z-index: 10;">
                                        <img src="<?php echo e(asset('/assets/images/calendar-04.png')); ?>" alt="calendar">
                                    </button>

                                    <!-- Custom Calendar Picker -->
                                    <div id="calendarPicker"
                                        class="position-absolute bg-white border rounded-3 shadow-lg p-3"
                                        style="top: 100%; left: 0; z-index: 1000; min-width: 280px; display: none;">
                                        <!-- Calendar Header -->
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <span class="fw-bold" id="currentMonth">August 2025</span>
                                                <i class="bi bi-chevron-down text-muted"></i>
                                            </div>
                                            <div class="d-flex gap-1">
                                                <button class="btn btn-sm btn-light" onclick="previousMonth()">↑</button>
                                                <button class="btn btn-sm btn-light" onclick="nextMonth()">↓</button>
                                            </div>
                                        </div>

                                        <!-- Week Days -->
                                        <div class="d-flex mb-2">
                                            <div class="flex-fill text-center text-muted small fw-medium">Su</div>
                                            <div class="flex-fill text-center text-muted small fw-medium">Mo</div>
                                            <div class="flex-fill text-center text-muted small fw-medium">Tu</div>
                                            <div class="flex-fill text-center text-muted small fw-medium">We</div>
                                            <div class="flex-fill text-center text-muted small fw-medium">Th</div>
                                            <div class="flex-fill text-center text-muted small fw-medium">Fr</div>
                                            <div class="flex-fill text-center text-muted small fw-medium">Sa</div>
                                        </div>

                                        <!-- Calendar Grid -->
                                        <div id="calendarGrid" class="mb-3">
                                            <!-- Calendar days will be generated by JavaScript -->
                                        </div>

                                        <!-- Calendar Footer -->
                                        <div class="d-flex justify-content-between">
                                            <button class="btn btn-sm btn-outline-secondary"
                                                onclick="clearDate()">Clear</button>
                                            <button class="btn btn-sm btn-outline-primary"
                                                onclick="setToday()">Today</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Số ghế -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="seats" required>
                                        <option value="4" selected>4</option>
                                        <option value="5">5</option>
                                        <option value="7">7</option>
                                    </select>
                                    <label for="seats">Số ghế <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <!-- Truyền động -->
                            <div class="col-md-6">
                                <label class="form-label fw-medium">Truyền động <span class="text-danger">*</span></label>
                                <div class="d-flex gap-4">
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="transmission"
                                            id="automatic" value="automatic" checked>
                                        <label class="form-check-label" for="automatic">
                                            Số tự động
                                        </label>
                                    </div>
                                    <div class="form-check d-flex align-items-center">
                                        <input class="form-check-input" type="radio" name="transmission"
                                            id="manual" value="manual">
                                        <label class="form-check-label" for="manual">
                                            Số sàn
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Nhiên liệu -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select" id="fuel" required>
                                        <option value="Xăng" selected>Xăng</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Điện">Điện</option>
                                        <option value="Hybrid">Hybrid</option>
                                    </select>
                                    <label for="fuel">Nhiên liệu <span class="text-danger">*</span></label>
                                </div>
                            </div>

                            <!-- Mức tiêu thụ nhiên liệu -->
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control" id="consumption" value="10" required>
                                    <label for="consumption">Mức tiêu thụ nhiên liệu (Lít/100km) <span
                                            class="text-danger">*</span></label>
                                </div>
                            </div>

                            <!-- Giới thiệu xe -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="description" rows="4" placeholder="Giới thiệu về xe"
                                        style="height: 100px;"></textarea>
                                    <label for="description">Giới thiệu xe</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tiện ích Section -->
                    <div class="mb-4">
                        <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-3">Tiện ích</div>

                        <div class="row g-3">
                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer selected">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-0.png')); ?>" alt="map">
                                        </div>
                                        <span class="fw-medium">Bản đồ</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-1.png')); ?>" alt="camera">
                                        </div>
                                        <span class="fw-medium text-muted">Camera 360</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-2.png')); ?>" alt="camera">
                                        </div>
                                        <span class="fw-medium text-muted">Camera lùi</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-3.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Cảm biến va chạm</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-4.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Lốp dự phòng</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-5.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Túi khí an toàn</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-6.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Cảnh báo tốc độ</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-7.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Khe cắm USB</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-8.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Bluetooth</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-9.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Camera hành trình</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-10.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Cảm biến lốp</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-11.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Định vị GPS</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-12.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">ETC</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-13.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Camera cập lề</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-14.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Màn hình DVD</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-6">
                                <div class="utility-item p-3 border rounded-3 cursor-pointer">
                                    <div class="d-flex flex-column gap-2">
                                        <div>
                                            <img src="<?php echo e(asset('/assets/images/icon-15.png')); ?>" alt="sensor">
                                        </div>
                                        <span class="fw-medium text-muted">Cửa sổ trời</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Action Buttons -->
                    <div class="d-flex justify-content-end gap-3">
                        <button type="button" class="btn-back px-4" onclick="previousTab()"
                            style="background-color: #fff; color: #2B4896; border-radius: 8px; border: 1px solid #2B4896; padding: 10px 20px;">Quay
                            lại</button>
                        <button type="button" class="btn-continue px-4" onclick="nextTab()" id="continueBtn"
                            style="background-color: #2B4896; color: #fff; border-radius: 8px; border: none; padding: 10px 20px;">Tiếp
                            theo</button>
                    </div>
            </div>
        </div>
        <!-- Tab 2: Hình ảnh & giấy tờ -->
        <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
            <form>
                <!-- Phần tải lên hình ảnh -->
                <div class="mb-4">
                    <h3 class="fw-bold text-dark mb-3 fs-5 fs-md-4 fs-lg-3">Chụp ít nhất 4 bức ảnh để tiếp tục</h3>

                    <div class="row g-3">
                        <!-- Mặt trước -->
                        <div class="col-md-6 col-6">
                            <div class="photo-upload-item">
                                <span class="photo-label">Mặt trước</span>
                                <div class="photo-placeholder" onclick="triggerFileInput('front')">
                                    <div class="photo-content d-flex gap-1">
                                        <img src="<?php echo e(asset('/assets/images/camera-ic.png')); ?>" alt="camera"
                                            class="camera-icon">
                                        <span class="photo-text">Chụp ảnh</span>
                                    </div>
                                </div>
                                <input type="file" id="front" class="file-input" accept="image/*"
                                    style="display: none;">
                            </div>
                        </div>

                        <!-- Mặt sau -->
                        <div class="col-md-6 col-6">
                            <div class="photo-upload-item">
                                <span class="photo-label">Mặt sau</span>
                                <div class="photo-placeholder" onclick="triggerFileInput('rear')">
                                    <div class="photo-content d-flex gap-1">
                                        <img src="<?php echo e(asset('/assets/images/camera-ic.png')); ?>" alt="camera"
                                            class="camera-icon">
                                        <span class="photo-text">Chụp ảnh</span>
                                    </div>
                                </div>
                                <input type="file" id="rear" class="file-input" accept="image/*"
                                    style="display: none;">
                            </div>
                        </div>

                        <!-- Mặt trái -->
                        <div class="col-md-6 col-6">
                            <div class="photo-upload-item">
                                <span class="photo-label">Mặt trái</span>
                                <div class="photo-placeholder" onclick="triggerFileInput('left')">
                                    <div class="photo-content d-flex gap-1">
                                        <img src="<?php echo e(asset('/assets/images/camera-ic.png')); ?>" alt="camera"
                                            class="camera-icon">
                                        <span class="photo-text">Chụp ảnh</span>
                                    </div>
                                </div>
                                <input type="file" id="left" class="file-input" accept="image/*"
                                    style="display: none;">
                            </div>
                        </div>

                        <!-- Mặt phải -->
                        <div class="col-md-6 col-6">
                            <div class="photo-upload-item">
                                <span class="photo-label">Mặt phải</span>
                                <div class="photo-placeholder" onclick="triggerFileInput('right')">
                                    <div class="photo-content d-flex gap-1">
                                        <img src="<?php echo e(asset('/assets/images/camera-ic.png')); ?>" alt="camera"
                                            class="camera-icon">
                                        <span class="photo-text">Chụp ảnh</span>
                                    </div>
                                </div>
                                <input type="file" id="right" class="file-input" accept="image/*"
                                    style="display: none;">
                            </div>
                        </div>

                        <!-- Ảnh nội thất 1 -->
                        <div class="col-md-6 col-6">
                            <div class="photo-upload-item">
                                <span class="photo-label">Ảnh nội thất 1</span>
                                <div class="photo-placeholder" onclick="triggerFileInput('interior1')">
                                    <div class="photo-content d-flex gap-1">
                                        <img src="<?php echo e(asset('/assets/images/camera-ic.png')); ?>" alt="camera"
                                            class="camera-icon">
                                        <span class="photo-text">Chụp ảnh</span>
                                    </div>
                                </div>
                                <input type="file" id="interior1" class="file-input" accept="image/*"
                                    style="display: none;">
                            </div>
                        </div>

                        <!-- Ảnh nội thất 2 -->
                        <div class="col-md-6 col-6">
                            <div class="photo-upload-item">
                                <span class="photo-label">Ảnh nội thất 2</span>
                                <div class="photo-placeholder" onclick="triggerFileInput('interior2')">
                                    <div class="photo-content d-flex gap-1">
                                        <img src="<?php echo e(asset('/assets/images/camera-ic.png')); ?>" alt="camera"
                                            class="camera-icon">
                                        <span class="photo-text">Chụp ảnh</span>
                                    </div>
                                </div>
                                <input type="file" id="interior2" class="file-input" accept="image/*"
                                    style="display: none;">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Phần tải lên tài liệu -->
                <div class="mb-4">
                    <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-3">Tài sản thế chấp</div>

                    <div class="document-list">
                        <!-- Tài sản thế chấp -->
                        <div class="d-flex align-items-center justify-content-between gap-2 p-3"
                            style="background:#F4F4F4">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <img src="<?php echo e(asset('/assets/images/icon-16.png')); ?>" alt="piggy bank">
                            </div>
                            <div class="document-info">
                                <span class="document-title">Tài sản thế chấp</span>
                            </div>
                            <button type="button" class="document-add-btn" data-type="collateral"
                                onclick="openSetupModal('collateral')">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>

                        <!-- Giấy tờ thuê xe -->
                        <div class="d-flex align-items-center justify-content-between gap-2 p-3"
                            style="background:#F4F4F4">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <img src="<?php echo e(asset('/assets/images/icon-17.png')); ?>" alt="document">
                            </div>
                            <div class="document-info">
                                <span class="document-title">Giấy tờ thuê xe</span>
                            </div>
                            <button type="button" class="document-add-btn" data-type="rental"
                                onclick="openSetupModal('rental')">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>

                        <!-- Điều khoản thuê xe -->
                        <div class="d-flex align-items-center justify-content-between gap-2 p-3"
                            style="background:#F4F4F4">
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div>
                                    <img src="<?php echo e(asset('/assets/images/icon-18.png')); ?>" alt="terms">
                                </div>
                                <div class="document-info">
                                    Điều khoản thuê xe
                                </div>
                            </div>
                            <button type="button" class="document-add-btn" data-type="terms"
                                onclick="openSetupModal('terms')">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Action Buttons -->
                <div class="d-flex justify-content-end gap-3">
                    <button type="button" class="btn-back px-4" onclick="previousTab()"
                        style="background-color: #fff; color: #2B4896; border-radius: 8px; border: 1px solid #2B4896; padding: 10px 20px;">Quay
                        lại</button>
                    <button type="button" class="btn-continue px-4" onclick="nextTabFromImages()" id="continueBtn"
                        style="background-color: #2B4896; color: #fff; border-radius: 8px; border: none; padding: 10px 20px;">Tiếp
                        theo</button>
                </div>

            </form>
        </div>
        <!-- Tab 3: Phụ phí -->
        <div class="tab-pane fade" id="surcharges" role="tabpanel" aria-labelledby="surcharges-tab">
            <form>
                <!-- Giới hạn số km cho thuê/ngày -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-0">Giới hạn số km cho thuê/ngày</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="kmLimitToggle" checked>
                        </div>
                    </div>
                    <div class="surcharge-content p-3 border rounded-3 mb-3" id="kmLimitContent">
                        <div class="slider-group  mb-3">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-medium">Số km di chuyển tối đa</label>
                                <div class="slider-value">20km</div>
                            </div>
                            <div class="slider-container">
                                <input type="range" class="form-range" id="maxKmSlider" min="10" max="100"
                                    value="20">
                            </div>
                        </div>
                        <div class="slider-group">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-medium">Phí vượt giới hạn</label>
                                <div class="slider-value">5,000/km</div>
                            </div>
                            <div class="slider-container">
                                <input type="range" class="form-range" id="overLimitFeeSlider" min="1000"
                                    max="10000" step="500" value="5000">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quá giờ -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-0">Quá giờ</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="overtimeToggle" checked>
                        </div>
                    </div>
                    <div class="surcharge-content p-3 border rounded-3 mb-3" id="overtimeContent">
                        <div class="slider-group  mb-3">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-medium">Phí quá giờ</label>
                                <div class="slider-value">150.000/giờ</div>
                            </div>
                            <div class="slider-container">
                                <input type="range" class="form-range" id="overtimeFeeSlider" min="50000"
                                    max="300000" step="10000" value="150000">
                            </div>
                        </div>
                        <div class="slider-group ">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-medium">Tính giá 1 ngày nếu giờ quá</label>
                                <div class="slider-value">5 giờ</div>
                            </div>
                            <div class="slider-container">
                                <input type="range" class="form-range" id="overtimeDaySlider" min="1"
                                    max="10" value="5">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Vệ sinh xe -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-0">Vệ sinh xe</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="cleaningToggle" checked>
                        </div>
                    </div>
                    <div class="surcharge-content" id="cleaningContent">
                        <div class="slider-group p-3 border rounded-3 mb-3">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-medium">Phí vệ sinh</label>
                                <div class="slider-value">120.000/chuyến</div>
                            </div>
                            <div class="slider-container">
                                <input type="range" class="form-range" id="cleaningFeeSlider" min="50000"
                                    max="200000" step="10000" value="120000">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Khử mùi xe -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-0">Khử mùi xe</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="deodorizeToggle" checked>
                        </div>
                    </div>
                    <div class="surcharge-content" id="deodorizeContent">
                        <div class="slider-group p-3 border rounded-3 mb-3">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-medium">Khử mùi xe</label>
                                <div class="slider-value">120.000/chuyến</div>
                            </div>
                            <div class="slider-container">
                                <input type="range" class="form-range" id="deodorizeFeeSlider" min="50000"
                                    max="200000" step="10000" value="120000">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Giao xe tận nơi -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-0">Giao xe tận nơi</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="deliveryToggle" checked>
                        </div>
                    </div>
                    <div class="surcharge-content p-3 border rounded-3 mb-3" id="deliveryContent">
                        <div class="slider-group ">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-medium">Giao nhận tận nơi trong vòng</label>
                                <div class="slider-value">20km</div>
                            </div>
                            <div class="slider-container">
                                <input type="range" class="form-range" id="deliveryRangeSlider" min="5"
                                    max="50" value="20">
                            </div>
                        </div>
                        <div class="slider-group">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-medium">Phí giao xe 2 chiều</label>
                                <div class="slider-value">20.000/km</div>
                            </div>
                            <div class="slider-container">
                                <input type="range" class="form-range" id="deliveryFeeSlider" min="10000"
                                    max="50000" step="1000" value="20000">
                            </div>
                        </div>
                        <div class="slider-group">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-medium">Miễn phí giao xe trong vòng</label>
                                <div class="slider-value">0km</div>
                            </div>
                            <div class="slider-container">
                                <input type="range" class="form-range" id="freeDeliverySlider" min="0"
                                    max="20" value="0">
                            </div>
                        </div>
                        <div class="slider-group ">
                            <div class="d-flex justify-content-between">
                                <label class="form-label fw-medium">Giao nhận tại sân bay</label>
                                <div class="slider-value">200.000</div>
                            </div>
                            <div class="slider-container">
                                <input type="range" class="form-range" id="airportDeliverySlider" min="100000"
                                    max="500000" step="10000" value="200000">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Action Buttons -->
                <div class="d-flex justify-content-end gap-3">
                    <button type="button" class="btn-back px-4" onclick="previousTab()"
                        style="background-color: #fff; color: #2B4896; border-radius: 8px; border: 1px solid #2B4896; padding: 10px 20px;">Quay
                        lại</button>
                    <button type="button" class="btn-continue px-4" onclick=" nextTabFromSurcharges()" id="continueBtn"
                        style="background-color: #2B4896; color: #fff; border-radius: 8px; border: none; padding: 10px 20px;">Tiếp
                        theo</button>
                </div>
            </form>
        </div>
        <!-- Tab 4: Giá & lịch xe trống -->
        <div class="tab-pane fade" id="price" role="tabpanel" aria-labelledby="price-tab">
            <div class="py-3">
                <!-- Cho thuê tự lái/ngày -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-0">Cho thuê tự lái/ngày</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="selfDriveToggle" checked>
                        </div>
                    </div>
                    <div id="selfDriveContent" class="mt-3">
                        <div class="price-card p-3 border rounded-3 mb-3">
                            <div class="d-flex justify-content-between">
                                <span class="text-muted mb-2">Giá đề xuất theo ngày dựa trên các yếu tố</span>
                            </div>
                            <span class="fw-bold d-flex justify-content-center align-items-center fs-5 fs-md-4 fs-lg-3"
                                id="dailyPricePreview" style="color: #2B4896;">1.820.000đ/ngày</span>
                            <div class="slider-container">
                                <input type="range" id="dailyPriceSlider" style="width: 50%;" class="form-range "
                                    min="300000" max="3000000" step="10000" value="1820000">
                            </div>
                            <div class="mt-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <span class="text-muted">Giá niêm yết</span>
                                    <span class="fw-bold" style="color: #2B4896"
                                        id="listedPriceLabel">1.820.000đ/ngày</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">Thu nhập dự kiến</span>
                                    <span class="fw-bold" style="color: #2B4896"
                                        id="estimatedIncomeLabel">850.000đ/ngày</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tăng giá ngày cuối tuần -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-0">Tăng giá cuối tuần</div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="weekendToggle" checked>
                        </div>
                    </div>
                    <div id="weekendContent" class="mt-3">
                        <div class="price-card p-3 border rounded-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="text-muted">Chọn tỉ lệ tăng giá cuối tuần</span>
                            </div>
                            <span class="fw-bold d-flex justify-content-center align-items-center fs-5 fs-md-4 fs-lg-3"
                                id="weekendPercentLabel" style="color: #2B4896;">5%/ngày</span>
                            <div class="slider-container">
                                <input type="range" id="weekendPercent" style="width: 50%;" class="form-range"
                                    min="0" max="50" step="1" value="5">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lịch xe -->
                <div class="mb-4">
                    <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-3">Lịch xe</div>
                    <div class="calendar border rounded-3 p-3">
                        <div class="row g-3 align-items-start">
                            <div class="col-md-8">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <div class="fw-medium" id="priceCalMonthLabel">Tháng 4/2025</div>
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                            id="priceCalPrev">‹</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"
                                            id="priceCalNext">›</button>
                                    </div>
                                </div>
                                <div class="d-grid price-cal-grid mb-2">
                                    <div class="text-muted small text-center">Mon</div>
                                    <div class="text-muted small text-center">Tue</div>
                                    <div class="text-muted small text-center">Wed</div>
                                    <div class="text-muted small text-center">Thu</div>
                                    <div class="text-muted small text-center">Fri</div>
                                    <div class="text-muted small text-center">Sat</div>
                                    <div class="text-muted small text-center">Sun</div>
                                </div>
                                <div id="priceCalDays" class="d-grid price-cal-grid"></div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex flex-column gap-3 mt-3">
                                    <div class="d-flex align-items-center gap-2 small">
                                        <span class="legend legend-available"></span>
                                        <span>Đã thuê</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 small">
                                        <span class="legend legend-near"></span>
                                        <span>Cao điểm</span>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 small">
                                        <span class="legend legend-busy"></span>
                                        <span>Lịch bận</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="calendar-hint small">
                            <i class="bi bi-info-circle"></i>
                            <span>Click để cài lịch bận</span>
                        </div>
                    </div>
                </div>

                <!-- Thời gian giao & nhận xe -->
                <div class="surcharge-section mb-4">
                    <div class="fw-bold text-dark fs-5 fs-md-4 fs-lg-3 mb-3">Thời gian giao & nhận xe</div>
                    <div class="time-section">
                        <div class="time-row py-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted">Thời gian giao xe</span>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <div id="handoverSlots" class="d-flex align-items-center gap-2">

                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-2">
                                <button type="button" class="time-add text-decoration-none"
                                    style="border:none; background:transparent" data-type="handover"
                                    onclick="openTimeModal('handover')">+
                                    Thêm mốc</button>
                            </div>
                        </div>
                        <div class="time-row py-2">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-muted">Thời gian nhận xe</span>
                                <div class="d-flex align-items-center gap-2 flex-wrap">
                                    <div id="receiveSlots" class="d-flex align-items-center gap-2">

                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-2">
                                <button type="button" class="time-add text-decoration-none"
                                    style="border:none; background:transparent" data-type="receive"
                                    onclick="openTimeModal('receive')">+
                                    Thêm mốc</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Action Button -->
            <div class="d-flex justify-content-end gap-3">
                <button type="button" class="btn-back px-4" onclick="previousTab()"
                    style="background-color: #fff; color: #2B4896; border-radius: 8px; border: 1px solid #2B4896; padding: 10px 20px;">Quay
                    lại</button>
                <button type="button" class="btn-continue px-4" onclick="nextFromPrice()" id="continueBtn"
                    style="background-color: #2B4896; color: #fff; border-radius: 8px; border: none; padding: 10px 20px;">Tiếp
                    theo</button>
            </div>
        </div>
        </form>

    </div>

    <!-- Modal thêm mốc thời gian -->
    <div class="modal fade" id="timeSlotModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="timeSlotTitle">Thêm mốc thời gian nhận xe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group" id="timeOptions">
                        <label class="list-group-item d-flex align-items-center gap-2">
                            <input class="form-check-input" type="radio" name="timeOption" value="05:00 - 23:30"
                                checked>
                            05:00 - 23:30
                        </label>
                        <label class="list-group-item d-flex align-items-center gap-2">
                            <input class="form-check-input" type="radio" name="timeOption" value="09:00 - 23:30">
                            09:00 - 23:30
                        </label>
                        <label class="list-group-item d-flex align-items-center gap-2">
                            <input class="form-check-input" type="radio" name="timeOption" value="18:00 - 23:30">
                            18:00 - 23:30
                        </label>
                        <label class="list-group-item d-flex align-items-center gap-2">
                            <input class="form-check-input" type="radio" name="timeOption" value="custom">
                            Tuỳ chỉnh
                        </label>
                        <div id="customTimeRow" class="mt-2 d-none">
                            <div class="d-flex align-items-center gap-2">
                                <input type="time" class="form-control" id="customStart" value="09:00"
                                    style="max-width:140px">
                                <span>-</span>
                                <input type="time" class="form-control" id="customEnd" value="12:00"
                                    style="max-width:140px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="confirmTimeSlot()"
                        data-bs-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Setup Modals -->
    <div class="modal fade" id="collateralModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Thiết lập tài sản thế chấp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <label class="list-group-item d-flex align-items-start gap-2">
                            <input class="form-check-input mt-1" type="radio" name="collateralOption" value="none"
                                checked>
                            <div>
                                <div class="d-flex align-items-center gap-2 fw-semibold">
                                    <span>Không yêu cầu</span>
                                    <span class="booking-badge">Tăng tỉ lệ booking</span>
                                </div>
                                <div class="small text-muted">Khách thuê không thế chấp; tài khoản/xe máy</div>
                            </div>
                        </label>
                        <label class="list-group-item d-flex align-items-start gap-2">
                            <input class="form-check-input mt-1" type="radio" name="collateralOption" value="6m">
                            <div>
                                <div class="fw-semibold">5 triệu</div>
                                <div class="small text-muted">Tiền mặt/chuyển khoản cho chủ xe</div>
                            </div>
                        </label>
                        <label class="list-group-item d-flex align-items-start gap-2">
                            <input class="form-check-input mt-1" type="radio" name="collateralOption" value="10m">
                            <div>
                                <div class="fw-semibold">10 triệu</div>
                                <div class="small text-muted">Tiền mặt/chuyển khoản cho chủ xe</div>
                            </div>
                        </label>
                        <label class="list-group-item d-flex align-items-start gap-2">
                            <input class="form-check-input mt-1" type="radio" name="collateralOption" value="10m">
                            <div>
                                <div class="fw-semibold">15 triệu</div>
                                <div class="small text-muted">Tiền mặt/chuyển khoản cho chủ xe khi nhận xe hoặc Xe máy (kèm
                                    cà vẹt gốc) giá trị 15 triệu</div>
                            </div>
                        </label>
                        <label class="list-group-item d-flex align-items-start gap-2">
                            <input class="form-check-input mt-1" type="radio" name="collateralOption" value="10m">
                            <div>
                                <div class="fw-semibold">30 triệu</div>
                                <div class="small text-muted">Tiền mặt/chuyển khoản cho chủ xe khi nhận xe hoặc Xe máy (kèm
                                    cà vẹt gốc) giá trị 15 triệu</div>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        style="background-color: #2B4896 !important; color: #fff; border-radius: 8px; border: none; padding: 10px 20px;"
                        onclick="saveSetup('collateral')" data-bs-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rentalModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Giấy tờ thuê xe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="list-group">
                        <label class="list-group-item d-flex align-items-center gap-2">
                            <input class="form-check-input rental-radio" type="radio" name="rentalOption"
                                value="cccd" checked>
                            Đối chiếu bản gốc: GPLX & CCCD (Trên VNeID)
                            <span class="text-danger ms-auto fw-bold">*</span>
                        </label>
                        <label class="list-group-item d-flex align-items-center gap-2">
                            <input class="form-check-input rental-radio" type="radio" name="rentalOption"
                                value="passport">
                            Đối chiếu bản gốc: GPLX & Giữ lại Passport
                            <span class="text-danger ms-auto fw-bold">*</span>
                        </label>
                        <label class="list-group-item d-flex align-items-center gap-2">
                            <input class="form-check-input rental-radio" type="radio" name="rentalOption"
                                value="both">
                            Sử dụng linh hoạt cả 2 (dựa vào thực tế)
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        style="background-color: #2B4896 !important; color: #fff; border-radius: 8px; border: none; padding: 10px 20px;"
                        onclick="saveSetup('rental')" data-bs-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="termsModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold">Điều khoản thuê xe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span id="termsText" class="terms-text clamp-ellipsis">
                        Thời hạn thuê: Bên thuê có quyền sử dụng phương tiện trong thời gian từ ngày 15/04/2025 đến hết ngày
                        20/04/2025. Việc gia hạn phải được thông báo và thỏa thuận trước ít nhất 24 giờ.
                        Mục đích sử dụng: Xe chỉ được sử dụng cho mục đích di chuyển cá nhân trong phạm vi nội thành, không
                        sử dụng cho các hoạt động vận tải hàng hóa, đua xe hoặc vi phạm pháp luật.
                        Trách nhiệm của bên thuê:
                        Giữ gìn xe trong tình trạng tốt, không tự ý sửa chữa, thay đổi kết cấu xe.
                        Chịu mọi chi phí phát sinh do lỗi cá nhân trong quá trình sử dụng.
                        Trả xe đúng thời hạn và trong tình trạng như khi nhận.
                        Bảo hiểm & tai nạn: Xe đã được đăng ký bảo hiểm dân sự. Trong trường hợp tai nạn, bên thuê có trách
                        nhiệm thông báo ngay và phối hợp giải quyết theo quy định pháp luật.
                        Vi phạm hợp đồng: Trường hợp bên thuê vi phạm một trong các điều khoản trên, bên cho thuê có quyền
                        thu hồi xe và yêu cầu bồi thường thiệt hại phát sinh
                    </span>
                </div>
                <div class="modal-footer">
                    <button type="button"
                        style="background-color: #2B4896 !important; color: #fff; border-radius: 8px; border: none; padding: 10px 20px;"
                        onclick="saveSetup('terms')" data-bs-dismiss="modal">Lưu</button>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<style>
    /* Tab styling */
    .nav-tabs {
        flex-wrap: nowrap !important;
        overflow-x: auto;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        -ms-overflow-style: none;
        width: 100%;
        display: flex;
    }



    .nav-tabs::-webkit-scrollbar {
        display: none;
    }

    .nav-tabs .nav-item {
        flex-shrink: 0;
        white-space: nowrap;
    }

    .nav-tabs .nav-link {
        border: none;
        padding: 0.75rem 1rem;
        margin-right: 0.5rem;
        border-radius: 0;
        position: relative;
        white-space: nowrap;
        flex-shrink: 0;
        min-width: fit-content;
        max-width: none;
    }

    .nav-tabs .nav-link.active {
        background: none;
        border: none;
        color: #2B4896 !important;
    }

    .nav-tabs .nav-link.active::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 6px;
        background: #FEBA11;
        border-radius: 12px;
    }

    /* Mobile responsive adjustments */
    @media (max-width: 768px) {
        .nav-tabs .nav-link {
            padding: 0.5rem 0.75rem;
            font-size: 14px;
            margin-right: 0.25rem;
            min-width: auto;
        }
    }

    @media (max-width: 576px) {
        .nav-tabs .nav-link {
            padding: 0.4rem 0.6rem;
            font-size: 13px;
            margin-right: 0.2rem;
            min-width: auto;
        }
    }

    /* Utility items */
    .utility-item {
        transition: all 0.3s ease;
        cursor: pointer;
        background-color: #F4F4F4;
        height: 84px;
        display: flex;
        align-items: center;
        justify-content: start;
    }

    .utility-item:hover {
        border-color: #2B4896 !important;
        background-color: #f8f9ff;
    }

    .utility-item.selected {
        border-color: #2B4896 !important;
        background-color: #f8f9ff;
    }

    .utility-item.selected i,
    .utility-item.selected span {
        color: #2B4896 !important;
    }

    /* Form styling */
    .form-control,
    .form-select {
        border-radius: 8px;
        border: 1px solid #dee2e6;
        padding: 0.75rem;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #2B4896;
        box-shadow: 0 0 0 0.2rem rgba(43, 72, 150, 0.25);
    }

    /* Floating label styling */
    .form-floating {
        position: relative;
    }

    .form-floating>.form-control,
    .form-floating>.form-select {
        height: 58px;
        padding: 1rem 0.75rem 0.25rem;
    }

    .form-floating>label {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        padding: 1rem 0.75rem;
        pointer-events: none;
        border: 1px solid transparent;
        transform-origin: 0 0;
        transition: opacity 0.1s ease-in-out, transform 0.1s ease-in-out;
        color: #6c757d;
        font-size: 14px;
    }

    .form-floating>.form-control:focus~label,
    .form-floating>.form-control:not(:placeholder-shown)~label,
    .form-floating>.form-select~label {
        opacity: 0.65;
        transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
        color: #2B4896;
    }

    .form-floating>.form-control:focus~label,
    .form-floating>.form-select:focus~label {
        color: #2B4896;
    }

    /* Custom styling for date input with calendar button */
    .form-floating .form-control[readonly] {
        padding-right: 50px;
        background-color: #fff;
    }

    .form-floating .form-control[readonly]:focus {
        background-color: #fff;
    }

    .form-floating #timeButton {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-left: none;
        background-color: #fff;
    }

    .form-floating #timeButton:hover {
        background-color: #f8f9fa;
    }

    .form-floating #timeButton:focus {
        box-shadow: none;
        background-color: transparent;
    }


    .form-floating .d-flex:focus-within {
        border-color: #2B4896;
        box-shadow: 0 0 0 0.2rem rgba(43, 72, 150, 0.25);
    }

    /* Button styling */
    .btn-primary {
        background-color: #2B4896;
        border-color: #2B4896;
    }

    .btn-primary:hover {
        background-color: #1e3a7a;
        border-color: #1e3a7a;
    }

    /* Custom radio style - clean circle with inner dot */
    .form-check {
        gap: 8px;
    }

    .form-check-input[type="radio"] {
        -webkit-appearance: none;
        appearance: none;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: #fff;
        position: relative;
        margin: 0;
        cursor: pointer;
        vertical-align: middle;
        box-shadow: none;
        transition: border-color 0.15s ease, box-shadow 0.15s ease;
    }

    .form-check-input[type="radio"]:focus {
        box-shadow: 0 0 0 4px rgba(43, 72, 150, 0.15);
    }

    .form-check-input[type="radio"]:checked {
        background-color: #fff !important;
        border: 2px solid #2B4896;
    }

    .form-check-input[type="radio"]:checked::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 8px;
        height: 8px;
        border: 2px solid #2B4896;
        background: #2B4896;
        border-radius: 50%;
        transform: translate(-50%, -50%);
    }

    .form-check-label {
        font-weight: 500;
        color: #2b2f33;
        cursor: pointer;
    }

    /* Rental radio custom color */
    .rental-radio {
        -webkit-appearance: none;
        appearance: none;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: #fff;
        position: relative;
        margin: 0;
        cursor: pointer;
        vertical-align: middle;
        box-shadow: none;
        border: 2px solid #FEBA11;
    }

    .rental-radio:checked {
        border-color: #FEBA11 !important;
        background-color: #FEBA11 !important;
    }

    input.rental-radio:checked::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 8px;
        height: 8px;
        background: #FEBA11 !important;
        border: 2px solid #FEBA11 !important;
        border-radius: 50%;
        transform: translate(-50%, -50%);
    }

    /* Calendar Picker Styles */
    .calendar-day {
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        border-radius: 4px;
        font-size: 14px;
        transition: all 0.2s;
    }

    .calendar-day:hover {
        background-color: #f8f9fa;
    }

    .calendar-day.selected {
        background-color: #233876;
        color: white;
    }

    .calendar-day.other-month {
        color: #ccc;
    }

    .calendar-day.today {
        border: 2px solid #233876;
        font-weight: bold;
    }

    /* Hide inactive tabs completely to remove spacing */
    .tab-pane:not(.show) {
        display: none !important;
        height: 0;
        overflow: hidden;
        position: absolute;
        visibility: hidden;
    }

    .tab-content {
        position: relative;
    }

    /* Clamp long terms text to show ellipsis */
    .terms-text {
        display: -webkit-box;
        -webkit-line-clamp: 6;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .booking-badge {
        background: #BBF7D4;
        color: #0f5132;
        border-radius: 999px;
        padding: 4px 10px;
        font-size: 12px;
        font-weight: 600;
        line-height: 1;
    }

    /* Setup modal option cards */
    .modal .list-group {
        gap: 12px;
    }

    .modal .list-group .list-group-item {
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 14px 16px;
        background: #fff;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.03);
    }

    /* Loại bỏ border dính liền mặc định của list-group */
    .modal .list-group .list-group-item+.list-group-item {
        border-top-width: 1px;
    }

    /* Active state for selected option (CSS :has for modern browsers) */
    .modal .list-group .list-group-item:has(input:checked),
    .modal .list-group .list-group-item.active-option {
        background: #FFF8E7;
        border-color: #FEBA11;
        box-shadow: 0 0 0 2px rgba(254, 186, 17, 0.15);
    }

    /* Photo Upload Styles */
    .photo-upload-item {
        position: relative;
    }

    .photo-placeholder {
        width: 100%;
        height: 187px;
        background-color: #f8f9fa;
        border: 1px dashed #dee2e6;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .photo-placeholder:hover {
        border-color: #2B4896;
        background-color: #f8f9ff;
    }

    .photo-placeholder.has-image {
        background-color: #f8f9ff;
    }

    .photo-content {
        display: flex;
        align-items: center;
        text-align: center;
    }

    .camera-icon {
        width: 24px;
        height: 24px;
        margin-bottom: 8px;
        opacity: 0.6;
    }

    .photo-text {
        font-size: 14px;
        color: #6c757d;
        font-weight: 500;
        margin-bottom: 4px;
    }

    .photo-label {
        font-size: 12px;
        color: #adb5bd;
    }

    .photo-preview {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    .photo-preview-container {
        position: relative;
        width: 100%;
        height: 100%;
        border-radius: 10px;
        overflow: hidden;
    }

    .edit-icon-overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.6);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        opacity: 0;
    }

    .photo-preview-container:hover .edit-icon-overlay {
        opacity: 1;
    }

    /* Document Upload Styles */
    .document-list {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .document-item {
        display: flex;
        align-items: center;
        padding: 16px;
        background-color: #f8f9fa;
        border-radius: 12px;
        border: 1px solid #e9ecef;
        transition: all 0.3s ease;
    }

    .document-item:hover {
        border-color: #2B4896;
        background-color: #f8f9ff;
    }

    .document-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 16px;
    }

    .document-icon img {
        width: 20px;
        height: 20px;
        filter: brightness(0) invert(1);
    }

    .document-info {
        flex: 1;
    }

    .document-title {
        font-weight: 500;
        color: #343a40;
        font-size: 14px;
    }

    .document-add-btn {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        border: 1px solid #2B4896;
        background-color: #fff;
        color: #2B4896;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .document-add-btn:hover {
        background-color: #2B4896;
        color: #fff;
    }

    .document-add-btn img {
        transition: all 0.3s ease;
    }

    .document-add-btn:hover img {
        /* Không áp dụng filter để giữ màu gốc của icon */
    }

    /* Button states */
    .btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    @media (max-width: 768px) {
        .photo-placeholder {
            height: 108px;
        }

        .action-buttons {
            justify-content: space-between !important;
        }

        .btn-back,
        .btn-continue {
            width: 100%;
            padding: 14px 20px;
            font-size: 16px;
        }
    }

    /* Surcharge Styles */
    .surcharge-section {
        background-color: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
        border: 1px solid #e9ecef;
    }

    .surcharge-section h4 {
        font-size: 16px;
        color: #343a40;
    }

    .surcharge-content {
        transition: all 0.3s ease;
    }

    .surcharge-content.hidden {
        display: none;
    }

    .slider-group {
        margin-bottom: 20px;
    }

    .slider-group:last-child {
        margin-bottom: 0;
    }

    .slider-group label {
        font-size: 14px;
        color: #495057;
        margin-bottom: 8px;
    }

    .slider-container {
        position: relative;
        padding: 10px 0;
    }

    .form-range {
        width: 100%;
        height: 6px;
        background: transparent;
        border-radius: 3px;
        outline: none;
        -webkit-appearance: none;
        appearance: none;
    }

    .form-range::-webkit-slider-runnable-track {
        background: linear-gradient(to right, #2BB1FF 0%, #FFE47A var(--fill-pct, 0%), #dee2e6 var(--fill-pct, 0%), #dee2e6 100%);
        height: 6px;
        border-radius: 3px;
        position: relative;
    }

    .form-range::-moz-range-track {
        background: linear-gradient(to right, #2BB1FF 0%, #FFE47A var(--fill-pct, 0%), #dee2e6 var(--fill-pct, 0%), #dee2e6 100%);
        height: 6px;
        border-radius: 3px;
        border: none;
    }

    /* Track sẽ hiển thị gradient dựa trên --fill-pct */

    .form-range {
        position: relative;
        z-index: 2;
    }

    .form-range::-webkit-slider-thumb {
        -webkit-appearance: none;
        appearance: none;
        width: 20px;
        height: 20px;
        background: #2B4896;
        border-radius: 50%;
        cursor: pointer;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .form-range::-moz-range-thumb {
        width: 20px;
        height: 20px;
        background: #2B4896;
        border-radius: 50%;
        cursor: pointer;
        border: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    .slider-value {
        font-size: 16px;
        font-weight: 700;
        text-align: center;
    }

    /* Price calendar */
    .price-cal-grid {
        grid-template-columns: repeat(7, 1fr);
        gap: 6px;
    }

    .price-day {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        font-size: 14px;
        border: 1px solid #e9ecef;
        background: #ffffff;
        margin: 0 auto;
    }

    .price-day.muted {
        color: #c0c4c7;
    }

    .price-day.selected {
        background: #2B4896;
        color: #fff;
        border-color: #2B4896;
    }

    .price-day.range {
        background: #3d57a5;
        color: #fff;
        border-color: #3d57a5;
    }

    .price-day.day-available {
        border-color: #16a34a;
    }

    .price-day.day-peak {
        border-color: #FEBA11;
    }

    .price-day.day-busy {
        background: #2B4896;
        color: #fff;
        border-color: #2B4896;
    }

    .legend {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: inline-block;
    }

    .legend-available {
        background: #16a34a;
    }

    .legend-near {
        background: #FEBA11;
    }

    .legend-busy {
        background: #2B4896;
    }

    /* Center sliders in price cards */
    .price-card .slider-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Hint bottom-right inside calendar */
    .calendar {
        position: relative;
    }

    .calendar-hint {
        position: absolute;
        right: 12px;
        bottom: 8px;
        color: #6c757d;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    @media (max-width: 768px) {
        .calendar-hint {
            position: static;
            margin-top: 8px;
        }

        /* Legend horizontal on mobile */
        .calendar .col-md-4 .d-flex.flex-column {
            flex-direction: row !important;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .calendar .col-md-4 .d-flex.flex-column>.d-flex {
            gap: 8px;
        }
    }

    /* Time section styles */
    .time-section .time-row+.time-row {
        border-top: 1px solid #e9ecef;
    }

    .time-add {
        color: #2B4896;
        font-weight: 600;
    }

    .time-slot {
        background: #f8f9fa;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        padding: 6px 10px;
    }

    .time-remove {
        cursor: pointer;
    }

    /* Toggle Switch Styles (match design) */
    .form-check.form-switch .form-check-input {
        width: 44px;
        height: 24px;
        background-color: #E6EEF7;
        border: 1px solid #C9D7EF;
        border-radius: 999px;
        cursor: pointer;
        position: relative;
        transition: background-color 0.25s ease, border-color 0.25s ease;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.06);
        background-image: none !important;
        /* Loại bỏ knob mặc định của Bootstrap */
        -webkit-appearance: none;
        appearance: none;
    }

    .form-check.form-switch .form-check-input:focus {
        box-shadow: 0 0 0 3px rgba(43, 72, 150, 0.15);
    }

    .form-check.form-switch .form-check-input::before {
        content: '';
        position: absolute;
        width: 18px;
        height: 18px;
        border-radius: 50%;
        background-color: #ffffff;
        top: 1px;
        left: 3px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.04);
        transition: left 0.25s ease;
    }

    .form-check.form-switch .form-check-input:checked {
        background-color: #2B4896;
        border-color: #2B4896;
    }

    .form-check.form-switch .form-check-input:checked::before {
        left: calc(100% - 3px - 18px);
    }
</style>

<script>
    // Utility item selection
    document.querySelectorAll('.utility-item').forEach(item => {
        item.addEventListener('click', function() {
            this.classList.toggle('selected');
        });
    });

    // Next tab function (Info -> Images)
    function nextTab() {
        const nextTabEl = document.getElementById('images-tab');
        if (!nextTabEl) return;
        new bootstrap.Tab(nextTabEl).show();
    }

    // Previous tab function
    // Previous from Images -> Info, Surcharges -> Images, Price -> Surcharges will call dedicated helpers below
    function previousTab() {
        const infoEl = document.getElementById('info-tab');
        if (!infoEl) return;
        new bootstrap.Tab(infoEl).show();
    }

    // Next tab from images
    function nextTabFromImages() {
        const el = document.getElementById('surcharges-tab');
        if (!el) return;
        new bootstrap.Tab(el).show();
    }

    // Previous tab from surcharges
    function previousTabFromSurcharges() {
        const el = document.getElementById('images-tab');
        if (!el) return;
        new bootstrap.Tab(el).show();
    }

    // Next tab from surcharges
    function nextTabFromSurcharges() {
        const el = document.getElementById('price-tab');
        if (!el) return;
        new bootstrap.Tab(el).show();
    }

    // Next from Price -> Kiểm tra thiết lập (placeholder route)
    function nextFromPrice() {
        window.location.href = '<?php echo e(route('check-settings')); ?>';
    }

    // Photo upload functionality
    let uploadedPhotos = 0;
    const requiredPhotos = 6;

    function triggerFileInput(inputId) {
        document.getElementById(inputId).click();
    }

    // Handle file input change
    document.addEventListener('DOMContentLoaded', function() {
        const fileInputs = document.querySelectorAll('.file-input');

        fileInputs.forEach(input => {
            input.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    handleImageUpload(this.id, file);
                }
            });
        });
    });

    function handleImageUpload(inputId, file) {
        const placeholder = document.querySelector(`#${inputId}`).parentElement.querySelector('.photo-placeholder');
        const reader = new FileReader();

        reader.onload = function(e) {
            // Clear existing content
            placeholder.innerHTML = '';

            // Create container for image and edit icon
            const container = document.createElement('div');
            container.className = 'photo-preview-container';

            // Create image preview
            const img = document.createElement('img');
            img.src = e.target.result;
            img.className = 'photo-preview';
            container.appendChild(img);

            // Create edit icon overlay
            const editOverlay = document.createElement('div');
            editOverlay.className = 'edit-icon-overlay';
            editOverlay.onclick = function() {
                triggerFileInput(inputId);
            };

            const editIcon = document.createElement('img');
            editIcon.src = "<?php echo e(asset('/assets/images/fr-edit.png')); ?>";
            editIcon.alt = 'edit';
            editOverlay.appendChild(editIcon);

            container.appendChild(editOverlay);
            placeholder.appendChild(container);

            // Add has-image class
            placeholder.classList.add('has-image');

            // Update counter
            if (!placeholder.dataset.counted) {
                uploadedPhotos++;
                placeholder.dataset.counted = 'true';
                updateContinueButton();
            }
        };

        reader.readAsDataURL(file);
    }

    function updateContinueButton() {
        const continueBtn = document.getElementById('continueBtn');
        if (uploadedPhotos >= requiredPhotos) {
            continueBtn.disabled = false;
            continueBtn.classList.remove('btn-secondary');
            continueBtn.classList.add('btn-primary');

            // Thay đổi button thành dấu tick xanh
            continueBtn.innerHTML = `
                <img src="<?php echo e(asset('/assets/images/fr-tick.png')); ?>" alt="tick" style="width: 20px; height: 20px; margin-right: 8px;">
                Hoàn thành
            `;
        } else {
            continueBtn.disabled = true;
            continueBtn.classList.remove('btn-primary');
            continueBtn.classList.add('btn-secondary');

            // Giữ nguyên button gốc
            continueBtn.innerHTML = 'Tiếp tục';
        }

        // Cập nhật tất cả các button "+" trong document upload
        updateDocumentButtons();
    }

    function updateDocumentButtons() {
        const documentButtons = document.querySelectorAll('.document-add-btn');

        documentButtons.forEach(button => {
            if (uploadedPhotos >= requiredPhotos) {
                // Thay thế icon plus bằng icon tick
                button.innerHTML =
                    `<img src="<?php echo e(asset('/assets/images/fr-tick.png')); ?>" alt="tick" style="width: 25px; height: 25px;">`;
                button.style.backgroundColor = 'transparent';
                button.style.borderColor = 'transparent';
            } else {
                // Giữ nguyên icon plus
                button.innerHTML = `<i class="bi bi-plus"></i>`;
                button.style.backgroundColor = '#fff';
                button.style.color = '#2B4896';
                button.style.borderColor = '#2B4896';
            }
        });
    }

    // Document upload functionality
    function addDocument(type) {
        // Create file input for document
        const input = document.createElement('input');
        input.type = 'file';
        input.accept = '.pdf,.doc,.docx,.jpg,.jpeg,.png';
        input.style.display = 'none';

        input.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                handleDocumentUpload(type, file);
            }
        });

        document.body.appendChild(input);
        input.click();

        // Clean up
        setTimeout(() => {
            document.body.removeChild(input);
        }, 1000);
    }

    function handleDocumentUpload(type, file) {
        // Here you would typically upload the file to server
        // For now, we'll just show a success message
        const documentItem = document.querySelector(`[onclick="addDocument('${type}')"]`).closest('.document-item');

        // Add success indicator
        const successIcon = document.createElement('div');
        successIcon.innerHTML = '<i class="bi bi-check-circle-fill text-success"></i>';
        successIcon.style.marginLeft = '8px';

        documentItem.appendChild(successIcon);

        // Show success message
        alert(`Tài liệu ${type} đã được tải lên thành công!`);
    }

    // Calendar Picker Functions
    let currentDate = new Date();
    let selectedDate = null;

    function toggleCalendar() {
        const calendar = document.getElementById('calendarPicker');

        if (calendar.style.display === 'none' || calendar.style.display === '') {
            calendar.style.display = 'block';
            renderCalendar();
        } else {
            calendar.style.display = 'none';
        }
    }

    function renderCalendar() {
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();

        // Update month/year display
        const monthElement = document.getElementById('currentMonth');

        if (monthElement) {
            monthElement.textContent = currentDate.toLocaleDateString('en-US', {
                month: 'long',
                year: 'numeric'
            });
        }

        const firstDay = new Date(year, month, 1);
        const lastDay = new Date(year, month + 1, 0);
        const startDate = new Date(firstDay);
        startDate.setDate(startDate.getDate() - firstDay.getDay());

        const calendarGrid = document.getElementById('calendarGrid');

        if (!calendarGrid) {
            return;
        }

        calendarGrid.innerHTML = '';

        for (let week = 0; week < 6; week++) {
            const weekDiv = document.createElement('div');
            weekDiv.className = 'd-flex';

            for (let day = 0; day < 7; day++) {
                // SỬA: Tính toán ngày chính xác
                const date = new Date(startDate);
                date.setDate(startDate.getDate() + (week * 7) + day);

                const dayDiv = document.createElement('div');
                dayDiv.className = 'calendar-day';
                dayDiv.textContent = date.getDate();

                // Check if it's today
                const today = new Date();
                if (date.toDateString() === today.toDateString()) {
                    dayDiv.classList.add('today');
                }

                // Check if it's selected
                if (selectedDate && date.toDateString() === selectedDate.toDateString()) {
                    dayDiv.classList.add('selected');
                }

                // Check if it's from other month
                if (date.getMonth() !== month) {
                    dayDiv.classList.add('other-month');
                }

                dayDiv.onclick = () => selectDate(date);
                weekDiv.appendChild(dayDiv);
            }

            calendarGrid.appendChild(weekDiv);
        }
    }

    function selectDate(date) {
        selectedDate = date;
        document.getElementById('dateInput').value = date.toISOString().split('T')[0];

        // Format date for display (DD/MM/YYYY)
        const day = date.getDate().toString().padStart(2, '0');
        const month = (date.getMonth() + 1).toString().padStart(2, '0');
        const year = date.getFullYear();
        const formattedDate = `${day}/${month}/${year}`;

        // Update input value to show selected date
        document.getElementById('dateInput').value = formattedDate;

        renderCalendar();

        // Hide calendar after selection
        setTimeout(() => {
            document.getElementById('calendarPicker').style.display = 'none';
        }, 300);
    }

    function previousMonth() {
        // SỬA: Tạo date mới thay vì thay đổi currentDate
        currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() - 1, 1);
        renderCalendar();
    }

    function nextMonth() {
        // SỬA: Tạo date mới thay vì thay đổi currentDate
        currentDate = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 1);
        renderCalendar();
    }

    function clearDate() {
        selectedDate = null;
        document.getElementById('dateInput').value = '';
        renderCalendar();
    }

    function setToday() {
        selectedDate = new Date();
        document.getElementById('dateInput').value = selectedDate.toISOString().split('T')[0];

        // Format today's date for display
        const day = selectedDate.getDate().toString().padStart(2, '0');
        const month = (selectedDate.getMonth() + 1).toString().padStart(2, '0');
        const year = selectedDate.getFullYear();
        const formattedDate = `${day}/${month}/${year}`;

        // Update input value to show today's date
        document.getElementById('dateInput').value = formattedDate;

        renderCalendar();
    }

    // Initialize with default text
    document.addEventListener('DOMContentLoaded', function() {
        // Thêm event listener cho button
        const timeButton = document.getElementById('timeButton');

        if (timeButton) {
            timeButton.addEventListener('click', function(event) {
                event.stopPropagation(); // Ngăn event bubble lên document
                toggleCalendar();
            });
        }

        // Initialize surcharge toggles and sliders
        initializeSurcharges();
        // Setup buttons state from cache (if any)
        restoreSetupTicks();
        // Price tab init
        initPriceTab();
        buildPriceCalendar(new Date());
        document.getElementById('priceCalPrev')?.addEventListener('click', () => shiftPriceCalendar(-1));
        document.getElementById('priceCalNext')?.addEventListener('click', () => shiftPriceCalendar(1));
    });

    // Surcharge functionality
    function initializeSurcharges() {
        // Toggle switches
        const toggles = ['kmLimitToggle', 'overtimeToggle', 'cleaningToggle', 'deodorizeToggle', 'deliveryToggle'];

        toggles.forEach(toggleId => {
            const toggle = document.getElementById(toggleId);
            const contentId = toggleId.replace('Toggle', 'Content');
            const content = document.getElementById(contentId);

            if (toggle && content) {
                toggle.addEventListener('change', function() {
                    if (this.checked) {
                        content.classList.remove('hidden');
                    } else {
                        content.classList.add('hidden');
                    }
                });
            }
        });

        // Sliders
        const sliders = [{
                id: 'maxKmSlider',
                suffix: 'km'
            },
            {
                id: 'overLimitFeeSlider',
                suffix: '/km',
                format: (val) => val.toLocaleString()
            },
            {
                id: 'overtimeFeeSlider',
                suffix: '/giờ',
                format: (val) => val.toLocaleString()
            },
            {
                id: 'overtimeDaySlider',
                suffix: ' giờ'
            },
            {
                id: 'cleaningFeeSlider',
                suffix: 'đ/chuyến',
                format: (val) => val.toLocaleString()
            },
            {
                id: 'deodorizeFeeSlider',
                suffix: 'đ/chuyến',
                format: (val) => val.toLocaleString()
            },
            {
                id: 'deliveryRangeSlider',
                suffix: 'km'
            },
            {
                id: 'deliveryFeeSlider',
                suffix: 'đ/km',
                format: (val) => val.toLocaleString()
            },
            {
                id: 'freeDeliverySlider',
                suffix: 'km'
            },
            {
                id: 'airportDeliverySlider',
                suffix: 'đ',
                format: (val) => val.toLocaleString()
            }
        ];

        sliders.forEach(slider => {
            const sliderElement = document.getElementById(slider.id);
            // Tìm .slider-value trong toàn bộ nhóm để không phụ thuộc vị trí DOM
            const valueElement = sliderElement?.closest('.slider-group')?.querySelector('.slider-value');

            if (sliderElement) {
                // Function to update track gradient percent via CSS var
                const updateSliderBackground = function() {
                    const value = parseInt(this.value);
                    const min = parseInt(this.min);
                    const max = parseInt(this.max);
                    const percentage = ((value - min) / (max - min)) * 100;

                    // Cập nhật biến CSS cho track pseudo
                    this.style.setProperty('--fill-pct', percentage + '%');
                };

                // Add event listeners
                sliderElement.addEventListener('input', function() {
                    const value = this.value;
                    const formattedValue = slider.format ? slider.format(parseInt(value)) : value;
                    if (valueElement) {
                        valueElement.textContent = formattedValue + slider.suffix;
                    }
                    updateSliderBackground.call(this);
                });

                // Initialize background on page load
                updateSliderBackground.call(sliderElement);
                if (valueElement) {
                    const initialVal = slider.format ? slider.format(parseInt(sliderElement.value)) :
                        sliderElement.value;
                    valueElement.textContent = initialVal + slider.suffix;
                }
            }
        });
    }

    // ===== Setup modals logic =====
    function openSetupModal(type) {
        const idMap = {
            'collateral': 'collateralModal',
            'rental': 'rentalModal',
            'terms': 'termsModal'
        };
        const modalId = idMap[type];
        if (!modalId) return;
        const modalEl = document.getElementById(modalId);
        const modal = new bootstrap.Modal(modalEl);
        // highlight current checked option and update on change
        modalEl.querySelectorAll('.list-group-item').forEach(item => {
            const input = item.querySelector('input[type="radio"]');
            if (!input) return;
            item.classList.toggle('active-option', input.checked);
            input.addEventListener('change', () => {
                modalEl.querySelectorAll('.list-group-item').forEach(i => i.classList.remove(
                    'active-option'));
                item.classList.add('active-option');
            }, {
                once: true
            });
        });
        modal.show();
    }

    // ===== Price & Availability =====
    function initPriceTab() {
        const slider = document.getElementById('dailyPriceSlider');
        const preview = document.getElementById('dailyPricePreview');
        const listed = document.getElementById('listedPriceLabel');
        const income = document.getElementById('estimatedIncomeLabel');
        if (slider && preview) {
            const update = () => {
                preview.textContent = `${Number(slider.value).toLocaleString()}đ/ngày`;
                // update track like surcharge
                const min = +slider.min,
                    max = +slider.max,
                    val = +slider.value;
                const pct = ((val - min) / (max - min)) * 100;
                slider.style.setProperty('--fill-pct', pct + '%');

                if (listed) {
                    listed.textContent = `${Number(val).toLocaleString()}đ/ngày`;
                }
                if (income) {
                    // ví dụ giả định thu nhập dự kiến = 0.47 * giá (sau phí)
                    const est = Math.round(val * 0.47);
                    income.textContent = `${est.toLocaleString()}đ/ngày`;
                }
            };
            slider.addEventListener('input', update);
            update();
        }

        const weekend = document.getElementById('weekendPercent');
        const weekendLabel = document.getElementById('weekendPercentLabel');
        if (weekend && weekendLabel) {
            const up = () => {
                weekendLabel.textContent = `${weekend.value}%/ngày`;
                const min = +weekend.min,
                    max = +weekend.max,
                    val = +weekend.value;
                const pct = ((val - min) / (max - min)) * 100;
                weekend.style.setProperty('--fill-pct', pct + '%');
            };
            weekend.addEventListener('input', up);
            up();
        }
    }

    let priceCalCurrent = new Date();

    function shiftPriceCalendar(offset) {
        priceCalCurrent = new Date(priceCalCurrent.getFullYear(), priceCalCurrent.getMonth() + offset, 1);
        buildPriceCalendar(priceCalCurrent);
    }

    // Time slots add/remove (fake UI)
    function addTimeSlot(type, label) {
        const container = document.getElementById(type === 'receive' ? 'receiveSlots' : 'handoverSlots');
        if (!container) return;
        const text = label || '09:00 - 12:00';
        const slot = document.createElement('span');
        slot.className = 'time-slot d-inline-flex align-items-center gap-2';
        slot.textContent = text;
        const rm = document.createElement('img');
        rm.src = "<?php echo e(asset('/assets/images/cancle-ic2.png')); ?>";
        rm.className = 'time-remove';
        rm.onclick = () => container.removeChild(slot);
        slot.appendChild(rm);
        container.appendChild(slot);
    }

    function buildPriceCalendar(baseDate) {
        const monthLabel = document.getElementById('priceCalMonthLabel');
        const daysContainer = document.getElementById('priceCalDays');
        if (!monthLabel || !daysContainer) return;
        monthLabel.textContent = `Tháng ${baseDate.getMonth() + 1}/${baseDate.getFullYear()}`;
        daysContainer.innerHTML = '';

        const first = new Date(baseDate.getFullYear(), baseDate.getMonth(), 1);
        const start = new Date(first);
        const dow = (first.getDay() + 6) % 7; // Mon=0
        start.setDate(first.getDate() - dow);

        // Fake data: busy dates, peak, owner-busy
        const busy = new Set([2, 3, 10, 11]);
        const peak = new Set([12, 13, 19, 20]);
        const available = new Set([1, 5, 6, 21, 27]);

        for (let i = 0; i < 42; i++) {
            const d = new Date(start);
            d.setDate(start.getDate() + i);
            const cell = document.createElement('div');
            cell.className = 'price-day' + (d.getMonth() !== baseDate.getMonth() ? ' muted' : '');
            const dayNum = d.getDate();
            cell.textContent = dayNum;

            if (d.getMonth() === baseDate.getMonth()) {
                if (busy.has(dayNum)) cell.classList.add('day-busy');
                else if (peak.has(dayNum)) cell.classList.add('day-peak');
                else if (available.has(dayNum)) cell.classList.add('day-available');
            }

            cell.addEventListener('click', () => {
                daysContainer.querySelectorAll('.price-day').forEach(el => el.classList.remove('selected'));
                if (!cell.classList.contains('muted')) cell.classList.add('selected');
            });
            daysContainer.appendChild(cell);
        }
    }

    function saveSetup(type) {
        // persist simple flag in sessionStorage
        sessionStorage.setItem(`setup_${type}`, 'done');
        updateSetupButton(type);
    }

    function restoreSetupTicks() {
        ['collateral', 'rental', 'terms'].forEach(updateSetupButton);
    }

    function updateSetupButton(type) {
        const isDone = sessionStorage.getItem(`setup_${type}`) === 'done';
        const btn = document.querySelector(`.document-add-btn[data-type="${type}"]`);
        if (!btn) return;
        if (isDone) {
            btn.innerHTML =
                `<img src="<?php echo e(asset('/assets/images/fr-tick.png')); ?>" alt="tick" style="width: 20px; height: 20px;">`;
            btn.style.backgroundColor = 'transparent';
            btn.style.borderColor = 'transparent';
        } else {
            btn.innerHTML = `<i class="bi bi-plus"></i>`;
            btn.style.backgroundColor = '#fff';
            btn.style.borderColor = '#2B4896';
            btn.style.color = '#2B4896';
        }
    }

    // EXPOSE modal handlers globally for inline onclick
    let currentTimeTarget = 'receive';
    window.openTimeModal = function(target) {
        currentTimeTarget = target;
        const el = document.getElementById('timeSlotModal');
        if (!el) return;
        // Cập nhật tiêu đề theo mục đang thêm
        const title = el.querySelector('#timeSlotTitle');
        if (title) {
            title.textContent = target === 'handover' ? 'Thêm mốc thời gian giao xe' : 'Thêm mốc thời gian nhận xe';
        }
        const modal = new bootstrap.Modal(el);
        modal.show();
    }

    window.confirmTimeSlot = function() {
        const selected = document.querySelector('input[name="timeOption"]:checked');
        let label = selected ? selected.value : '';
        if (label === 'custom') {
            const s = document.getElementById('customStart')?.value || '';
            const e = document.getElementById('customEnd')?.value || '';
            label = `${s} - ${e}`;
        }
        if (!label) return;
        addTimeSlot(currentTimeTarget, label);
    }

    // Close calendar when clicking outside
    document.addEventListener('click', function(event) {
        const calendar = document.getElementById('calendarPicker');
        const timeButton = event.target.closest('#timeButton');
        const dateInput = event.target.closest('#dateInput');

        // Chỉ đóng calendar khi click bên ngoài cả button và calendar
        if (!calendar.contains(event.target) && !timeButton && !dateInput) {
            calendar.style.display = 'none';
        }
    });
</script>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/add-new-car.blade.php ENDPATH**/ ?>