<div class="page-header home-header">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="home-info">
        <div class="top-term"><?php echo App::get_post_top_term( get_the_ID()); ?></div>
          <span class="header-eyebrow"> <?php echo e($connections[0]->post_title); ?></span>
          <h2 class="h1"><?php echo $title_override ? $title_override : App::title(); ?></h2>
          <div class="streetview-"><a href="<?php echo e($streetview_url); ?>">Street View</a></div>


          <div class="home-info--meta">
            <div class="rooms"><?php echo e($rooms); ?></div>
            <div class="space"><?php echo e($space); ?></div>
            <div class="price"><?php echo e($price); ?></div>
          </div>
        </div>
        <div class="home--magazine-info">
          <?php echo App::acfimg($magazine_cover->ID,'large'); ?>


          <div class="magazine-text">
          <?php if($on_the_cover): ?>
          <span>On the cover</span>
          <?php echo e($on_the_cover_text); ?>

          <a href="/">Want your house on the cover?</a>
          <?php endif; ?>
          </div>
        </div>
      </div>
      <?php if(get_post_thumbnail_id()): ?>
      <div class="col-md-5 p-0">
      <?php echo App::acfimg(get_post_thumbnail_id(),'large'); ?>

      </div>
      <?php endif; ?>
    </div>

  </div>
</div>
