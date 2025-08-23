<div class="card h-100 shadow-sm border-0">
    <a href="/car-detail" class="text-decoration-none text-dark">
        <div class="card-body p-3 bg-light">

            <div class="bg-light mb-2 ">
                <div class="d-flex justify-content-between align-items-start mb-2">
                    <h5 class="fw-bold fs-5 fs-md-4 fs-lg-3 mb-0">
                        {{ $name ?? 'Kia Rio 2015' }}
                    </h5>

                    <span class="badge bg-warning text-dark fw-bold fs-7 fs-md-6 fs-lg-6">
                        <i class="bi bi-star-fill me-1"></i> {{ $rating ?? '4.0' }} ★ | Tài xịn
                    </span>

                </div>
                <div class="text-muted mb-2 fs-7 fs-md-6 fs-lg-5">
                    <i class="bi bi-geo-alt-fill me-1"></i> {{ $location ?? 'Quận 1, TP Hồ Chí Minh' }}
                </div>
                <img src="{{ $image ?? asset('assets/images/product-rcm.png') }}" alt="{{ $name ?? 'Kia Rio 2015' }}"
                    style="max-width: 100%;object-fit:contain;">

                <div class="mb-2">
                    <span class="text-decoration-line-through text-muted me-2 fs-7 fs-md-6 fs-lg-5">
                        {{ $old_price ?? '976.000đ' }}
                    </span>
                    <span class="fw-bold fs-6 fs-md-5 fs-lg-4 text-dark">
                        {{ $price ?? '856.000đ' }}
                    </span>
                    <span class="text-muted fs-7 fs-md-6 fs-lg-5">/ngày</span>
                </div>
                <div class="text-muted mb-2 fs-7 fs-md-6 fs-lg-5">Giá chưa bao gồm VAT</div>
                <div class="d-flex gap-2 mb-2">
                    <span class="badge rounded-pill fs-7 fs-md-6 fs-lg-5 d-flex align-items-center gap-1 px-3 py-2"
                        style="background-color:#555;">
                        <img src="{{ asset('/assets/images/sotudong.png') }}" alt="">
                        Số tự động
                    </span>
                    <span class="badge rounded-pill fs-7 fs-md-6 fs-lg-5 d-flex align-items-center gap-1 px-3 py-2"
                        style="background-color:#555;">
                        <img src="{{ asset('/assets/images/ghe.png') }}" alt="">
                        4 chỗ
                    </span>
                    <span class="badge rounded-pill fs-7 fs-md-6 fs-lg-5 d-flex align-items-center gap-1 px-3 py-2"
                        style="background-color:#555;">
                        <img src="{{ asset('/assets/images/xang.png') }}" alt="">
                        Xăng
                    </span>
                </div>

            </div>

        </div>
        <div class="d-flex justify-content-between align-items-center p-2 rounded-bottom"
            style="background: #E7E5E4; border-top-left-radius: 0 ">
            <div class="d-flex align-items-center gap-1">
                <img src="{{ asset('assets/images/sixt.png') }}" alt="Sixt" style="height:28px;">
                <span class="text-muted small">Và 12 nhà cung cấp khác.</span>
            </div>
            <a href="#" class="small fw-bold text-primary">Xem Chi tiết</a>
        </div>
    </a>
</div>
