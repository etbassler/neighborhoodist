<div class="page-header page-header--archive">
<div class="bg-container">
    @if (get_post_thumbnail_id())
      {!! App::acfimg(get_post_thumbnail_id(),'large') !!}
      @endif
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 class="sr-only">{!! App::title() !!}</h1>
        <div class="description-text">Directory Of</div>
        <div class="archive-filters d-flex justify-content-around">
          <div>
            <span class="filter-label">Select Neighborhood</span>
            @php echo do_shortcode(' [facetwp facet="connections"]');@endphp
          </div>
          <div>
            <span class="filter-label">Select Category</span>
            @php echo do_shortcode('[facetwp facet="categories"]');@endphp
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
