{{--
  Title: Two-Column Text
  Description: two text sections
  Category: custom
  Icon: welcome-write-blog
  Keywords: text list
  Mode: edit
  Align: full
  PostTypes: page post home neighborhood realtor
  SupportsAlign: false
  SupportsMode: false
  SupportsMultiple: true
  EnqueueStyle: styles/main.css
  EnqueueScript: scripts/main.js
  EnqueueAssets: path/to/asset
--}}

<div data-{{ $block['id'] }} class="{{ $block['classes'] }} two-column-text-section background-{{ get_field('background_colors') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        {!! get_field('text') !!}
      </div>
      <div class="col-md-6">
        <h3>{!! get_field('right_header') !!}</h3>
        {!! get_field('right_text') !!}
      </div>

    </div>
  </div>
  <style type="text/css">
  [data-{{$block['id']}}] {
    background: {{ get_field('background_colors') }};
  }
</style>
</div>