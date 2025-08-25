
<?php $__env->startSection('content'); ?>

<div style="background-color: #F4F4F4; padding: 20px 0;">
    <div class="container">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold mb-0">Thanh toán</h2>
    <div class="badge px-3 py-2 rounded-pill" style="background-color: #2B4896; color: #fff;">
      <small class="fw-semibold"><img src="<?php echo e(asset('assets/images/stop-watch.png')); ?>" alt="time" class="img-fluid mb-1 me-1" style="width: 16px; height: 16px;">Thời gian giữ chỗ: 10:20</small>
    </div>
  </div>

  <div class="row g-4">
    <!-- Cột trái -->
    <div class="col-lg-6 d-flex flex-column gap-3">
      <!-- Thông tin đặt xe -->
      <div class="bg-white rounded-3 shadow-sm p-3">
        <h6 class="fw-bold mb-3">Thông tin đặt xe</h6>
        <div class="d-flex">
          <img src="<?php echo e(asset('assets/images/img-car.png')); ?>"
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
           <img src="<?php echo e(asset('assets/images/clock-01.png')); ?>" alt="time" class="img-fluid mb-1 me-1" style="width: 16px; height: 16px;">
           <span>21:00 T4,09/04 • 20:00 T5,12/04</span>
         </div>
         <div>
           <img src="<?php echo e(asset('assets/images/location-02.png')); ?>" alt="location" class="img-fluid mb-1 me-1" style="width: 16px; height: 16px;">
           <span>72 Lê Thánh Tôn Bến Nghé, Quận 1, Hồ Chí Minh</span>
         </div>
       </div>

      <!-- Thông tin đơn thuê -->
      <div class="bg-white rounded-3 shadow-sm p-3">
        <h6 class="fw-bold mb-3">Thông tin đơn thuê</h6>
        <div class="row mb-2">
          <div class="col-5 text-muted">Tên</div>
          <div class="col-7 fw-semibold text-end">Nguyễn Văn A</div>
        </div>
        <div class="row mb-2">
          <div class="col-5 text-muted">Số điện thoại</div>
          <div class="col-7 fw-semibold text-end">0369286785</div>
        </div>
        <div class="row mb-2">
          <div class="col-5 text-muted">Ngày đặt</div>
          <div class="col-7 fw-semibold text-end">9/4/2025</div>
        </div>
        <div class="row mb-2">
          <div class="col-5 text-muted">Ngày trả</div>
          <div class="col-7 fw-semibold text-end">12/4/2025</div>
        </div>
        <div class="row mb-2">
          <div class="col-5 text-muted">Bảo hiểm thân vỏ</div>
          <div class="col-7 fw-semibold text-end text-success">Có</div>
        </div>
        <div class="row">
          <div class="col-5 text-muted">Bảo hiểm người trên xe</div>
          <div class="col-7 fw-semibold text-end text-success">Có</div>
        </div>
      </div>
    </div>

    <!-- Cột phải -->
    <div class="col-lg-6">
      <div class="bg-white rounded-3 shadow-sm p-3">
        <h6 class="fw-bold mb-3">Chi phí</h6>
          <div style="background-color: #F4F4F4; padding: 10px; border-radius: 10px;" class="fw-semibold">
          <div class="d-flex justify-content-between mb-2" style="font-size: 14px;">
           <span style="color:gray">Phí OTOD <i class="bi bi-info-circle text-muted"></i></span>
           <span>120.000đ</span>
         </div>
         <div class="d-flex justify-content-between mb-2">
           <span style="color:gray">Đơn giá thuê <i class="bi bi-info-circle text-muted"></i></span>
           <span>120.000đ</span>
         </div>
         <div class="d-flex justify-content-between mb-3">
           <span style="color:gray">Bảo hiểm thuê xe <i class="bi bi-info-circle text-muted"></i></span>
           <span>120.000đ</span>
         </div>

         <hr>

         <div class="d-flex justify-content-between mb-2">
           <span style="color:gray">Tổng cộng</span>
           <span>120.000đ</span>
         </div>
         <hr>
         <span class="fw-semibold">Giảm giá</span>
         <div class="d-flex justify-content-between text-success mb-3">
           <span style="color:gray">Giảm giá 120k</span>
           <span>-120.000đ</span>
         </div>

          <div class="border border-success rounded p-2 mb-3 d-flex justify-content-between align-items-center text-success fw-semibold" style="background:#f0fdf4; cursor:pointer;">
      <span><img src="<?php echo e(asset('assets/images/elements.png')); ?>" alt="gift" class="img-fluid me-2" style="width: 20px; height: 20px;"> Mã khuyến mại</span>
      <i class="bi bi-chevron-right"></i>
    </div>

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
       </div>

       <!-- Payment Summary Card -->
        <div class="bg-white rounded-3 shadow-sm p-3 mt-3">
         <div class="d-flex justify-content-center mb-1">
           <span>Thanh toán phí giữ chỗ:</span>
           <span class="fw-bold">208.000đ</span>
         </div>
         <div class="d-flex justify-content-center">
           <span>Tổng chi phí:</span>
           <span class="fw-bold text-dark">2.089.710đ</span>
         </div>
         
         <button class="btn w-100 mt-3 d-flex align-items-center justify-content-center" style="background-color: #2B4896; color: white; border-radius: 10px;" onclick="showPaymentSuccessModal()">
           <img src="<?php echo e(asset('assets/images/vnpay.png')); ?>" alt="VNPAY" style="height: 20px; margin-right: 8px;">
           Thanh toán bằng ví VNPAY
         </button>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<!-- Payment Success Modal -->
<div class="modal fade" id="paymentSuccessModal" tabindex="-1" aria-labelledby="paymentSuccessModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow" style="border-radius: 16px;">
      <div class="modal-body text-center p-5">
        <!-- Success Icon -->
        <div class="mb-4">
          <div style="width: 80px; height: 80px; background-color: #28a745; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto;">
            <i class="bi bi-check-lg text-white" style="font-size: 40px;"></i>
          </div>
        </div>
        
        <!-- Success Message -->
        <h5 class="fw-bold mb-4">Thanh toán thành công</h5>
        
        <!-- OK Button -->
        <button type="button" class="btn btn-primary px-4 py-2" style="background-color: #2B4896; border: none; border-radius: 8px;" onclick="closePaymentSuccessModal()">
          Đồng ý
        </button>
      </div>
    </div>
  </div>
</div>

<script>
function showPaymentSuccessModal() {
  // Hiển thị modal
  var modal = new bootstrap.Modal(document.getElementById('paymentSuccessModal'));
  modal.show();
}

function closePaymentSuccessModal() {
  // Đóng modal
  var modal = bootstrap.Modal.getInstance(document.getElementById('paymentSuccessModal'));
  modal.hide();
  
  // Có thể thêm redirect hoặc action khác ở đây
  // window.location.href = '/dashboard'; // Ví dụ redirect về dashboard
}
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/payment.blade.php ENDPATH**/ ?>