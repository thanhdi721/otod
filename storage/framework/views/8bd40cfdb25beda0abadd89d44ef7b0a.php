
<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết xe - OTOD</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        
        .car-image-container {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .car-image {
            width: 100%;
            height: auto;
            transition: opacity 0.3s ease;
            opacity: 1;
        }
        
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }
        
        .share-button {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: auto;
            transition: background-color 0.2s ease;
        }
        
        .share-button:hover {
            background-color: rgba(255, 255, 255, 1);
        }
        
        .pagination-dots {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
        }
        
        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.7);
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .dot:hover {
            background-color: rgba(255, 255, 255, 0.9);
            transform: scale(1.1);
        }
        
        .dot.active {
            width: 8px;
            height: 8px;
            background-color: #ffffff;
            border-color: rgba(255, 255, 255, 0.3);
        }
        
        .image-counter {
            position: absolute;
            bottom: 20px;
            right: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #ffffff;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
        }
        
        .spec-card {
            background: white;
            border-radius: 8px;
            padding: 16px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
        }
        
        .spec-card:hover {
            transform: translateY(-2px);
        }
        
        .footer {
            background-color: #f5f5f5;
            border-top: 1px solid #e0e0e0;
            padding: 16px 0;
            text-align: center;
        }
        
        /* Thẻ ngày thuê xe */
        .rental-days {
          background: linear-gradient(to bottom, #0E1730, #2B4896); 
          color: #fff; 
          border-radius: 12px; 
          padding: 20px 10px; 
          text-align: center;
          display: flex;
          flex-direction: column;
          justify-content: center;
        }
        .rental-days i {
          font-size: 2rem;
          margin-bottom: 10px;
        }
        /* Ô giá thuê */
        .price-box {
          border: 1px solid #eaeaea;
          border-radius: 10px;
          padding: 12px 16px;
          font-weight: 600;
          display: flex;
         
        }
        .price-box + .price-box {
          margin-top: 10px;
        }
        .price-green {
          color: #16a34a; /* xanh lá */
          font-weight: bold;
        }
        /* Radio giao nhận */
        .pickup-option {
          border: 1px solid #eaeaea;
          border-radius: 12px;
          padding: 15px;
          margin-bottom: 12px;
          cursor: pointer;
        }
        .pickup-option input {
          margin-right: 10px;
        }
        .pickup-option:hover {
          border-color: #0d6efd;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div >
    <div class="container py-3">
        <a href="#" class="text-decoration-none text-dark d-flex align-items-center" onclick="history.back()">
            <div class="text-dark p-3 bg-white border border-2 border-gray rounded-circle w-16 h-16 d-flex align-items-center justify-content-center">
                <img src="<?php echo e(asset('assets/images/arrow-left.png')); ?>" alt="Quay về" class="img-fluid">
            </div>
            <span class="fw-bolder ms-2 fs-6">Quay về danh sách xe</span>
        </a>
    </div>
</div>

    <!-- Main Content -->
    <div class="container py-4">
        <!-- Car Image Section -->
        <div class="car-image-container mb-4">
            <img src="<?php echo e(asset('assets/images/img-car.png')); ?>" alt="Hyundai Elantra" class="car-image" id="carImage">
            
            <div class="image-overlay">
                <!-- Share Button -->
                <button class="share-button" onclick="shareCar()">
                    <i class="bi bi-share"></i>
                </button>
                
                                 <!-- Pagination Dots -->
                 <div class="pagination-dots">
                     <div class="dot active" data-index="0"></div>
                     <div class="dot" data-index="1"></div>
                     <div class="dot" data-index="2"></div>
                     <div class="dot" data-index="3"></div>
                 </div>
                
                <!-- Image Counter -->
                <div class="image-counter">1/4</div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                 <!-- Tiêu đề -->
  <div class="d-flex align-items-center justify-content-between">
    <h3 class="fw-bold mb-0">HUYNDAI ELANTRA 2022 
     <img src="<?php echo e(asset('assets/images/ic-check.png')); ?>" alt="check" class="img-fluid">
    </h3>
  </div>

  <!-- Đánh giá -->
  <div class="d-flex align-items-center mt-2 border-gray border rounded-pill p-2" style="width: fit-content;">
    <span class="badge text-dark me-2 fs-6 " style="border-right: 1px solid #e0e0e0; padding-right: 10px;">
      4.0 <img src="<?php echo e(asset('assets/images/ic-star.png')); ?>" alt="star" class="img-fluid mb-1" style="width: 10px; height: 10px;">
    </span>
    <a href="#" class="text-decoration-none fs-6" style="color: #2B4896; font-weight: 500;">325 đánh giá</a>
  </div>

  <!-- Địa chỉ --> 
  <div class="text-muted mt-1 d-flex align-items-center" style="font-weight: 500;">
    <img src="<?php echo e(asset('assets/images/ic-location.png')); ?>" alt="location" class="img-fluid mb-1 me-1" style="width: 16px; height: 16px;"> Quận 1, TP Hồ Chí Minh
  </div>

  <hr>

  <!-- Bảo hiểm thuê xe -->
  <h5 class="fw-bold">Bảo hiểm thuê xe </h5>

  <div class="d-flex justify-content-between align-items-center">
    <span class="fw-semibold">Tiền thuê xe theo ngày</span>
    <span class="fw-bold" style="color: #2B4896; font-weight: 500;">120.000đ</span>
  </div>
  <p class="text-muted small mt-2">
    Nếu xe bị hư hỏng hoặc bị đánh cắp, bạn sẽ phải tự chi trả khoản phí phát sinh, 
    nhưng miễn là bạn có Bảo hiểm toàn diện VNI, VNI sẽ hoàn lại cho bạn số tiền 
    lên đến 300.000.000 đồng...
  </p>

  <!-- Bảo hiểm bổ sung -->
  <div class="form-check">
    <input class="form-check-input mt-1" type="checkbox" id="insuranceCheck">
    <label class="form-check-label fw-semibold" for="insuranceCheck">
      Bảo vệ người ngồi trên xe chỉ <span class="text-dark fw-bold">25.000đ/ngày</span>
      <span class="badge bg-danger ms-1">Hot</span>
    </label>
  </div>
  <p class="text-muted small mt-2">
    Bảo vệ người lái xe và hành khách: Bình An Vạn Dặm bảo vệ tất cả hành khách trên xe 
    khỏi tai nạn hoặc tệ hơn với mức bảo hiểm tối đa 5 tỷ đồng/chuyến
  </p>

    <p style="cursor: pointer;" class="text-primary fw-semibold text-decoration-none" onclick="openInsuranceModal()">Xem chi tiết</p>
    <hr>
<div class="">

  <!-- Đặc điểm xe -->
  <h5 class="fw-bold mb-3">Đặc điểm xe</h5>
  <div class="row text-center mb-4">
    <div class="col-6 col-md-3">
      <img src="<?php echo e(asset('assets/images/dd1.png')); ?>" alt="gear" class="img-fluid mb-1" style="width: 32px; height: 32px;">
      <p class="mb-0 text-muted">Truyền động</p>
      <p class="fw-semibold">Số sàn</p>
    </div>
    <div class="col-6 col-md-3">
      <img src="<?php echo e(asset('assets/images/dd2.png')); ?>" alt="gear" class="img-fluid mb-1" style="width: 32px; height: 32px;">
      <p class="mb-0 text-muted">Số ghế</p>
      <p class="fw-semibold">4 chỗ</p>
    </div>
    <div class="col-6 col-md-3">
      <img src="<?php echo e(asset('assets/images/dd3.png')); ?>" alt="gear" class="img-fluid mb-1" style="width: 32px; height: 32px;">
      <p class="mb-0 text-muted">Nhiên liệu</p>
      <p class="fw-semibold">Xăng</p>
    </div>
    <div class="col-6 col-md-3">
      <img src="<?php echo e(asset('assets/images/dd4.png')); ?>" alt="gear" class="img-fluid mb-1" style="width: 32px; height: 32px;">
      <p class="mb-0 text-muted">Tiêu hao</p>
      <p class="fw-semibold">5L/100km</p>
    </div>
  </div>

  <hr>

  <!-- Giới thiệu xe -->
  <h5 class="fw-bold">Giới thiệu xe</h5>
  <p class="text-muted">
    Hyundai Elantra 2022 trang bị động cơ SmartStream hoàn toàn mới với 3 tùy chọn động cơ 
    gồm 1.6L MPI cho công suất 128 mã lực và mô-men xoắn 155 Nm,...
  </p>

  <hr>

  <!-- Tiện nghi trên xe -->
  <h5 class="fw-bold">Các tiện nghi trên xe</h5>
  <div class="row row-cols-2 row-cols-md-4 g-3 mt-2">
    <div class="col"><i class="bi bi-p-square fs-5 me-2"></i>Bản đồ</div>
    <div class="col"><i class="bi bi-bluetooth fs-5 me-2"></i>Bluetooth</div>
    <div class="col"><i class="bi bi-camera-video fs-5 me-2"></i>Camera 360</div>
    <div class="col"><i class="bi bi-camera fs-5 me-2"></i>Camera cặp lề</div>

    <div class="col"><i class="bi bi-camera-reels fs-5 me-2"></i>Camera lùi</div>
    <div class="col"><i class="bi bi-speedometer2 fs-5 me-2"></i>Cảm biến lốp</div>
    <div class="col"><i class="bi bi-bounding-box fs-5 me-2"></i>Cảm biến va chạm</div>
    <div class="col"><i class="bi bi-exclamation-triangle fs-5 me-2"></i>Cảnh báo tốc độ</div>

    <div class="col"><i class="bi bi-sun fs-5 me-2"></i>Cửa sổ trời</div>
    <div class="col"><i class="bi bi-geo-alt fs-5 me-2"></i>Định vị GPS</div>
    <div class="col"><i class="bi bi-usb fs-5 me-2"></i>Khe cắm USB</div>
    <div class="col"><i class="bi bi-circle-half fs-5 me-2"></i>Lốp dự phòng</div>

    <div class="col"><i class="bi bi-shield-check fs-5 me-2"></i>Túi khí an toàn</div>
    <div class="col"><i class="bi bi-display fs-5 me-2"></i>Màn hình DVD</div>
    <div class="col"><i class="bi bi-credit-card fs-5 me-2"></i>ETC</div>
    <div class="col"><i class="bi bi-camera-video-off fs-5 me-2"></i>Camera hành trình</div>
  </div>

  <div class="mt-3 text-end">
    <a href="#" class="text-primary fw-semibold text-decoration-none">Xem thêm &gt;</a>
  </div>

</div>
<div class="mt-4">

  <!-- Banner -->
  <div class="mb-3 position-relative">
    <img src="<?php echo e(asset('assets/images/banner-detail.png')); ?>" class="w-100 rounded" alt="banner">
    <div class="position-absolute top-100 start-50 translate-middle">
      <img src="<?php echo e(asset('assets/images/avatar.png')); ?>" class="rounded-circle border border-3 border-white" alt="avatar">
    </div>
  </div>

  <!-- Thông tin chủ xe -->
  <div class="text-center mt-5">
    <h5 class="fw-bold">OTOD GOFAR <i class="bi bi-patch-check-fill text-success"></i></h5>
    <span class="text-muted small">Trạm xe đối tác xác thực</span><span class="ms-2 p-1 rounded-pill bg-warning text-dark fw-semibold">39 chuyến xe</span>

    <div class="d-flex justify-content-center gap-3 my-2">
      <div>
        <span class="fw-bold">5 phút</span><br>
        <span class="text-muted small">Thời gian phản hồi</span>
      </div>
      <div>
          <span class="fw-bold">5 phút</span><br>
        <span class="text-muted small">Tỉ lệ đồng ý</span>
      </div>
      <div>
        <span class="fw-bold">5 phút</span><br>
        <span class="text-muted small">Tỉ lệ phản hồi</span>
      </div>
    </div>
  </div>

  <!-- Điểm đánh giá -->
  <div class="my-4 d-flex align-items-center gap-2">
    <h2 class="fw-bold fs-1">5.0 </h2>
    <div>
      <small class="fs-7 text-muted fw-bold">Tuyệt vời</small>
      <p class="text-muted fs-7">346 đánh giá</p>
    </div>
  </div>

  <!-- Danh sách đánh giá -->
  <div class="list-group">

    <!-- 1 đánh giá -->
      <div class="list-group-item border-0 border-bottom">
      <div class="d-flex justify-content-between">
        <div class="d-flex">
          
          <div>
           <div class="d-flex align-items-center">
            <img src="<?php echo e(asset('assets/images/avatar.png')); ?>" class="rounded-circle me-2" width="42" height="42" alt="user">
            <div>
              <h6 class="fw-bold mb-0">Nguyễn Văn Tuấn</h6>
              <div class="text-warning fs-6">
                ★★★★★
              </div>
            </div>
            </div>
            <p class="mb-1 small">
              Mình vừa thuê xe từ lái ở đây cuối tuần rồi, phải nói là cực kỳ hài lòng. Xe mới, sạch sẽ, máy móc chạy êm ru.
            </p>
          </div>
        </div>
        <span class="text-muted small text-nowrap">Hôm nay</span>
      </div>
    </div>

    <!-- Copy thêm review tương tự -->
    <div class="list-group-item border-0 border-bottom">
      <div class="d-flex justify-content-between">
        <div class="d-flex">
          
          <div>
           <div class="d-flex align-items-center">
            <img src="<?php echo e(asset('assets/images/avatar.png')); ?>" class="rounded-circle me-2" width="42" height="42" alt="user">
            <div>
              <h6 class="fw-bold mb-0">Nguyễn Văn Tuấn</h6>
              <div class="text-warning fs-6">
                ★★★★★
              </div>
            </div>
            </div>
            <p class="mb-1 small">
              Mình vừa thuê xe từ lái ở đây cuối tuần rồi, phải nói là cực kỳ hài lòng. Xe mới, sạch sẽ, máy móc chạy êm ru.
            </p>
          </div>
        </div>
        <span class="text-muted small text-nowrap">Hôm nay</span>
      </div>
    </div>

  </div>
</div>

            </div>
            <div class="col-md-6">
                <div class="">

                  <!-- Thời gian thuê xe -->
                  <h6 class="fw-bold mb-3">Thời gian thuê xe</h6>
                  <div class="row g-3">
                    <!-- Card số ngày -->
                    <div class="col-3">
                      <div class="rental-days h-100">
                        <i class="bi bi-car-front-fill"></i>
                        <div class="fw-bold fs-5">02 ngày</div>
                      </div>
                    </div>

                    <!-- Ngày nhận/trả -->
                    <div class="col-9">
                      <!-- Ngày nhận/trả -->
<div >
  <div class="rounded-3" style="background: #F4F4F4;">
    <!-- Nhận xe -->
    <div class="p-2">
      <div>

        <label class="form-label small text-muted mb-1">Nhận xe</label>
        <div class="fw-bold d-flex justify-content-between"><div>21:00 T4, 09/04/2025</div><div><i class="bi bi-chevron-down text-muted"></i></div></div>
      </div>

     
    </div>

    <!-- Trả xe -->
    <div class="p-2">
      <div>
        <label class="form-label small text-muted mb-1">Trả xe</label>
        <div class="fw-bold d-flex justify-content-between"><p>21:00 T6, 11/04/2025</p> <i class="bi bi-chevron-down text-muted"></i></div>
      </div>

    
    </div>
  </div>
</div>

                    </div>
                  </div>

                  <hr>

                  <!-- Giá thuê -->
                  <h5 class="fw-bold mb-3">Giá thuê</h5>
                  <div class="price-box">
                    <span class="price-green">500.000đ</span>
                    <span class="text-muted">/4 giờ</span>
                  </div>
                  <div class="price-box">
                    <span class="price-green">700.000đ</span>
                    <span class="text-muted">/8 giờ</span>
                  </div>
                  <div class="price-box">
                    <span class="price-green">800.000đ</span>
                    <span class="text-muted">/12 giờ</span>
                  </div>
                  <div class="price-box">
                    <span class="price-green">1.000.000đ</span>
                    <span class="text-muted">/24 giờ</span>
                  </div>

                  <hr>

                  <!-- Địa điểm giao nhận -->
                  <h5 class="fw-bold mb-3">Địa điểm giao nhận xe</h5>
                  <label class="pickup-option d-flex align-items-center">
                    <input type="radio" name="pickup" checked class="me-3">
                    <div>
                      <small class="text-muted">Tôi tự tới nhận xe</small>
                      <div class="fw-semibold">Quận 1, Tp Hồ Chí Minh</div>
                      <small class="text-muted">Vị trí chính xác chủ xe sẽ thông báo sau khi thanh toán</small>
                    </div>
                  </label>

                  <label class="pickup-option d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                      <input type="radio" name="pickup" class="me-3">
                    
                      <div>
                         <small class="text-muted">Giao tận nơi</small>
                        <div class="fw-semibold">  <i class="bi bi-geo-alt me-2 text-muted"></i>Bấm để chọn</div>
                       
                        <small class="text-muted d-block">Quý khách vui lòng chọn vị trí giao nhận xe</small>
                      </div>
                    </div>
                    <i class="bi bi-chevron-right text-muted"></i>
                  </label>

                </div>
                <div class="container my-4">

  <h5 class="fw-bold mb-3">Bảng tính giá thuê xe</h5>
  <div class=" p-3 rounded shadow-sm" style="background: #F4F4F4;">

    <!-- Các chi phí -->
         <div class="d-flex justify-content-between mb-2">
       <span style="cursor: pointer;" onclick="openOtodFeeModal()">Phí OTOD <i class="bi bi-info-circle text-muted"></i></span>
       <span>120.000đ</span>
     </div>
    <div class="d-flex justify-content-between mb-2">
      <span>Đơn giá thuê <i class="bi bi-info-circle text-muted"></i></span>
      <span>120.000đ</span>
    </div>
    <div class="d-flex justify-content-between mb-2">
      <span>Bảo hiểm thuê xe <i class="bi bi-info-circle text-muted"></i></span>
      <span>120.000đ</span>
    </div>
    <div class="d-flex justify-content-between mb-2">
      <span>Bảo hiểm bổ sung <i class="bi bi-info-circle text-muted"></i></span>
      <span>75.000đ</span>
    </div>
    <div class="d-flex justify-content-between mb-3">
      <span>Phí giao nhận <i class="bi bi-info-circle text-muted"></i></span>
      <span>120.000đ</span>
    </div>

    <hr>

    <!-- Tổng cộng -->
    <div class="d-flex justify-content-between mb-3">
      <span class="fw-semibold">Tổng cộng</span>
      <span>120.000đ</span>
    </div>
    <hr>
    <!-- Khuyến mại -->
    <div class="fw-semibold mb-1">Khuyến mại</div>
    <div class="d-flex justify-content-between text-success mb-3">
      <span class="text-muted">Giảm giá</span>
      <span>-120.000đ</span>
    </div>
    <div class="border border-success rounded p-2 mb-3 d-flex justify-content-between align-items-center text-success fw-semibold" style="background:#f0fdf4; cursor:pointer;" onclick="openPromotionModal()">
      <span><img src="<?php echo e(asset('assets/images/elements.png')); ?>" alt="gift" class="img-fluid me-2" style="width: 20px; height: 20px;"> Mã khuyến mại</span>
      <i class="bi bi-chevron-right"></i>
    </div>

    <hr>

    <!-- Thành tiền -->
    <div class="d-flex justify-content-between mb-2">
      <span class="fw-semibold">Thành tiền</span>
      <span class="fw-semibold">120.000đ</span>
    </div>
    <div class="d-flex justify-content-between mb-2">
      <span class="fw-semibold">Thanh toán giữ chỗ</span>
      <span class="fw-semibold">120.000đ</span>
    </div>
    <div class="d-flex justify-content-between fw-bold">
      <span>Thanh toán khi nhận xe</span>
      <span>120.000đ</span>
    </div>

  </div>
</div>

<div >

  <!-- Thông tin bổ sung -->
  <h5 class="fw-bold mb-3">Thông tin bổ sung</h5>
  <table class="table">
    <tbody>
      <tr>
        <td>Tài sản thế chấp</td>
        <td class="text-end">120.000đ</td>
      </tr>
      <tr>
        <td>Phí quá giờ</td>
        <td class="text-end">120.000đ</td>
      </tr>
      <tr>
        <td>Phụ phí vệ sinh</td>
        <td class="text-end">120.000đ</td>
      </tr>
      <tr>
        <td>Phí vượt giới hạn</td>
        <td class="text-end">120.000đ</td>
      </tr>
    </tbody>
  </table>

  <!-- Chính sách hủy chuyến -->
  <h5 class="fw-bold mt-4 mb-3">Chính sách hủy chuyến</h5>
     <table class="table table-bordered align-middle text-center">
     <thead >
       <tr >
         <th style="background-color: #2B4896; color: #fff; text-align:start;">Thời điểm hủy chuyến</th>
         <th style="background-color: #2B4896; color: #fff;">Phí hủy chuyến</th>
       </tr>
     </thead>
    <tbody>
      <tr>
        <td class="text-start">Trong vòng 1h sau giữ chỗ</td>
        <td class="text-success fw-semibold">Miễn phí</td>
      </tr>
      <tr>
        <td class="text-start">Trước chuyến đi &gt;5 ngày (Sau 1h giữ chỗ)</td>
        <td class="text-danger fw-semibold">10% giá trị chuyến đi</td>
      </tr>
      <tr>
        <td class="text-start">Trong vòng 5 ngày trước chuyến đi (Sau 1h giữ chỗ)</td>
        <td class="text-danger fw-semibold">40% giá trị chuyến đi</td>
      </tr>
    </tbody>
  </table>

  <!-- Lưu ý -->
  <div class="mt-3">
    <h6 class="fw-bold">Lưu ý</h6>
    <p class="text-muted small">
      Trong trường hợp bất khả kháng bạn cần phải hủy chuyến, khách hàng có thể tạo yêu cầu 
      "Yêu cầu hủy chuyến" trên web/app của OTOD. Việc hủy chuyến cần được thực hiện sớm nhất có thể, 
      vì theo chính sách hủy chuyến khách hàng có thể mất phí giữ chỗ cho chủ xe.
    </p>
  </div>

  <!-- Quy định khác -->
  <div class="mt-3">
    <h6 class="fw-bold">Quy định khác</h6>
    <p  class="text-primary fw-semibold text-decoration-none" style="cursor: pointer;" onclick="openRegulationsModal()">Xem các quy định khác &gt;</p>
  </div>

</div>

            </div>
        </div>
        <div class="container my-4">
  <div class="d-flex justify-content-between align-items-center bg-white shadow-sm rounded p-3">
    <!-- Thông tin tổng tiền -->
    <div>
      <p class="mb-1 text-muted small">Tổng cộng tiền thuê</p>
      <h5 class="mb-0 fw-bold">2.089.710đ <span class="fw-normal text-muted">- 3 ngày 4 giờ</span></h5>
    </div>

    <!-- Nút thuê xe -->
    <button class="btn px-4 rounded" style="background: #2B4896; color: #fff;" onclick="navigateToPayment()">Thuê xe</button>
  </div>
</div>
<div class="container my-5">
  <!-- Tiêu đề + link -->
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">Khám phá cùng OTOD</h3>
    <a href="#" class="text-primary text-decoration-none">Xem tất cả</a>
  </div>

  <!-- Card list -->
  <div class="travel-cards-container">
    <div class="travel-cards-scroll">
      <!-- Card item -->
      <div class="travel-card-item">
        <div class="travel-card position-relative">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=600"
               alt="Travel" class="w-100 h-100 object-fit-cover rounded-3">
          <div class="overlay rounded-3"></div>
          <div class="content position-absolute top-0 start-0 p-3">
            <span class="badge-location">Phú Yên</span>
            <h6 class="text-white mt-2 mb-0 fw-semibold">
              Trải nghiệm du lịch tự túc bằng Carnival 2025
            </h6>
          </div>
        </div>
      </div>

      <!-- Copy thêm card giống vậy -->
      <div class="travel-card-item">
        <div class="travel-card position-relative">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=600"
               alt="Travel" class="w-100 h-100 object-fit-cover rounded-3">
          <div class="overlay rounded-3"></div>
          <div class="content position-absolute top-0 start-0 p-3">
            <span class="badge-location">Phú Yên</span>
            <h6 class="text-white mt-2 mb-0 fw-semibold">
              Trải nghiệm du lịch tự túc bằng Carnival 2025
            </h6>
          </div>
        </div>
      </div>
      
      <div class="travel-card-item">
        <div class="travel-card position-relative">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=600"
               alt="Travel" class="w-100 h-100 object-fit-cover rounded-3">
          <div class="overlay rounded-3"></div>
          <div class="content position-absolute top-0 start-0 p-3">
            <span class="badge-location">Phú Yên</span>
            <h6 class="text-white mt-2 mb-0 fw-semibold">
              Trải nghiệm du lịch tự túc bằng Carnival 2025
            </h6>
          </div>
        </div>
      </div>
      
      <div class="travel-card-item">
        <div class="travel-card position-relative">
          <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=600"
               alt="Travel" class="w-100 h-100 object-fit-cover rounded-3">
          <div class="overlay rounded-3"></div>
          <div class="content position-absolute top-0 start-0 p-3">
            <span class="badge-location">Phú Yên</span>
            <h6 class="text-white mt-2 mb-0 fw-semibold">
              Trải nghiệm du lịch tự túc bằng Carnival 2025
            </h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
/* Horizontal scrolling container */
.travel-cards-container {
  width: 100%;
  overflow-x: auto;
  overflow-y: hidden;
  -webkit-overflow-scrolling: touch;
  scrollbar-width: none; /* Firefox */
  -ms-overflow-style: none; /* IE and Edge */
  position: relative;
}

.travel-cards-container::-webkit-scrollbar {
  display: none; /* Chrome, Safari, Opera */
}

.travel-cards-scroll {
  display: flex;
  gap: 16px;
  padding: 4px 0;
  min-width: max-content;
  padding-right: 60px; /* Add padding for fade effect */
}

.travel-card-item {
  flex: 0 0 auto;
  width: 280px; /* Fixed width for mobile cards */
}

.travel-card {
  aspect-ratio: 3/4; /* giữ tỉ lệ card */
  overflow: hidden;
  border-radius: 12px;
  width: 100%;
  height: 100%;
}

.travel-card img {
  object-fit: cover;
  height: 100%;
  width: 100%;
}

.overlay {
  position: absolute;
  inset: 0;
  background: linear-gradient(to bottom, rgba(0,0,0,0.6), transparent 40%);
}

.badge-location {
  background: rgba(255,255,255,0.9);
  color: #000;
  font-size: 0.75rem;
  padding: 2px 10px;
  border-radius: 50px;
  font-weight: 500;
}

/* Fade effect on the right side */
.travel-cards-container::after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 60px;
  height: 100%;
  background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.8));
  pointer-events: none;
  z-index: 1;
}

