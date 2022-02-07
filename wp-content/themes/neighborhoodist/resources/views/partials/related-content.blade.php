<div class="related-content">
  <h2>More Featured Homes</h2>
@php $the_query = App::getRelatedContent();
 if( $the_query->have_posts() ): @endphp
	<div class="container"><div class="row">
	@php while( $the_query->have_posts() ) : $the_query->the_post(); @endphp
    @include('partials.archive.partial')
	@php endwhile; @endphp
  </div></div>

@php endif;
wp_reset_query();	@endphp
</div>
