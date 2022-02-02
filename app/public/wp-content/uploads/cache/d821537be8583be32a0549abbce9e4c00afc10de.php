<div class="neighborhood-menu--header">
  <div class="container">
    <div class="row">
      <nav class="navbar navbar-expand-lg navbar-light p-0">
        <a class="brand navbar-brand" href="<?php echo e(get_permalink($connections[0]->ID)); ?>">
        <div class="neighborhood-menu-title">
        <?php echo App::acfimg(get_field('neighborhood_menu_icon',$connections[0]->ID),'large'); ?>

          <h2><?php echo e($connections[0]->post_title); ?></h2>
        </div>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNeighborhoodContent" aria-controls="navbarNeighborhoodContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNeighborhoodContent">
        <?php echo wp_nav_menu(array(
            'menu'    => get_field('neighborhood_menu', $connections[0]->ID)->ID,
            'menu_class'        => 'navbar-nav',
            'walker'            => new \App\wp_bootstrap4_navwalker(),
            'depth' => 2
          )); ?>

        </div>
      </nav>
    </div>

  </div>
</div>
