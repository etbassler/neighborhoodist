<article <?php post_class() ?>>
  <div class="page-content page-content--home">
    <?php the_content() ?>
  </div>
  <?php if($enable_subheader == true): ?>
<div class="home-subheader">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="header-eyebrow"><?php echo e($subheader_eyebrow); ?></div>
        <h2><?php echo e($subheader_title); ?></h2>
        <p><?php echo e($subheader_description); ?></p>
        <?php echo App::acflink($subheader_link,'btn btn-primary'); ?>

      </div>
      <div class="col-md-6">
    <div class="home-subheader--author">
      <?php $realtor = get_field('realtor_neighborhood_connection',$connections[0]->ID)[0] ?>
      <?php echo App::acfimg(get_post_thumbnail_id($realtor->ID),'large'); ?>

      <div class="home-subheader--author-info">
      <span>Listing Agent</span>
      <p><?php echo e($realtor->post_title); ?></p>
          <?php echo get_field('contact_info', $realtor->ID) ?>
      </div>
    </div>


      </div>
    </div>
  </div>
</div>
  <?php endif; ?>
</article>
