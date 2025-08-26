@extends('layouts.layout-with-sidebar-owner')

@section('content')
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        <!-- Page Header -->
        <div class="page-header mb-2 mb-lg-4 mt-2 mt-lg-5">
            <h1 class="page-title fw-bold text-dark mb-0">Ví chủ xe</h1>
        </div>
        <!-- Wallet Summary Card -->
        <div class=" wallet-summary-card border-0">
            <div class="">
                <div class="card-title d-flex  justify-content-between shadow-sm px-3 py-3" style="height:90px;">
                    <div class="">
                        <img src="{{ asset('/assets/images/money-ic.png') }}" alt="">
                        <div class="fw-bold fs-6 fs-md-5 fs-lg-4 mt-2">
                            <span class="">Tổng số dư</span>
                            <i class="bi bi-chevron-right"></i>
                        </div>
                    </div>
                    <div class="card-text mt-auto fw-bold fs-3 fs-md-2 fs-lg-1" style="color:#16A350">1.250.000đ</div>
                </div>
                <div class="d-flex w-100 gap-3 justify-content-between mt-4">
                    <div class="d-flex justify-content-start gap-2 p-3 align-items-center w-100 rounded"
                        style="background:#2B4896; color: white; height:72px">
                        <img src="{{ asset('/assets/images/wallet-w.png') }}" alt="">
                        <div class="d-flex flex-column gap-1">
                            <span class="fw-medium">Tiền đầu kì</span>
                            <span class="fw-medium">10.000.000</span>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start gap-2 p-3 align-items-center w-100 rounded"
                        style="background:#FEBA11; color: black; height:72px">
                        <img src="{{ asset('/assets/images/wallet-b.png') }}" alt="">
                        <div class="d-flex flex-column gap-1">
                            <span class="fw-medium">Tiền cuối kì</span>
                            <span class="fw-medium">5.000.000</span>
                        </div>
                    </div>
                </div>
                <div class="mt-4" style="color:#2B4896">
                    Thông tin khai thuế chủ xe
                </div>
            </div>
        </div>
        <!-- Order Overview -->
        <div class="mt-4">
            <div>
                <h5 class="fw-bold text-dark mb-3">Tổng quan đơn hàng</h5>
            </div>
            <div class="row g-3">
                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/car-online.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Đang hoạt động</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">23</span>
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/wait-confirm.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Cần xác nhận</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">15</span>
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/completed-ic.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Đã hoàn thành</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">37</span>
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/cancel-ic.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Đã hủy</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">1</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Overview -->
        <div class="mt-4 mb-5">
            <div>
                <h6 class="fw-bold text-dark mb-3">Dịch vụ</h6>
            </div>
            <div class="row g-3">
                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/car-parking-ic.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Tự lái</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">8</span>
                    </div>
                </div>

                <div class="col-6 col-lg-6">
                    <div class="d-flex flex-column gap-2 p-3 rounded" style="background:#F4F4F4">
                        <div>
                            <img src="{{ asset('/assets/images/have-drive.png') }}" class="object-fit-cover"
                                style="height: 30px" alt="">
                        </div>
                        <span class="fw-medium fs-6 fs-md-5 fs-lg-4" style="color:#737272">Có lái</span>
                        <span class="fw-bold fs-3 fs-md-2 fs-lg-1">29</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
