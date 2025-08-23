@extends('layouts.app')
@section('content')

<div style="background-color: #F4F4F4; padding: 20px 0;">
    <div class="container">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold mb-0">Thanh toán</h2>
    <div class="badge px-3 py-2 rounded-pill" style="background-color: #2B4896; color: #fff;">
      <small class="fw-semibold"><img src="{{ asset('assets/images/stop-watch.png') }}" alt="time" class="img-fluid mb-1 me-1" style="width: 16px; height: 16px;">Thời gian giữ chỗ: 10:20</small>
    </div>
  </div>

  <div class="row g-4">
    <!-- Cột trái -->
    <div class="col-lg-6 d-flex flex-column gap-3">
      <!-- Thông tin đặt xe -->
      <div class="bg-white rounded-3 shadow-sm p-3">
        <h6 class="fw-bold mb-3">Thông tin đặt xe</h6>
        <div class="d-flex">
          <img src="{{ asset('assets/images/img-car.png') }}"
               class="rounded me-3" width="120" height="80" style="object-fit: cover;">
          <div>
            <h6 class="mb-1 fw-semibold">HYUNDAI ELANTRA 2022</h6>
            <small class="text-muted d-block">Mã đặt xe: 123456</small>
            <div class="text-warning mt-1">
              ★★★★☆ <span class="text-muted">500 đánh giá</span>
            </div>
          </div>
        </div>
      </div>

             <!-- Thời gian thuê xe -->
       <div class="bg-white rounded-3 shadow-sm p-3">
         <h6 class="fw-bold mb-3"> Thời gian thuê xe</h6>
         <div class="mb-2">
           <img src="{{ asset('assets/images/clock-01.png') }}" alt="time" class="img-fluid mb-1 me-1" style="width: 16px; height: 16px;">
           <span>21:00 T4,09/04 • 20:00 T5,12/04</span>
         </div>
         <div>
           <img src="{{ asset('assets/images/location-01.png') }}" alt="location" class="img-fluid mb-1 me-1" style="width: 16px; height: 16px;">
           <span>72 Lê Thánh Tôn Bến Nghé, Quận 1, Hồ Chí Minh</span>
         </div>
       </div>

      <!-- Thông tin đơn thuê -->
      <div class="bg-white rounded-3 shadow-sm p-3">
        <h6 class="fw-bold mb-3">Thông tin đơn thuê</h6>
        <div class="row mb-2">
          <div class="col-5 text-muted">Tên</div>
          <div class="col-7 fw-medium">Nguyễn Văn A</div>
        </div>
        <div class="row mb-2">
          <div class="col-5 text-muted">Số điện thoại</div>
          <div class="col-7">0369286785</div>
        </div>
        <div class="row mb-2">
          <div class="col-5 text-muted">Ngày đặt</div>
          <div class="col-7">9/4/2025</div>
        </div>
        <div class="row mb-2">
          <div class="col-5 text-muted">Ngày trả</div>
          <div class="col-7">12/4/2025</div>
        </div>
        <div class="row mb-2">
          <div class="col-5 text-muted">Bảo hiểm thân vỏ</div>
          <div class="col-7 text-success">Có</div>
        </div>
        <div class="row">
          <div class="col-5 text-muted">Bảo hiểm người trên xe</div>
          <div class="col-7 text-success">Có</div>
        </div>
      </div>
    </div>

    <!-- Cột phải -->
    <div class="col-lg-6">
      <div class="bg-white rounded-3 shadow-sm p-3">
        <h6 class="fw-bold mb-3">Chi phí</h6>

                 <div class="d-flex justify-content-between mb-2">
           <span>Phí OTOD <i class="bi bi-info-circle text-muted"></i></span>
           <span>120.000đ</span>
         </div>
         <div class="d-flex justify-content-between mb-2">
           <span>Đơn giá thuê <i class="bi bi-info-circle text-muted"></i></span>
           <span>120.000đ</span>
         </div>
         <div class="d-flex justify-content-between mb-3">
           <span>Bảo hiểm thuê xe <i class="bi bi-info-circle text-muted"></i></span>
           <span>120.000đ</span>
         </div>

         <hr>

         <div class="d-flex justify-content-between mb-2">
           <span>Tổng cộng</span>
           <span>120.000đ</span>
         </div>

         <div class="d-flex justify-content-between text-danger mb-3">
           <span>Giảm giá 120k</span>
           <span>-120.000đ</span>
         </div>

         <button class="btn btn-outline-success w-100 mb-3 d-flex align-items-center justify-content-between">
           <span><i class="bi bi-gift me-2"></i> Mã khuyến mại</span>
           <i class="bi bi-chevron-right"></i>
         </button>

         <div class="d-flex justify-content-between mb-2">
           <span>Thành tiền</span>
           <span>120.000đ</span>
         </div>
         <div class="d-flex justify-content-between mb-2">
           <span>Thanh toán giữ chỗ <i class="bi bi-info-circle text-muted"></i></span>
           <span>120.000đ</span>
         </div>
         <div class="d-flex justify-content-between fw-bold mb-3">
           <span>Thanh toán khi nhận xe <i class="bi bi-info-circle text-muted"></i></span>
           <span>120.000đ</span>
         </div>
       </div>

       <!-- Payment Summary Card -->
        <div class="bg-white rounded-3 shadow-sm p-3 mt-3">
         <div class="d-flex justify-content-between mb-1">
           <span>Thanh toán phí giữ chỗ:</span>
           <span class="fw-bold">208.000đ</span>
         </div>
         <div class="d-flex justify-content-between">
           <span>Tổng chi phí:</span>
           <span class="fw-bold text-dark">2.089.710đ</span>
         </div>
         
         <button class="btn btn-primary w-100 mt-3 d-flex align-items-center justify-content-center">
           <img src="https://vnpay.vn/wp-content/uploads/2020/07/logo-vnpay.png" alt="VNPAY" style="height: 20px; margin-right: 8px;">
           Thanh toán bằng ví VNPAY
         </button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

@endsection
