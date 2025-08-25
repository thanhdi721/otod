<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['image', 'authorName', 'authorAvatar' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['image', 'authorName', 'authorAvatar' => null]); ?>
<?php foreach (array_filter((['image', 'authorName', 'authorAvatar' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="mini-story-card">
    <div class="mini-story-image">
        <img src="<?php echo e($image); ?>" alt="Story" loading="lazy">
        <?php if($authorAvatar): ?>
            <div class="story-author-avatar">
                <img src="<?php echo e($authorAvatar); ?>" alt="<?php echo e($authorName); ?>">
            </div>
        <?php endif; ?>
    </div>
    <div class="mini-story-author">
        <span><?php echo e($authorName); ?></span>
    </div>
</div>

<style>
.mini-story-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: pointer;
    min-width: 200px;
    margin-right: 16px;
}

.mini-story-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

.mini-story-image {
    position: relative;
    width: 100%;
    height: 250px;
    overflow: hidden;
}

.mini-story-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.mini-story-card:hover .mini-story-image img {
    transform: scale(1.05);
}

.story-author-avatar {
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

.story-author-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.mini-story-author {
    padding: 12px 16px;
    text-align: center;
}

.mini-story-author span {
    font-size: 14px;
    font-weight: 600;
    color: #333;
}
</style>
<?php /**PATH D:\Source Web\otod-github\otod\resources\views/components/mini-story-card.blade.php ENDPATH**/ ?>