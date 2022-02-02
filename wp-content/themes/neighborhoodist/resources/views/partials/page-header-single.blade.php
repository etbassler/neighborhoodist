<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col {{get_post_thumbnail_id() ? 'text-left' : ''}}">
        <span class="header-eyebrow"> {!! App::get_post_top_term( get_the_ID()) !!}</span>
        <h2 class="h1">{!! $title_override ? $title_override : App::title() !!}</h2>
      </div>
      @if (get_post_thumbnail_id())
      <div class="col-md-3 featured-image">
      {!! App::acfimg(get_post_thumbnail_id(),'large') !!}
      </div>
      @endif
    </div>

  </div>
</div>
