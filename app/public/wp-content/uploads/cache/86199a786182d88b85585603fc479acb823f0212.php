<section class="front--features-section bg-gray">
  <div class="container container-sm">

    <?php $__currentLoopData = $front_features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="row">
      <div class="front--feature-icon">
        <?php echo App::acfimg($user->icon,'large'); ?>

      </div>
      <div class="col front--feature-text">
        <h2><?php echo e($user->title_text); ?></h2>
        <?php echo e($user->description_text); ?>

      </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
</section>
