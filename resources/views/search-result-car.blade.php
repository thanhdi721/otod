@extends('layouts.app')

@section('content')
    <div class="search-container">
        <!-- Back Button -->
        <div class="back-row">
            <button class="back-button" onclick="history.back()">
                <i class="bi bi-arrow-left"></i>
            </button>
            <span class="back-text">Quay về</span>
        </div>

        <!-- Page Header -->
        <div class="title-row">
            <h1 class="page-title">Tìm kiếm</h1>
        </div>

        <!-- Search Form (Initial State) -->
        <div id="searchForm" class="search-form">
            <!-- Car Selection -->
            <div class="input-group">
                <div style="height:52px" class="input-group border rounded position-relative d-flex align-items-center">
                    <label class="input-label-floating">Xe</label>
                    <input type="text" class="form-control border-0" id="carInput" placeholder="Chọn xe" readonly>
                    <button class="btn-select-map btn bg-white px-3 py-2 rounded-3" onclick="toggleCarDropdown()">
                        Chọn xe
                    </button>
                </div>
            </div>

            <!-- Time Selection -->
            <div class="input-group">
                <div style="height:52px" class="input-group border rounded position-relative d-flex align-items-center">
                    <label class="input-label-floating">Thời gian</label>
                    <input type="text" class="form-control border-0" id="timeInput" placeholder="Chọn ngày" readonly>
                    <button class="btn-select-map btn bg-white px-3 py-2 rounded-3" onclick="toggleTimeDropdown()">
                        Chọn ngày
                    </button>
                </div>
            </div>

            <!-- Account Selection -->
            <div class="input-group">
                <div style="height:52px" class="input-group border rounded position-relative d-flex align-items-center">
                    <label class="input-label-floating">Tài khoản</label>
                    <input type="text" class="form-control border-0" id="accountInput" placeholder="Chọn tài khoản"
                        readonly>
                    <button class="btn-select-map btn bg-white px-3 py-2 rounded-3" onclick="toggleAccountDropdown()">
                        Chọn tài khoản
                    </button>
                </div>
            </div>

            <!-- Status Selection -->
            <div class="input-group">
                <div style="height:52px" class="input-group border rounded position-relative d-flex align-items-center">
                    <label class="input-label-floating">Trạng thái</label>
                    <input type="text" class="form-control border-0" id="statusInput" placeholder="Chọn trạng thái"
                        readonly>
                    <button class="btn-select-map btn bg-white px-3 py-2 rounded-3" onclick="toggleStatusDropdown()">
                        Chọn trạng thái
                    </button>
                </div>
            </div>

            <!-- Search Button -->
            <button class="search-button" onclick="performSearch()">
                Tìm kiếm
            </button>
        </div>

        <!-- Search Results (Hidden initially) -->
        <div id="searchResults" class="search-results" style="display: none;">
            <!-- Time Filter Bar -->
            <div class="time-filter-bar mb-4 p-3 rounded-3" style="background: #f8f9fa; border: 1px solid #dee2e6;">
                <div class="d-flex align-items-center justify-content-between">
                    <label class="form-label fw-medium text-dark mb-0 me-3">Thời gian:</label>
                    <span class="text-muted">09/04/2025 - 12/04/2025</span>
                </div>
            </div>

            <!-- Results List -->
            <div class="results-list">
                @for ($i = 0; $i < 3; $i++)
                    <div class="result-card border rounded-4 p-3 mb-3"
                        style="background: white; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
                        <div class="d-flex align-items-start justify-content-between">
                            <!-- Car Image and Details -->
                            <div class="d-flex gap-3">
                                <img src="{{ asset('/assets/images/prepare-2.png') }}" alt="Kia Rio" class="rounded-3"
                                    style="width: 80px; height: 80px; object-fit: cover;">
                                <div class="car-details">
                                    <h6 class="fw-bold mb-1">Kia Rio 2015</h6>
                                    <p class="text-muted mb-1 small">MGD: 12847749479</p>
                                    <p class="text-danger fw-bold mb-0">211.904 đ</p>
                                </div>
                            </div>

                            <!-- License Plate -->
                            <span class="badge bg-light text-dark px-3 py-2 rounded-pill"
                                style="font-size: 0.9rem; color: #6c757d !important;">
                                29U1.334.08
                            </span>
                        </div>

                        <!-- Bottom Section -->
                        <div class="mt-3 pt-3 border-top">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="d-flex flex-column gap-2">
                                        <!-- First Row: VETC and ID -->
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="badge bg-success text-white px-3 py-2 rounded">
                                                VETC
                                            </span>
                                            <span class="text-dark">E823849723948</span>
                                        </div>
                                        <!-- Second Row: Station and Date/Time -->
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('/assets/images/tram-ic.png') }}" alt="Kia Rio">
                                                <span class="text-muted small">Trạm KM 133+770</span>
                                            </div>
                                            <div class="d-flex align-items-center gap-2">
                                                <img src="{{ asset('/assets/images/calendar-ic2.png') }}" alt="Kia Rio">
                                                <span class="text-muted small">05/07/2025 18:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Total Amount Button -->
            <div class="total-amount-section mt-4">
                <button class="btn btn-danger py-3 rounded-3 fw-bold">
                    Tổng tiền 5.184.124 đ
                </button>
            </div>
        </div>
    </div>
