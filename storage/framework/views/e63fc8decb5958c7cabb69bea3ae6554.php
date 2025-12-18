<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<section class="about-page" style="padding: 80px 20px; min-height: 70vh;">
    <div class="container" style="max-width: 900px; margin: 0 auto;">
        <h1 style="font-size: 2.5rem; margin-bottom: 3rem; text-align: center; font-weight: 300;">About Us</h1>
        
        <div class="about-content" style="background: #f8f8f8; padding: 3rem; border-radius: 8px;">
            <div class="about-text" style="max-width: 800px; margin: 0 auto;">
                <p style="font-size: 1.1rem; line-height: 1.8; color: #333; margin-bottom: 1.5rem;">
                    Vibe Hub Media is a creative agency and content platform focused on helping brands and creators stand out in the digital world.
                </p>
                
                <p style="font-size: 1.1rem; line-height: 1.8; color: #333;">
                    From concept to execution, we deliver high quality content, strategic storytelling, and innovative media solutions designed to elevate visibility and reach.
                </p>
            </div>
        </div>
    </div>
</section>

<?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .about-page {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
    }
    
    .about-content {
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
    
    .about-text p {
        text-align: left;
    }
    
    @media (max-width: 768px) {
        .about-page {
            padding: 40px 15px;
        }
        
        .about-content {
            padding: 2rem 1.5rem;
        }
        
        h1 {
            font-size: 2rem !important;
        }
        
        .about-text p {
            font-size: 1rem;
        }
    }
</style>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/gnosis/Herd/vibehubmedia/resources/views/about.blade.php ENDPATH**/ ?>