{{--
  Title: Before and After
  Description: Before and After
  Category: custom
  Icon: admin-page
  Keywords: before after image
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

<div data-{{ $block['id'] }} class="{{ $block['classes'] }} before-after-section background-{{ get_field('background_colors') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="text-center">Before</h3>
      {!! App::acfimg(get_field('b4_image')['ID'],'large','') !!}
      </div>
      <div class="col-md-6">
        <h3 class="text-center">After</h3>
        {!! App::acfimg(get_field('after_image')['ID'],'large','') !!}
      </div>
    </div>
  </div>
  <style type="text/css">
  [data-{{$block['id']}}] {
    background: {{ get_field('background_colors') }};
  }
</style>
</div>