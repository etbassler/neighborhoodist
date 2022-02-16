{{--
  Title: Image
  Description: image
  Category: custom
  Icon: format-image
  Keywords: image
  Mode: edit
  Align: full
  PostTypes: page post home neighborhood realtor
  SupportsAlign: true
  SupportsMode: false
  SupportsMultiple: true
  EnqueueStyle: styles/main.css
  EnqueueScript: scripts/main.js
  EnqueueAssets: path/to/asset
--}}

<div data-{{ $block['id'] }} class="{{ $block['classes'] }} image-section background-{{ get_field('background_colors') }}">
  <div class="container">
    <div class="row">
      <img src="{!! get_field('image')['url'] !!}" alt="{!! get_field('image')['alt'] !!}">
      <div class="image-caption">
      {!! get_field('caption') !!}
      </div>

    </div>
  </div>
  <style type="text/css">
  [data-{{$block['id']}}] {
    background: {{ get_field('background_colors') }};
  }
</style>
</div>