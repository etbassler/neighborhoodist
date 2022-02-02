<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col <?php echo e(get_post_thumbnail_id() ? 'text-left' : ''); ?>">
        <h1 class="header-eyebrow"><?php echo $title_override ? $title_override : App::title(); ?></h1>
        <?php if($callout_text): ?>
        <h2 class="h1"><?php echo e($callout_text); ?></h2>
        <?php endif; ?>
        <?php if($description_text): ?>
        <div class="description-text"><?php echo e($description_text); ?></div>
        <?php endif; ?>
        <?php echo App::acflink($header_cta,'btn btn-primary'); ?>

      </div>
      <?php if(get_post_thumbnail_id()): ?>
      <div class="col-md-3 featured-image">
      <?php echo App::acfimg(get_post_thumbnail_id(),'large'); ?>

      </div>
      <?php endif; ?>
    </div>

  </div>
</div>
