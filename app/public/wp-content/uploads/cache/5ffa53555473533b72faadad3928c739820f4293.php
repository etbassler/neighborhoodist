<section class="front--headlines-section bg-gray">
  <h2 class="section-title">Neighborhoodist Headlines</h2>
  <div class="container container-md">
    <div class="row">
    <?php while($headline_testimonials->have_posts()): ?>
    <?php ($headline_testimonials->the_post()); ?>
      <div class="col-md-6">
        <div class="card post-card">
        <div class="card-body p-0">
          <div class="card-top">
          <?php if(App::get_post_partial_logo( get_the_ID())): ?>
          <?php echo App::get_post_partial_logo( get_the_ID()); ?>

          <?php endif; ?>
          <?php echo App::get_post_top_term( get_the_ID()); ?>

          </div>
          <div class="w-100">
            <span class="date"><?php echo get_the_date(); ?></span>
            <h3><?php echo get_the_title(); ?></h3>
          </div>
          <a href="<?php echo get_the_permalink(); ?>" class="btn btn-light">Read More</a>
        </div>
        </div>
      </div>
  <?php endwhile; ?>
  <?php (wp_reset_postdata()); ?>

    </div>
    <a href="/blog" class="more-link">More Headlines</a>
  </div>
</section>
