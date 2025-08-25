@extends('layouts.app')

@section('title', 'Article Detail - OTOD')

@section('styles')
<style>
  .detail-image {
    width: 100%;
   
    object-fit: cover;
    border-radius: 12px;
    margin-bottom: 30px;
  }
  .detail-title {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 15px;
    color: #333;
    line-height: 1.2;
  }
  .detail-date {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 30px;
    display: flex;
    align-items: center;
  }
  .detail-date i {
    margin-right: 8px;
    color: #888;
  }
  .detail-content p {
    font-size: 1rem;
    line-height: 1.7;
    color: #444;
    margin-bottom: 20px;
  }
  .back-button {
    background: #2B4896;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 8px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 30px;
    transition: background-color 0.3s;
  }
  .back-button:hover {
    background: #1e3a7a;
    color: white;
    text-decoration: none;
  }

  /* Related cards */
  .highlight-card { border-radius: 12px; overflow: hidden; transition: transform .3s; border: none; color: inherit; }
  .highlight-card:hover { transform: translateY(-5px); box-shadow: 0 4px 16px rgba(0,0,0,.15); }
  .highlight-card img { width: 100%; height: 180px; object-fit: cover; }
  .highlight-card .card-body { background: unset !important; padding: 12px; }
  .highlight-card h5 { font-size: 15px; font-weight: 600; margin-bottom: 6px; color: #333; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
  .highlight-card .date-info { display: flex; align-items: center; gap: 6px; color: #666; font-size: 14px; }
  .highlight-card .date-info i { font-size: 16px; color: #999; }

  @media (max-width: 768px) {
   
    .detail-title { font-size: 1.8rem; }
    .detail-date { font-size: 0.8rem; }
    .detail-content p { font-size: 0.9rem; }
  }
</style>
@endsection

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
     <img src="{{ asset('/assets/images/banner-page-detail.png') }}" alt="{{ $article['title'] ?? 'Article Image' }}" class="detail-image">
    <div class="col-lg-8">
      
      
     
      
      <h1 class="detail-title">{{ $article['title'] ?? 'Experience the Serenity of Japan\'s Traditional Countryside' }}</h1>
      
      <div class="detail-date">
        <i class="fas fa-calendar"></i>
        <span>{{ $article['date'] ?? '12/04/2024' }}</span>
      </div>
      
      <div class="detail-content">
        <p>Forests are one of the most important natural resources that our planet possesses. Not only do they provide us with a diverse range of products such as timber, medicine, and food, but they also play a vital role in mitigating climate change and maintaining the overall health of our planet's ecosystems. In this article, we will explore the ways in which forests are helping our world.</p>
        
        <p>One of the most important roles that forests play is in absorbing carbon dioxide from the atmosphere. Trees absorb carbon dioxide through photosynthesis and store it in their trunks, branches, and leaves. This carbon sequestration helps to mitigate climate change by reducing the amount of greenhouse gases in the atmosphere. Forests are estimated to absorb approximately 2.4 billion tonnes of carbon dioxide each year, which is equivalent to around 10% of global greenhouse gas emissions.</p>
        
        <p>Beyond carbon sequestration, forests are biodiversity hotspots, providing habitats for millions of species of plants, animals, and microorganisms. They regulate water cycles, prevent soil erosion, and contribute to the formation of clouds and rainfall. The intricate web of life within forests supports ecological balance and resilience.</p>

        <p>Furthermore, forests offer immense cultural and recreational value. They are places of beauty, tranquility, and spiritual significance for many communities worldwide. Ecotourism in forest regions provides economic opportunities for local populations while promoting conservation efforts. Protecting and restoring forests is crucial for a sustainable future, ensuring that these invaluable ecosystems continue to provide their essential services for generations to come.</p>
      </div>

      <?php
$related = [
    ['title' => "Experience the Serenity of Japan's Traditional Countryside", 'date' => '12/04/2024', 'image' => '/assets/images/img-prd.png'],
    ['title' => "Experience the Serenity of Japan's Traditional Countryside", 'date' => '12/04/2024', 'image' => '/assets/images/product-rcm.png'],
    ['title' => "Experience the Serenity of Japan's Traditional Countryside", 'date' => '12/04/2024', 'image' => '/assets/images/prepare-2.png'],
    ['title' => "Experience the Serenity of Japan's Traditional Countryside", 'date' => '12/04/2024', 'image' => '/assets/images/img-prd.png'],
];
?>

      <div class="mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="fw-bold mb-0">Bài viết khác</h4>
          <a href="{{ route('content.discover') }}" class="text-primary text-decoration-none">Xem thêm</a>
        </div>

        <!-- Desktop/tablet grid -->
        <div class="row g-4 d-none d-md-flex">
          @foreach($related as $i => $item)
            <div class="col-lg-3 col-md-4 col-sm-6">
              <a href="{{ route('content.detail', ['id' => $i, 'section' => 'noi-bat', 'title' => urlencode($item['title']), 'date' => $item['date']]) }}" class="text-decoration-none">
                <div class="highlight-card">
                  <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                  <div class="card-body">
                    <h5>{{ $item['title'] }}</h5>
                    <div class="date-info">
                      <i class="fas fa-calendar"></i>
                      <span>{{ $item['date'] }}</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>

        <!-- Mobile horizontal scroll like featured -->
        <div class="row g-3 flex-nowrap overflow-auto d-md-none" style="scrollbar-width: none; -ms-overflow-style: none;">
          <style>.row.g-3.flex-nowrap::-webkit-scrollbar{display:none;}</style>
          @foreach($related as $i => $item)
            <div class="col-8">
              <a href="{{ route('content.detail', ['id' => $i, 'section' => 'noi-bat', 'title' => urlencode($item['title']), 'date' => $item['date']]) }}" class="text-decoration-none">
                <div class="highlight-card">
                  <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
                  <div class="card-body">
                    <h5>{{ $item['title'] }}</h5>
                    <div class="date-info">
                      <i class="fas fa-calendar"></i>
                      <span>{{ $item['date'] }}</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
