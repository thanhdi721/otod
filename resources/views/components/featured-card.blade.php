@props(['image', 'title', 'date', 'author' => null])

<div class="featured-card">
    <div class="featured-card-image">
        <img src="{{ $image }}" alt="{{ $title }}" loading="lazy">
        @if($author)
            <div class="author-avatar">
                <img src="{{ $author['avatar'] ?? $image }}" alt="{{ $author['name'] ?? 'Author' }}">
            </div>
        @endif
    </div>
    <div class="featured-card-content">
        <h3 class="featured-card-title">{{ $title }}</h3>
        @if($date)
            <div class="featured-card-date">
                <i class="fas fa-calendar-alt"></i>
                <span>{{ $date }}</span>
            </div>
        @endif
    </div>
</div>

<style>
.featured-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    min-width: 280px;
    margin-right: 16px;
}

.featured-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.featured-card-image {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
}

.featured-card-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.featured-card:hover .featured-card-image img {
    transform: scale(1.05);
}

.author-avatar {
    position: absolute;
    top: 12px;
    left: 12px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    border: 3px solid white;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
}

.author-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.featured-card-content {
    padding: 16px;
}

.featured-card-title {
    font-size: 14px;
    font-weight: 600;
    color: #333;
    margin: 0 0 8px 0;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.featured-card-date {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    color: #666;
}

.featured-card-date i {
    font-size: 10px;
}
</style>

