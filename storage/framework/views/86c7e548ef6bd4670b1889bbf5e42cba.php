<?php $__env->startSection('title', 'Discover - OTOD'); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
  <h2 class="fw-bold mb-4">Mini Story</h2>

  <!-- Tabs -->
  <ul class="nav nav-pills mb-4 gap-2" id="contentTabs">
    <?php
    $tabs = [
        ['id' => 'noi-bat', 'name' => 'Bài viết nổi bật', 'active' => true],
        ['id' => 'food-tour', 'name' => 'Food Tour', 'active' => false],
        ['id' => 'bien-xanh', 'name' => 'Khám phá biển xanh', 'active' => false],
        ['id' => 'tam-linh', 'name' => 'Hành trình tâm linh', 'active' => false]
    ];
    ?>
    <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="nav-item">
        <button class="nav-link tab-btn <?php echo e($tab['active'] ? 'active' : ''); ?>" 
                data-tab="<?php echo e($tab['id']); ?>"
                style="color: <?php echo e($tab['active'] ? '#fff' : '#000'); ?>; 
                       background-color: <?php echo e($tab['active'] ? '#2B4896' : '#F4F4F4'); ?>; 
                       border-radius: 24px;">
          <?php echo e($tab['name']); ?>

        </button>
      </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>

  <!-- Carousel - Only show for "Bài viết nổi bật" -->
  <div id="storyCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <!-- Item 1 -->
      <div class="carousel-item active">
        <div class="d-flex gap-3 justify-content-start overflow-auto" style="scrollbar-width: none; -ms-overflow-style: none;">
          <style>.d-flex.gap-3::-webkit-scrollbar { display: none; }</style>
          <?php
$storyUsers = ['Tuấn Trần', 'Mai Anh', 'Hoàng Nam', 'Thu Hà', 'Văn Đức', 'Lan Anh', 'Minh Tuấn'];
?>
          <?php $__currentLoopData = $storyUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="story-card" style="min-width: 140px;">
              <img src="<?php echo e(asset('/assets/images/img-story.png')); ?>" class="bg" alt="">
              <div class="avatar"><img src="<?php echo e(asset('/assets/images/avatar.png')); ?>" alt=""></div>
              <div class="user-name"><?php echo e($user); ?></div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
      <!-- Item 2 -->
      <div class="carousel-item">
        <div class="d-flex gap-3 justify-content-start overflow-auto" style="scrollbar-width: none; -ms-overflow-style: none;">
          <style>.d-flex.gap-3::-webkit-scrollbar { display: none; }</style>
          <?php $__currentLoopData = $storyUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="story-card" style="min-width: 140px;">
              <img src="<?php echo e(asset('/assets/images/img-story.png')); ?>" class="bg" alt="">
              <div class="avatar"><img src="<?php echo e(asset('/assets/images/avatar.png')); ?>" alt=""></div>
              <div class="user-name"><?php echo e($user); ?></div>
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#storyCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#storyCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- Content Sections -->
  <?php
