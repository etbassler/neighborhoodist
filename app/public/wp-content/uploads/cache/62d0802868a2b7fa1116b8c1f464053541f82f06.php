<div class="page-header home-header-bg">
  <div class="bg-container">
    <?php if(get_post_thumbnail_id()): ?>
      <?php echo App::acfimg(get_post_thumbnail_id(),'large'); ?>

      <?php endif; ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
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
      </div>
      <div class="col-md-6 home--magazine-info">

          <div class="magazine-text">
          <?php echo e($magazine_text); ?>

          </div>
          <?php echo App::acfimg($magazine_cover->ID,'large'); ?>


      </div>

    </div>

  </div>
</div>
