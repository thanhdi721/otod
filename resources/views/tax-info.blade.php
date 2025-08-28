@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 920px">
        <div class="py-3">
            <a href="{{ url()->previous() }}" class="text-decoration-none text-dark d-inline-flex align-items-center gap-2">
                <span class="fs-5">←</span>
                <span>Quay về</span>
            </a>
        </div>

        <h3 class="fw-bold mb-4">Thông tin khai thuế chủ xe</h3>

        <form class="mb-5">
            <div class="mb-3 form-floating select-wrapper">
                <select class="form-select form-select-lg rounded-3 tax-input" id="taxBusinessType"
                    aria-label="Loại hình kinh doanh">
                    <option value="cnkd" selected>Cá nhân kinh doanh/ Hộ kinh doanh</option>
                    <option value="cnkd_only">Cá nhân kinh doanh</option>
                    <option value="hkd_only">Hộ kinh doanh</option>
                    <option value="cty">Tổ chức/ Công ty</option>
                </select>
                <label for="taxBusinessType">Loại hình kinh doanh</label>
                <span class="chev"><i class="bi bi-chevron-down"></i></span>
            </div>

            <div class="mb-3 form-floating select-wrapper">
                <select class="form-select form-select-lg rounded-3 tax-input" id="taxResidence"
                    aria-label="Loại hình cư trú">
                    <option value="resident" selected>Cá nhân cư trú</option>
                    <option value="non-resident">Cá nhân không cư trú</option>
                </select>
                <label for="taxResidence">Loại hình cư trú</label>
                <span class="chev"><i class="bi bi-chevron-down"></i></span>
            </div>

            <div class="mb-3 form-floating">
                <input type="text" class="form-control form-control-lg rounded-3 tax-input" id="fullName"
                    placeholder="Tên đầy đủ" value="Đặng Văn Lộc">
                <label for="fullName">Tên đầy đủ</label>
            </div>

            <div class="mb-4 form-floating">
                <input type="text" class="form-control form-control-lg rounded-3 tax-input" id="cccd"
                    placeholder="Số CCCD" value="082195009807">
                <label for="cccd">Số CCCD</label>
            </div>

            <button type="button" class="btn btn-primary w-100 py-3 fw-semibold"
                style="border-radius: 10px; background:#2B4896">Lưu</button>
        </form>
    </div>

    <style>
        .tax-input {
            background: #fff;
            font-size: 14px;
        }

        .tax-input::placeholder {
            color: #6b7280;
        }

        .form-floating>label {
            color: #8A8A8A;
        }

        .form-floating>.form-control,
        .form-floating>.form-select {
            border-radius: 12px;
            padding-top: 1.625rem;
            padding-bottom: .625rem;
        }

        /* Custom chevron for selects */
        .select-wrapper {
            position: relative;
        }

        .select-wrapper select {
            appearance: none;
            -webkit-appearance: none;
            background-image: none;
            padding-right: 2.5rem;
        }

        .select-wrapper .chev {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #8A8A8A;
            pointer-events: none;
        }
    </style>
@endsection