@endsection

<style>
    .search-container {
        max-width: 800px;
        margin: 0 auto;
        padding: 24px;
        background: white;
        min-height: 100vh;
    }

    /* Back Row */
    .back-row {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 32px;
    }

    .back-button {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        border: none;
        background: #f8f9fa;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: #6c757d;
    }

    .back-text {
        color: #6c757d;
        font-size: 16px;
    }

    /* Title Row */
    .title-row {
        margin-bottom: 40px;
    }

    .page-title {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        margin: 0;
    }

    /* Search Form */
    .search-form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .input-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .input-label-floating {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        font-weight: 500;
        color: #6c757d;
        font-size: 14px;
        background: white;
        padding: 0 4px;
        z-index: 1;
        transition: all 0.2s ease;
        pointer-events: none;
    }

    .input-group .input-group {
        border: 1px solid #dee2e6 !important;
        border-radius: 8px !important;
        position: relative;
    }

    .form-control {
        border: none !important;
        box-shadow: none !important;
        background: transparent !important;
        padding-left: 60px !important;
        padding-right: 100px !important;
    }

    .form-control:focus {
        border: none !important;
        box-shadow: none !important;
    }

    .btn-select-map {
        border: none !important;
        background: white !important;
        color: #6c757d !important;
        font-size: 14px !important;
        position: absolute !important;
        right: 8px !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
    }

    .btn-select-map:hover {
        background: #f8f9fa !important;
    }

    /* Search Button */
    .search-button {
        width: 219px;
        height: 48px;
        background: #2B4896;
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        margin-top: 8px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    /* Results Section */
    .search-results {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .time-filter-bar {
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 16px;
    }

    .result-card {
        border: 1px solid #dee2e6;
        border-radius: 8px;
        padding: 16px;
        background: white;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .result-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.15);
    }

    .total-amount-section {
        margin-top: 24px;
        display: flex;
        justify-content: center;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        width: 219px;
        padding: 16px;
        border-radius: 8px;
        font-weight: bold;
        font-size: 16px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    .btn-danger:hover {
        background-color: #c82333 !important;
        border-color: #bd2130 !important;
    }

    @media (max-width: 768px) {
        .search-container {
            padding: 16px;
        }

        .car-details {
            flex: 1;
        }

        /* Giữ layout ngang cho car image và details */
        .result-card .d-flex.gap-3 {
            flex-direction: row !important;
            gap: 0.75rem !important;
        }

        /* Giữ license plate ở bên phải */
        .col-md-4 {
            text-align: right !important;
        }

        /* Bottom section - giữ layout 2 dòng nhưng điều chỉnh gap */
        .result-card .d-flex.flex-column.gap-2 {
            gap: 0.75rem !important;
        }

        /* Giữ layout ngang cho VETC và station info */
        .result-card .d-flex.align-items-center.gap-2,
        .result-card .d-flex.align-items-center.gap-3 {
            flex-direction: row !important;
            align-items: center !important;
            gap: 0.5rem !important;
        }

        /* Điều chỉnh kích thước badge */
        .badge {
            font-size: 0.75rem !important;
            padding: 0.25rem 0.5rem !important;
        }

        /* Điều chỉnh kích thước text */
        .result-card .small {
            font-size: 0.75rem !important;
        }

        /* Nút full width trên mobile */
        .search-button,
        .btn-danger {
            width: 100% !important;
            margin-left: 0 !important;
            margin-right: 0 !important;
        }

        /* Reset căn giữa trên mobile */
        .total-amount-section {
            justify-content: stretch !important;
        }
    }
</style>

<script>
    function performSearch() {
        // Hide search form
        document.getElementById('searchForm').style.display = 'none';

        // Show search results
        document.getElementById('searchResults').style.display = 'block';

        // Scroll to top
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    function toggleCarDropdown() {
        // Sample car options
        const cars = ['Kia Rio 2015', 'Toyota Vios 2020', 'Honda City 2018'];
        showDropdown('carInput', cars);
    }

    function toggleTimeDropdown() {
        // Sample time options
        const times = ['Hôm nay', 'Tuần này', 'Tháng này', 'Tùy chỉnh'];
        showDropdown('timeInput', times);
    }

    function toggleAccountDropdown() {
        // Sample account options
        const accounts = ['Tài khoản chính', 'Tài khoản phụ'];
        showDropdown('accountInput', accounts);
    }

    function toggleStatusDropdown() {
        // Sample status options
        const statuses = ['Đã hoàn thành', 'Đang xử lý', 'Đã hủy'];
        showDropdown('statusInput', statuses);
    }

    function showDropdown(inputId, options) {
        // Remove existing dropdown
        const existingDropdown = document.querySelector('.custom-dropdown');
        if (existingDropdown) {
            existingDropdown.remove();
        }

        const input = document.getElementById(inputId);
        const rect = input.getBoundingClientRect();

        // Create dropdown
        const dropdown = document.createElement('div');
        dropdown.className = 'custom-dropdown position-absolute bg-white border rounded-3 shadow-lg';
        dropdown.style.cssText = `
            top: ${rect.bottom + 5}px;
            left: ${rect.left}px;
            width: ${rect.width}px;
            z-index: 1000;
            max-height: 200px;
            overflow-y: auto;
        `;

        // Add options
        options.forEach(option => {
            const item = document.createElement('div');
            item.className = 'px-3 py-2 cursor-pointer border-bottom';
            item.style.cursor = 'pointer';
            item.textContent = option;
            item.addEventListener('click', () => {
                input.value = option;
                dropdown.remove();
            });
            item.addEventListener('mouseenter', () => {
                item.style.backgroundColor = '#f8f9fa';
            });
            item.addEventListener('mouseleave', () => {
                item.style.backgroundColor = 'white';
            });
            dropdown.appendChild(item);
        });

        // Remove border from last item
        const lastItem = dropdown.lastElementChild;
        if (lastItem) {
            lastItem.style.borderBottom = 'none';
        }

        document.body.appendChild(dropdown);

        // Close dropdown when clicking outside
        setTimeout(() => {
            document.addEventListener('click', function closeDropdown(e) {
                if (!dropdown.contains(e.target) && !input.contains(e.target)) {
                    dropdown.remove();
                    document.removeEventListener('click', closeDropdown);
                }
            });
        }, 0);
    }
</script>
