{{--
  Title: Gallery
  Description: gallery
  Category: custom
  Icon: images-alt
  Keywords: gallery
  Mode: edit
  Align: full
  PostTypes: page post home neighborhood
  SupportsAlign: true
  SupportsMode: false
  SupportsMultiple: true
  EnqueueStyle: styles/main.css
  EnqueueScript: scripts/main.js
  EnqueueAssets: path/to/asset
--}}

<div data-{{ $block['id'] }} class="{{ $block['classes'] }} gallery-section background-{{ get_field('background_colors') }}">
<h2>{!! get_field('gallery_header') !!}</h2>

<div class="container d-flex flex-wrap">
      @foreach (get_field('gallery') as $gallery)
        <div class="gallery-img-wrapper">
        {!! App::acfimg($gallery['ID'],'large','') !!}
        </div>
        </a>
      @endforeach
  </div>
  <style type="text/css">
  [data-{{$block['id']}}] {
    background: {{ get_field('background_colors') }};
  }
</style>
</div>