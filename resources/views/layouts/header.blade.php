<header>
    <nav class="navbar navbar-expand-lg px-4 navbar-light btn-light shadow-sm">
        <div class="container" style="max-width: 100%;">
            <div class="d-flex align-items-center justify-content-between w-100">
                <!-- Logo -->
                <a class="navbar-brand me-4" href="{{ route('home') }}">
                    <img src="{{ asset('/assets/images/Logo.png') }}" alt="Logo" class="img-fluid"
                        style="max-height: 40px;">
                </a>
                <!-- Menu -->
                <div class="flex-grow-1">
                    <ul class="navbar-nav justify-content-end d-flex mb-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Tin tức</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Trở thành chủ xe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Carzip</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Liên hệ</a>
                        </li>
                    </ul>
                </div>
                <!-- Icons -->
                <div class="d-flex align-items-center ms-4">
                    <a href="#" class="me-3 text-dark"><i class="bi bi-search fs-5"></i></a>
                    <a href="#" class="me-3 text-dark"><i class="bi bi-bell fs-5"></i></a>
                    <a href="#" class="text-dark"><i class="bi bi-person fs-5"></i></a>
                </div>
            </div>
        </div>
    </nav>
</header>
