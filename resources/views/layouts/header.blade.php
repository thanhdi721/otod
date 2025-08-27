<header>
    <nav class="navbar navbar-expand-lg navbar-light btn-light shadow-sm px-2">
        <div class="container" style="max-width: 100%;">
            <!-- Logo -->
            <a class="navbar-brand me-4" href="{{ route('home') }}">
                <img src="{{ asset('/assets/images/Logo.png') }}" alt="Logo" class="img-fluid"
                    style="max-height: 40px;">
            </a>
            <!-- Mobile icons -->
            <div class="d-lg-none d-flex align-items-center ms-auto">
                <a href="#" class="me-3 text-dark position-relative">
                    <i class="bi bi-bell fs-5"></i>
                    <span
                        class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                </a>
                <button class="navbar-toggler border-0 ms-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainMenu">
                    <span class="bi bi-list fs-3"></span>
                </button>
            </div>
            <!-- Menu & desktop icons -->
            <div class="collapse navbar-collapse w-100" id="mainMenu">
                <ul class="navbar-nav d-flex justify-content-end mb-2 mb-lg-0 flex-grow-1">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('verification') }}">Trở thành chủ xe</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Carzip</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Liên hệ</a>
                    </li>
                </ul>
                <div class="d-none d-lg-flex align-items-center ms-4">
                    <a href="{{ route('search') }}" class="me-3 text-dark"><i class="bi bi-search fs-5"></i></a>
                    <a href="{{ route('notification') }}" class="me-3 text-dark position-relative">
                        <i class="bi bi-bell fs-5"></i>
                        <span
                            class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle"></span>
                    </a>
                    <a href="#" class="text-dark"><i class="bi bi-person fs-5"></i></a>
                </div>
            </div>
        </div>
    </nav>
</header>
