

<div data-<?php echo e($block['id']); ?> class="<?php echo e($block['classes']); ?> before-after-section background-<?php echo e(get_field('background_colors')); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="text-center">Before</h3>
      <?php echo App::acfimg(get_field('b4_image')['ID'],'large',''); ?>

      </div>
      <div class="col-md-6">
        <h3 class="text-center">After</h3>
        <?php echo App::acfimg(get_field('after_image')['ID'],'large',''); ?>

      </div>
    </div>
  </div>
  <style type="text/css">
  [data-<?php echo e($block['id']); ?>] {
    background: <?php echo e(get_field('background_colors')); ?>;
  }
</style>
</div>