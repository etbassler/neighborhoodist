{{--
  Title: Home of the Month
  Description: home of the month
  Category: custom
  Icon: admin-home
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
      @php $homeID = get_field('home') @endphp
    </div>
    <div class="row">
      <div class="col-md-7 p-0">
        {!! App::acfimg(get_post_thumbnail_id($homeID),'large') !!}
        <div class="home--magazine-info">
          {!! App::acfimg(get_field('magazine_cover',$homeID)['ID'],'large') !!}
          <div class="magazine-text">
          {{get_field('$magazine_text',$homeID) ? get_field('magazine_text',$homeID) : 'Default copy when nothing else is used.'}}
          </div>
        </div>
      </div>
      <div class="col-md-5">
        <div class="home-info">
          <span class="header-eyebrow">@php echo get_the_title(get_field('connections',$homeID)[0])@endphp</span>
          <h2 class="h1">@php echo get_the_title($homeID)@endphp</h2>


          <div class="home-info--meta">
            <div class="rooms">@php echo get_field('rooms',$homeID)@endphp</div>
            <div class="space">@php echo get_field('space',$homeID)@endphp</div>
            <div class="price">@php echo get_field('price',$homeID)@endphp</div>
            <div class="status">@php echo get_field('status',$homeID)@endphp</div>

          </div>
          <div class="home-info--meta--bottom">
            <a href="@php echo get_permalink($homeID)@endphp" class="btn btn-primary">View Home</a>
          </div>
          <div class="home-subheader--author">
            @php $realtor = get_field('realtor_neighborhood_connection',get_field('connections',$homeID)[0])[0] @endphp
            @php if (get_field('agent_override',$homeID)) {
              $realtor = get_field('agent_override',$homeID)[0];
            } @endphp
            <div class="home-subheader--author-info">
            <span>Agent:</span>
            <p>{{$realtor->post_title}}</p>
                @php if (get_field('realtor_logo', $realtor->ID)) { @endphp
                  {!! App::acfimg(get_field('realtor_logo', $realtor->ID)['ID'],'large','realtor-logo') !!}
                @php } @endphp
            <span class="contact-info-header sr-only">Contact</span>
              <div class="contact-info">
                @php if (get_field('email', $realtor->ID)) { @endphp
                  <a href="mailto:@php echo get_field('email', $realtor->ID) @endphp" class="d-block">
                    Connect with {{$realtor->post_title}}
                  </a>
                @php } @endphp
              </div>
            </div>
            {!! App::acfimg(get_post_thumbnail_id($realtor->ID),'large') !!}

          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
  [data-{{$block['id']}}] {
    background: {{ get_field('background_colors') }};
  }
</style>
</div>