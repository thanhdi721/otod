@extends('layouts.layout-with-sidebar')

@section('title', 'Hồ sơ cá nhân - OTOD')

@section('styles')
    <style>
        .profile-header {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        .profile-avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            object-fit: cover;
        }
        .badge-tier {
            background-color: #FEBA11;
            color: #000;
            border-radius: 16px;
            padding: 2px 8px;
            font-size: 14px;
            font-weight: 400;
        }
        .section-title {
            font-weight: 700;
            margin-bottom: 12px;
            color: #212529;
        }
        .card-setting {
            margin-bottom: 16px;
        }
        .form-help {
            font-size: 12px;
            color: #6c757d;
        }
        .social-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #f1f3f5;
        }
        .social-item:last-child { border-bottom: none; }
        .switch input { width: 2.25rem; height: 1.2rem; }
        .btn-live-chat { background-color: #2B4896; color: #ffffff; border: none;padding: 0.375rem 0.75rem; border-radius: 16px; }
        .btn-call-otod { background-color: #FEBA11; color: #111111; border: none;padding: 0.375rem 0.75rem; border-radius: 16px; }
        .gender-options { display: flex; align-items: center; gap: 8px; }
        .gender-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border: 1px solid #e9ecef;
            border-radius: 999px;
            padding: 6px 12px;
            background: #f8f9fa;
            cursor: pointer;
            font-weight: 500;
        }
        .gender-pill.active {
            border-color: #2B4896;
            background: #eef2ff;
            color: #2B4896;
        }

        /* Header meta layout */
        .profile-meta { display: flex; align-items: center; justify-content: space-between; gap: 12px; flex-wrap: wrap; }
        .profile-meta .meta-info { display: flex; flex-direction: column; gap: 6px; }
        .profile-meta .meta-top { display: flex; align-items: center; gap: 8px; }
        .profile-meta .meta-actions { display: flex; gap: 12px; }

        /* Mobile: actions under badge */
        @media (max-width: 576px) {
            .profile-meta { align-items: flex-start; }
            .profile-meta .meta-actions { width: 100%; margin-top: 4px; }
        }
    </style>
@endsection

@section('content')
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        <div class="page-header mb-3 mt-2 mt-lg-5">
            <div class="profile-header">
                <img class="profile-avatar" src="https://i.pravatar.cc/128?img=1" alt="Avatar">
                <div class="profile-meta">
                    <div class="meta-info">
                        <div class="meta-top">
                            <h5 class="mb-0 fw-bold">Thảo Xinh 95</h5>
                            <img src="{{ asset('assets/images/ic-check.png') }}" alt="Verify" width="24" height="24">
                        </div>
                        <span class="badge-tier">Thành viên Gold</span>
                    </div>
                    <div class="meta-actions">
                        <a href="#" class="btn btn-sm btn-live-chat"><i class="bi bi-chat-dots"></i> Live Chat</a>
                        <a href="#" class="btn btn-sm btn-call-otod"><i class="bi bi-telephone"></i> Gọi OTOD</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-setting">
            <div class="section-title">Thông tin cá nhân</div>
            <div class="row g-3">
                <div class="col-12 col-md-6">
                    <label class="form-label">Tên thân mật</label>
                    <input type="text" class="form-control" placeholder="Andy" >
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label">Họ và tên (trùng khớp CCCD)</label>
                    <input type="text" class="form-control" placeholder="Nguyễn Đình Anh Tuấn" >
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label">Năm sinh</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="1995" >
                        <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label">Giới tính</label>
                    <input type="hidden" name="gender" id="genderValue" value="male">
                    <div class="gender-options">
                        <div class="gender-pill active" data-gender="male"><img src="{{ asset('assets/images/ic-man.png') }}" alt="Male"> Nam</div>
                        <div class="gender-pill" data-gender="female"><img src="{{ asset('assets/images/ic-women.png') }}" alt="Female"> Nữ</div>
                        <div class="gender-pill" data-gender="other"><img src="{{ asset('assets/images/ic-lgbt.png') }}" alt="Other"> Khác</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card-setting">
            <div class="section-title">Thông tin liên hệ</div>
            <div class="row g-3">
                <div class="col-12">
                    <label class="form-label">Địa chỉ tạm trú</label>
                    <input type="text" class="form-control" placeholder="7/28 Thành Thái, phường 14, quận 10, HCM">
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label">Công ty đang làm việc</label>
                    <input type="text" class="form-control" placeholder="Viettel">
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="sample@gmail.com">
                </div>
                <div class="col-12 col-md-6">
                    <label class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" value="084 937 1235" disabled>
                    <div class="form-help">*Liên hệ OTOD để cập nhật SĐT</div>
                </div>
            </div>
        </div>

        <div class="card-setting">
            <div class="section-title">Liên kết tài khoản</div>
            <div class="social-item">
                <div class="d-flex align-items-center gap-2">
                   <img src="{{ asset('assets/images/ic-facebook.png') }}" alt="Facebook" width="32" height="32">
                    <span>Facebook</span>
                </div>
                <div class="form-check form-switch m-0">
                    <input class="form-check-input" type="checkbox">
                </div>
            </div>
            <div class="social-item">
                <div class="d-flex align-items-center gap-2">
                    <img src="{{ asset('assets/images/ic-tiktok.png') }}" alt="Tiktok" width="32" height="32">
                    <span>Tiktok</span>
                </div>
                <div class="form-check form-switch m-0">
                    <input class="form-check-input" type="checkbox">
                </div>
            </div>
        </div>

        <div class="text-center my-4">
            <button class="btn btn-primary px-4 py-2">Lưu thông tin</button>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        (function() {
            const pills = document.querySelectorAll('.gender-pill');
            const hidden = document.getElementById('genderValue');
            pills.forEach(function(pill){
                pill.addEventListener('click', function(){
                    pills.forEach(function(p){ p.classList.remove('active'); });
                    this.classList.add('active');
                    hidden.value = this.getAttribute('data-gender');
                });
            });
        })();
    </script>
@endsection


