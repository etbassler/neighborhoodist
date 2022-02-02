<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col {{get_post_thumbnail_id() ? 'text-left' : ''}}">
        <h1 class="header-eyebrow">{!! $title_override ? $title_override : App::title() !!}</h1>
        @if ($callout_text)
        <h2 class="h1">{{$callout_text}}</h2>
        @endif
        @if ($description_text)
        <div class="description-text">{{$description_text}}</div>
        @endif
        {!! App::acflink($header_cta,'btn btn-primary') !!}
      </div>
      @if (get_post_thumbnail_id())
      <div class="col-md-3 featured-image">
      {!! App::acfimg(get_post_thumbnail_id(),'large') !!}
      </div>
      @endif
    </div>

  </div>
</div>
