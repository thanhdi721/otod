

<?php $__env->startSection('content'); ?>
    <div class="container" style="max-width: 920px">
        <div class="py-3">
            <a href="<?php echo e(route('detail-wallet')); ?>"
                class="text-decoration-none text-dark d-inline-flex align-items-center gap-2">
                <span class="fs-5">←</span>
                <span>Quay về</span>
            </a>
        </div>

        <h4 class="fw-bold mb-3">Ví chủ xe</h4>

        <!-- Số dư -->
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-body p-4 d-flex justify-content-between align-items-center">
                <div class="d-flex flex-column align-items-start gap-3">
                    <div class="wallet-icon rounded-circle d-flex align-items-center justify-content-center">
                        <img src="<?php echo e(asset('/assets/images/money-ic.png')); ?>" alt="Wallet Icon">
                    </div>
                    <a href="#" class="d-flex align-items-center gap-2 text-decoration-none text-dark">
                        <div class="text-muted">Tổng số dư</div>
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
                <div id="walletBalanceDisplay" class="fw-semibold text-success fs-3">1.250.000đ</div>
            </div>
        </div>

        <div class="d-flex w-100 gap-3 justify-content-between mt-2 mb-2 d-block d-md-none">
            <div class="d-flex justify-content-start gap-2 p-3 align-items-center w-100 rounded"
                style="background:#2B4896; color: white; height:72px">
                <img src="<?php echo e(asset('/assets/images/wallet-w.png')); ?>" alt="">
                <div class="d-flex flex-column gap-1">
                    <span class="fw-medium">Tiền đầu kì</span>
                    <span class="fw-medium">10.000.000</span>
                </div>
            </div>
            <div class="d-flex justify-content-start gap-2 p-3 align-items-center w-100 rounded"
                style="background:#FEBA11; color: black; height:72px">
                <img src="<?php echo e(asset('/assets/images/wallet-b.png')); ?>" alt="">
                <div class="d-flex flex-column gap-1">
                    <span class="fw-medium">Tiền cuối kì</span>
                    <span class="fw-medium">5.000.000</span>
                </div>
            </div>
        </div>

        <!-- Rút tiền -->
        <div class="mb-3">
            <label class="form-label text-muted">Số tiền cần rút</label>
            <input id="amountInput" type="text" inputmode="numeric" class="form-control form-control-lg" placeholder="0đ"
                autocomplete="off">
            <div id="amountHelp" class="form-text text-danger d-none mt-1">Số tiền không hợp lệ.</div>
        </div>

        <div class="card border-0 shadow-sm mb-4">
            <div class="card-header bg-white border-0 fw-semibold">Tài khoản/ Thẻ</div>
            <div class="card-body">
                <div class="bank-card d-flex align-items-start justify-content-between p-3 rounded-3 border">
                    <div class="d-flex align-items-start gap-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center">
                            <img src="<?php echo e(asset('/assets/images/logo-techcom.jpg')); ?>" class="bank-logo" alt="Bank Logo">
                        </div>
                        <div>
                            <div class="fw-semibold">TECHCOMBANK</div>
                            <div class="text-muted small">STK: 0931791567</div>
                            <div class="text-muted small">Nguyễn Đình Anh Tuấn</div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-link p-0 text-muted"><i class="bi bi-pencil"></i></button>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-outline-primary px-4" style="border-radius:10px">+ Thêm tài khoản
                        ngân hàng</button>
                </div>
            </div>
        </div>

        <div class="mb-5">
            <button id="submitBtn" type="button" class="btn w-100 py-3 fw-semibold"
                style="border-radius: 10px; background:#C7D2FE; color:#fff;" disabled>
                Yêu cầu rút tiền
            </button>
        </div>
    </div>

    <!-- Modal xác nhận rút tiền -->
    <div class="modal fade" id="cashOutSuccessModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 rounded-4">
                <div class="modal-body text-center p-4">
                    <div class="mx-auto mb-3 success-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-check-lg text-white fs-4"></i>
                    </div>
                    <div class="fw-semibold mb-1">Rút thành công: <span id="successAmount" class="text-success">0đ</span>
                    </div>
                    <div class="text-muted small mb-3">Tiền sẽ được chuyển về tài khoản liên kết trong vòng 1–2 ngày làm
                        việc</div>
                    <button type="button" id="ackBtn" class="btn btn-primary py-2 px-4fw-semibold"
                        style="border-radius:10px; background:#2B4896">Đã hiểu</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .wallet-icon {
            font-size: 18px;
        }

        .bank-logo {
            width: 40px;
            height: 40px;
            background: #F3F4F6;
            font-weight: 700;
        }

        .success-circle {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: #22c55e;
        }
    </style>

    <script>
        (function() {
            const balance = 1250000; // 1.250.000đ
            const amountInput = document.getElementById('amountInput');
            const submitBtn = document.getElementById('submitBtn');
            const help = document.getElementById('amountHelp');

            function parseNumber(val) {
                return Number(String(val).replace(/[^0-9]/g, '') || 0);
            }

            function formatCurrency(num) {
                return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.') + 'đ';
            }

            function updateState() {
                const raw = parseNumber(amountInput.value);
                amountInput.value = raw ? raw.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.') : '';
                const valid = raw > 0 && raw <= balance;
                submitBtn.disabled = !valid;
                submitBtn.style.background = valid ? '#2B4896' : '#C7D2FE';
                help.classList.toggle('d-none', valid);
                if (!valid && raw > balance) {
                    help.textContent = 'Vượt quá số dư hiện có.';
                } else if (!valid) {
                    help.textContent = 'Số tiền không hợp lệ.';
                }
            }

            amountInput.addEventListener('input', updateState);

            submitBtn.addEventListener('click', function() {
                const amount = parseNumber(amountInput.value);
                if (amount <= 0 || amount > balance) return;
                // Hiển thị modal thành công
                document.getElementById('successAmount').textContent = formatCurrency(amount);
                const modal = new bootstrap.Modal(document.getElementById('cashOutSuccessModal'));
                modal.show();
                document.getElementById('ackBtn').onclick = function() {
                    modal.hide();
                    window.location.href = '<?php echo e(route('detail-wallet')); ?>';
                };
            });
        })();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\otod\resources\views/cash-out.blade.php ENDPATH**/ ?>