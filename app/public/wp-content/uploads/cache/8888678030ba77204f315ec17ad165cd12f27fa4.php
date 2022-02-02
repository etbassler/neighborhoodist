<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col <?php echo e(get_post_thumbnail_id() ? 'text-left' : ''); ?>">
        <span class="header-eyebrow"> <?php echo App::get_post_top_term( get_the_ID()); ?></span>
        <h2 class="h1"><?php echo $title_override ? $title_override : App::title(); ?></h2>
      </div>
      <?php if(get_post_thumbnail_id()): ?>
      <div class="col-md-3 featured-image">
      <?php echo App::acfimg(get_post_thumbnail_id(),'large'); ?>

      </div>
      <?php endif; ?>
    </div>

  </div>
</div>
