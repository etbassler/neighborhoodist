<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?> <?php the_post() ?>
    <?php echo $__env->make('partials.page-header-neighborhood-menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php if(get_field('header_background') === true): ?>
     <?php echo $__env->make('partials.page-header-single-home-bg', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
    <?php echo $__env->make('partials.page-header-single-home', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <?php echo $__env->make('partials.content-single-'.get_post_type(), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endwhile; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>