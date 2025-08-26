@extends('layouts.layout-not-header-footer')

@section('content')
    <!-- Hero Banner Section -->
    <div class="hero-banner position-relative">
        <!-- Background Image -->
        <div class="hero-background">
            <img src="{{ asset('/assets/images/intro-banner.png') }}" alt="Car rental banner"
                class="w-100 h-100 object-fit-cover">
        </div>

        <!-- Dark Overlay -->
        <div class="hero-overlay"></div>

        <!-- Content -->
        <div class="hero-content">
            <div class="container">
                <div class="row justify-content-center">
                    <div
                        class="hero-content-wrapper col-lg-8 col-md-10 d-flex flex-column justify-content-center align-items-center">
                        <div class="text-center">
                            <div class="hero-title d-flex fs-1 mb-3">Cho thuê và tăng thu nhập</div>
                            <p class="hero-subtitle fs-6 fs-md-5 fs-lg-4 mb-4">Trở thành đối tác của OTOD & tăng thu nhập
                                lên
                                đến 20 triệu/ tháng</p>
                            <a href="{{ route('home') }}" class="btn btn-warning btn-lg px-5 py-3 fw-bold"
                                style="border-radius: 8px;">
                                Bắt đầu
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    /* Hero Banner Styles */
    .hero-banner {
        height: 100dvh;
        /* avoid iOS/Safari toolbar issue */
        min-height: 100dvh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
    }

    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .hero-background img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
        filter: brightness(0.7) saturate(0.8);
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        z-index: 2;
    }

    .hero-content {
        position: relative;
        z-index: 3;
        width: 100%;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 700;
        color: white;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero-subtitle {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.9);
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
    }

    /* Feature Cards */
    .feature-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    .feature-icon {
        color: #2B4896;
    }

    /* Step Cards */
    .step-card {
        padding: 2rem 1rem;
    }

    .step-number {
        width: 60px;
        height: 60px;
        background: #2B4896;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        font-weight: bold;
        margin: 0 auto;
    }

    /* CTA Section */
    .cta-section {
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .hero-content-wrapper {
            display: block;
        }

        .hero-title {
            font-size: 2.5rem;
        }

        .hero-subtitle {
            font-size: 1.1rem;
        }

        .hero-banner {
            height: 100dvh;
            min-height: 100dvh;
        }
    }

    @media (max-width: 576px) {
        .hero-title {
            font-size: 2rem;
        }

        .hero-subtitle {
            font-size: 1rem;
        }
    }
</style>
