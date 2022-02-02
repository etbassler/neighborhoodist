<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <a class="brand" href="<?php echo e(home_url('/')); ?>">
        <span class="sr-only"><?php echo e(get_bloginfo('name', 'display')); ?></span>
        <img src="/wp-content/themes/neighborhoodist/resources/assets/images/logo@2x.png" alt="Neighborhoodist Logo">
      </a>
        <?php the_field('footer_contact_info','option') ?>
        <?php if(get_field('stats')): ?>
        <div class="footer-social">
        <?php $__currentLoopData = get_field('footer_social','option'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e($social['link']['url']); ?>" target="<?php echo e($social['link']['target']); ?>">
        <span class="sr-only"><?php echo e($social['link']); ?></span>
        <?php echo App::acfimg($social['icon']['id'],'thumbnail',''); ?>

        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    <?php endif; ?>
      </div>
      <div class="col-md-6">

        </div>
    </div>
    <div class="footer-bottom">
    Neighborhoodist ©  <?php echo date("Y"); ?>, All Rights Reserved <span class="vl">|</span> <a href="/terms">Terms of Service</a> <a href="/privacy-policy">Privacy Policy</a>

    </div>
    <!-- <?php dynamic_sidebar('sidebar-footer') ?> -->
  </div>
</footer>