/* Responsive adjustments */
@media (min-width: 768px) {
  .travel-card-item {
    width: 320px;
  }
}

@media (min-width: 1024px) {
  .travel-card-item {
    width: 350px;
  }
}
</style>


    </div>

    <!-- Insurance Modal -->
    <div class="modal fade" id="insuranceModal" tabindex="-1" aria-labelledby="insuranceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="insuranceModalLabel">Bảo hiểm thuê xe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="text-muted mb-4">
                        Nếu xe bị hư hỏng hoặc bị đánh cắp, bạn sẽ phải tự chi trả khoản phí phát sinh, 
                        nhưng miễn là bạn có Bảo hiểm toàn diện VNI, VNI sẽ hoàn lại cho bạn số tiền 
                        lên đến 300.000.000 đồng...
                    </p>
                    
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr >
                                    <th style="background-color: #2B4896; color: white; text-align:center !important;" class="text-center">Yếu tố bảo hiểm</th>
                                    <th style="background-color: #2B4896; color: white;" class="text-center">Sẵn sàng chấp nhận rủi ro</th>
                                    <th style="background-color: #2B4896; color: white;" class="text-center">Tôi muốn bảo vệ bản thân mình</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-start">Thiệt hại do va chạm của xe cho thuê</td>
                                    <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                                    <td class="text-center"><i class="bi bi-x-circle-fill text-danger fs-5"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Cửa sổ, gương, khung gầm và lốp xe bị hư hỏng</td>
                                    <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                                    <td class="text-center"><i class="bi bi-x-circle-fill text-danger fs-5"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Chi phí hỗ trợ kéo xe và bên đường</td>
                                    <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                                    <td class="text-center"><i class="bi bi-x-circle-fill text-danger fs-5"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Chi phí hỗ trợ kéo xe và bên đường</td>
                                    <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                                    <td class="text-center"><i class="bi bi-x-circle-fill text-danger fs-5"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">Hoả hoạn cháy, nổ</td>
                                    <td class="text-center"><i class="bi bi-check-circle-fill text-success fs-5"></i></td>
                                    <td class="text-center"><i class="bi bi-x-circle-fill text-danger fs-5"></i></td>
                                </tr>
                                <tr>
                                    <td class="text-start">
                                        <a href="#" class="text-primary text-decoration-none">Điều khoản và điều kiện</a>
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="terms" class="form-check-input">
                                    </td>
                                    <td class="text-center">
                                        <input type="radio" name="terms" class="form-check-input" checked>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <!-- Promotion Modal -->
    <div class="modal fade" id="promotionModal" tabindex="-1" aria-labelledby="promotionModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="promotionModalLabel">Mã khuyến mại</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Search Bar -->
                    <div class="input-group mb-4">
                        <span class="input-group-text bg-white border-end-0">
                            <i class="bi bi-search text-muted"></i>
                        </span>
                        <input type="text" class="form-control border-start-0" placeholder="Tìm kiếm mã khuyến mại">
                    </div>
                    
                    <!-- Promotion List -->
                    <div class="promotion-list" style="max-height: 400px; overflow-y: auto; scrollbar-width: none; -ms-overflow-style: none;">
                        <!-- Promotion Item 1 -->
                        <div class="promotion-item d-flex align-items-center p-3 border rounded mb-3">
                            <div class="ticket-icon me-1">
                                <img src="<?php echo e(asset('assets/images/voucher.png')); ?>" alt="gift" class="img-fluid me-2">
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="fw-bold">Giảm giá : 120k</div>
                                        <div class="text-muted small">Áp dụng cho các khách thuê xe lần đầu</div>
                                        <div class="text-muted small">HSD: 12/2/2026</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="promotion" class="form-check-input me-2">
                                        <a href="#" class="text-primary text-decoration-none">Dùng ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Promotion Item 2 -->
                       <div class="promotion-item d-flex align-items-center p-3 border rounded mb-3">
                            <div class="ticket-icon me-1">
                                <img src="<?php echo e(asset('assets/images/voucher.png')); ?>" alt="gift" class="img-fluid me-2">
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="fw-bold">Giảm giá : 120k</div>
                                        <div class="text-muted small">Áp dụng cho các khách thuê xe lần đầu</div>
                                        <div class="text-muted small">HSD: 12/2/2026</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="promotion" class="form-check-input me-2">
                                        <a href="#" class="text-primary text-decoration-none">Dùng ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Promotion Item 3 -->
                       <div class="promotion-item d-flex align-items-center p-3 border rounded mb-3">
                            <div class="ticket-icon me-1">
                                <img src="<?php echo e(asset('assets/images/voucher.png')); ?>" alt="gift" class="img-fluid me-2">
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="fw-bold">Giảm giá : 120k</div>
                                        <div class="text-muted small">Áp dụng cho các khách thuê xe lần đầu</div>
                                        <div class="text-muted small">HSD: 12/2/2026</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="promotion" class="form-check-input me-2">
                                        <a href="#" class="text-primary text-decoration-none">Dùng ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Promotion Item 4 -->
                        <div class="promotion-item d-flex align-items-center p-3 border rounded mb-3">
                            <div class="ticket-icon me-1">
                                <img src="<?php echo e(asset('assets/images/voucher.png')); ?>" alt="gift" class="img-fluid me-2">
                            </div>
                            <div class="flex-grow-1">
                                <div class="d-flex justify-content-between align-items-start">
                                    <div>
                                        <div class="fw-bold">Giảm giá : 120k</div>
                                        <div class="text-muted small">Áp dụng cho các khách thuê xe lần đầu</div>
                                        <div class="text-muted small">HSD: 12/2/2026</div>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <input type="radio" name="promotion" class="form-check-input me-2">
                                        <a href="#" class="text-primary text-decoration-none">Dùng ngay</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>

    <!-- Regulations Modal -->
    <div class="modal fade" id="regulationsModal" tabindex="-1" aria-labelledby="regulationsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-center w-100" id="regulationsModalLabel">Quy định khác</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="regulations-list">
                        <!-- Regulation 1 -->
                        <div class="regulation-item pb-1 mb-1 border-bottom">
                            <p class="text-muted mb-0">Sử dụng xe đích đúng</p>
                        </div>
                        
                        <!-- Regulation 2 -->
                        <div class="regulation-item pb-1 mb-1 border-bottom">
                            <p class="text-muted mb-0">Không sử dụng tài sản vào phi pháp, trái pháp luật mục tiêu</p>
                        </div>
                        
                        <!-- Regulation 3 -->
                        <div class="regulation-item pb-1 mb-1 border-bottom">
                            <p class="text-muted mb-0">Không sử dụng xe thiết để cầm cố, thế chấp</p>
                        </div>
                        
                        <!-- Regulation 4 -->
                        <div class="regulation-item pb-1 mb-1 border-bottom">
                            <p class="text-muted mb-0">Không hút thuốc, kẹo cao su, xả rác trong xe</p>
                        </div>
                        
                        <!-- Regulation 5 -->
                        <div class="regulation-item pb-1 mb-1 border-bottom">
                            <p class="text-muted mb-0">Không bỏ hàng quốc gia dễ cháy nổ</p>
                        </div>
                        
                        <!-- Regulation 6 -->
                        <div class="regulation-item pb-1 mb-1 border-bottom">
                            <p class="text-muted mb-0">Không giả hoa quả, thực phẩm nặng mùi trong xe</p>
                        </div>
                        
                        <!-- Regulation 7 -->
                        <div class="regulation-item pb-1 mb-1 border-bottom">
                            <p class="text-muted mb-0">Khi trả xe, nếu xe Vết thương hoặc có mùi trong xe, khách hàng vui lòng bảo vệ xe sạch sẽ hoặc gửi phụ thu phí bảo vệ xe</p>
                        </div>
                        
                        <!-- Regulation 8 -->
                        <div class="regulation-item pb-1 mb-1 border-bottom">
                            <p class="text-muted mb-0">Xe được giới hạn di chuyển ở mức 300km cho 24h, và các lần như 150km, 200km, 250 km cho gói 4h, 8h, 12h</p>
                        </div>
                        
                        <!-- Regulation 9 -->
                        <div class="regulation-item pb-1 mb-1">
                            <p class="text-muted mb-0">Phí quá giờ áp dụng là 150.000 đồng cho gói 24h, và 400.000 đồng cho gói 4h, 350.000 đồng cho gói 8h, 200.000 đồng cho gói 12h</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-primary px-5 py-2 fw-semibold" style="background: #2B4896; border: none;">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>

    <!-- OTOD Fee Modal -->
    <div class="modal fade" id="otodFeeModal" tabindex="-1" aria-labelledby="otodFeeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="otodFeeModalLabel">Phí dịch vụ OTOD</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="service-list">
                        <!-- Service 1 -->
                        <div class="service-item mb-3">
                            <p class="text-muted mb-0">Dịch vụ tổng đài, chăm sóc & hỗ trợ khách hàng đặt xe</p>
                        </div>
                        
                        <!-- Service 2 -->
                        <div class="service-item mb-3">
                            <p class="text-muted mb-0">Tìm xe thay thế / hoàn tiền / đền tiền nếu chuyến bị hủy bởi chủ xe</p>
                        </div>
                        
                        <!-- Service 3 -->
                        <div class="service-item mb-3">
                            <p class="text-muted mb-0">Tìm xe thay thế / hoàn tiền nếu bạn thay đổi lịch trình</p>
                        </div>
                        
                        <!-- Service 4 -->
                        <div class="service-item mb-3">
                            <p class="text-muted mb-0">Hỗ trợ dàn xếp tranh chấp phát sinh với chủ xe (nếu có)</p>
                        </div>
                        
                        <!-- Service 5 -->
                        <div class="service-item mb-3">
                            <p class="text-muted mb-0">Hỗ trợ làm việc với nhà bảo hiểm, garage đối tác khi xảy ra sự cố (nếu có).</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn px-5 py-2 fw-semibold rounded" style="background: #FFD700; color: #000; border: none;">Đóng</button>
                </div>
            </div>
        </div>
    </div>

   

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        // Car images array
        const carImages = [
            '<?php echo e(asset("assets/images/img-car.png")); ?>',
            '<?php echo e(asset("assets/images/16993071-blue-mid-size-urban-family-sedan-white-uniform-background-3d-rendering 1.png")); ?>',
            '<?php echo e(asset("assets/images/img-car.png")); ?>',
            '<?php echo e(asset("assets/images/16993071-blue-mid-size-urban-family-sedan-white-uniform-background-3d-rendering 1.png")); ?>'
        ];

        let currentImageIndex = 0;

        // Share functionality
        function shareCar() {
            if (navigator.share) {
                navigator.share({
                    title: 'Hyundai Elantra - Chi tiết xe',
                    text: 'Xem chi tiết xe Hyundai Elantra tại OTOD',
                    url: window.location.href
                });
            } else {
                // Fallback for browsers that don't support Web Share API
                const url = window.location.href;
                const text = 'Xem chi tiết xe Hyundai Elantra tại OTOD';
                
                if (navigator.clipboard) {
                    navigator.clipboard.writeText(`${text}\n${url}`).then(() => {
                        // Show Bootstrap toast or alert
                        showAlert('Đã sao chép link vào clipboard!', 'success');
                    });
                } else {
                    // Fallback for older browsers
                    const textArea = document.createElement('textarea');
                    textArea.value = `${text}\n${url}`;
                    document.body.appendChild(textArea);
                    textArea.select();
                    document.execCommand('copy');
                    document.body.removeChild(textArea);
                    showAlert('Đã sao chép link vào clipboard!', 'success');
                }
            }
        }

        // Show Bootstrap alert
        function showAlert(message, type = 'info') {
            const alertDiv = document.createElement('div');
            alertDiv.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
            alertDiv.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
            alertDiv.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            document.body.appendChild(alertDiv);
            
            // Auto remove after 3 seconds
            setTimeout(() => {
                if (alertDiv.parentNode) {
                    alertDiv.remove();
                }
            }, 3000);
        }

        // Change car image
        function changeCarImage(index) {
            const carImage = document.getElementById('carImage');
            
            // Add fade out effect
            carImage.style.opacity = '0';
            carImage.style.transition = 'opacity 0.3s ease';
            
            setTimeout(() => {
                carImage.src = carImages[index];
                carImage.style.opacity = '1';
            }, 300);
        }

        // Pagination dots functionality
        document.querySelectorAll('.dot').forEach((dot) => {
            dot.addEventListener('click', () => {
                const index = parseInt(dot.getAttribute('data-index'));
                
                // Remove active class from all dots
                document.querySelectorAll('.dot').forEach(d => d.classList.remove('active'));
                // Add active class to clicked dot
                dot.classList.add('active');
                // Update image counter
                document.querySelector('.image-counter').textContent = `${index + 1}/${carImages.length}`;
                
                // Change car image
                currentImageIndex = index;
                changeCarImage(index);
            });
        });

        // Touch/swipe support for mobile
        let startX = 0;
        let endX = 0;

        document.querySelector('.car-image-container').addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        document.querySelector('.car-image-container').addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = startX - endX;

            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0 && currentImageIndex < carImages.length - 1) {
                    // Swipe left - next image
                    currentImageIndex++;
                } else if (diff < 0 && currentImageIndex > 0) {
                    // Swipe right - previous image
                    currentImageIndex--;
                }

                // Update UI
                document.querySelectorAll('.dot').forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentImageIndex);
                });
                document.querySelector('.image-counter').textContent = `${currentImageIndex + 1}/${carImages.length}`;
                changeCarImage(currentImageIndex);
            }
        }

        // Insurance modal functionality
        function openInsuranceModal() {
            const modal = new bootstrap.Modal(document.getElementById('insuranceModal'));
            modal.show();
        }

        // Promotion modal functionality
        function openPromotionModal() {
            const modal = new bootstrap.Modal(document.getElementById('promotionModal'));
            modal.show();
        }

        // Regulations modal functionality
        function openRegulationsModal() {
            const modal = new bootstrap.Modal(document.getElementById('regulationsModal'));
            modal.show();
        }

        // OTOD Fee modal functionality
        function openOtodFeeModal() {
            const modal = new bootstrap.Modal(document.getElementById('otodFeeModal'));
            modal.show();
        }

        // Navigate to payment page
        function navigateToPayment() {
            // You can replace this with your actual payment page URL
            window.location.href = '/payment';
            // Or if you want to open in a new tab:
            // window.open('/payment', '_blank');
        }
    </script>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/car-detail.blade.php ENDPATH**/ ?>