@extends('layouts.layout-with-sidebar-owner')

@section('content')
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        <!-- Page Header -->
        <div class="page-header mb-4 mt-4">
            <h1 class="page-title fw-bold text-dark fs-3 fs-md-2 fs-lg-1 mb-0">VETC</h1>
        </div>

        <!-- Main VETC Card -->
        <div class="vetc-card border rounded-4 p-4" style="background: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            <div class="row align-items-center">
                <!-- Left Section - Account Information -->
                <div class="col-md-8">
                    <!-- Money Bag Icon -->
                    <div class="money-bag-icon d-flex align-items-center justify-content-start mb-2">
                        <img src="{{ asset('/assets/images/money-02.png') }}" alt="">
                    </div>
                    <div class="d-flex align-items-start gap-3">

                        <!-- Account Details -->
                        <div class="account-details">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <h5 class="fw-bold mb-0" style="color: #333;">Tài khoản giao thông</h5>
                                <i class="bi bi-chevron-right text-muted"></i>
                            </div>
                            <a href="/search-result-car" class="text-primary text-decoration-none"
                                style="font-size: 0.9rem;">Lịch
                                sử</a>
                        </div>
                    </div>
                </div>

                <!-- Right Section - Balance and Action -->
                <div class="col-md-4 text-end">
                    <div class="balance-amount mb-3">
                        <span class="fw-bold fs-4" style="color: #28a745;">1.250.000₫</span>
                    </div>
                    <button class="btn btn-primary px-4 py-2 rounded-3"
                        style="background-color: #2B4896; border-color: #2B4896;">
                        Nạp tiền
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .vetc-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .vetc-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }


    .account-details a:hover {
        text-decoration: underline !important;
    }

    .btn-primary:hover {
        background-color: #1a365d !important;
        border-color: #1a365d !important;
    }

    @media (max-width: 768px) {
        .vetc-card .row {
            flex-direction: column;
            gap: 1.5rem;
        }

        .col-md-8,
        .col-md-4 {
            width: 100%;
        }

        .col-md-4 {
            text-align: left !important;
        }

        .balance-amount {
            margin-bottom: 1rem !important;
        }

        .btn {
            width: 100%;
        }
    }
</style>
