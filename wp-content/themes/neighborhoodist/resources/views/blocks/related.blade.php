{{--
  Title: Related Content
  Description: related homes and posts
  Category: custom
  Icon: admin-multisite
  Keywords: text
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

<div data-{{ $block['id'] }} class="{{ $block['classes'] }} home-of-the-month-section background-{{ get_field('background_colors') }}">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>{!! get_field('header') !!}</h2>
      </div>
    </div>
    <div class="row">
      @foreach (get_field('related_items') as $r)
        <div class="col-md-4">
          @php $ID = $r['item']->ID;
            $type = get_post_type($ID);
          @endphp
          {!! App::acfimg(get_post_thumbnail_id($ID),'large') !!}

          @if ( $type  === "home")
            <div class="top-term">@php echo get_the_title(get_field('connections',$ID)[0])@endphp</div>
          @else
            <div class="top-term">{!! App::get_post_top_term($ID) !!}</div>
          @endif
        <a href="@php echo get_permalink($ID)@endphp"><h3>{{ $r['item']->post_title }}</h3></a>
        </div>
      @endforeach
    </div>
    @if (get_field('more_link'))
      <div class="row">
        <div class="col-12 text-center my-5">
          {!! App::acflink(get_field('more_link'),'btn btn-primary') !!}
        </div>
      </div>
    @endif
  </div>
  <style type="text/css">
  [data-{{$block['id']}}] {
    background: {{ get_field('background_colors') }};
  }
</style>
</div>