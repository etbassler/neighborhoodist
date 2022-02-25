{{--
  Title: CTA
  Description: call to action
  Category: custom
  Icon: megaphone
  Keywords: cta call action
  Mode: edit
  Align: full
  PostTypes: page post home neighborhood realtor
  SupportsAlign: full
  SupportsMode: false
  SupportsMultiple: true
  EnqueueStyle: styles/main.css
  EnqueueScript: scripts/main.js
  EnqueueAssets: path/to/asset
--}}

<div data-{{ $block['id'] }} class="{{ $block['classes'] }} cta-section background-{{ get_field('background_colors') }}">
<div class="container">
    <div class="row justify-content-center ">
      <div class="col-md-5">
          <img src="{!! get_field('cta_image')['url'] !!}" alt="{!! get_field('cta_image')['alt'] !!}">

      </div>
      <div class="col-md-7 d-flex align-items-start flex-column justify-content-center">
      <div class="header-eyebrow"> {!! get_field('cta_eyebrow')!!}</div>
      <h2>{!! get_field('cta_title')!!}</h2>
      <p>{!! get_field('cta_text')!!}</p>
      @if (!empty(get_field('cta_link')))
      @php $array = get_field('cta_link');
      echo '<a class="btn btn-primary" href="'. $array['url'] .'" target="'. $array['target'] .'">'. $array['title'] .'</a>'; @endphp
      @endif
      </div>
    </div>
  </div>
  <style type="text/css">
  [data-{{$block['id']}}] {
    background: {{ get_field('background_colors') }};
  }
</style>
</div>

