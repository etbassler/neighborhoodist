<section class="front--stats-section stats-section">
  <h2 class="sr-only">Stats Section</h2>
  <div class="container">
    <div class="row">
      <?php if($stats): ?>
      <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-md-3 stat-column <?php if(strlen($stat->stat_second_row) > 0): ?> <?php echo e('small-stat'); ?> <?php endif; ?>">
        <?php if($stat->stat_percentage == 1): ?>
        <div class="stat stat--percentage"><span class="counter" data-count="<?php echo e($stat->stat); ?>">0</span>%</div>
        <?php else: ?>
          <div class="stat"><?php echo e($stat->stat); ?></div>
        <?php endif; ?>
        <?php if($stat->stat_second_row): ?>
        <div class="stat"><?php echo e($stat->stat_second_row); ?></div>
        <?php endif; ?>
          <h3><?php echo e($stat->title); ?></h3>
          <?php echo e($stat->description); ?>

        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    </div>
  </div>
</section>
