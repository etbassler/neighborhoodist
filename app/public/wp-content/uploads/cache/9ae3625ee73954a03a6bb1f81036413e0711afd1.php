

<div data-<?php echo e($block['id']); ?> class="<?php echo e($block['classes']); ?> gallery-section background-<?php echo e(get_field('background_colors')); ?>">
<h2><?php echo get_field('gallery_header'); ?></h2>

<div class="container d-flex">
      <?php $__currentLoopData = get_field('gallery'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="gallery-img-wrapper">
        <?php echo App::acfimg($gallery['ID'],'large',''); ?>

        </div>
        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <style type="text/css">
  [data-<?php echo e($block['id']); ?>] {
    background: <?php echo e(get_field('background_colors')); ?>;
  }
</style>
</div>