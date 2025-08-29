

<?php $__env->startSection('title', 'Hồ sơ cá nhân - OTOD (App Layout)'); ?>

<?php $__env->startSection('styles'); ?>
    <style>
        .page-wrap { max-width: 1100px; margin-left: auto; margin-right: auto; }
        .profile-header { display: flex; align-items: center; justify-content: space-between; gap: 16px; flex-wrap: wrap; }
        .profile-left { display: flex; align-items: center; gap: 16px; }
        .profile-avatar { width: 64px; height: 64px; border-radius: 50%; object-fit: cover; }
        .name-line { display: flex; align-items: center; gap: 8px; }
        .tier-badge { background:#FEBA11; color:#111; border-radius:12px; padding:2px 8px; font-size:12px; font-weight:600; }
        .metric-pills { display:flex; align-items:center; gap:12px; }
        .metric-pill { background:#F8FAFC; border:1px solid #E2E8F0; border-radius:12px; padding:6px 10px; display:flex; align-items:center; gap:6px; font-weight:600; }
        .metric-pill img { width:16px; height:16px; }

        /* Page only header styles retained */

        /* Slider: 3.5 items with right white fade */
        .mini-story-wrap { position: relative; margin-top: 8px; }
        .mini-story-header { display:flex; align-items:center; justify-content:space-between; margin: 6px 0 10px; }
        .mini-story-title { font-weight:700; font-size:20px; }
        .mini-story-track { display:flex; gap:16px; overflow-x:auto; scroll-snap-type:x mandatory; padding-bottom: 8px; -webkit-overflow-scrolling: touch; }
        .mini-story-track::-webkit-scrollbar { display:none; }
        .mini-story-card { scroll-snap-align:start; flex: 0 0 calc((100% - 3 * 16px) / 3.5); max-width: 260px; background: #fff; border-radius:14px; box-shadow: 0 1px 0 rgba(15,23,42,0.06); position: relative; }
        .mini-story-thumb { position: relative; border-radius:14px; overflow: hidden; aspect-ratio: 4 / 5; background:#f2f3f5; }
        .mini-story-thumb img { width:100%; height:100%; object-fit:cover; display:block; }
        .mini-story-avt { position:absolute; top:10px; left:10px; width:38px; height:38px; border-radius:50%; border:3px solid #fff; overflow:hidden; box-shadow:0 2px 6px rgba(0,0,0,0.15); }
        .mini-story-avt img { width:100%; height:100%; object-fit:cover; }
        .mini-story-label { position:absolute; left:12px; bottom:12px; background:#FEBA11; color:#111; font-weight:700; border-radius:6px; padding:6px 10px; font-size:14px; }
        .mini-story-text { padding:10px 6px 12px; font-weight:600; color:#0f172a; font-size:14px; line-height:1.35; }
        .mini-story-fade { pointer-events:none; position:absolute; top:0; right:0; width:120px; height:100%; background: linear-gradient(90deg, rgba(255,255,255,0) 0%, #ffffff 55%); }
        @media (max-width: 576px) {
            .mini-story-card { flex-basis: calc((100% - 2 * 12px) / 2.5); max-width: 220px; }
            .mini-story-track { gap:12px; }
        }

        /* Review slider: 4.5 items */
        .review-wrap { position: relative; margin-top: 18px; }
        .review-header { display:flex; align-items:center; justify-content:space-between; margin-bottom: 10px; }
        .review-title { font-weight:700; font-size:20px; }
        .review-see-all { font-weight:600; color:#2b50ed; text-decoration:none; }
        .review-scroller { position: relative; }
        .review-track { display:flex; gap:16px; overflow-x:auto; scroll-snap-type:x mandatory; padding-bottom: 8px; -webkit-overflow-scrolling: touch; }
        .review-track::-webkit-scrollbar { display:none; }
        .review-card { scroll-snap-align:start; flex: 0 0 calc((100% - 4 * 16px) / 4.5); max-width: 260px; background:#fff; border:1px solid #edf2f7; border-radius:12px; padding:16px 12px; }
        .review-avatar { width:56px; height:56px; border-radius:50%; background:#e6eef8; display:block; margin:0 auto 8px; }
        .review-stars { color:#f6b01e; letter-spacing:2px; font-size:18px; text-align:center; }
        .review-name { font-weight:700; text-align:center; color:#0f172a; margin-top:6px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; }
        .review-date { text-align:center; color:#64748b; font-size:14px; margin-top:4px; }
        .review-fade { pointer-events:none; position:absolute; top:0; right:0; width:120px; height:100%; background: linear-gradient(90deg, rgba(255,255,255,0) 0%, #ffffff 55%); }
        @media (max-width: 576px) {
            .review-card { flex-basis: calc((100% - 3 * 12px) / 3.5); }
            .review-track { gap:12px; }
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container w-100 page-wrap" style="margin-left: auto; max-width: 800px">
        <div class="profile-header mt-3 mt-lg-4 mb-3">
            <div class="profile-left">
                <img class="profile-avatar" src="https://i.pravatar.cc/128?img=1" alt="Avatar">
                <div>
                    <div class="name-line">
                        <h5 class="mb-0 fw-bold">Thảo Xinh 95</h5>
                        <img src="<?php echo e(asset('assets/images/ic-check.png')); ?>" alt="Verify" width="20" height="20">
                    </div>
                    <div class="tier-badge mt-1">Thành viên Gold</div>
                </div>
            </div>
            <div class="metric-pills">
                <div class="metric-pill"><i class="bi bi-ev-front"></i> 12 chuyến</div>
                <div class="metric-pill"><img src="<?php echo e(asset('/assets/images/ic-poin.png')); ?>" alt="coin"> 341 điểm</div>
            </div>
        </div>

        <div class="mini-story-wrap">
            <div class="mini-story-header">
                <div class="mini-story-title">Ministory</div>
            </div>
            <div class="mini-story-track">
                <?php for($i = 0; $i < 8; $i++): ?>
                    <div class="mini-story-card">
                        <div class="mini-story-thumb">
                            <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?q=80&w=1400&auto=format&fit=crop" alt="thumb">
                            <div class="mini-story-avt">
                                <img src="https://i.pravatar.cc/64?img=11" alt="avt">
                            </div>
                            <div class="mini-story-label">Foodtoor</div>
                        </div>
                        <div class="mini-story-text">Experience the Serenity of Japan’s Traditional Count...</div>
                    </div>
                <?php endfor; ?>
            </div>
            <div class="mini-story-fade"></div>
        </div>

        <div class="review-wrap">
            <div class="review-header">
                <div class="review-title">Đánh giá của chủ xe</div>
                <a href="#" class="review-see-all">Xem tất cả (12)</a>
            </div>
            <div class="review-scroller">
                <div class="review-track">
                <?php $__currentLoopData = [
                    ['name' => 'Nguyễn Ngọc Phương Linh', 'date' => '14/04/2021'],
                    ['name' => 'Nguyễn Linh Châu An', 'date' => '24/03/2021'],
                    ['name' => 'Vũ Như Thanh Thảo', 'date' => '12/04/2024'],
                    ['name' => 'Nguyễn Văn Tuấn', 'date' => '12/04/2024'],
                    ['name' => 'Trần Quốc Bảo', 'date' => '10/04/2024'],
                    ['name' => 'Lý Gia Hân', 'date' => '08/04/2024']
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="review-card">
                        <img class="review-avatar" src="https://i.pravatar.cc/100?img=3" alt="avatar">
                        <div class="review-stars">★★★★★</div>
                        <div class="review-name"><?php echo e($rv['name']); ?></div>
                        <div class="review-date"><?php echo e($rv['date']); ?></div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="review-fade"></div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/profile-app.blade.php ENDPATH**/ ?>