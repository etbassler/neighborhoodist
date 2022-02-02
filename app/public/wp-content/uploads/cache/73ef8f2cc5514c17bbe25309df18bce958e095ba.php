

<div data-<?php echo e($block['id']); ?> class="<?php echo e($block['classes']); ?> cta-section background-<?php echo e(get_field('background_colors')); ?>">
<div class="container">
    <div class="row justify-content-center ">
      <div class="col-md-6">
          <img src="<?php echo get_field('cta_image')['url']; ?>" alt="<?php echo get_field('cta_image')['alt']; ?>">

      </div>
      <div class="col-md-6 d-flex align-items-start flex-column justify-content-center">
      <div class="header-eyebrow"> <?php echo get_field('cta_eyebrow'); ?></div>
      <h2><?php echo get_field('cta_title'); ?></h2>
      <p><?php echo get_field('cta_text'); ?></p>
      <?php if(!empty(get_field('cta_link'))): ?>
      <?php $array = get_field('cta_link');
      echo '<a class="btn btn-primary" href="'. $array['url'] .'" target="'. $array['target'] .'">'. $array['title'] .'</a>'; ?>
      <?php endif; ?>
      </div>
    </div>
  </div>
  <style type="text/css">
  [data-<?php echo e($block['id']); ?>] {
    background: <?php echo e(get_field('background_colors')); ?>;
  }
</style>
</div>

