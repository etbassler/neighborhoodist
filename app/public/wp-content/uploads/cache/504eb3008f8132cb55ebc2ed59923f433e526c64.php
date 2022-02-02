

<div data-<?php echo e($block['id']); ?> class="<?php echo e($block['classes']); ?> image-section background-<?php echo e(get_field('background_colors')); ?>">
  <div class="container">
    <div class="row">
      <img src="<?php echo get_field('image')['url']; ?>" alt="<?php echo get_field('image')['alt']; ?>">
      <div class="image-caption">
      <?php echo get_field('caption'); ?>

      </div>

    </div>
  </div>
  <style type="text/css">
  [data-<?php echo e($block['id']); ?>] {
    background: <?php echo e(get_field('background_colors')); ?>;
  }
</style>
</div>