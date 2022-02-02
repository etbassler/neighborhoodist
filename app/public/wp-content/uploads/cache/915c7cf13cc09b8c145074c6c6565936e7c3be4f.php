<header class="site-header nav-down" id="site-header">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
      <a class="brand navbar-brand" href="<?php echo e(home_url('/')); ?>">
        <span class="sr-only"><?php echo e(get_bloginfo('name', 'display')); ?></span>
        <img src="/wp-content/themes/neighborhoodist/resources/assets/images/logo@2x.png" alt="Neighborhoodist Logo">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-lg-end" id="navbarSupportedContent">
          <?php if(has_nav_menu('primary_navigation')): ?>
          <?php echo wp_nav_menu($primarymenu); ?>

        <?php endif; ?>
      </div>
    </nav>
  </div>
</header>
