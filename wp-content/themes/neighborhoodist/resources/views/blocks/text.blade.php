{{--
  Title: Text
  Description: text
  Category: custom
  Icon: welcome-write-blog
  Keywords: text
  Mode: edit
  Align: full
  PostTypes: page post home neighborhood
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
  EnqueueStyle: styles/main.css
  EnqueueScript: scripts/main.js
  EnqueueAssets: path/to/asset
--}}

<div data-{{ $block['id'] }} class="{{ $block['classes'] }} text-section background-{{ get_field('background_colors') }}">
  <div class="container">
    <div class="row">
      {!! get_field('text') !!}
    </div>
  </div>
  <style type="text/css">
  [data-{{$block['id']}}] {
    background: {{ get_field('background_colors') }};
  }
</style>
</div>