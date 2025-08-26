

<?php $__env->startSection('title', 'Ngôn ngữ - OTOD'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container w-100" style="margin-left: auto; max-width: 800px">
        <h5 class="fw-bold mb-4">Ngôn ngữ</h5>

        <!-- Vietnamese Option Card -->
        <div class="language-card mb-3">
            <label class="language-option" for="vietnamese">
                <div class="language-info">
                    <div class="flag-icon vietnam-flag"></div>
                    <span class="language-name">Tiếng Việt</span>
                </div>
                <div class="radio-wrapper">
                    <input type="radio" name="language" value="vi" id="vietnamese" class="language-radio" checked>
                </div>
            </label>
        </div>

        <!-- English Option Card -->
        <div class="language-card">
            <label class="language-option" for="english">
                <div class="language-info">
                    <img src="<?php echo e(asset('assets/images/ic-esh.png')); ?>" alt="English" width="32" height="22">
                    <span class="language-name">English</span>
                </div>
                <div class="radio-wrapper">
                    <input type="radio" name="language" value="en" id="english" class="language-radio">
                </div>
            </label>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
<style>
    .language-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        border: 1px solid #e9ecef;
    }

    .language-option {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 16px 20px;
        text-decoration: none;
        color: #333;
        transition: background-color 0.2s ease;
        cursor: pointer;
        margin: 0;
        width: 100%;
        border-radius: 12px;
    }

    .language-option:hover {
        background-color: #f8f9fa;
    }

    .language-info {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .flag-icon {
        width: 32px;
        height: 24px;
        border-radius: 4px;
        border: 1px solid #e0e0e0;
        flex-shrink: 0;
    }

    /* Vietnam Flag */
    .vietnam-flag {
        background: #da251d;
        position: relative;
    }

    .vietnam-flag::after {
        content: '★';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #ffff00;
        font-size: 16px;
        line-height: 1;
    }

    /* UK Flag */
    .uk-flag {
        background: #012169;
        position: relative;
        overflow: hidden;
    }

    .uk-flag::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: 
            linear-gradient(45deg, transparent 40%, white 40%, white 60%, transparent 60%),
            linear-gradient(-45deg, transparent 40%, white 40%, white 60%, transparent 60%),
            linear-gradient(to bottom, transparent 45%, #C8102E 45%, #C8102E 55%, transparent 55%),
            linear-gradient(to right, transparent 45%, #C8102E 45%, #C8102E 55%, transparent 55%);
    }

    .language-name {
        font-size: 16px;
        font-weight: 400;
        margin: 0;
        color: #333;
    }

    .radio-wrapper {
        position: relative;
    }

    .language-radio {
        width: 20px;
        height: 20px;
        border: 2px solid #ccc;
        border-radius: 50%;
        appearance: none;
        cursor: pointer;
        transition: all 0.2s ease;
        position: relative;
        background: white;
        margin: 0;
    }

    .language-radio:checked {
        border-color: #1a73e8;
        background-color: #1a73e8;
    }

    .language-radio:checked::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 6px;
        height: 6px;
        background-color: white;
        border-radius: 50%;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .language-card {
            margin: 0;
        }
        
        .language-option {
            padding: 14px 16px;
        }
        
        .flag-icon {
            width: 28px;
            height: 21px;
        }
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle language selection
    const languageRadios = document.querySelectorAll('.language-radio');
    
    languageRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked) {
                // Save language preference to localStorage
                localStorage.setItem('selectedLanguage', this.value);
                
                // Optional: Send AJAX request to save language preference to server
                fetch('/api/set-language', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                    },
                    body: JSON.stringify({
                        language: this.value
                    })
                }).then(response => {
                    if (response.ok) {
                        console.log('Language preference saved to server');
                    }
                }).catch(error => {
                    console.log('Language preference saved locally only');
                });
                
                // Show visual feedback
                const languageOption = this.closest('.language-option');
                const originalBg = languageOption.style.backgroundColor;
                languageOption.style.backgroundColor = '#e3f2fd';
                
                setTimeout(() => {
                    languageOption.style.backgroundColor = originalBg;
                }, 300);
            }
        });
    });
    
    // Load saved language preference
    const savedLanguage = localStorage.getItem('selectedLanguage');
    if (savedLanguage) {
        const savedRadio = document.querySelector(`input[value="${savedLanguage}"]`);
        if (savedRadio) {
            savedRadio.checked = true;
        }
    }
    
    // Handle click on language option label
    const languageOptions = document.querySelectorAll('.language-option');
    languageOptions.forEach(option => {
        option.addEventListener('click', function(e) {
            e.preventDefault();
            const radio = this.querySelector('.language-radio');
            if (radio && !radio.checked) {
                radio.checked = true;
                radio.dispatchEvent(new Event('change'));
            }
        });
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout-with-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Source Web\otod-github\otod\resources\views/language-selection.blade.php ENDPATH**/ ?>