<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-md-8 text-left">
        <h1 class="">{!! get_field('archive_header','option') ? get_field('archive_header','option')  : App::title() !!}</h2>
        @if ( get_field('archive_header','option'))
        <div class="description-text">{!! get_field('archive_description','option')!!}</div>
        @endif
        <span class="filter-label">Categories</span>
        @php echo do_shortcode('[facetwp facet="categories"]');@endphp
      </div>
    </div>

  </div>
</div>
