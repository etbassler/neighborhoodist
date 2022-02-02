<div class="page-header">
  <div class="container">
    <div class="row">
    <?php if(get_post_thumbnail_id()): ?>
      <div class="col-md-6 header-image">
      <?php echo App::acfimg(get_post_thumbnail_id(),'large'); ?>

      </div>
      <?php endif; ?>
      <div class="col header-content">
        <div class="header-content--top">
          <div class="header-content--meta"><span><?php echo App::get_post_top_term( get_the_ID()); ?></span><span><?php echo e($connections[0]->post_title); ?></span></div>
          <h1 class=""><?php echo $title_override ? $title_override : App::title(); ?></h1>
          <?php if($header_description): ?>
          <p class="header-content--description"><?php echo e($header_description); ?></p>
        </div>
        <?php endif; ?>
        <div class="d-flex justify-content-between">
        <?php if($header_contact): ?>
        <div>
          <span class="header-sub-title">
            Contact
          </span>
          <p class="header-sub-description"><?php echo e($header_contact); ?></p>

        </div>
        <?php endif; ?>
        <?php if($header_visit): ?>
        <div>
          <span class="header-sub-title">
            Visit
          </span>
          <p class="header-sub-description"><?php echo e($header_visit); ?></p>
        </div>
        <?php endif; ?>
        </div>
      </div>

    </div>

  </div>
</div>