$sections = [
    [
        'id' => 'noi-bat',
        'title' => 'Nổi bật',
        'cards' => [
            ['title' => "Experience the Serenity of Japan's Traditional Countryside", 'date' => '12/04/2024'],
            ['title' => 'Discover the Hidden Gems of Vietnamese Street Food', 'date' => '10/04/2024'],
            ['title' => 'Exploring the Blue Waters of Southeast Asia', 'date' => '08/04/2024'],
            ['title' => 'Spiritual Journey Through Ancient Temples', 'date' => '05/04/2024']
        ]
    ],
    [
        'id' => 'food-tour',
        'title' => 'Food Tour',
        'cards' => [
            ['title' => 'Traditional Japanese Ramen Experience', 'date' => '15/04/2024'],
            ['title' => 'Vietnamese Pho Cooking Class', 'date' => '13/04/2024'],
            ['title' => 'Street Food Adventure in Bangkok', 'date' => '11/04/2024'],
            ['title' => 'Korean BBQ Masterclass', 'date' => '09/04/2024'],
        ]
    ],
    [
        'id' => 'bien-xanh',
        'title' => 'Khám phá biển xanh',
        'cards' => [
            ['title' => 'Scuba Diving in the Great Barrier Reef', 'date' => '18/04/2024'],
            ['title' => 'Island Hopping in the Philippines', 'date' => '16/04/2024'],
            ['title' => 'Whale Watching in Hawaii', 'date' => '14/04/2024'],
            ['title' => 'Beach Resort Experience in Maldives', 'date' => '12/04/2024']
        ]
    ],
    [
        'id' => 'tam-linh',
        'title' => 'Hành trình tâm linh',
        'cards' => [
            ['title' => 'Meditation Retreat in Bali', 'date' => '20/04/2024'],
            ['title' => 'Temple Tour in Kyoto', 'date' => '18/04/2024'],
            ['title' => 'Yoga Workshop in Rishikesh', 'date' => '16/04/2024'],
            ['title' => 'Buddhist Monastery Experience', 'date' => '14/04/2024']
        ]
    ]
];
?>

  <!-- All sections for "Bài viết nổi bật" -->
  <div class="all-sections active">
    <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="mt-5">
        <h3 class="fw-bold mb-4"><?php echo e($section['title']); ?></h3>
        
        <?php if($section['id'] === 'noi-bat'): ?>
          <!-- Horizontal scroll layout for Nổi bật (same as other sections) -->
          <div class="highlight-wrapper row g-4 flex-md-row flex-nowrap overflow-auto" style="scrollbar-width: none; -ms-overflow-style: none;">
            <style>.highlight-wrapper::-webkit-scrollbar{display:none;}</style>
            
            <?php $__currentLoopData = $section['cards']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-3 col-8">
                <a href="<?php echo e(route('content.detail', ['id' => $loop->index, 'section' => $section['id'], 'title' => urlencode($card['title']), 'date' => $card['date']])); ?>" class="text-decoration-none">
                  <div class="highlight-card">
                    <img src="<?php echo e(asset('/assets/images/img-prd.png')); ?>" alt="<?php echo e($card['title']); ?>">
                    <div class="card-body">
                      <h5><?php echo e($card['title']); ?></h5>
                      <div class="date-info">
                        <i class="fas fa-calendar"></i>
                        <span><?php echo e($card['date']); ?></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php else: ?>
          <!-- Horizontal scroll layout for other sections -->
          <div class="highlight-wrapper row g-4 flex-md-row flex-nowrap overflow-auto" style="scrollbar-width: none; -ms-overflow-style: none;">
            <style>.highlight-wrapper::-webkit-scrollbar{display:none;}</style>
            
            <?php $__currentLoopData = $section['cards']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-md-3 col-8">
                <a href="<?php echo e(route('content.detail', ['id' => $loop->index, 'section' => $section['id'], 'title' => urlencode($card['title']), 'date' => $card['date']])); ?>" class="text-decoration-none">
                  <div class="highlight-card">
                    <img src="<?php echo e(asset('/assets/images/img-prd.png')); ?>" alt="<?php echo e($card['title']); ?>">
                    <div class="card-body">
                      <h5><?php echo e($card['title']); ?></h5>
                      <div class="date-info">
                        <i class="fas fa-calendar"></i>
                        <span><?php echo e($card['date']); ?></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  <!-- Individual sections for other tabs -->
  <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($section['id'] !== 'noi-bat'): ?>
      <div class="single-section" id="single-section-<?php echo e($section['id']); ?>">
        <div class="mt-5">
          <h3 class="fw-bold mb-4"><?php echo e($section['title']); ?></h3>
          <div class="row g-4">
            <?php $__currentLoopData = $section['cards']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="<?php echo e(route('content.detail', ['id' => $loop->index, 'section' => $section['id'], 'title' => urlencode($card['title']), 'date' => $card['date']])); ?>" class="text-decoration-none">
                  <div class="highlight-card">
                    <img src="<?php echo e(asset('/assets/images/img-prd.png')); ?>" alt="<?php echo e($card['title']); ?>">
                    <div class="card-body">
                      <h5><?php echo e($card['title']); ?></h5>
                      <div class="date-info">
                        <i class="fas fa-calendar"></i>
                        <span><?php echo e($card['date']); ?></span>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
  .story-card {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    cursor: pointer;
    flex: 0 0 auto;
  }
  .story-card img.bg {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 12px;
  }
  .story-card .avatar {
    position: absolute;
    top: 10px;
    left: 20%;
    transform: translateX(-50%);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: 3px solid #fff;
    overflow: hidden;
  }
  .story-card .avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .highlight-scroll {
    position: relative;
  }
  .highlight-scroll::after {
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 60px;
    height: 100%;
    pointer-events: none;
    background: linear-gradient(to left, #fff, transparent);
  }
  .story-card .user-name {
    position: absolute;
    bottom: 10px;
    left: 10px;
    width: 100%;
    text-align: start;
    color: #fff;
    font-weight: 500;
    text-shadow: 0 2px 6px rgba(0,0,0,0.5);
    font-size: 14px;
  }
  .carousel-control-prev, .carousel-control-next {
    width: 40px;
    height: 40px;
    top: 40%;
    border-radius: 50%;
    background: #fff;
    opacity: 1;
  }
  .carousel-control-prev span, .carousel-control-next span {
    filter: invert(1);
  }

  /* Card bài viết nổi bật */
  .highlight-card {
    border-radius: 12px;
    overflow: hidden;
    transition: transform 0.3s;
    cursor: pointer;
    border: none;
    color: inherit;
  }
  .highlight-card img {
    width: 100%;
    object-fit: cover;
  }
  .highlight-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 16px rgba(0,0,0,0.15);
  }
  .highlight-card .card-body {
    background: unset !important;
    padding: 16px;
  }
  .highlight-card h5 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 8px;
    color: #333;
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }
  .highlight-card .date-info {
    display: flex;
    align-items: center;
    gap: 6px;
    color: #666;
    font-size: 14px;
  }
  .highlight-card .date-info i {
    font-size: 16px;
    color: #999;
  }
  
  /* Link styling */
  .highlight-card-link {
    text-decoration: none;
    color: inherit;
  }
  .highlight-card-link:hover {
    text-decoration: none;
    color: inherit;
  }

  /* Content sections */
  .all-sections, .single-section {
    display: none;
  }
  .all-sections.active, .single-section.active {
    display: block;
  }

  /* Mobile responsive */
  @media (max-width: 768px) {
    .story-card img.bg { height: unset; }
    .story-card .avatar { width: 40px; height: 40px; top: 8px; }
    .story-card .user-name { font-size: 12px; bottom: 8px; }
    .highlight-card img { height: 180px; }
    .highlight-card .card-body { padding: 12px; }
    .highlight-card h5 { font-size: 15px; }
    
    /* Tabs scroll ngang trên mobile */
    .nav-pills {
      flex-wrap: nowrap;
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      scrollbar-width: none;
      -ms-overflow-style: none;
    }
    .nav-pills::-webkit-scrollbar {
      display: none;
    }
    .nav-pills .nav-link {
      white-space: nowrap;
      flex-shrink: 0;
    }
  }
  
  @media (max-width: 576px) {
    .highlight-card img { height: unset; }
    .highlight-card .card-body { padding: 10px; }
    .highlight-card h5 { font-size: 14px; }
    .highlight-card .date-info { font-size: 13px; }
    
    /* Tabs scroll ngang cho mobile nhỏ */
    .nav-pills .nav-link {
      font-size: 14px;
      padding: 8px 16px;
    }
  }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const allSections = document.querySelector('.all-sections');
    const singleSections = document.querySelectorAll('.single-section');
    const storyCarousel = document.getElementById('storyCarousel');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all tabs
            tabButtons.forEach(btn => {
                btn.classList.remove('active');
                btn.style.color = '#000';
                btn.style.backgroundColor = '#F4F4F4';
            });
            
            // Add active class to clicked tab
            this.classList.add('active');
            this.style.color = '#fff';
            this.style.backgroundColor = '#2B4896';
            
            // Show/hide sections based on tab
            if (targetTab === 'noi-bat') {
                // Show all sections and story carousel
                allSections.classList.add('active');
                singleSections.forEach(section => {
                    section.classList.remove('active');
                });
                storyCarousel.style.display = 'block';
            } else {
                // Hide all sections and story carousel, show only specific section
                allSections.classList.remove('active');
                singleSections.forEach(section => {
                    if (section.id === 'single-section-' + targetTab) {
                        section.classList.add('active');
                    } else {
                        section.classList.remove('active');
                    }
                });
                storyCarousel.style.display = 'none';
            }
        });
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/content-discover.blade.php ENDPATH**/ ?>