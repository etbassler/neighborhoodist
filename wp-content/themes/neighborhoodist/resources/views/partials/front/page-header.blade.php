<div class="page-header page-header--front">
<div class="bg-container">
    @if (get_post_thumbnail_id())
      {!! App::acfimg(get_post_thumbnail_id(),'large') !!}
      @endif
  </div>
  <div class="container">
  <div class="row">
  <div class="col">
    <h1><img src="/wp-content/themes/neighborhoodist/resources/assets/images/favicon@3x.png" alt="Neighborhoodist Home Icon">Neighborhoodist</h1>
    <div class="header-content">{{$header_content}}</div>
    <a href="#feature-content">Choose Your Neighborhood.</a>
  </div>
  </div>
  </div>
</div>

