

<div data-<?php echo e($block['id']); ?> class="<?php echo e($block['classes']); ?> text-section background-<?php echo e(get_field('background_colors')); ?>">
  <div class="container">
    <div class="row">
      <?php echo get_field('text'); ?>

    </div>
  </div>
  <style type="text/css">
  [data-<?php echo e($block['id']); ?>] {
    background: <?php echo e(get_field('background_colors')); ?>;
  }
</style>
</div>