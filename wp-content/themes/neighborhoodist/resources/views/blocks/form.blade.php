{{--
  Title: Form
  Description: cta with form
  Category: custom
  Icon: forms
  Keywords: cta form
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

<div data-{{ $block['id'] }} class="{{ $block['classes'] }} cta-section background-{{ get_field('background_colors') }}">
<div class="container">
    <div class="row justify-content-center ">
      <div class="col-md-8 d-flex align-items-center flex-column">
      <h2> {!! get_field('footer_title') ? get_field('footer_title') : 'Find Out More' !!}</h2>
      <p> {!! get_field('footer_text') ? get_field('footer_text') : 'See a demonstration of Neighborhoodist’s surgical care coordination solution.' !!}</p>

      @if (get_field('footer_link'))
      {!! App::acflink(get_field('footer_link'),'btn btn-primary') !!}
      @else
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#requestModal">
          Request a Demo
        </button>
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

