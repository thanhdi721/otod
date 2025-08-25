@extends('layouts.app')

@section('title', 'Khám phá nội dung - OTOD')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
    .content-discover {
        background: #f8f9fa;
        min-height: 100vh;
        padding: 2rem 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1rem;
    }

    .section {
        margin-bottom: 3rem;
    }

    .section-title {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        margin-bottom: 1.5rem;
    }

    .category-filters {
        display: flex;
        gap: 12px;
        margin-bottom: 2rem;
        flex-wrap: wrap;
    }

    .category-filter {
        padding: 8px 16px;
        border-radius: 20px;
        border: none;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        background: #e9ecef;
        color: #333;
    }

    .category-filter.active {
        background: #007bff;
        color: white;
    }

    .category-filter:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
    }

    .carousel-container {
        position: relative;
        overflow: hidden;
    }

    .carousel-content {
        display: flex;
        transition: transform 0.3s ease;
        gap: 0;
    }

    .carousel-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: white;
        border: none;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        transition: all 0.3s ease;
    }

    .carousel-nav:hover {
        background: #f8f9fa;
        transform: translateY(-50%) scale(1.1);
    }

    .carousel-nav.prev {
        left: -20px;
    }

    .carousel-nav.next {
        right: -20px;
    }

    .carousel-nav i {
        font-size: 14px;
        color: #333;
    }

    @media (max-width: 768px) {
        .category-filters {
            justify-content: center;
        }
        
        .carousel-nav {
            width: 35px;
            height: 35px;
        }
        
        .carousel-nav.prev {
            left: -15px;
        }
        
        .carousel-nav.next {
            right: -15px;
        }
    }
</style>
@endsection

@section('content')
<div class="content-discover">
    <div class="container">
        <!-- Mini Story Section -->
        <section class="section">
            <h2 class="section-title">Mini Story</h2>
            
            <div class="category-filters">
                <button class="category-filter active" data-category="featured">Bài viết nổi bật</button>
                <button class="category-filter" data-category="food">Food Tour</button>
                <button class="category-filter" data-category="sea">Khám phá biển xanh</button>
                <button class="category-filter" data-category="spiritual">Hành trình tâm linh</button>
            </div>

            <div class="carousel-container">
                <button class="carousel-nav prev" onclick="scrollCarousel('mini-story', 'left')">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <div class="carousel-content" id="mini-story-carousel">
                    @foreach($miniStories as $story)
                        <x-mini-story-card 
                            image="{{ $story['image'] }}"
                            authorName="{{ $story['authorName'] }}"
                            authorAvatar="{{ $story['authorAvatar'] }}"
                        />
                    @endforeach
                </div>
                
                <button class="carousel-nav next" onclick="scrollCarousel('mini-story', 'right')">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>

        <!-- Featured Section -->
        <section class="section">
            <h2 class="section-title">Nổi bật</h2>
            
            <div class="carousel-container">
                <button class="carousel-nav prev" onclick="scrollCarousel('featured', 'left')">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <div class="carousel-content" id="featured-carousel">
                    @foreach($featuredContent as $content)
                        <x-featured-card 
                            image="{{ $content['image'] }}"
                            title="{{ $content['title'] }}"
                            date="{{ $content['date'] }}"
                        />
                    @endforeach
                </div>
                
                <button class="carousel-nav next" onclick="scrollCarousel('featured', 'right')">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </section>
    </div>
</div>

<script>
function scrollCarousel(carouselId, direction) {
    const carousel = document.getElementById(carouselId + '-carousel');
    const scrollAmount = 300;
    
    if (direction === 'left') {
        carousel.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    } else {
        carousel.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    }
}

// Category filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const categoryFilters = document.querySelectorAll('.category-filter');
    
    categoryFilters.forEach(filter => {
        filter.addEventListener('click', function() {
            // Remove active class from all filters
            categoryFilters.forEach(f => f.classList.remove('active'));
            
            // Add active class to clicked filter
            this.classList.add('active');
            
            // Filter content based on category
            const category = this.dataset.category;
            filterContentByCategory(category);
        });
    });
});

function filterContentByCategory(category) {
    // Show loading state
    const carousel = document.getElementById('mini-story-carousel');
    carousel.innerHTML = '<div style="text-align: center; padding: 2rem;">Loading...</div>';
    
    // Fetch content for selected category
    fetch(`/content-discover/category/${category}`)
        .then(response => response.json())
        .then(data => {
            // Update carousel content
            carousel.innerHTML = '';
            data.forEach(story => {
                const card = document.createElement('div');
                card.className = 'mini-story-card';
                card.innerHTML = `
                    <div class="mini-story-image">
                        <img src="${story.image}" alt="Story" loading="lazy">
                    </div>
                    <div class="mini-story-author">
                        <span>${story.title}</span>
                    </div>
                `;
                carousel.appendChild(card);
            });
        })
        .catch(error => {
            console.error('Error fetching content:', error);
            carousel.innerHTML = '<div style="text-align: center; padding: 2rem;">Error loading content</div>';
        });
}
</script>
@endsection
